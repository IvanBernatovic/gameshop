<?php

namespace App\Http\Middleware;

use Closure;

use App\Models\Category;

class AfterStoreCategory
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
        /**
         * Get wanted category
         * @var Category
         */
        $category = $request->route()->getParameter('category');
       
        /**
         * If category is not leaf throw 404 Page not Found error
         */
        if(!$category->isLeaf())
        {
            abort(404);
        }

        return $next($request);
    }
}
