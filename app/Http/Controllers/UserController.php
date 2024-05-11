<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Auth;
class UserController extends Controller
{
    //
    function signin() {
        return view('sigin');
    }
    //
    function signinFormSubmit(Request $req) {
        $creds = $req->only('email','password');

        $validateReq = $req->validate([
            'email'=>'required|email|string',
            'password'=>'required',

        ]);

        // if($validateReq){
        //     return response()->json($validateReq, 500);
        // }else{
        if(Auth::attempt($creds)){
             return response()->json('success', 200);
        }else{
            return response()->json(['error'=>'InValid User and password!'], 500);
        
        }
    }

    function dashboard() {
        return view('Dashboard');
    }
}
