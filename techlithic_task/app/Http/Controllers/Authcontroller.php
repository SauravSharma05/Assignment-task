<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Authcontroller extends Controller
{
    public function index()
    {
        return view('register');
    }


    public function register(request $request)
    {

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        return response()->json('Successfully Added user');
    }

    public function login()
    {

        return view('login');
    }

    public function validate_log(Request $request)
    {
        // dd($request);
        $request->validate(['email'=>'required','password'=>'required']);

        $credential = $request->only('email','password');
        // dd($credential);
        if(Auth::attempt($credential))
        {
            // dd(Auth::user());
            if(Auth::user()->role_as == 1)
            {
                return redirect('/adminhome');
            }
            else if(Auth::user()->role_as == 0)
            {
                return redirect('/home');

            }
            else
            {

                return redirect('/home');
            }
            // dd("login success");
        }
        else
        {
            return redirect('/login');
            // dd("login fail");
        }


    }
    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/login');
    }
}
