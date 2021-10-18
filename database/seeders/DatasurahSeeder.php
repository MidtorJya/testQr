<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatasurahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('datasurahs')->delete();

        \DB::table('datasurahs')->insert([
            [
                'id' => 1,
                'th_name' => ' อัล-ฟาติหะฮฺ',
                'surah_name' => 'Surah Al-Fatihah',
                'surah_arab' => 'الفاتحة',
                'whole_ayah' => '7',
                'type' => 'Mekkah',
            ]
            ]);
    }
}
