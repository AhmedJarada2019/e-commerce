<?php

use App\Http\Controllers\LocaleController;
use App\Models\Category;
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

Route::get('/setLocale/{locale}', [LocaleController::class, 'setLocale'])->name('setLocale');

Route::get('/', function () {
    $data  = DB::table('website_setting_tb')->first();

    $categories = Category::with(['categories' => function ($query) {
        $query->where('visible', 1);
    }])
        ->where('visible', 1)
        ->orderBy('rank', 'asc')
        ->withCount('categories')
        ->get();
    return view('index', [
        'data' => $data,
        'categories' => $categories,
        'menu_categories' => $categories
    ]);
})->name('home')->middleware('LocaleMiddleware');
