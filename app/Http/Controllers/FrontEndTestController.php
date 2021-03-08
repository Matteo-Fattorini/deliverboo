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

    public function checkoutRequest(Request $rec){
        $this->dataOrder[] = $rec->All();
        return Response()->json($dataOrder);
       
        // return view('checkout', compact('data'));
        
    }

    public function checkoutResponse($dataOrder){
        return view('checkout',compact('dataOrder'));
    }
}

