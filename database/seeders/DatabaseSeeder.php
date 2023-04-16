<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Image;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Image::factory()->create([
            'title' => 'Peru',
            'description' => 'The photograph shows a view of the ancient Incan ruins of Machu Picchu, located in the mountainous region of Peru. Despite the fog, the distinct stone structures of Machu Picchu are still visible. The iconic stone structures, including the terraced fields, walls and temples.',
            'img' => 'https://res.cloudinary.com/dav8u32ps/image/upload/v1681670308/peru.jpg',
            'year' => 2016,
        ]);        
        Image::factory()->create([
            'title' => 'Lisbon',
            'description' => 'The house is a charming, old building with a beautiful red door located in the heart of Lisbon. The plants spill over onto the sidewalk, creating a lush and inviting environment. It is a lovely example of traditional Lisbon architecture.',
            'img' => 'https://res.cloudinary.com/dav8u32ps/image/upload/v1681670309/lisbon.jpg',
            'year' => 2022,
        ]);

        /* Image::factory(5)->create(); */
    }
}
