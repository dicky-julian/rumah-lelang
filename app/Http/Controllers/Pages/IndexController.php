<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\User;
use App\Model\Lelang;
use App\Model\Kategori;

class IndexController extends Controller
{
    public function home(Request $request) {
        $access = $request->session()->get('user');
        $foto_profil   = null;

        if($access) {
            $foto_profil       = User::select('foto_profil')->where('id', $access)->first();
        }

        // show kategori
        $data_foto  = [];
        $kategori   = Kategori::all();
        $data       = Lelang::where('status', 0)->orWhere('status', 1)->orderBy('id', 'DESC')->get();

        foreach($data as $d) {
            $foto_lelang = unserialize($d['foto_lelang']);
            array_push($data_foto, $foto_lelang[0]);
        }
        return view('pages.home',['data' => $data, 'kategori' => $kategori, 'data_foto' => $data_foto, 'foto_profil' => $foto_profil]);
    }

    public function UserDetail(Request $request, $id_user) {
        $access = $request->session()->get('login');

        if(!$access) {
            return redirect('/in')->with('alert-fail', 'Silahkan login untuk masuk !');
        } else {
            // user
            $user = User::where('id', $id_user)->first();
            // barang terjual
            $barang_terbeli = Lelang::where('id_pembeli', $id_user)->where('status', 2)->get();
            // barang terbeli
            $barang_terjual = Lelang::where('id_penjual', $id_user)->where('status', 2)->get();
            // barang dijual
            $barang_dibeli = Lelang::where('id_pembeli', $id_user)
                                    ->where(function($x) {
                                         $x ->where('status', 0)
                                            ->orWhere('status', 1);
                                    })->get();
            // barang dibeli
            $barang_dijual = Lelang::where('id_penjual', $id_user)
                                    ->where(function($x) {
                                         $x ->where('status', 0)
                                            ->orWhere('status', 1);
                                    })->get();

            if(count($barang_terbeli) == 0) {$barang_terbeli = '0';}
                else {$barang_terbeli = (array)$barang_terbeli;}
            if(count($barang_terjual) == 0) {$barang_terjual = '0';}
                else {$barang_terjual = (array)$barang_terjual;}
            if(count($barang_dibeli) == 0) {$barang_dibeli = '0';}
                else {$barang_dibeli = (array)$barang_dibeli;}
            if(count($barang_dijual) == 0) {$barang_dijual = '0';}
                else {$barang_dijual = (array)$barang_dijual;}

            $data = [
                'user'           => $user,
                'barang_terjual' => $barang_terjual, 
                'barang_terbeli' => $barang_terbeli, 
                'barang_dijual'  => $barang_dijual, 
                'barang_dibeli'  => $barang_dibeli
            ];

            return view('pages.account.detail-user', ['data' => $data]);
        }
    }

    public function updateProfile(Request $request, $id_user) {
        $data = User::where('id', $id_user)->first();

        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $file = $request->file;

        if($password == null) {
            $password = $data['password'];
        }

        if($file !== null && $file->getClientOriginalName() !== $data['foto_profil']){
            \File::delete('assets/img/user'.$data['foto_profil']);

            $file_name = $id_user.".".$file->getClientOriginalExtension();
            $file->move('assets/img/user', $file_name);
        }

        User::where('id', $id_user)->update(['username' => $username, 'email' => $email, 'password' => $password, 'foto_profil' => $file_name]);
        return redirect('/')->with('alert-success','Berhasil memperbarui profil');
    }
}