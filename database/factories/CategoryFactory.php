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
        1 => 'vraagwoorden',
        2 => 'tijdens de les',
        3 => 'kennis maken',
        4 => 'begroetingen',
        5 => 'werkwoorden',
        6 => 'luisterhouding',
        7 => 'gevoelens',
        8 => 'tellen',
        9 => 'dagen & maanden overig',
        10 => 'maanden',
        11 => 'dagen',
        12 => 'afspraak maken',
        13 => 'getallen',
        14 => 'klok kijken',
        15 => 'doktersbezoek algemeen',
        16 => 'anamnese',
        17 => 'steden',
        18 => 'gezin',
        19 => 'relaties',
        20 => 'onderzoek en lichamelijke klachten',
        21 => 'ziekenhuisopname deel 1',
        22 => 'ziekenhuisopname deel 2',
        23 => 'lichaamsdelen',
        24 => 'organen',
    ];
    public function definition(): array
    {
       $name = array_shift(self::$categories);

        return [
            'name' => $name,
        ];
    }
}
