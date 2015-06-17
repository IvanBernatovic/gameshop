<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\EditProductRequest;
use App\Http\Controllers\Controller;

/**
 * Imported Product and Category model classes
 */
use App\Models\Product;
use App\Models\Category;
use File;

use Illuminate\Http\Request;

class AdminProductController extends Controller {

	const DEFAULT_IMG = "img/no_product_img.jpg";

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


		if($image != null){
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
		}
		else {

			// Set default 'No image avaliable' images
			$imagePath = self::DEFAULT_IMG;
			$thumbnailPath = self::DEFAULT_IMG;
		}

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
	public function show(Product $product){
		
		return view('admin.products.show')->with(compact('product'));
	}

	/**
	 * Shows form for editing product
	 * @param  Product $product
	 * @return Response
	 */
	public function edit(Product $product){

		/**
		 * Select all categories that have no child categories and return them in form of 
		 * associative array (id => slug) for purpose of selecting product category
		 * 
		 * @var Category
		 */
		$categories = Category::allLeaves()->lists('slug', 'id');

		$categories[null] = 'No category';

		return view('admin.products.edit')->with(compact('product', 'categories'));
	}

	/**
	 * Update the specified product
	 * @param  ProductRequest $request
	 * @param  Product        $product
	 * @return Response
	 */
	public function update(EditProductRequest $request, Product $product){
		
		$input = $request->except('image');
		$image = $request->file('image');

		if($image != null){

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
			$product->fill($input);
			$product->image = $imagePath;
			$product->image_thumb = $thumbnailPath;
			$product->save();

			return redirect(route('AdminProductShow', $product));
		}

		$product->fill($input);
		$product->save();

		return redirect(route('AdminProductShow', $product));
	}

	/**
	 * Show the form for deleting specific product
	 * @param  Product $product 
	 * @return Response
	 */
	public function delete(Product $product){

		return view('admin.products.delete')->with(compact('product'));
	}

	/**
	 * Deletes product
	 * @param  Product $product
	 * @return Response
	 */
	public function destroy(Product $product)
	{	
		/**
		 * If the image of the product is not default 'No image available' 
		 * image delete image from public directory
		 */
		if(public_path($product->image) != public_path(self::DEFAULT_IMG)){

			// Check if files exist
			if(File::exists(public_path($product->image)) && File::exists(public_path($product->image_thumb))){

				File::delete(public_path($product->image));
				File::delete(public_path($product->image_thumb));
			}
		}

		// Delete product
		$product->delete();

		return redirect(route('AdminProductIndex'));
	}

}
