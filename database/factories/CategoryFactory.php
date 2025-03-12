<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Category::class;


    private static $categories = [
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
        13 => 'Vraagwoorden 2',
        14 => 'Getallen',
        15 => 'Klok kijken',
        16 => 'Doktersbezoek algemeen',
        17 => 'Anamnese',
        18 => 'Steden',
        19 => 'Gezin',
        20 => 'Relaties',
        21 => 'Onderzoek en lichamelijke klachten',
        22 => 'Ziekenhuisopname deel 1',
        23 => 'Ziekenhuisopname deel 2',
        24 => 'Lichaamsdelen',
        25 => 'Organen',
    ];
    public function definition(): array
    {
       $name = array_shift(self::$categories);

        return [
            'name' => $name,
        ];
    }
}
