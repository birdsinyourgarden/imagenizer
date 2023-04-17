<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Image;

class CRUDImageTest extends TestCase
{
    use RefreshDatabase;

    public function test_anImageCanBeDeleted(){
        $this->withExceptionHandling();
        $image = Image::factory()->create();
        $this->assertCount(1, Image::all());
        $response = $this->delete(route('deleteImage', $image->id));
        $this->assertCount(0, Image::all());
    }
}
