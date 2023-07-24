<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Store extends Controller
{
    public function index(){
        {
            $product = Product::all();
            return view('Store.toko')->with('products',$product);
        }
    }


   public function detail($id){
        $product = Product::findOrFail($id);
          return view('Store.detail-produk',[
            "produk" => $product,
            "title" => "Product detail"
        ]);
    }
}
