<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequset extends FormRequest
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
        'p_id '=>'required|exists:customers,personal_id',
        'date'=>'required',

        ];
    }
    public function messages(){

        return [
            'required'  => 'هذا الحقل مطلوب ',
            'p_id.exists'=>'هذا المريض غير موجود '
        ];
    }
}
