<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SekolahController extends Controller
{
    public function guest(Request $request) {
        return view('sekolah.page');
    }

    public function add(Request $request) {
        $data = $request->input();
        $user =  $user = $request;
        dd($data, $user);
    }
}
