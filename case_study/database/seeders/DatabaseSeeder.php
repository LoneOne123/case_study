<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Company;
use App\Models\Job;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Category::factory(10)->create();
        Company::factory(10)->create();
        Job::factory(10)->create();
    }
}
