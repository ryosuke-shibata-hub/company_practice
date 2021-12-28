<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Employee;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Company::factory()->count(35)->create()->each(function($company) {
            Employee::factory()->count(10)->create(['company_id' => $company->id]);
        });
    }
}
