<?php

namespace App\Http\Controllers;

use App\Models\Userlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function register()
    {
        return view('register');
    }
    public function reg_data(Request $request)
    {
        $user = new Userlist;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->city = $request->city;
        $user->pin = $request->pin;
        $user->phone = $request->phone;
        $user->state = $request->state;
        $user->password = $request->password;
        $user->save();

        // return redirect('/login');
    }
    public function login()
    {
        return view('login');
    }

    public function verify(Request $request)
    {
        // dd($request);
        $request->validate(['email'=>'required','password'=>'required']);
        $credential = $request->only('email','password');
        // dd($credential);

        if(Auth::attempt($credential))
        {
            // dd(Auth::user());
        return redirect('/home');

        }
        else
        {
            return redirect('/login');
        }


    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}
