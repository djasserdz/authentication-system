<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function update(Request $request,User $user){
    $user = auth()->user();
    $field=$request->validate([
        'username'=>['required'],
        'email'=>['email','required'],
    ]);
    $user->update($field);

    return back()->with('true','informations updated!');
   }
   public function update_password(Request $request,User $user){
    $user = auth()->user();
    $password=$user->password;
    $request->validate([
        'current_password'=>['required'],
        'password'=>['required','confirmed'],
    ]);
    if(password_verify($request->input('current_password'),$password)){
         $user->update(['password'=>$request->input('password')]);
         return back()->with('true','password updated');
    }
    else{
        return back()->with('false','incorrect password');
    }
   }
   public function destroy(Request $request,User $user){
    $user = auth()->user();
    $user->delete();
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('view.login')->with('true','acount deleted!');
   }
}
