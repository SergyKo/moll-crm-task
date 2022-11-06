<?php

namespace App\Http\Controllers;

use App\Models\User;
use \Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param int $id
     * @return View
     */
    public function show($id)
    {
        return view('users/show', [
            'user' => User::findOrFail($id)
        ]);
    }

    public function index()
    {
        return view('users/index', [
            'users' => User::all()
        ]);
    }

    public function create()
    {
        return view('users/create');
    }

    /**
     * @param $id
     * @return View
     */
    public function edit($id)
    {
        return view('users/edit', ['user' => User::findOrFail($id)]);
    }
}
