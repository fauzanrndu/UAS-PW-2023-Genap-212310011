<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class beranda_controller extends Controller
{
    public function index(){
        return view('home.beranda')->with("title", "Beranda");
    }
    // public function login(){
    //     return view('login.login')->with("title", "Login");
    // }
}
