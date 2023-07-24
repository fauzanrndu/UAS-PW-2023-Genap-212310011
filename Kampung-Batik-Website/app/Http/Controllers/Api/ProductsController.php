<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class ProductsController extends Controller
{
    public function index(){
        $arrdata = array();
        $products = Product::all();
        if($products->count() > 0){
            $arrdata = array("code"=>200,"result"=>true, "data"=>$products, "message"=>"");
        }else{
            $arrdata = array("code"=>200,"result"=>false, "data"=>[], "message"=>"No record found");
        }

        return response()->json($arrdata,$arrdata['code']);
    }

    public function stored(Request $request){
        $products = new Product();
        $validator = Validator::make($request->all(),[
            'image' => 'required',
            'category_id'=>'required',
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
        ]);
        $arrdata=array();
        if($validator->fails()){
            $arrdata = array(
                'code'=>422,
                'result'=>false,
                'data'=>[],
                'message'=>$validator->messages()
            );
        }else{
            $postProduct = $products->storedData($request->all());
            if($postProduct){
                $arrdata = array(
                    'code'=>200,
                    'result'=>true,
                    'data'=>$postProduct,
                    'message'=>''
                );
            }else{
                $arrdata = array(
                    'code'=>403,
                    'result'=>false,
                    'data'=>$postProduct,
                    'message'=>'Something went wrong, failed save data'
                );
            }
        }
        return response()->json($arrdata,$arrdata['code']);
    }

    public function detail(Request $request) {
        $product = Product::where(array("id"=>$request->id))->first();
        if(!empty($product)){
            $arrdata = array("code"=>200,"result"=>true, "data"=>$product, "message"=>"");
        }else{
            $arrdata = array("code"=>200,"result"=>false, "data"=>[], "message"=>"No record found");
        }

        return response()->json($arrdata,$arrdata['code']);
    }

    public function destroy(Request $request){
        $results = Product::where(array('id'=>$request->id))->delete();
        if($results){
            $arrdata = array("code"=>200,"result"=>true, "data"=>$results, "message"=>"Successfully removed");
        }else{
            $arrdata = array("code"=>200,"result"=>true, "data"=>[], "message"=>"Failed remove");
        }
        return response()->json($arrdata,$arrdata['code']);
    }

}
