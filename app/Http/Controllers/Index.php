<?php

namespace App\Http\Controllers;

class Index extends Controller
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
        return 'hello!';
    }
}
