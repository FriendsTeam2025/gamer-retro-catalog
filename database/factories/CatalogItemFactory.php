<?php

namespace Database\Factories;

use App\Models\CatalogItem;
use App\Models\Platform;
use App\Models\Manufacturer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CatalogItemFactory extends Factory
{
    protected $model = CatalogItem::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'type' => $this->faker->word(),
            'platform_id' => Platform::factory(),
            'manufacturer_id' => Manufacturer::factory(),
            'release_year' => $this->faker->year(),
            'region' => $this->faker->countryCode(),
            'media_type' => $this->faker->word(),
            'barcode' => $this->faker->ean13(),
            'image_url' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph(),
            'status' => 'active',
            'is_retro_compatible' => $this->faker->boolean(),
            'retro_with' => $this->faker->word(),
            'console_type' => $this->faker->word(),
        ];
    }
} 