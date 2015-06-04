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
		return view('admin.categories.index');
	}

	/**
	 * Returns page with form for adding new category
	 * @return View Laravel view
	 */
	public function create(){


		$categories = \App\Models\Category::where('parent_id', '<>', 'null')->lists('slug', 'id');

		$categories[null] = 'No category';

		return view('admin.categories.create')->with([
			'categories' => $categories
		]);
	}

	/**
	 * Method for proccessing POST route
	 * @param  Request $request
	 * @return View
	 */
	public function store(Request $request){
		$input = $request->all();

		$validator = \Validator::make($input, [
			'name' => 'required|between:3,255|alpha_num',
			'parent_id' => '',
			'slug' => 'required|between:3,255|alpha_num'
		]);

		if($validator->fails()){
			return redirect()->route('AdminCategoryCreate');
		}
	}

}
