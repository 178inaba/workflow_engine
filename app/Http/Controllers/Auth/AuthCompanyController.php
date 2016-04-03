<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Company;
use App\Http\Controllers\Controller;

use Mail;
use Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthCompanyController extends Controller
{
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'company_id' => 'required|max:64|unique:companies,id',
            'company_name' => 'required|max:255',
            'user_id' => 'required|max:64',
            'user_name' => 'required|max:255',
            'mail' => 'required|max:255|email',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        Mail::send(['text' => 'mail.company_registration'], ['d' => $data], function ($m) use ($data) {
            $m->from('markflow@178inaba.com', 'markflow');
            $m->to($data['mail'], $data['user_name'])->subject('your company registration!');
        });

        Company::create([
            'id' => $data['company_id'],
            'name' => $data['company_name'],
        ]);

        return User::create([
            'company_id' => $data['company_id'],
            'id' => $data['user_id'],
            'name' => $data['user_name'],
            'mail' => $data['mail'],
            // TODO const or toml setting
            'authority' => 1,
        ]);
    }
}
