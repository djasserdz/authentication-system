<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

class AuthController extends Controller
{
    public function register(Request $request,User $user){
        $request->validate([
            'username'=>['required'],
            'email'=>['required','email','unique:users'],
            'password'=>['required','confirmed','min:5'],
        ]);
        $user=$user->create([
            'username'=>$request->input('username'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ]);
        Auth::login($user);

        event(new Registered($user));

        return redirect()->route('view.profile');
    }
    public function login(Request $request){
        $field=$request->validate([
            'email'=>['required','email'],
            'password'=>['required'],
        ]);
        if(Auth::attempt($field,$request->filled('remember'))){
            return redirect()->route('view.profile');
        }
        else{
           return back()->with('false','These infos does not match our records');
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('view.login');
    }
}
