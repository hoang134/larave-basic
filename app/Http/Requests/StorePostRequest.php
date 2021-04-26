<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required | unique:posts',
            'user_id' => 'required',
            'contents' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'user_id.required' => 'A user_id is required',
        ];
    }
}
