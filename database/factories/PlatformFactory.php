<?php

namespace Database\Factories;

use App\Models\Platform;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enums\GenerationEnum;

class PlatformFactory extends Factory
{
    protected $model = Platform::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'generation' => $this->faker->randomElement(GenerationEnum::cases()),
        ];
    }
} 