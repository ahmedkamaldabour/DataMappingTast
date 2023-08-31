<?php

namespace Database\Seeders;

use App\Models\MatchingData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatchingDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        \App\Models\MatchingData::factory()->count(50)->create();

        MatchingData::create([
            'arabic_description' => 'لابتوب جديد للبيع',
            'english_description' => 'New laptop for sale',
            'latin_description' => 'laptop jadid lilbiy',
        ]);

        MatchingData::create([
            'arabic_description' => 'كيبورد جديد للبيع',
            'english_description' => 'New keyboard for sale',
            'latin_description' => 'keyboard jadid lilbiy',
        ]);

    }
}
