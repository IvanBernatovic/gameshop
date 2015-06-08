<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Http\Controllers\Controller;

/**
 * Imported Product and Category model classes
 */
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class AdminProductController extends Controller {

	/**
	 * Display a listing of the Product model instances.
	 *
	 * @return Response
	 */
	public function index(){

		// Select all products with pagination, paginate 40 products per page
		$products = Product::paginate(40);

		return view('admin.products.index')->with(compact('products'));
	}

	/**
	 * Show the form for creating a new product.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		/**
		 * Select all categories that have no child categories and return them in form of 
		 * associative array (id => slug) for purpose of selecting product category
		 * 
		 * @var Category
		 */
		$categories = Category::allLeaves()->lists('slug', 'id');

		$categories[null] = 'No category';

		return view('admin.products.create')->with(compact('categories'));
	}

	/**
	 * Store a newly created Product in database.
	 *
	 * @return Response
	 */
	public function store(ProductRequest $request){
		
		/**
		 * Take all inputs except image, store image in seperate variable
		 * @var Array
		 */
		$input = $request->except('image');
		$image = $request->file('image');

		// Picture name will be same as SKU
		$name = $input['sku'];

		// Extenstion of original picture
		$extension = '.' . $image->getClientOriginalExtension();

		// Set paths for full image and thumbnail
		$imagePath = 'img/' . $name . $extension;
		$thumbnailPath = 'img/thumbs/' . $name . $extension;

		// Save original picture
		\Image::make($image->getRealPath())->save(public_path($imagePath));

		// Save resized thumbnail
		\Image::make($image->getRealPath())->resize(300, null, function($constraint){
			$constraint->aspectRatio();
		})->save(public_path($thumbnailPath));

		// Create Product model and save pictures
		$product = Product::create($input);
		$product->image = $imagePath;
		$product->image_thumb = $thumbnailPath;
		$product->save();

		return redirect(route('AdminProductIndex'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
