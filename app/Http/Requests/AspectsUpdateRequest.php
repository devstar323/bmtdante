<?php

namespace App\Http\Requests;

use App\Aspect;
use Illuminate\Foundation\Http\FormRequest;

class AspectsUpdateRequest extends FormRequest
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
            'slug'          => 'required|unique:aspects,slug,'.$this->aspect,
            'description'   => 'required',
            'image_id'      => 'image|max:1000'
        ];

    }
    public function messages()
    {
        return [
            'image_id.image'        => 'Image type must be png, jpg, jpeg type'
        ];
    }
}
