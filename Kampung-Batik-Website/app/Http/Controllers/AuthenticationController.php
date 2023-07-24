<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{

    public function login(){
        return view('authentication.signin',[
            "title" => "login"
        ]);

    }
    public function authenticate(Request $request):RedirectResponse{
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);
        //$credentials['password'] = Hash::make($credentials['password']);
        //jika berhasil
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); //untuk menghindari session fixation (masuk kedalam celah melalui session sama)
            Session::flash('success', 'Login Berhasil');
            return redirect()->intended('');
        }
        //jika gagal
        return back()->with('loginerror','The provided credentials do not match our records.');
    }

    function signout(Request $request):RedirectResponse{
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function register(){
        return view('authentication.register',[
            "title" => "daftar"
        ]);
    }

    public function indexregister(Request $request)
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

        Session::flash('success', 'Pendaftaran akun berhasil');
        return view('Authentication.signin')->with("title", "login");
    }

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required ,
    //         ',
    //         'password' => 'required',
    //     ]);
    //     $user = User::where('email', $request->email)->first();

    // }
}

