<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Category;
use App\Models\Product;

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
}
