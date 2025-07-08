<?php

namespace Database\Factories;

use App\Models\Accessory;
use App\Models\Manufacturer;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccessoryFactory extends Factory
{
    protected $model = Accessory::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'manufacturer_id' => Manufacturer::factory(),
            'release_year' => $this->faker->year(), 
            'country_id' => Country::all()->random()->id,
            'accessory_type' => $this->faker->word(),
            'connectivity' => $this->faker->word(),
            'is_official' => $this->faker->boolean(),
            'official_note' => $this->faker->sentence(),
            'barcode' => $this->faker->ean13(),
            'image_url' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph(),
            'status' => 'active',
        ];
    }
} 