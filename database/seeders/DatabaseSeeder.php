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
            'title' => 'Cusco',
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
        Image::factory()->create([
            'title' => 'Iceland',
            'description' => 'A geysir in Iceland is a mesmerizing natural phenomenon that captures the essence of Iceland\'s volcanic landscapes. The image captures the unique beauty and geothermal activity that Iceland is renowned for, providing a glimpse into the country\'s captivating and otherworldly natural wonders.',
            'img' => 'https://res.cloudinary.com/dav8u32ps/image/upload/v1681670309/iceland.jpg',
            'year' => 2013,
        ]);
        Image::factory()->create([
            'title' => 'Prague',
            'description' => 'The John Lennon Wall in Prague is a vibrant and colorful graffiti-covered wall that serves as a unique and powerful tribute to the legendary musician and peace activist, John Lennon. Located in the Mala Strana district of Prague, the wall is adorned with messages of love, peace, and freedom.',
            'img' => 'https://res.cloudinary.com/dav8u32ps/image/upload/v1681670310/prague.jpg',
            'year' => 2019,
        ]);
        Image::factory()->create([
            'title' => 'Almeria',
            'description' => 'The Almeria Desert is a unique and mesmerizing landscape located in the southeastern region of Spain. The landscape is dominated by a range of earthy tones, from warm oranges and yellows to deep browns and reds, creating a dramatic and surreal environment.',
            'img' => 'https://res.cloudinary.com/dav8u32ps/image/upload/v1681670308/almeria.jpg',
            'year' => 2016,
        ]);
        Image::factory()->create([
            'title' => 'Huelva',
            'description' => 'Rio Tinto Mines is a historic mining site that holds a fascinating legacy of industrial heritage and unique landscapes. The area is known for its distinct red-colored rivers and soils, a result of the mineral-rich deposits that have been mined for thousands of years.',
            'img' => 'https://res.cloudinary.com/dav8u32ps/image/upload/v1681670309/huelva.jpg',
            'year' => 2018,
        ]);

        /* Image::factory(5)->create(); */
    }
}
