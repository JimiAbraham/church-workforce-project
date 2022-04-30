<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{


    // public function index()
    // {
    //     if(Auth::check()){
    //         return view('admin.dashboard');
    //     }
  
    //     return redirect("admin.login")->withSuccess('Opps! You do not have access');
    // }


    // public function Login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);
   
    //     if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            
    //          return redirect()->intended('admin.dashboard')
    //              ->withSuccess('Signed in');
    //     }
  
    //     return back()->withSuccess('Login details are not valid');
    // }
}
