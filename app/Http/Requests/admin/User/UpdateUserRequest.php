<?php

namespace App\Http\Requests\admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
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
            'email' => [ 'email', 'unique:users'],
            'order_count' => ['numeric'], 
        ];
    }
}
