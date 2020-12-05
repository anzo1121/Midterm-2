<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function  login() {
        return view("login");
    }



    public function postLogin(Request $request){
        $creds = $request ->except(("_token"));


        if(Auth::attempt($creds)){
            return redirect() ->route("quizes");

        }
        else{
            abort(403);

        }
    }




    public function logOut(){
        Auth::logout();
        return redirect() -> route("login");

    }
}
