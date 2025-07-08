<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserCollection;

class UserCollectionSeeder extends Seeder
{
    public function run(): void
    {
        UserCollection::factory(10)->create();
    }
} 