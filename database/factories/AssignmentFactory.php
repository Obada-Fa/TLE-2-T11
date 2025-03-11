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
    public function definition(): array
    {
        return [
            1 => 'Vraagwoorden',
            2 => 'Tijdens de les',
            3 => 'Kennis maken',
            4 => 'Begroetingen',
            5 => 'Werkwoorden',
            6 => 'Luisterhouding',
            7 => 'Gevoelens',
            8 => 'Tellen',
            9 => 'Dagen & maanden overig',
            10 => 'Maanden',
            11 => 'Dagen',
            12 => 'Afspraak maken',
            13 => 'Getallen',
            14 => 'Klok kijken',
            15 => 'Doktersbezoek algemeen',
            16 => 'Anamnese',
            17 => 'Steden',
            18 => 'Gezin',
            19 => 'Relaties',
            20 => 'Onderzoek en lichamelijke klachten',
            21 => 'Ziekenhuisopname deel 1',
            22 => 'Ziekenhuisopname deel 2',
            23 => 'Lichaamsdelen',
            24 => 'Organen',
        ];
    }
}
