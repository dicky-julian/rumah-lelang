<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function UserDetail() {
        return view('pages.account.detail-user');
    }
}
