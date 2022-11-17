<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\asset>
 */
class AssetFactory extends Factory
{

    public function definition()
    {
        return [
            'asset_type_id' => $this->faker->numberBetween(1, 5),
            'name' => $this->faker->word,
            'symbol' => $this->faker->word,
        ];
    }
}
