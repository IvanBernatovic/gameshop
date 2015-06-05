<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class AdminCategoryController extends Controller {

	/**
	 * Returns list of all categories
	 * @return View
	 */
	public function index(){
		// Select all categories
		$categories = \App\Models\Category::all();

		return view('admin.categories.index')->with(compact('categories'));
	}

	/**
	 * Returns page with form for adding new category
	 * @return View Laravel view
	 */
	public function create(){


		$categories = \App\Models\Category::lists('slug', 'id');

		$categories[null] = 'No parent';

		return view('admin.categories.create')->with(compact('categories'));
	}

	/**
	 * Method for proccessing POST route
	 * @param  Request $request
	 * @return View
	 */
	public function store(Request $request){
		$input = $request->only('name', 'slug');

		$validator = \Validator::make($input, [
			'name' => 'required|between:3,255|alpha_num',
			'parent_id' => '',
			'slug' => 'required|between:3,255|alpha_dash'
		]);

		// If validation fails return back with input and error messages
		if($validator->fails()){
			return redirect(route('AdminCategoryCreate'))
				->withErrors($validator->errors())
				->withInput();
		}

		// Create new category
		$newCategory = \App\Models\Category::create($input);

		// If parent id is set find wanted category and make it parent of new category
		$parentId = $request->input('parent_id');
		if(isset($parentId))
		{
			$parentCategory = \App\Models\Category::findOrFail($parentId);
			$newCategory->makeChildOf($parentCategory);
		}
		
		return redirect(route('AdminCategoryIndex'));
	}

}
