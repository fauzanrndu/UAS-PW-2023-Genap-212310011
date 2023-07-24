<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\TourPackage;
use Illuminate\Http\Request;

class TourPackageController extends Controller
{
    public function index(){
        $arrdata = array();
        $package = TourPackage::all();
        if($package->count() > 0){
            $arrdata = array("code"=>200,"result"=>true, "data"=>$package, "message"=>"");
        }else{
            $arrdata = array("code"=>200,"result"=>false, "data"=>[], "message"=>"No record found");
        }

        return response()->json($arrdata,$arrdata['code']);
    }
    public function detail(Request $request) {
        $product = TourPackage::where(array("id"=>$request->id))->first();
        if(!empty($product)){
            $arrdata = array("code"=>200,"result"=>true, "data"=>$product, "message"=>"");
        }else{
            $arrdata = array("code"=>200,"result"=>false, "data"=>[], "message"=>"No record found");
        }

        return response()->json($arrdata,$arrdata['code']);
    }
}

