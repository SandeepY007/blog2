<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register()
    {
        return view('create.register');
    }

    public function store()
    {


        $attributes = request()->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:255'
        ]);

        $user=User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Your account is created successfully');
    }
}
