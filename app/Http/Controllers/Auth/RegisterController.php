<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\user_details;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'short_desc' => 'string|min:0|max:200|xssPrevent',
            'address' => 'required|string|min:1|max:200|xssPrevent',
            'phone_number' => 'required|string|min:1|max:20|phoneValidate',
            'whatsapp_number' => 'required|string|min:1|max:20|phoneValidate',
            'facebook' => 'string|min:0|max:200|xssPrevent',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $registred =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        if($registred){
            $user = User::find($registred->id);
            if($user){

                $user_detail = new user_details([
                    'address' => $data['address'],
                    'phone_number' => $data['phone_number'],
                    'whatsapp_number' => $data['whatsapp_number'],
                    'facebook' => $data['facebook'],
                    'short_desc' => $data['short_desc'],
                    'user_id ' => $registred->id
                ]);

                $user_detail->user()->associate($user);
                $user_detail->save();
            };
        }

        return $registred;
    }
}
