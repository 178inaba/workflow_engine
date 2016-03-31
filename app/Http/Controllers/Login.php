<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    function index() {
        return view('login');
    }

    function login(Request $request) {
        return 'login' . $request->input('');
    }
}
