<?php

namespace Tests\Feature;

//use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Database\Factories\UserFactory;
use Tests\TestCase;

class PermissionTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testUserWithPermissionCanAccessEdit()
    {
        $user = UserFactory::new()->create();
        $user->givePermissionTo('edit-post');

        $response = $this->actingAs($user)->get('/admin/post_edit');
        $response->assertStatus(200);
//        $response->assertSee('Editing a post');
    }

    public function testUserWithoutPermissionCannotAccessEdit()
    {
        $user = UserFactory::new()->create();

        $response = $this->actingAs($user)->get('/post_edit');
        $response->assertStatus(403);
    }

    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
