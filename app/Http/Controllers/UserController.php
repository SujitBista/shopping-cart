<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
class UserController extends Controller
{

    // public function __construct(){
    //     $this->middleware('auth',['except' => 'getindex','getSignIn']);
    // }
    public function getindex(){
    	return view('user.signup');
    }

    public function postSignUp(Request $request){
    	$this->validate($request,[
    		'email' => 'email|required|unique:users',
    		'password' => 'required|min:4'
    		]);
    	 $user = new User([
    	 	 'email' => $request->input('email'),
    	 	 'password' => bcrypt($request->input('password')),
    	 ]);
    	 $user->save();
         Auth::login($user);
    	 return redirect()->route('product.index');
    }

       public function getSignIn(){
        if(Auth::check()){
            return redirect()->back();
        }
        return view('user.signin');
    }

    public function postSignIn(Request $request){
        $this->validate($request,[
            'email' => 'email|required',
            'password' => 'required|min:4',
            ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
             return redirect()->route('product.index');
        }
         return redirect()->back();
    }

   public function getProfile(){
        return view('user.profile');
   }

   public function getLogout(Request $request){
        Auth::logout();
        return redirect('/signin');
    }   
}
