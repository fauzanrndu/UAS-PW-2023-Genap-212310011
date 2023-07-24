<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\TourPackage;

use function Ramsey\Uuid\v1;

class Tour extends Controller
{
    public function index(){
        {
            $reservasi = TourPackage::all();
            return view('Reservation.pengalaman-membatik')->with('reservasi',$reservasi);
        }
    }
    public function detail(){
        return view('Reservation.detail-booking');
    }

}
