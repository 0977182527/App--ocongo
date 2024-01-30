<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class UserController extends Controller
{
    public function index()
    {
        return view('index',[
            'users' => $users = User::all()
        ]);
    }

    public  function create()
    {
        return view('create');
    }

    public function store(UserRequest $request)
    {
        User::create([
            'nom' => $request->nom,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'province' => $request->province,
            'ville' => $request->ville,
            'quartier' => $request->quartier,
            'commune' => $request->commune,
            'avenue_rue' => $request->avenue_rue,
            'numero' => $request->numero
        ]);
    }
    public function edit(string $id)
    {
        echo 'vvv'. $id;
    }
}
