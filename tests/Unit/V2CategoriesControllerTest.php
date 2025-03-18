<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;

class V2CategoriesControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_return_all_categories()
    {
        Category::factory()->count(3)->create();

        $response = $this->getJson(route('categories.index'));

        $response->assertStatus(200)
            ->assertJsonStructure([
                '*' => ['id', 'name']
            ]);
    }

    public function test_return_a_specific_category()
    {
        $category = Category::factory()->create();

        $response = $this->getJson(route('categories.show', $category->id));

        $response->assertStatus(200)
            ->assertJsonFragment(['message' => 'Successfully retrieved the ID']);
    }


    public function test_destroy_deletes_a_category()
    {
        $category = Category::factory()->create();

        $response = $this->deleteJson(route('categories.destroy', $category->id));

        $response->assertStatus(204);
        $this->assertDatabaseMissing('categories', ['id' => $category->id]);
    }
}
