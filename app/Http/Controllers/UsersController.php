<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function signup()
    {
        return view('admins.signup');
    }

    public function signup_store(UserRequest $request)
    {
        Sentinel::registerAndActivate($request);
        flash('Success Create New User','success');
        return redirect()->back();
    }
}
