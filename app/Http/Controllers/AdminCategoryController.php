<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CategoryRequest;
use App\Http\Controllers\Controller;

use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class AdminCategoryController extends Controller {

	/**
	 * Returns list of all categories
	 * @return View
	 */
	public function index(){
		// Select all categories
		$categories = Category::all();

		return view('admin.categories.index')->with(compact('categories'));
	}

	/**
	 * Returns page with form for adding new category
	 * @return View Laravel view
	 */
	public function create(){

		$categories = Category::lists('slug', 'id');

		$categories[null] = 'No parent';

		return view('admin.categories.create')->with(compact('categories'));
	}

	/**
	 * Create new Category
	 * @param  CategoryRequest $request Category request input validation
	 * @return View
	 */
	public function store(CategoryRequest $request){
		$input = $request->only('name', 'slug');

		// Create new category with validated input
		$newCategory = Category::create($input);

		// If parent id is set find wanted category and make it parent of new category
		$parentId = $request->input('parent_id');
		if(isset($parentId))
		{
			$parentCategory = Category::findOrFail($parentId);
			$newCategory->makeChildOf($parentCategory);
		}
		
		return redirect(route('AdminCategoryIndex'));
	}

	/**
	 * Returns basic info of selected category
	 * @param  \App\Models\Category $category Instance of Category model
	 * @return View
	 */
	public function show(Category $category){
		
		return view('admin.categories.show')->with(compact('category'));
	}

	/**
	 * Returns page with form for editing existing category
	 * @param  App\Models\Category $category Instance of Category model
	 * @return View
	 */
	public function edit(Category $category){
		/**
		 * Select id-slug list of all categories except itself, needed 
		 * for choosing parent category
		 */
		$categories = Category::where('id', '<>', $category->id)->lists('slug', 'id');

		return view('admin.categories.edit')->with(compact('category', 'categories'));
	}

	/**
	 * Updates category attributes from form
	 * @param  Request              $request  
	 * @param  \App\Models\Category $category
	 * @return View
	 */
	public function update(CategoryRequest $request, Category $category){

		// Set and save validated attributes
		$category->name = $request->input('name');
		$category->slug = $request->input('slug');
		$category->save();

		/**
		 * If parent is set and if parent_id and category->id are not equal,
		 * set parent category
		 */
		$parentId = $request->input('parent_id');
		if(isset($parentId) && $parentId != $category->id)
		{
			$parentCategory = Category::findOrFail($parentId);
			$category->makeChildOf($parentCategory);
		}
		
		return redirect(route('AdminCategoryIndex'));
	}

	/**
	 * Returns page with form for category deletion
	 * @param  Category $category
	 * @return View
	 */
	public function delete(Category $category){

		return view('admin.categories.delete')->with(compact('category'));
	}

	/**
	 * Destroy sent category
	 * @param  Category $category
	 * @return View
	 */	
	public function destroy(Category $category){

		// Delete category
		$category->delete();

		return redirect(route('AdminCategoryIndex'));
	}
}
