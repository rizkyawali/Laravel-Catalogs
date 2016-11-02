<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    /**
     * @return string
     */
    public function login()
    {
        if ($user = Sentinel::check())
        {
            flash($user->email.'Has Login','info');
            return redirect('/');
        }
        else
        {
            return view('admins.login');
        }
    }

    public function login_store(LoginRequest $request)
    {
        if ($user = Sentinel::authenticate($request->all()))
        {
            flash('Welcome'.$user->email, 'info');
            return redirect()->intended('/');
        }
        else
        {
            flash('Login Fails','warning');
            return view('admins.login');
        }
    }

    public function logout()
    {
        Sentinel::logout();
        flash('You Has Logout','info');
        return redirect('/');
    }
}
