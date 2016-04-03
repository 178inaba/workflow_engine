<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    /**
     * show registration form
     */
    public function showRegistrationForm()
    {
        return view('company.registration_form');
    }

    /**
     * register
     */
    public function register(Request $req)
    {

    }
}
