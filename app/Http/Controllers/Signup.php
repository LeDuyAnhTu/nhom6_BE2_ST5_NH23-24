<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class Signup extends Controller
{
    //
    public function show(Request $request, $name = "demo"){
        if($name == "demo"){
            //Lấy dữ liệu từ request
            $fname = $request->input('fname');
            $sname = $request->input('sname');
            $contact = $request->input('contact');
            $psw = $request->input('psw');
            //Truyền request sang view
            return view($name,['data'=>$request]);
        }else{
            return view('welcome');
        }
    }

}
