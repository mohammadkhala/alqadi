<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class CustomerRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=> 'required|string',
            'personal_id' => [

                'integer',
                'min:10000',
                Rule::unique('customers')->ignore($this->id)
        ],
            'start_date'=> 'required|date',
            'phone'=> 'required|string',
            'address'=>'required|string',
            'gender'=>'required|string',
        ];

    }
    public function messages(){

        return [
            'required'  => 'هذا الحقل مطلوب ',
        ];
    }
}
