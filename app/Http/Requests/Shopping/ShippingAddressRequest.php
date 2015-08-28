<?php

namespace App\Http\Requests\Shopping;

use App\Http\Requests\Request;

class ShippingAddressRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'shippingAddress' => 'required',
            'name' => 'required_if:shippingAddress,otherAddress',
            'country_id' => 'required_if:shippingAddress,otherAddress',
            'state_id' => 'required_if:shippingAddress,otherAddress|required_if:country_id,840',
            'city' => 'required_if:shippingAddress,otherAddress',
            'street' => 'required_if:shippingAddress,otherAddress',
            'ZIP' => 'required_if:shippingAddress,otherAddress',
        ];
    }
}
