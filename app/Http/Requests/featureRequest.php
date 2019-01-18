<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class featureRequest extends FormRequest
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
            'status' => 'boolean|nullable',
            'name' => ($this->isMethod('post')?'required':'filled').'|unique:features,name|string|max:45',
            'description' => 'string|nullable|max:255'
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'status.boolean' => 'The status is type boolean',
            'name.required'  => 'The name is required',
            'name.filled'  => 'The name cannot be empty',
            'name.unique'  => 'The name already exists',
            'name.max' => 'The name cannot exceed 45 characters',
            'name.string' => 'The name must be type string',
            'description.string' => 'The description must be type string',
            'description.max' => 'The name cannot exceed 255 characters',
        ];
    }
}
