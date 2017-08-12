<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class staticPagesController extends Controller {
	 
	public function home () {
		return view('home');
	}

    public function faq () {
		return view('faq');
	}
}
