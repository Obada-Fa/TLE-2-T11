<?php

namespace Database\Factories;

use App\Models\AssignmentResult;
use App\Models\Sign;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssignmentResult>
 */
class AssignmentResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = AssignmentResult::class;

    public function definition(): array
    {
        return [
            'sign_id' => Sign::query()->inRandomOrder()->value('id') ?? Sign::factory(),
            'user_id' => User::query()->inRandomOrder()->value('id') ?? User::factory(),
            'is_correct' => $this->faker->boolean,
        ];
    }
}
