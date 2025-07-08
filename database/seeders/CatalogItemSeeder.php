<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CatalogItem;

class CatalogItemSeeder extends Seeder
{
    public function run(): void
    {
        CatalogItem::factory(20)->create();
    }
} 