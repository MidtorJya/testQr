<?php

namespace Database\Seeders;

use App\Models\Ayat;
use App\Models\Surah;
use App\Models\Trans;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Surah::factory(20)
            ->has(
                Ayat::factory()
                    ->has(Trans::factory()->count(1))
                    ->count(20)
            )
            ->create();
    }
}
