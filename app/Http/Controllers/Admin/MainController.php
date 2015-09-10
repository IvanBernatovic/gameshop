<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;
use Auth;

class MainController extends Controller {

	public function index(){
		return view('admin.overview');
	}

	public function getLogin()
	{
		return view('admin.auth.login');
	}

	public function postLogin(LoginRequest $request)
	{
		$remember = $request->input('remember') ? true : false;
        
        // If user is logging in with correct credentials and if it's activated
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'activated' => 1], 
            $remember ))
        {	
        	if(auth()->user()->isAdmin()){
        		return redirect()->intended('admin');
        	} else {
        		Auth::logout();
        		return redirect()->route('AdminLoginGet')->with('flag', 'wrongLogin');
        	}
        } else {
            return redirect()->route('AdminLoginGet')->with('flag', 'wrongLogin');
        }
	}

	public function logout()
	{
		Auth::logout();

		return redirect(route('AdminOverview'));
	}
}
