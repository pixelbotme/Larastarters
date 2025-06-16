<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'path' => ['required', 'string'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
