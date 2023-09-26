<?php

use App\Http\Controllers\LocaleController;
use Illuminate\Support\Facades\DB;
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
Route::get('/setLocale/{locale}', [LocaleController::class,'setLocale'])->name('setLocale');

Route::get('/', function () {
    $data  = DB::table('website_setting_tb')->first();
    $categories= DB::table('categories_tb')->get();
    return view('index', [
        'data' => $data,
        'categories'=>$categories
    ]);
})->name('home')->middleware('LocaleMiddleware');
