<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //

   


    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.signup');
    }
    public function postRegister(Request $request){

        $this->validate($request,[
            'name'=>'required|string|max:250',
            'email'=>'required|string|email|max:2000',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation'=>'required|min:6'
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);
            // return $request->all();

            // auth()->login($user);
            // $post->save();

            // return 123;
            return view('/auth/login')->with('success','Great! You have Successfully loggedin');
             }
    public function postlogin(Request $request){

        $this->validate($request,[
            'email'=>'required|string|email|max:2000',
            'password' => 'required',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/posts');//->intended('/about')
                        //->withSuccess('You have Successfully loggedin');
                            }
        return redirect("/");//->with('failed','Oppes! You have entered invalid credentials');

    }
    //trying guest login
    public function guest()
    {
        if(Auth::check()){
            return view('posts.index');
        }



        return redirect("login")->withSuccess('Opps! You do not have access');

    }

    public function logout() {

        Session::flush();
        Auth::logout();
        return Redirect('/')->withSuccess('successfully logged out');

    }
}
