<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Model\User;

class AuthController extends Controller
{
    public function login() {
        return view('pages.auth.auth');
    }
}
