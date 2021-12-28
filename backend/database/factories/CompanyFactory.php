<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Company;

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

                    'name' => $this->faker->company,
                    'email' => $this->faker->unique()->safeEmail,
                    'website' => $this->faker->url,

        ];
    }
}
