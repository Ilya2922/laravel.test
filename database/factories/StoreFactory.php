<?php

namespace Database\Factories;
use App\Models\Store;

use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand_id' => 1,
            'price' => '1200000',
            'image' => 'https://avatars.mds.yandex.net/get-verba/787013/2a0000017c373735fe07cbba9aadd3f022fc/cattouchret'
        ];
    }
}
