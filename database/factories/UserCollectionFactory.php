<?php

namespace Database\Factories;

use App\Models\UserCollection;
use App\Models\User;
use App\Models\CatalogItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserCollectionFactory extends Factory
{
    protected $model = UserCollection::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'catalog_item_id' => CatalogItem::factory(),
            'tags' => $this->faker->words(3, true),
            'notes' => $this->faker->sentence(),
            'added_at' => $this->faker->dateTime(),
        ];
    }
} 