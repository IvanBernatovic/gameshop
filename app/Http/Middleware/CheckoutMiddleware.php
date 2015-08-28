<?php

namespace App\Http\Middleware;

use Closure;
use Cart;

class CheckoutMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        if(Cart::count() <= 0)
        {   
            $request->session()->flash('status', 'In order to checkout you must have products in cart.');

            return redirect()->route('StoreCart');
        }

        return $next($request);
    }
}
