<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Image;
use App\Models\User;

class CRUDImageTest extends TestCase
{
    use RefreshDatabase;

    public function test_guestUserSeeRegisterInHome()
    {
        $response = $this->get('/home');
        $response->assertStatus(200)
            ->assertSee('Register');
    }

    public function test_loggedInUserDontSeeRegisterInHome()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->get('/home');
        $response->assertStatus(200)
            ->assertDontSee('Register');
    }

    public function test_guestUserDontSeeAddNewImageInHome()
    {
        $response = $this->get('/home');
        $response->assertStatus(200)
            ->assertDontSee('Add new image');
    }

    public function test_loggedInUserSeeAddNewImageInHome()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->get('/home');
        $response->assertStatus(200)
            ->assertSee('Add new image');
    }

    public function test_listImageAppearsInHomeView()
    {
        $this->withExceptionHandling();
        $user = User::factory()->create();
        $images = Image::factory(2)->create([
            'id_user' => $user->id,
        ]);
        $this->actingAs($user);
        $response = $this->get('/');
        $response->assertSee($images[1]->title);
        $response->assertStatus(200)
            ->assertViewIs('home');
    }

    public function test_anImageCanBeDeleted()
    {
        $user = User::factory()->create();
        $image = Image::factory()->create([
            'id_user' => $user->id,
        ]);
        $this->assertCount(1, Image::all());
        $this->actingAs($user);
        $this->delete(route('deleteImage', $image->id));
        $this->assertDatabaseMissing('images', [
            'id' => $image->id,
        ]);
    }

    public function test_anImageCanBeCreated()
    {
        $this->withExceptionHandling();
        $user = User::factory()->create();
        $image = Image::factory()->create([
            'id_user' => $user->id,
        ]);
        $this->assertCount(1, Image::all());
        $this->actingAs($user);
        $this->post((route('storeImage')),
            [
                'id_user' => $user->id,
                'title' => 'title',
                'description' => 'description',
                'img' => 'img',
                'year' => 2023,
            ]
        );
        $this->assertDatabaseHas('images', [
            'id' => $image->id,
        ]);
    }

    public function test_anImageCantBeCreatedWithValidation()
    {
        $this->withExceptionHandling();
        $user = User::factory()->create();
        Image::factory()->create([
            'id_user' => $user->id,
        ]);
        $this->assertCount(1, Image::all());
        $this->actingAs($user);
        $response = $this->post((route('storeImage')),
            [
                'id_user' => $user->id,
                'title' => 'title',
                'description' => 'description',
                'img' => 'img',
                'year' => 'invalid_year',
            ]
        );
        $response->assertSessionHasErrors(['year']);
    }

    public function test_anImageCanBeUpdated()
    {
        $this->withExceptionHandling();
        $user = User::factory()->create();
        $image = Image::factory()->create([
            'id_user' => $user->id
        ]);
        $this->assertCount(1, Image::all());
        $this->actingAs($user);
        $this->patch(route('updateImage', $image->id), [
            'title' => 'New Title',
            'img' => 'https://picsum.photos/200/300'
        ]);
        $this->assertEquals('New Title', Image::first()->title);
    }

    public function test_anImageCanBeShowed()
    {
        $this->withExceptionHandling();
        $user = User::factory()->create();
        $image = Image::factory()->create([
            'id_user' => $user->id,
        ]);
        $this->assertCount(1, Image::all());
        $this->actingAs($user);
        $response = $this->get(route('showImage', $image->id));
        $response->assertSee($image->name);
        $response->assertStatus(200)->assertViewIs('showImage');
    }
}
