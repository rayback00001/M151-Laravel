<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Application;
use App\Models\Event;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Event::truncate();
        Application::truncate();
       
        Event::factory()->count(50)->create();
        Application::factory()->count(500)->create();

        /*
        Event::create([
            'title' => 'OsterLAN',
            'description' => 'alskdjflasjdf',
            'date' => 'Nächste Woche'
        ]);
        Event::create([
            'title' => 'Kino',
            'description' => 'alskdjflasjdf',
            'date' => '3.tes Aprilwochenende'
        ]);
        */
    }
}
