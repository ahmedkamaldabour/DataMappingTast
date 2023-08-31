<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MappingData extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'main_data_id',
        'condition',
    ];

    public function mainData()
    {
        return $this->belongsTo(MainData::class);
    }
}
