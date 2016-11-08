<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\ForgotPasswordRequest;
use Event;
use Sentinel, Reminder;
use App\Events\ReminderEvent;


class ForgotPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.forgotpassword');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getUser = User::where('email' ,$request->email)->first();

        if ($getUser)
        {
            $user = Sentinel::findById($getUser->id);
            ($reminder = Reminder::exists($user)) || ($reminder = Reminder::create($user));
            Event::fire(new ReminderEvent ($user, $reminder));
            flash('Email not valid', 'warning');
        }
        return view('admins.forgotpassword');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $code)
    {
        $user = Sentinel::findById($id);

        if (Reminder::exists($user, $code))
        {
            return view('admins.store-forgotpassword', ['id' => $id, 'code' => $code]);
        }
        else
        {
            return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ForgotPasswordRequest $request, $id, $code)
    {
        $user = Sentinel::findById($id);
        $reminder = Reminder::exists($user, $code);

        if ($reminder)
        {
            flash('Your Password Has Modified', 'success');
            Reminder::complete($user, $code, $request->password);
            return redirect('login');
        }
        else
        {
            flash('Password Not Match', 'Warning');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
