<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndTestController extends Controller
{

    private $dataOrder = [];

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


    public function checkout(){
        return view('checkout');
    }
    public function login(){
        return view('frontLogin');
    }
}

