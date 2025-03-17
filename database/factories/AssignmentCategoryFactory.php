<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssignmentCategory>
 */
class AssignmentCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private static $assignments = [
        ['assignment_id' => 1, 'category_id' => 1],
        ['assignment_id' => 2, 'category_id' => 2],
        ['assignment_id' => 3, 'category_id' => 3],
        ['assignment_id' => 4, 'category_id' => 4],
        ['assignment_id' => 5, 'category_id' => 5],
        ['assignment_id' => 6, 'category_id' => 6],
        ['assignment_id' => 7, 'category_id' => 7],
        ['assignment_id' => 8, 'category_id' => 8],
        ['assignment_id' => 9, 'category_id' => 9],
        ['assignment_id' => 10, 'category_id' => 10],
        ['assignment_id' => 11, 'category_id' => 11],
        ['assignment_id' => 12, 'category_id' => 12],
        ['assignment_id' => 13, 'category_id' => 13],
        ['assignment_id' => 14, 'category_id' => 14],
        ['assignment_id' => 15, 'category_id' => 15],
        ['assignment_id' => 16, 'category_id' => 16],
        ['assignment_id' => 17, 'category_id' => 17],
        ['assignment_id' => 18, 'category_id' => 18],
        ['assignment_id' => 19, 'category_id' => 19],
        ['assignment_id' => 20, 'category_id' => 20],
        ['assignment_id' => 21, 'category_id' => 21],
        ['assignment_id' => 22, 'category_id' => 22],
        ['assignment_id' => 23, 'category_id' => 23],
        ['assignment_id' => 24, 'category_id' => 24],
        ['assignment_id' => 25, 'category_id' => 25],
    ];

    public function definition(): array
    {
        // Pak het eerste item uit de array en verwijder het
        $assignment = array_shift(self::$assignments);

        return [
            'assignment_id' => $assignment['assignment_id'],
            'category_id' => $assignment['category_id'],
        ];
    }
}

