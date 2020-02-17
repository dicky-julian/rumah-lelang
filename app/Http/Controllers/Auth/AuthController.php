<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Model\User;
use App\Model\Admin;

class AuthController extends Controller
{
    public function in(Request $request) {
        if (isset($_POST['submit_login'])) {
            // LOGIN
            $email    = $request->email;
            $password = $request->password;

            $data = User::where('email', $email)->first();
            
            if($data) {
                // cek tabel user
                if(Hash::check($password, $data->password)) {
                    Session::put('user', $data->id);
                    Session::put('pangkat','user');
                    Session::put('login', TRUE);
                    return redirect('/');
                }
            } else {
                $data = Admin::where('email', $email)->first();
                // cek tabel admin
                if($data) {
                    if(Hash::check($password, $data->password)) {
                        Session::put('user', $data->id);
                        Session::put('pangkat','admin');
                        Session::put('login', TRUE);
                        return redirect('/');
                    }
                } else {
                    return redirect('/in')->with('alert-fail', 'Username dan Password tidak ditemukan');
                }
            }
        } else if (isset($_POST['submit_signup'])) {
            // SIGNUP
            $this->validate($request, [
                'username'  => 'required|min:4',
                'email' => 'required|min:4|email|unique:tb_user',
                'password' => 'required'
            ]);

            $data = new User();
            $data->username = $request->username;
            $data->email    = $request->email;
            $data->password = bcrypt($request->password);
            $data->save();

            return redirect('/in')->with('alert-success','Berhasil Registrasi');
        } else if (isset($_POST['submit_logout'])) {
            // LOGOUT
            Session::flush();
            return redirect('/in')->with('alert-success','Berhasil logout');
        } else {
            if($request->session()->get('user')) {
                return redirect('/');
            } else {
                return view('pages.auth.auth');
            }
        }
    }
}