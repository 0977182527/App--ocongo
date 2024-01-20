<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function getUser()
    {
        return view('home',[
            'users' => $users = \App\Models\User::all()
        ]);
    }
}
