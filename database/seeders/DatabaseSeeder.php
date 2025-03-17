<?php

namespace Database\Seeders;

use App\Models\AssignmentResult;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Let op omdat je hier een user maakt
            User::factory()->create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'token' => '@djvkdojfododkvfk',
                'last_login_at' => '2025-03-05',
            ]);

        $this->call([
            LessonSeeder::class,
            AssignmentSeeder::class,
            CategorySeeder::class,
            AssignmentCategorySeeder::class,
        ]);

    }
}
