<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
            'room_name'=>'required|string|max:50',
            'hotel_id'=>'required|exists:hotel,id',
            'room_type_id'=>'required|exists:room_type,id',
            'image'=>'required',
            'price' =>'required|numeric'
        ];
    }
}
