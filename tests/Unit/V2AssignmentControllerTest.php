<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Assignment;
use Illuminate\Foundation\Testing\RefreshDatabase;

class V2AssignmentControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_returns_all_assignments()
    {
        $lesson = \App\Models\Lesson::factory()->create(); // Zorg dat een les bestaat
        Assignment::factory()->count(3)->create(['lesson_id' => $lesson->id]); // Koppel assignments aan les

        $response = $this->getJson(route('assignments.index'));

        $response->assertStatus(200)
            ->assertJsonStructure([
                'collection' => [
                    '*' => ['id', 'name']
                ]
            ]);
    }


    public function test_store_creates_a_new_assignment()
    {
        $data = ['name' => 'New Assignment'];

        $response = $this->postJson(route('assignments.store'), $data);

        $response->assertStatus(201)
            ->assertJson(['message' => 'Assignment succesfully created']);

        $this->assertDatabaseHas('assignments', $data);
    }

    public function test_show_returns_a_specific_assignment()
    {
        $lesson = \App\Models\Lesson::factory()->create(); // Zorg dat een les bestaat
        $assignment = Assignment::factory()->create(['lesson_id' => $lesson->id]); // Koppel assignment aan les

        $response = $this->getJson(route('assignments.show', $assignment->id));

        $response->assertStatus(200)
            ->assertJsonFragment(['message' => 'Successfully retrieved the single resource']);
    }

}
