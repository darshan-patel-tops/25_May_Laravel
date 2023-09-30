<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function kuchbhi()
    {
        // dd("inside controller");
        return view('home.welcome');
    }
}
