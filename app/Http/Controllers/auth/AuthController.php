<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;





class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }


    public function register()
    {
        return view('auth.register');
    }

    public function Login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            
            toastr()->success('Celebrate You! Welcome to your dashboard');

             return redirect()->intended('dashboard');
               
        }

        toastr()->danger('Celebrate You! Please enter valid details');

  
        return back()->withSuccess('Login details are not valid');
    }



    public function Registration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:3',

        ]);


        

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),


        ]);
        toastr()->success('Celebrate You! Kindly login');


        return redirect("dashboard");
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('home.dashboard');
        }
        toastr()->warning('Celebrate You! You have to login first');

        return redirect("login")->withSuccess('Opps! You have to login to gain access');
    }




    public function logout()
                {
                    Session::flush();
                        
                    Auth::logout();

                    return redirect('login');
                }

}
