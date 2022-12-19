<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdsFactory extends Factory
{

    public function definition()
    {
        return [
            'category_id',
            'advertiser_id',
            'title',
            'description',
            'type',
            'start_date'
        ];
    }

}
