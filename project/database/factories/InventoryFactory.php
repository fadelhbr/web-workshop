<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inventory;

class InventoryFactory extends Factory
{
    protected $model = Inventory::class;

    public function definition()
    {
        return [
            'item_name' => $this->faker->word,
            'quantity' => $this->faker->numberBetween(1, 100),
            'description' => $this->faker->sentence,
        ];
    }
}
