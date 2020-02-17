<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Model\User;
use App\Model\Lelang;
use App\Model\Kategori;
use DateInterval;

class lelangController extends Controller
{
    public function tambah_lelang(Request $request) {
        if(isset($_POST['tambah_lelang'])) {

            // timeout
            $hari = $request->hari * 86400;
            $jam = $request->jam * 3600 ;
            $menit = $request->menit * 60;

            $time_out = $hari + $jam + $menit;

            $data = new Lelang();
            $files = [];

            // file foto lelang
            $files_length = count($request->file('foto_lelang'));

            if($files_length > 3) {
                return redirect('/')->with('alert-fail-lelang','File foto tidak boleh lebih dari 3');
            }

            foreach($request->file('foto_lelang') as $file) {
                $file_name = Crypt::encryptString($file->getClientOriginalName());

                $file_lelang = $file_name.".".$file->getClientOriginalExtension();
                $file_location = public_path().'/assets/img/product/'.str_replace(' ', '', $request->nama_lelang).'/';
                
                array_push($files, $file_lelang);

                $file->move($file_location, $file_lelang);
            }
            $new_files = serialize($files);

            $data->nama_lelang = $request->nama_lelang;
            $data->kategori = $request->kategori;
            $data->deskripsi_lelang = $request->deskripsi_lelang;
            $data->start_bid = $request->start_bid;
            $data->min_bid = $request->min_bid;
            $data->bid_now = null;
            $data->buy_now = $request->buy_now;
            $data->timeout = $time_out;
            $data->foto_lelang = $new_files;
            $data->id_penjual = $request->session()->get('user');
            $data->id_pembeli = null;
            $data->status = 0;
            $data->save();

            return redirect("/lelang/".$data->id)->with('alert-success-lelang','Berhasil menambahkan lelang');
        }
    }

    public function showlelang(Request $request, $id_lelang) {
        // get foto profil
        $access = $request->session()->get('user');
        $foto_profil   = null;

        if($access) {
            $foto_profil       = User::select('foto_profil')->where('id', $access)->first();
        }

        $id_pembeli = $request->session()->get('user');
        $kategori = Kategori::all();
        $data = Lelang::where('id', $id_lelang)
            ->first();
            
        $date = $data['created_at']->add(new \DateInterval('PT'.$data['timeout'].'S'));
        $timeout = strtotime($date);
            
        $data_foto = unserialize($data['foto_lelang']);
        return view('pages.lelang.detail-lelang',['data' => $data, 'data_foto' => $data_foto, 'timeout' => $timeout, 'kategori' => $kategori, 'data_foto' => $data_foto, 'foto_profil' => $foto_profil]);
    }

    public function ikut_lelang(Request $request, $id_lelang) {
        $data = Lelang::where('id', $id_lelang)->first();

        if(isset($_POST['bid_now'])) {
            $bid = $request->bid_value;
            
            if(!$request->session()->get('login')) {
                return redirect('/lelang/'.$id_lelang)->with('alert-fail-lelang','Silahkan login untuk melakukan transkasi');
            }
            if($request->session()->get('user') == $data['id_penjual']) {
                return redirect('/lelang/'.$id_lelang)->with('alert-fail-lelang','Penjual tidak bisa mengikuti lelang');
            }
            if($bid-$data['start_bid'] < $data['min_bid']) {
                return redirect('/lelang/'.$id_lelang)->with('alert-fail-lelang','Tidak memenuhi minimal bid Rp.'.$data['min_bid']);
            }
            if($data['status'] == 2) {
                return redirect('/lelang/'.$id_lelang)->with('alert-fail-lelang','Lelang telah ditutup!');
            }
            
            Lelang::where('id', $id_lelang)->update(['id_pembeli' => $request->session()->get('user'), 'bid_now' => $bid, 'status' => 1]);
            return redirect('/lelang/'.$id_lelang)->with('alert-success-lelang','Berhasil mengajukan lelang!');
        }

        if(isset($_POST['buy_now'])) {
            if(!$request->session()->get('login')) {
                return redirect('/lelang/'.$id_lelang)->with('alert-fail-lelang','Silahkan login untuk melakukan transkasi');
            }
            if($request->session()->get('user') == $data['id_penjual']) {
                return redirect('/lelang/'.$id_lelang)->with('alert-fail-lelang','Penjual tidak bisa mengikuti lelang');
            }
            if($data['status'] == 2) {
                return redirect('/lelang/'.$id_lelang)->with('alert-fail-lelang','Lelang telah ditutup!');
            }

            Lelang::where('id', $id_lelang)->update(['id_pembeli' => $request->session()->get('user'), 'bid_now' => $data['buy_now'], 'status' => 2]);
            return redirect('/lelang/'.$id_lelang)->with('alert-success-lelang','Berhasil memenangkan lelang!');
        }
    }

    public function changeStatus(Request $request) {
        $id_lelang = $request->id_lelang;

        Lelang::where('id', $id_lelang)->update(['status' => 2]);
    }

    public function getLelangByKategori(Request $request, $kategori) {
        $data = Lelang::where('kategori', $kategori)->get();
        $data_foto = [];
        foreach($data as $d) {
            $foto_lelang = unserialize($d['foto_lelang']);
            array_push($data_foto, $foto_lelang[0]);
        }

        $datas = [
            'data'  => $data,
            'data_foto' => $data_foto
        ];

        return json_encode($datas);
    }
}
