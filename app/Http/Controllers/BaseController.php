<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{   public function index()
    {
    return view('welcome');
    }
    public function about ($name,$lname)
    {
        $fullname=$name." ".$lname;
        $collage= "<h1> DAKSH'S PROJECT</h1>";
        $students = ['daksh', 'divy', 'kleval', 'hetvi'];
        return view('about',compact('fullname','collage','students'));
    }
    public function userInfo(){
        return view ('userInfo');
    }

    public function userInfoCreate(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            
        ]);
        echo "on the create";
        print_r($request->all());
        dd($request->all());
        echo "down";
    }

}

