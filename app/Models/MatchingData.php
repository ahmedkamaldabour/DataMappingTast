<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatchingData extends Model
{
    use HasFactory;

    protected $fillable = [
        'arabic_description',
        'english_description',
        'latin_description',
    ];



}
