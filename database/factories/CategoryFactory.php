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
    public function definition(): array
    {
       $name = array_shift(self::$categories);

        return [
            'name' => $name,
        ];
    }
}
