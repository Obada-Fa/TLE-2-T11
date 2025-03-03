<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Lesson;
use App\Models\Sign;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title' => $this->faker->word,
            'image' => $this->faker->imageUrl(),
            'video' => $this->faker->url,
            'description' => $this->faker->sentence,
            'lesson_id' => Lesson::factory(),
            // Door dat je Lesson::factory gebruikt zal
            // die automatisch een rij aanmaken met een naam en gaat tie automatisch de id gebruiken.
            'category_id' => Category::factory(), // Zorg dat CategoryFactory bestaat
            // De comments gelden ook voor deze id maar ook voor andere factories.
        ];
    }
}
