<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tim;
use App\Models\Kendaraan;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Seeder Tim
        Tim::Create([
            'name' => "Esha Sajaka",
            'job_title' => 'Owner',
            'img' => 'esha.jpg'
        ]);
        Tim::Create([
            'name' => "Bagus Wijaya",
            'job_title' => 'Trainer',
            'img' => 'male.jpg'
        ]);
        Tim::Create([
            'name' => "Dicky Prasetyo",
            'job_title' => 'Trainer',
            'img' => 'male.jpg'
        ]);
        Tim::Create([
            'name' => "Faisal Wijaya",
            'job_title' => 'Trainer',
            'img' => 'male.jpg'
        ]);
        Tim::Create([
            'name' => "Rini Cahyani",
            'job_title' => 'Trainer',
            'img' => 'female.jpg'
        ]);
        Tim::Create([
            'name' => "Susi Setyowati",
            'job_title' => 'Trainer',
            'img' => 'female.jpg'
        ]);

        // Seeder Kendaraan
        Kendaraan::Create([
            'tipe' => 'Avanza',
            'merek' => 'Toyota',
            'transmisi' => 'Manual',
            'img' => 'avanza-manual.webp'
        ]);Kendaraan::Create([
            'tipe' => 'Ayla',
            'merek' => 'Daihatsu',
            'transmisi' => 'Manual',
            'img' => 'ayla-manual.webp'
        ]);Kendaraan::Create([
            'tipe' => 'Grand Livina',
            'merek' => 'Nissan',
            'transmisi' => 'Manual',
            'img' => 'grand-livina-manual.webp'
        ]);Kendaraan::Create([
            'tipe' => 'Brio',
            'merek' => 'Honda',
            'transmisi' => 'Automatic',
            'img' => 'brio-matic.webp'
        ]);Kendaraan::Create([
            'tipe' => 'Mobilio',
            'merek' => 'Honda',
            'transmisi' => 'Automatic',
            'img' => 'mobilio-matic.webp'
        ]);Kendaraan::Create([
            'tipe' => 'Sigra',
            'merek' => 'Daihatsu',
            'transmisi' => 'Automatic',
            'img' => 'sigra-matic.webp'
        ]);
    }
}
