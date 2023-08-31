<?php

namespace Database\Seeders;

use App\Models\MappingData;
use Illuminate\Database\Seeder;

class MappingDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        \App\Models\MappingData::factory()->count(10)->create();

        MappingData::create(
            [
                'main_data_id' => 1,
                'description' => 'New laptop for sale in english',
                'condition' => 'A',
            ]
        );

        MappingData::create(
            [
                'main_data_id' => 2,
                'description' => 'New laptop for sale in arabic',
                'condition' => 'B',
            ]
        );


        MappingData::create(
            [
                'main_data_id' => 3,
                'description' => 'New laptop for sale in latin',
                'condition' => 'C',
            ]
        );

    }
}
