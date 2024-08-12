<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Rules\Password;
class SessionController extends Controller
{
    //
    public function create(){
        return view("auth.login");
    }
    public function store(Request $request){
      $validatedUser =  $request->validate([
            "email"=>["required","email"],
            "password"=>["required",Password::min(6)]
        ]);
        if(!Auth::attempt($validatedUser)){
            throw ValidationException::withMessages([
                "email"=>"Sorry , Those wrong credentials do not match."
            ]);
        }

            $request->session()->regenerate();
            return redirect("/");
      
    }
    public function destroy(){
        Auth::logout();
        return redirect("/");
    }
}
