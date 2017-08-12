<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInformation;
use App\Http\Requests\UserInfoFormRequest;


class UserController extends Controller
{
    public function create()
    {
        $user = new UserInformation;
        return view('user.create', ['user' => $user ]);
    }

    public function store(UserInfoFormRequest $request) {

        //Model
        UserInformation::create($request->all());

        //Redirect with success message
        return redirect()->route('ticket.create') ->with('success','User added successfully');

        
    }
}
