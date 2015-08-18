<?php namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use App\Models\Category;
use App\Models\Product;

class RouteServiceProvider extends ServiceProvider {

	/**
	 * This namespace is applied to the controller routes in your routes file.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'App\Http\Controllers';

	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function boot(Router $router)
	{
		parent::boot($router);


		// Add Category model for route model binding, use slug as id
		$router->bind('category', function($value)
		{	

			$category = Category::where('slug', $value)->first();

			if($category == null)
			{
				abort(404);
			}

			return $category;
		});

		// Add Product model for route model binding, use slus as id
		$router->bind('product', function($value)
		{

			$product = Product::where('slug', $value)->first();

			if($product == null)
			{
				abort(404);
			}

			return $product;
		});
	}

	/**
	 * Define the routes for the application.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function map(Router $router)
	{
		$router->group(['namespace' => $this->namespace], function($router)
		{
			require app_path('Http/routes.php');
		});
	}

}
