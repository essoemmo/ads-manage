<?php

namespace App\Http\Requests\Api;

class UpdateTagRequest extends ApiFormRequest
{

    public function rules()
    {
        return [
            'title' => ['string','max:255']
        ];
    }
}
