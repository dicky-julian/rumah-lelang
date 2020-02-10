<?php

namespace App\Http\Controllers\Pages\Lelang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class detailLelangController extends Controller
{
    public function get() {
        return view('pages.lelang.detail-lelang');
    }
}
