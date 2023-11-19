<?php

namespace App\Http\Controllers;
use App\Models\Buisness;

use Illuminate\Http\Request;

class Buisnesscontroller extends Controller
{
    public function index()
    {
        return view('bus_store');
    }

    public function show()
    {
        $buisness = Buisness::all();
        return view('bus_list',compact('buisness'));

    }
    public function store(request $request)
    {
        // $user = new Buisness;
        // $user->name = $request->name;
        // $user->address = $request->address;
        // $user->email = $request->email;
        // $user->website = $request->website;
        // $user->phone = $request->phone;
        // $user->cperson = $request->cperson;
        // $user->save();

        // return view('home');

        Buisness::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'cperson'=>$request->cperson,
            'website'=>$request->website,
            'address'=>$request->address,

        ]);

        return response()->json('Successfully Added Buisness');
    }
}
