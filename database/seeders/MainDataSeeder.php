<?php

namespace Database\Seeders;

use App\Models\MainData;
use App\Models\MatchingData;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create word in arabic english and latin

        MainData::create([
            // in english
            'description' =>  'laptop',
        ]);

        MainData::create([
            // in arabic
            'description' =>  'لابتوب',
        ]);

        MainData::create([
            // in latin
            'description' =>  'laptop in latin',
        ]);


//        MainData::create([
//            // in english
//            'description' =>  'Keyboard',
//        ]);
//
//        MainData::create([
//            // in arabic
//            'description' =>  'لوحة مفاتيح',
//        ]);
//
//        MainData::create([
//            // in latin
//            'description' =>  'Keyboard in latin',
//        ]);
    }
}
