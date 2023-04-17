<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Image;

class CRUDImageTest extends TestCase
{
    use RefreshDatabase;

    public function test_listImageAppearInHomeView(){
        $this->withExceptionHandling();
        $images = Image::factory(2)->create();
        $image = $images[0];
        $response = $this->get('/');
        $response->assertSee($image->name);
        $response->assertStatus(200)
                ->assertViewIs('home');
    }

    public function test_anImageCanBeDeleted(){
        $this->withExceptionHandling();
        $image = Image::factory()->create();
        $this->assertCount(1, Image::all());
        $response = $this->delete(route('deleteImage', $image->id));
        $this->assertCount(0, Image::all());
    }

    public function test_anImageCanBeCreated(){
        $this->withExceptionHandling();
        $response = $this->post((route('storeImage')),
        [
            'title' => 'title',
            'description' => 'description',
            'img' => 'img',
            'year' => 'year',
        ]);
        $this->assertCount(1, Image::all());
    }

    public function test_anImageCanBeUpdated(){
        $this->withExceptionHandling();
        $image = Image::factory()->create();
        $this->assertCount(1, Image::all());
        $response = $this->patch(route('updateImage', $image->id), ['title' => 'New Title']);
        $this->assertEquals('New Title', Image::first()->title);
    }
}
