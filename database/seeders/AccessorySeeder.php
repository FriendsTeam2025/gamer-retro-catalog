<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Accessory;

class AccessorySeeder extends Seeder
{
    public function run(): void
    {
        Accessory::factory(10)->create();
    }
} 