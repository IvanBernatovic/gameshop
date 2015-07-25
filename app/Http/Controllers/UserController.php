<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use User;

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

    public function postRegister()
    {

    }

    /**
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
}
