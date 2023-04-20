<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Paloma',
            'email' => 'paloma@mail.com',
            'password' => Hash::make('password')
        ]);
        
        User::factory()->create([
            'name' => 'Lola',
            'email' => 'lola@mail.com',
            'password' => Hash::make('password')
        ]);

        Image::factory()->create([
            'id_user' => 1,
            'title' => 'Cusco',
            'description' => 'The photograph shows a view of the ancient Incan ruins of Machu Picchu, located in the mountainous region of Peru. It is Recognized as one of the New Seven Wonders of the World. Despite the fog, the distinct stone structures, terraced fields and temples are still visible.',
            'img' => 'https://res.cloudinary.com/dav8u32ps/image/upload/v1681670308/peru.jpg',
            'year' => 2016,
        ]);        
        Image::factory()->create([
            'id_user' => 1,
            'title' => 'Lisbon',
            'description' => 'Lisbon is known for its steep hills, narrow streets, and historic neighborhoods. The house is a charming, old building with a beautiful red door. The plants spill over onto the sidewalk, creating a lush and inviting environment. It\'s a beautiful Portuguese postcard.',
            'img' => 'https://res.cloudinary.com/dav8u32ps/image/upload/v1681670309/lisbon.jpg',
            'year' => 2022,
        ]);
        Image::factory()->create([
            'id_user' => 1,
            'title' => 'Geysir',
            'description' => 'Geysir is a famous geothermal area located in Iceland. A geysir is a mesmerizing natural event that captures the essence of Iceland\'s volcanic landscapes. The image captures the unique beauty and geothermal activity that Iceland is renowned for.',
            'img' => 'https://res.cloudinary.com/dav8u32ps/image/upload/v1681670309/iceland.jpg',
            'year' => 2013,
        ]);
        Image::factory()->create([
            'id_user' => 1,
            'title' => 'Prague',
            'description' => 'The John Lennon Wall in Prague is a vibrant and colorful graffiti-covered wall that serves as a unique and powerful tribute to the legendary musician and peace activist, John Lennon. The wall is adorned with messages of love, peace, and freedom.',
            'img' => 'https://res.cloudinary.com/dav8u32ps/image/upload/v1681670310/prague.jpg',
            'year' => 2019,
        ]);
        Image::factory()->create([
            'id_user' => 1,
            'title' => 'Almeria',
            'description' => 'The Almeria Desert is a unique and mesmerizing landscape located in the southeastern region of Spain. The landscape is dominated by a range of earthy tones, from warm oranges and yellows to deep browns and reds, creating a dramatic and surreal environment.',
            'img' => 'https://res.cloudinary.com/dav8u32ps/image/upload/v1681670308/almeria.jpg',
            'year' => 2016,
        ]);
        Image::factory()->create([
            'id_user' => 1,
            'title' => 'Huelva',
            'description' => 'Rio Tinto Mines is a historic mining site that holds a fascinating legacy of industrial heritage and unique landscapes. The area is known for its distinct red-colored rivers and soils, a result of the mineral-rich deposits that have been mined for thousands of years.',
            'img' => 'https://res.cloudinary.com/dav8u32ps/image/upload/v1681670309/huelva.jpg',
            'year' => 2018,
        ]);

        /* Image::factory(5)->create(); */
    }
}
