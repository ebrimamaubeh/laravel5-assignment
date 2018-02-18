<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CreateBlogRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // users are logged in, thats the only authority they have.(middleware)
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
            'title' => 'alpha_num|between:30,100|required', 
            'description' => 'between:100,250|required', 
            'text' => 'required', 
            'image' => 'image|required'
        ];
    }
}
