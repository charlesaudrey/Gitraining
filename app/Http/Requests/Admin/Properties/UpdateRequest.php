<?php

namespace App\Http\Requests\Admin\Properties;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'company_id' => 'required',
            'name' => 'required',
            'details' => 'required',
            'number' => 'required',
            'status' => 'required',
        ];
    }
}
