<?php

use App\Http\Controllers\MappingDataController;
use App\Http\Controllers\MatchingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MappingDataController::class, 'index'])->name('mapping.index');
Route::get('mapping-data/create', [MappingDataController::class, 'create'])->name('mapping.create');
Route::post('mapping-data', [MappingDataController::class, 'store'])->name('mapping.store');


Route::get('matching', [MatchingController::class, 'matchSelect'])->name('matching.select-match');
Route::post('matching', [MatchingController::class, 'match'])->name('matching.match');
Route::get('matching-all', [MatchingController::class, 'matchALL'])->name('matching.match-all');
