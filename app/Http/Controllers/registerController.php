<?php

namespace App\Http\Controllers;

use App\Models\register_model;
use Illuminate\Http\Request;

class registerController extends Controller
{
    public function register()
    {
        return view ('register');
    }

    public function register_post(Request $request)
    {
        $request->validate
        ([
            'name'=>'required',
            'email'=>'required|email',
            'password' => [
                'required',
                'min:8',
                'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!@$#%]).*$/'
            ],
            'confirm_password'=> 'required|same:password'
        ]);
        register_model::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
        ]);
        echo "on the create";
        print_r($request->all());
        dd($request->all());
        echo "down";
    }

}
