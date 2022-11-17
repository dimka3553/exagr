<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\assetPrice>
 */
class AssetPriceFactory extends Factory
{
    public function definition()
    {
        return [
            'asset_id' => $this->faker->numberBetween(1, 50),
            'exchange_id' => $this->faker->numberBetween(1, 20),
            'price' => $this->faker->randomFloat(2, 0, 1000),
        ];
    }
}
