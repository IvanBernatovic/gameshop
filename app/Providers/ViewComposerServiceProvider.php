<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
            $view->with('categories', \App\Models\Category::all()->toHierarchy());
        });
    }
}
