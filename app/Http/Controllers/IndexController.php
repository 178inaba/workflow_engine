<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Auth;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * index
     */
    public function index(Request $req)
    {
        if (Auth::check()) {
            // login
            return view('user.index');
        } else {
            // not login
            return view('index');
        }
    }
}
