<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AssignmentCategory;

class AssignmentCategorySeeder extends Seeder
{
    public function run(): void
    {
        //
        AssignmentCategory::factory()->count(25)->create();
    }
}
