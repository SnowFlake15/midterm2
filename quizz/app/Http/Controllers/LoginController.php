<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.my_post')->with('user',$users);
    }
    public function login(){
        return view('User.login');
    }

    public function quizLogin(Request $request)
    {

        $credentials = $request->except(['_token']);

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');

        } else {
            abort(403);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
//
//    public function user_create(){
//
//
//        return view('user_create');
//
//
//    }
//
//    public function save_user(Request $request){
//
//        $user = new User($request->all());
//
//        $user->save();
//
//        return redirect()->back();
//
//
//    }
}
