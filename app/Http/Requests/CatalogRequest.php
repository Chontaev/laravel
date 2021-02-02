<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CatalogRequest extends FormRequest
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
            'title'=> 'required|min:3|max:40',
            'img'=> 'required',
            'price'=> 'required|min:3|max:10',
            'time'=> 'required|min:5|max:50',
            'discript'=> 'required|min:10|max:500',
        ];
    }
}
