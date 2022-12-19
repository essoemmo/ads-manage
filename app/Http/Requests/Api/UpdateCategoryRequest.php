<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends ApiFormRequest
{

    public function rules()
    {
        return [
            'title' => ['string','max:255']
        ];
    }
}
