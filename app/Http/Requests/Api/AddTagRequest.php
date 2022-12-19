<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class AddTagRequest extends ApiFormRequest
{

    public function rules()
    {
        return [
            'title' => ['required','string','max:255']
        ];
    }
}
