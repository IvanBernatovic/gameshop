<?php

use Route;

Route::bind('category', function($value)
{
    return \App\Models\Category::where('slug', $value)->first();
});