<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrenerRequest extends FormRequest
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
            'name'=> 'required|min:3|max:40',
            'img'=> 'required',
            'kindofsport'=> 'required|min:3|max:50',
            'rank'=> 'required|min:3|max:100',
            'contacts'=> 'required|min:3|max:50',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Поле "Имя" должна быть заполнена',
            'kindofsport.required' => 'Поле "Вид деятельности" должна быть заполнена',
            'rank.required' => 'Поле "Ранг" должна быть заполнена',
            'contacts.required' => 'Поле "Контакт" должна быть заполнена',
        ];
    }
}
