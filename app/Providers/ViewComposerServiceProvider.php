<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Category;
use App\Models\Product;

use Auth;
use Cart;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->composeSidebarNavigation();
        $this->composeNewProductsPanel();
        $this->composeCartPanel();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Send categories variable to side.navigation partial
     * @return void
     */
    private function composeSidebarNavigation(){
        view()->composer('store.side-navigation', function($view){
            $view->with('categories', Category::all()->toHierarchy());
        });
    }

    /**
     * Select 8 products with New label
     * @return Void
     */
    private function composeNewProductsPanel()
    {
        view()->composer('store.products.new-products', function($view){
            $view->with('products', Product::where('active', 1)
                                            ->where('new', 1)
                                            ->orderBy('created_at', 'DESC')
                                            ->take(8)->get());
        });
    }

    /**
     * Sends user and cartCount variables to cart-panel view
     * @return Response
     */
    private function composeCartPanel()
    {
        view()->composer('store.shopping.cart-panel', function($view){
            $view->with([
                'user' => $user = Auth::user(),
                'cartCount' => Cart::count(),

            ]);
        });
    }
}
