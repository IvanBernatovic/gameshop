<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * Custom models
 */
use App\User;

class CustomerController extends Controller
{
	const PAGINATION_SIZE = 40;

    public function index()
    {
    	$customers = User::paginate(self::PAGINATION_SIZE);

    	return view('admin.customers.index', compact('customers'));
    }

    public function show(User $user)
    {
    	
    	return view('admin.customers.show', ['customer' => $user]);
    }
}
