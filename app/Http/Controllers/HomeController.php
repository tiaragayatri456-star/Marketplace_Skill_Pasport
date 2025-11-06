<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home');
    }

    public function produk(){
        return view('product');
    }

    public function detail(){
        return view('detail-product');
    }

     public function toko(){
        return view('toko');
    }
}
