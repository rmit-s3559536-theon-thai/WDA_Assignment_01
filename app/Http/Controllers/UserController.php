<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserInfoFormRequest;


class UserController extends Controller
{
    public function create()
    {
        $user = new User;
        return view('user.create', ['user' => $user ]);
    }

    public function store(UserInfoFormRequest $request) {

        //Model
        User::create($request->all());

        //Redirect with success message
        return redirect()->route('ticket.create') ->with('success','User added successfully');
    }

}
