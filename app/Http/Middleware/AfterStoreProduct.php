<?php

namespace App\Http\Middleware;

use Closure;

class AfterStoreProduct
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
        $product = $request->route()->getParameter('product');

        /**
         * Abort if product is not active 
         */
        if(!$product->active)
        {
            abort(404);
        }

        return $next($request);
    }
}
