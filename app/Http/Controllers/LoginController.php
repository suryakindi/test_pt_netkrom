<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function index(Request $request){
        if($request->username){
            $validate = $request->validate([
                'username'=>'required',
                'password'=>'required',
            ]);
            if($validate){
                $credentials = $request->only('username', 'password');
                if(Auth::attempt($credentials)){
                    return redirect()->intended('/dashboard');
                }else{
                    $request->session->flash('gagal-login');
                    return redirect()->back();
                }
            }
        }else{
            return view('login.index');
        }
        
    }
    public function logout(){
       Auth::logout();
       return redirect('/login'); 
    }
}
