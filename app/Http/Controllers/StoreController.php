<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function index()
    {	

    	$products = Product::all();
    	return view('store.index')->with(compact('products'));
    }

    public function showCategory(Category $category)
    {
    	$products = $category->products;
    	return view('store.categories.show')->with(compact('products', 'category'));
    }

    public function showProduct(Product $product)
    {

    	return view('store.products.show');
    }
}
