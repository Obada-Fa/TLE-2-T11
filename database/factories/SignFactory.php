<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Lesson;
use App\Models\Sign;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sign>
 */
class SignFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Sign::class;

    public function definition(): array
    {
        return [
            'title' => 'Naam',
            'image' => $this->faker->imageUrl(),
            'video' => $this->faker->url,
            'description' => $this->faker->sentence,
            // Door dat je Lesson::factory gebruikt zal
            // die automatisch een rij aanmaken met een naam en gaat tie automatisch de id gebruiken.
            'category_id' => Category::query()->value('id') ?? Category::factory(), // Zorg dat CategoryFactory bestaat
//            // De comments gelden ook voor deze id maar ook voor andere factories.
        ];
    }
}
