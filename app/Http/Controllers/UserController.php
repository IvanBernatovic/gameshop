<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Event;

use App\Http\Requests\User\RegistrationRequest;
use App\Events\UserIsRegistered;

use App\User;
use Hash;

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

        if($input['country'] != 840)
        {
            $input['state'] = null;
        }

        $input['code'] = str_random(30);
        $input['password'] = Hash::make($request['password']);
        //dd($input);
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

    public function postLogin()
    {

    }

    public function logout()
    {

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
