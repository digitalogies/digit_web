<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_form()
    {
        return view('backend.dashboard.auth-signin');
    }

    public function login_process(Request $request)
    {
        $validate = $request->validate([
            'user_email'=>'required|email',
            'user_password'=>'required',
        ]);
        $user=User::where(['email'=>$request->user_email,'password'=>sha1($request->user_password)])->first();
        if($user)
        {
            auth()->login($user);
            return redirect()->route('admin_index');
        }
        else
        {
            return back();
        }
        return back();
    }
    public function logout_form()
    {
        auth()->logout();
        return redirect()->route('UI_index');
    }
}
