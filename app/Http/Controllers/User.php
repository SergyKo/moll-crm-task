<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class User extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('user.profile', [
            'user' => \App\Models\User::findOrFail($id)
        ]);
    }

    public function index()
    {
        return view('users/index', [
            'users' => \App\Models\User::all()
        ]);
    }

}
