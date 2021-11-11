<?php

namespace App\Http\Requests\admin\Order;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class StoreOrderRequest extends FormRequest
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
            'user_id' => ['required'],
            'value' => ['required', 'numeric', 'between:0,99.99'],
            'status' => Rule::in(['open', 'closed']),
        ];
    }
}
