<?php

namespace Database\Seeders;

use App\Models\AssignmentResult;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssignmentResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //\
         AssignmentResult::factory(10)->create();
    }
}
