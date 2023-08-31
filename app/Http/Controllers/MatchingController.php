<?php

namespace App\Http\Controllers;

use App\Models\MappingData;
use App\Models\matching_data;
use App\Models\MatchingData;
use Illuminate\Http\Request;
use function array_key_last;
use function compact;
use function count;
use function dd;
use function dump;
use function strpos;
use function substr;
use function view;

class MatchingController extends Controller
{

    private array $mapped_data_count = [];

    public function matchSelect()
    {
        $matching_data = MatchingData::first()->getFillable();
        return view('matching.match-select', compact('matching_data'));
    }

    public function match(Request $request)
    {
        $column = $request->input('match_selected');
        $keyword = substr($column, 0, strpos($column, '_'));
        $matching_data = MatchingData::get();
        $mapped_data = [];
        foreach ($matching_data as $data) {
            $mapped = MappingData::
            where('description', 'like', '%' . $keyword . '%')->first();
            if ($mapped) {
                $mapped_data[] = [
                    'table_3_id' => $data->id,
                    $column => $data->$column,
                    'table_2_id' => $mapped->id,
                    'reason' => $mapped->condition,
                    'table_1_id' => $mapped->main_data_id,
                ];
            }
        }
        return view('matching.match-results', compact('mapped_data', 'column'));
    }


    public function matchAll()
    {
        $columns = MatchingData::first()->getFillable();
        $matching_data = [];
        for ($i = 0; $i < count($columns); $i++) {
            $keyword[$i] = substr($columns[$i], 0, strpos($columns[$i], '_'));
            $matching_data[] = $this->mappedData($columns[$i]);
        }

        $arabic = $matching_data[0];
        $english = $matching_data[1];
        $latin = $matching_data[2];

        // store in $mapped_data_count the count of each array
        for ($i = 0; $i < count($matching_data); $i++) {
            $this->mapped_data_count[$i] = count($matching_data[$i]);
        }
        $max = max($this->mapped_data_count);
        return view('matching.match-all-results', compact(
                'arabic',
                'english',
                'latin',
                'max',
            )
        );


    }


    public function mappedData($column)
    {

        $keyword = substr($column, 0, strpos($column, '_'));
        $matching_data = MatchingData::get();
        $mapped_data = [];
        foreach ($matching_data as $data) {
            $mapped = MappingData::
            where('description', 'like', '%' . $keyword . '%')->get();
            if ($mapped) {
                foreach ($mapped as $map) {
                    $mapped_data[] = [
                        'table_3_id' => $data->id,
                        $column => $data->$column,
                        'table_2_id' => $map->id,
                        'reason' => $map->condition,
                        'table_1_id' => $map->main_data_id,
                    ];
                }
            }
        }
        return $mapped_data;
    }


}

