<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){

         // if(Auth::check() == true){
        //     return redirect()->route("user.login");
        // }
        return view("user.login");
    }
    public function doLogin(Request $req){
        $req->validate([
            "mobile" => "required|max:10|exists:users,mobile",
            "password" => "required|max:15|min:4"
        ]);
        $user = Auth::attempt(["mobile" => $req->mobile, "password" => $req->password]);
        if($user != false){
            redirect()->route("user.welcome");
        }
        session()->flash("unsuccess", "Invalid username and password");
        return redirect()->back();
    }
    public function register(){
        // if(Auth::check() == true){
        //     return redirect()->route("user.login");
        // }
        return view("user.register");
    }
    public function doRegister(Request $req){
        $req->validate([
            "name" => "required|max:255",
            "email" => "required|max:60|unique:users,email|email",
            "mobile" => "required|max:10|unique:users,mobile",
            "password" => "required|max:15|confirmed"
        ]);

        $data = $req->all();
        $data["password"] = bcrypt($req->password);
        User::create($data);
        session()->flash("success", "Thank you for Register");
        return redirect()->back();
    }
    public function welcome(){
        return view("user.welcome");
    }
}
