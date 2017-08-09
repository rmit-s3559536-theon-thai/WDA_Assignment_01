<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserInformation;


class UserController extends Controller
{
    public function create()
    {
        $user = new UserInformation;
        return view('user.create', ['user' => $user ]);
    }

    public function store(Request $request) {
    	
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'studentno' => 'required',
            'email' => 'required',
        ]);

        //Model
        UserInformation::create($request->all());

        //Redirect with success message
        return redirect()->route('ticket.create') ->with('success','User added successfully');
    }
}
