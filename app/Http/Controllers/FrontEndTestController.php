<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndTestController extends Controller
{

    private $dataOrder;

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

    public function checkoutRequest(Request $rec){
        return $this->dataOrder = $rec->All();
        // return Response()->json('dataOrder')->setCallback($cart);
        // return view('checkout', compact('data'));
    }

    public function checkoutResponse(Request $rec){
        return view('checkout',compact('rec'));
    }
    public function login(){
        return view('frontLogin');
    }
}

