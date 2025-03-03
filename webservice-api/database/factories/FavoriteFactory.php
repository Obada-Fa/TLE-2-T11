<?php

namespace Database\Factories;

use App\Models\Sign;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Favorite>
 */
class FavoriteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'sign_id' => Sign::query()->inRandomOrder()->value('id') ?? Sign::factory(),
            'user_id' => User::query()->inRandomOrder()->value('id') ?? User::factory(),
        ];
    }
}
