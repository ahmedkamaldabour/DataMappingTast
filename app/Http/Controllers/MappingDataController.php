<?php

namespace App\Http\Controllers;

use App\Models\MainData;
use App\Models\MappingData;
use Illuminate\Http\Request;

class MappingDataController extends Controller
{
    public function index()
    {
        $mappingData = MappingData::get();
        return view('mapping.index', compact('mappingData'));
    }

    public function create()
    {
        $mainData = MainData::get();
        return view('mapping.create', compact('mainData'));
    }

    public function store(Request $request)
    {
        MappingData::create([
            'description' => $request->description,
            'main_data_id' => $request->main_data_id,
            'condition' => $request->condition_selector,
        ]);
        return redirect()->route('mapping.index');
    }
}
