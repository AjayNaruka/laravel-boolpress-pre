<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'=>'required|max:50',
            'content' => 'required|max:255'
        ];
    }
    public function messages()
    {
        return [
            'title.required'=>'Il titolo è necessario',
            'title.max'=>'Il titolo può avere al massimo :max caratteri',
            'content.required'=>'Il content è necessario',
            'content.max'=>'Il content può avere al massimo :max caratteri'
        ];
    }
}
