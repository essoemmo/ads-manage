<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdFactory extends Factory
{

    public function definition()
    {
        return [
            'category_id' => rand(1,5),
            'advertiser_id' => rand(1,5),
            'title' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'type' => 'free',
            'start_date' => $this->faker->dateTimeBetween('now', '+10 days'),
        ];
    }

}
