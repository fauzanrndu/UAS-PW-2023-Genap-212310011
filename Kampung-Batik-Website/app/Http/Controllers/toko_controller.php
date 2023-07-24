<?php

namespace App\Http\Controllers;

// use App\Http\Resources\DetailTokoReseource;
use App\Http\Resources\DetailTokoResource;
// use App\Http\Resources\TokoReseource;
use App\Http\Resources\TokoResource;
use Illuminate\Http\Request;
use App\Models\Product;

class toko_controller extends Controller
{
    public function index(){

        $product = Product :: all();
        // return response()->json(['data'=> $product]);
        return TokoResource::collection($product);

        // return vie('toko.toko',[
        //     "title" => "Toko",
        //     "produk" => Product::all()
        // ]);
    }
    public function detail($id){
        // return view('toko.detail-produk',[
        //     "title" => "Detail Produk",
        //     "produk" => $produk
        // ]);
        $product = Product::findOrFail($id);
        // return response()->json(['data'=> $product]);
        return new DetailTokoResource($product);
    }

}
