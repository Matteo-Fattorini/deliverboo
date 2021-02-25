<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndTestController extends Controller
{
    public function home(){
        return view('frontHome');
    }
}
