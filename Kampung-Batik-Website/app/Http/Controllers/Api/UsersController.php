<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller
{
    public function index() {
        //return 'this is a user controller';
        $arrdata = array();
        $user = User::all();
        if ($user->count() > 0) {
            $arrdata = array("code" => 200, "result" => true, "data" => $user, "message" => "");
        } else {
            $arrdata = array("code" => 404, "result" => false, "data" => [], "message" => "No record found");
        }

        return response()->json($arrdata, $arrdata['code']);
    }

    public function signin(Request $request)
    {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: *');
        header('Access-Control-Allow-Headers: *');

        $arrdata = array();
        //$request->password = md5($request->password);
        $result = Auth::attempt($request->all());

        if ($result) {
            $detail = User::find(Auth::user()->id);
            $arrdata = array("code" => 200, "result" => true, "data" => $detail, "message" => "Welcome " . $detail->name);
        } else {
            $arrdata = array("code" => 404, "result" => false, "data" => $result, "message" => "No record found");
        }
        return response()->json($arrdata, $arrdata['code']);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            // 'confirm_password' => 'required|same:password'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Ada kesalahan',
                'data' => $validator->errors()
            ]);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);

        $success['token'] = $user->createToken('auth_token')->plainTextToken;
        $success['name'] = $user->name;

        // return redirect('/sign-in')->with('success','pendaftaran berhasil silahkan login');
        return response()->json($input);

    }

    public function detail(Request $request)
    {
        $arrdata = array();
        $user = User::where($request->all())->get();
        //('email','212310020@student.ibik.ac.id')->get();

        if (!$user->isEmpty()) {
            $arrdata = array("code" => 200, "result" => true, "data" => $user, "message" => "");
        } else {
            $arrdata = array("code" => 404, "result" => false, "data" => $user, "message" => "No record found");
        }
        return response()->json($arrdata, $arrdata['code']);

    }

        // $user = User::findOrFail($id);
        // return response()->json($user);
        // $arrdata = array();
        // $user = User::where($request->all())->get();
        // //('email','212310020@student.ibik.ac.id')->get();

        // if (!$user->isEmpty()) {
        //     $arrdata = array("code" => 200, "result" => true, "data" => $user, "message" => "");
        // } else {
        //     $arrdata = array("code" => 404, "result" => true, "data" => $user, "message" => "No record found");
        // }
        // return response()->json($arrdata, $arrdata['code']);
}

