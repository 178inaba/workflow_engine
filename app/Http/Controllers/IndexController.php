<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * index
     */
    public function index(Request $req)
    {
        if ($req->user()) {
            // login
            return view('user.index');
        } else {
            // not login
            return view('index');
        }
    }
}
