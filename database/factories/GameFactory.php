<?php

namespace Database\Factories;

use App\Models\Game;
use App\Models\Developer;
use App\Models\Publisher;
use App\Models\Platform;
use Illuminate\Database\Eloquent\Factories\Factory;

class GameFactory extends Factory
{
    protected $model = Game::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'developer_id' => Developer::factory(),
            'publisher_id' => Publisher::factory(),
            'release_year' => $this->faker->year(),
            'platform_id' => Platform::factory(),
            'region' => $this->faker->countryCode(),
            'media_type' => $this->faker->word(),
            'edition' => $this->faker->word(),
            'modes' => $this->faker->word(),
            'languages' => $this->faker->languageCode(),
            'has_fan_patch' => $this->faker->boolean(),
            'fan_patch_note' => $this->faker->sentence(),
            'barcode' => $this->faker->ean13(),
            'image_url' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph(),
            'status' => 'active',
        ];
    }
} 