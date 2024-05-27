<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|between:4,10',
            'email'=>'required|email|unique:profiles',
            'password'=>'required|confirmed|min:10',
            'bio'=>'required|between:4,20', 
        'image'=>'image|required|mimes:png,svg,jpeg|max:1024'       ];
    }
}