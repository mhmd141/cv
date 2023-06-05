<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Personal::factory(10)->create();
        \App\Models\Experience::factory(3)->create();
        \App\Models\Service::factory(4)->create();
        \App\Models\Testimonial::factory(7)->create();
        //\App\Models\Skill::factory()->create([
        //  'langname' => 'Html',
        //  'percentage' => '95',
        // ]);
    }
}
