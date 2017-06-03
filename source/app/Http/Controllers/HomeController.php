<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        //dd(\App\Models\Product::where('available', '1')->orderBy('id', 'desc')->limit(8)->get());
        return view('home');
    }
}
