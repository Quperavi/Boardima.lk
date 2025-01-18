<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\user_details;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{

    function login(Request $request){
        try{

            $request->validate([
                'email'=>'required|email|min:1|max:360',
                'password'=>'required|string|min:6|max:50'
            ]);

            $credentials = $request->only('email','password');

            if(Auth::attempt($credentials)){
                return redirect()->intended(route('dashboard'));
            }

            return redirect()->route('login')->withErrors("User Name Or Password Invalid");

        }catch (\Exception $e){
            return redirect()->route('login')->withErrors($e->errors())->withInput();
            error_log($e);
        }

    }


    function logout(Request $request){

        Auth::logout();
        return redirect('/');
    }

    function register(Request $request){
        try{

            $data = $request->validate([
                'name'=>'required|string|min:1|max:100',
                'email'=>'required|email|min:1|max:360|unique:users,email',
                'address'=>'required|string|min:1|max:360',
                'phone_number'=>'required|string|min:1|max:20',
                'whatsapp_number'=>'required|string|min:1|max:20',
                'facebook'=>'sometimes|string|nullable|min:1|max:360',
                'password'=>'required|string|min:6|max:50|confirmed',
                'password_confirmation'=>'required|string|min:6|max:50'
            ]);


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
                        'facebook' => $request->get('facebook'),
                        'user_id ' => $registred->id
                    ]);


                    $user_detail->user()->associate($user);
                    $user_detail->save();
                };
            }

            return redirect()->intended(route('dashboard'));
        }catch (\Exception $e){
            error_log($e);
            return redirect()->route('register')->withErrors($e->errors())->withInput();
            error_log($e);
        }

    }

}
