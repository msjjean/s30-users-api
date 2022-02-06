<?php

namespace App\Http\Requests\Users;

// use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\FormRequest; // use the custom class

class UserStoreFormRequest extends FormRequest
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
            'fullname' => 'required',
            'email'    => 'required|unique:users,email',
        ];
    }

    // public function messages () {
    //     return [
    //         'fullname.required' => 'Fullname is required.',
    //         'email.required'    => 'Email is required.',
    //     ];
    // }
}
