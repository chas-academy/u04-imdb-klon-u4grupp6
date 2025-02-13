<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class MovieControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_store_movie_validation()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/movies', [
            'title' => '',
            'description' => '',
            'genre' => '',
            'release_date' => ''
        ]);

        $response->assertSessionHasErrors(['title', 'description', 'genre', 'release_date']);
    }

    public function test_store_movie_success()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/movies', [
            'title' => 'Test Movie',
            'description' => 'This is a test movie description.',
            'genre' => 'Action',
            'release_date' => '2025-02-12'
        ]);

        $response->assertRedirect(route('dashboard'));
        $this->assertDatabaseHas('movies', [
            'title' => 'Test Movie',
            'description' => 'This is a test movie description.',
            'genre' => 'Action',
            'release_date' => '2025-02-12'
        ]);
    }
}