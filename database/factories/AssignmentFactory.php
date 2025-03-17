<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assignment>
 */
class AssignmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private static $assignments = [
        ['name' => 'Vraagwoorden', 'lesson_id' => 1],
        ['name' => 'Tijdens de les', 'lesson_id' => 1],
        ['name' => 'Kennis maken', 'lesson_id' => 1],
        ['name' => 'Begroetingen', 'lesson_id' => 1],
        ['name' => 'Werkwoorden', 'lesson_id' => 2],
        ['name' => 'Luisterhouding', 'lesson_id' => 2],
        ['name' => 'Gevoelens', 'lesson_id' => 2],
        ['name' => 'Tellen', 'lesson_id' => 2],
        ['name' => 'Dagen & maanden overig', 'lesson_id' => 3],
        ['name' => 'Maanden', 'lesson_id' => 3],
        ['name' => 'Dagen', 'lesson_id' => 3],
        ['name' => 'Afspraak maken', 'lesson_id' => 3],
        ['name' => 'Vraagwoorden 2', 'lesson_id' => 3],
        ['name' => 'Getallen', 'lesson_id' => 4],
        ['name' => 'Klok kijken', 'lesson_id' => 4],
        ['name' => 'Doktersbezoek algemeen', 'lesson_id' => 5],
        ['name' => 'Anamnese', 'lesson_id' => 5],
        ['name' => 'Steden', 'lesson_id' => 5],
        ['name' => 'Gezin', 'lesson_id' => 5],
        ['name' => 'Relaties', 'lesson_id' => 5],
        ['name' => 'Onderzoek en lichamelijke klachten', 'lesson_id' => 6],
        ['name' => 'Ziekenhuisopname deel 1', 'lesson_id' => 6],
        ['name' => 'Ziekenhuisopname deel 2', 'lesson_id' => 7],
        ['name' => 'Lichaamsdelen', 'lesson_id' => 7],
        ['name' => 'Organen', 'lesson_id' => 7],
    ];

    public function definition(): array
    {
        // Pak het eerste item uit de array en verwijder het
        $assignment = array_shift(self::$assignments);

        return [
            'name' => $assignment['name'],
            'lesson_id' => $assignment['lesson_id'],
        ];
    }
}
