<?php

namespace App\Http\Requests\Admin\Rooms;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'property_id' => 'required',
            'name' => 'required',
            'room_number' => 'required',
            'details' => 'required',
            'guest' => 'required',
            'rate' => 'required',
            'status' => 'required'
        ];
    }
}
