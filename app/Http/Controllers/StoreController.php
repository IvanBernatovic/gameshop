<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    const PAGINATION_SIZE = 40;

    public function index()
    {	

    	return view('store.index');
    }

    /**
     * Show all products on category page
     * @param  Category $category
     * @return Response
     */
    public function showCategory(Category $category)
    {

    	$products = $category->products()->where('active', 1)->orderBy('created_at', 'DESC')->get();

    	return view('store.categories.show')->with(compact('products', 'category'));
    }

    /**
     * Show product with description and add to cart button
     * @param  Product $product
     * @return Response
     */
    public function showProduct(Product $product)
    {

    	return view('store.products.show')->with(compact('product'));
    }

    public function searchProduct(Request $request)
    {
        $query = $request->get('q');

        $products = Product::where('active', 1)->where('name', 'like', '%'.$query.'%')
            ->paginate(self::PAGINATION_SIZE);

        return view('store.products.search', compact('products'));
    }

    public function contact()
    {
        return view('store.contact');
    }
}
