<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndTestController extends Controller
{
    public function home(){
        return view('frontHome');
    }
    public function success(){
        return view('frontSuccess');

    }
    public function register(){
        return view('frontRegister');
    }
    public function menu(){
        return view('menu');
    }

    public function checkout(Request $rec){
        $data = $rec -> all();
        return view('checkout', compact('data'));
    }
}

