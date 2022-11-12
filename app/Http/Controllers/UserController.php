<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
//            'users' => User::withTrashed()->get() // список с удаленными
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
    {Log::info("userId edit: ". $id);
        return view('users/edit', ['user' => User::findOrFail($id)]);
    }


    /**
     * @return RedirectResponse
     */
    public function delete (int $id)
    {

        Log::info("userId: ", [$id]);

       $user = User::findOrFail($id);
       $user->delete();
        return redirect()->route('user-index')->with("success", "Пользователь " . $id . " успешно удален!");
    }


    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(Request $request, int $id)
    {
        Log::info('$id   : ', [$id]);

        $request->validate([
            "name" => 'required',
        ]);

        $user = User::findOrFail($id);
        //$input = $request->all();

        $name = $request->input('name');
        Log::info('customer: ', [$name]);

        //$user->update($input);
        $user->fill($request->post())->save();
        return redirect()->route('user-index')->with("success", "Пользоваетль " . $id . " успешно изменен!");
    }
}
