<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class EmailVerification extends Controller
{
    public function sendemail(EmailVerificationRequest $request,User $user){
        $user->sendEmailVerificationNotification();

        return back()->with('true', 'Verification link sent!');
    }
    public function verifyemail(EmailVerificationRequest $request){
        $request->fulfill();

        return redirect()->route('view.profile');
    }
}
