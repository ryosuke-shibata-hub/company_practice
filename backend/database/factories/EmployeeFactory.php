<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;
use App\Models\Company;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

            //
                return [
                    'first_name' => $this->faker->firstNameFemale,
                    'last_name' => $this->faker->lastName,

                    'company_id' => function() {
                        return factory(Company::class)->create()->id;
                    }
                ];
    }
}
