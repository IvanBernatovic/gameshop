<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditCategoryRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required|between:3,255',
			'parent_id' => '',
			'slug' => 'required|between:3,255|alpha_dash'
		];
	}

}
