<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reservasi_controller extends Controller
{
    public function index(){
        return view('\reservasi\pengalaman-membatik',[
            "title" => "Pengalaman Membatik",
        ]);
    }
}
