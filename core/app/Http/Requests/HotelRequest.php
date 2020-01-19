<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
            'name'=>'required|string|max:50',
            'address'=>'required|string|max:150',
            'city'=>'required|string|max:50',
            'state'=>'required|string|max:50',
            'country'=>'required|string|max:50',
            'zip_code'=>'required|string|max:10',
            'email'=>'required|email' ,
            'phone'=>'required|min:11'
        ];
    }
}
