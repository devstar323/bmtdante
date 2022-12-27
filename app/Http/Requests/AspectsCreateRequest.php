<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AspectsCreateRequest extends FormRequest
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
            'title'         => 'required',
            'slug'          => 'required|unique:aspects',
            'description'   => 'required',
            'image_id'      => 'required|image|max:1000'
        ];
    }

    public function messages()
    {
        return [
            'image_id.required'     => 'Image field required'
        ];
    }
}
