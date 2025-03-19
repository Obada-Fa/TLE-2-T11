<?php

namespace Database\Factories;

use App\Models\Lesson;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Lesson::class;
    private static $lessons = [
            1 => 'Les 1',
            2 => 'Les 2',
            3 => 'Les 3',
            4 => 'Les 4',
            5 => 'Les 5',
            6 => 'Les 6',
            7 => 'Les 7',
        ];
    public function definition(): array
    {
        $name = array_shift(self::$lessons);

        return [
            'name' => $name,
        ];
    }
}
