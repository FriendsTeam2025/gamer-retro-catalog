<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Developer;

class DeveloperSeeder extends Seeder
{
    public function run(): void
    {
        Developer::factory(10)->create();
    }
} 