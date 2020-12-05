<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        $users = User::all();
        return view('quiz')->with('user',$users);
    }
    public function login(){
        return view('User.login');
    }

    public function quizLogin(Request $request)
    {

        $credentials = $request->except(['_token']);

        if (Auth::attempt($credentials)) {
            return redirect()->route('no');

        } else {
            abort(403);
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

}
