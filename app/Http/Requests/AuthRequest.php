<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'nisn'=>'required|unique:data_ones,nisn|min:10|max:10',
            'full_name'=>'required',
            'username'=>'required',
            'track'=>'required',
            'password'=>'required|min:6|max:20',
            'no_wa'=>'required|unique:data_ones,no_wa|min:10|max:15',
            'gender'=>'required',
            'birth_date'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'nisn.required'=>'Data tidak boleh kosong',
            'full_name.required'=>'Data tidak boleh kosong',
            'username.required'=>'Data tidak boleh kosong',
            'track.required'=>'Data tidak boleh kosong',
            'password.required'=>'Data tidak boleh kosong',
            'no_wa.required'=>'Data tidak boleh kosong',
            'gender.required'=>'Data tidak boleh kosong',
            'birth_date.required'=>'Data tidak boleh kosong',

            'nisn.unique'=>'Data ini sudah terdaftar',
            'no_wa.unique'=>'Data ini sudah terdaftar',

            'nisn.min'=>'Data tidak boleh kurang dari 10 digit angka',
            'no_wa.min'=>'Data tidak boleh kurang dari 10 digit angka',

            'nisn.max'=>'Data tidak boleh lebih dari 10 digit angka',
            'no_wa.max'=>'Data tidak boleh lebih dari 20 digit angka',
        ];
    }
}
