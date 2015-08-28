<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Event;

use Auth;
use Hash;

/**
 * Custom Requests
 */
use App\Http\Requests\User\RegistrationRequest;
use App\Http\Requests\User\LoginRequest;

/**
 * Events
 */
use App\Events\UserIsRegistered;

/**
 * Models
 */
use App\User;
use App\Models\Address;

class UserController extends Controller
{
    /**
     * Shows register form
     * @return Reponse
     */
	public function getRegister()
    {

        return view('store.user.register');
    }

    /**
     * Creates new user in database and fire an event for
     * sneding activation mail
     * @param  RegistrationRequest $request
     * @return Response
     */
    public function postRegister(RegistrationRequest $request)
    {
        $input = $request->except('repeat_password');

        if($input['country_id'] != 840)
        {
            $input['state_id'] = null;
        }

        $input['code'] = str_random(30);
        $input['password'] = Hash::make($request['password']);
        
        $address = Address::create($input);
        $input['address_id'] = $address->id;
        
        $user = User::create($input);

        Event::fire(new UserIsRegistered($user));

        return redirect(route('StoreUserLoginGet'))
                ->with('flag', 'activationSent');
    }

    /**b
     * Shows login form
     * @return Response
     */
    public function getLogin()
    {

        return view('store.user.login');
    }

    /**
     * Proccessing user login request
     * @param  LoginRequest $request
     * @return Response
     */
    public function postLogin(LoginRequest $request)
    {   
        $remember = $request->input('remember') ? true : false;
        
        // If user is logging in with correct credentials and if it's activated
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'activated' => 1], 
            $remember ))
        {
            return redirect()->intended('/');
        } else {
            return redirect()->route('StoreUserLoginGet')->with('flag', 'wrongLogin');
        }
    }

    /**
     * Logs out authenticated user
     * @return Response
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->intended('/');
    }

    /**
     * Activates user if has not activated his account yet
     * @param  string $code
     * @return Response
     */
    public function getActivation($code)
    {
        $user = User::where('activated', 0)->where('code', $code)->first();

        if($user == null)
        {
            return redirect(route('StoreUserLoginGet'))
                    ->with('flag', 'notActivated');
        } else {
            $user->activate()->save();

            return redirect(route('StoreUserLoginGet'))
                    ->with('flag', 'activated');
        }
    }
}
