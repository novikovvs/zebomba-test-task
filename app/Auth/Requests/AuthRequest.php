<?php

namespace App\Auth\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'id'           => 'required|integer',
            'access_token' => 'required',
            'first_name'   => 'required',
            'last_name'    => 'required',
            'country'      => 'required',
            'city'         => 'required',
            'sig'          => 'required',
        ];
    }
}
