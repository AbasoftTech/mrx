<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    protected function prepareForValidation()
{
    $this->merge([
        'main_phone_number' =>  $this->main_phone_number . $this->top . $this->middle . $this->below,
    ]);
}
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
            'main_phone_number'=>'required',
            'password' => 'required|string',
        ];
    }
}
