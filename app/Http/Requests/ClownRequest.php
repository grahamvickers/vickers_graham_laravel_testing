<?php

namespace App\Http\Requests;

class ClownRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }

    /**
     * Custom error messages
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Clown name is required.',
        ];
    }
}
