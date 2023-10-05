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
    $products = DB::table('products_tb')
        ->join('product_categories_tb', 'products_tb.id', '=', 'product_categories_tb.product_id')
        ->join('categories', 'product_categories_tb.category_id', '=', 'categories.id')
        ->where('products_tb.is_show', 33)
        ->where('products_tb.is_service', '!=', 33)
        ->where('products_tb.sellable', 33)
        ->where('products_tb.visible', 1)
        ->select('products_tb.*', 'product_categories_tb.category_id as product_category_id')
        ->get();
    $pricing_master = DB::table('price_list_master_tb')->where('is_default', 33)->first();
    foreach ($products as $product) {
        $productPrices = DB::table('price_list_details_tb')
            ->where('master_id', $pricing_master->id)
            ->where('product_id', $product->id)
            ->first();

        if ($productPrices && $product->tax_percent > 0) {
            $product->total_price = number_format((float)($productPrices->price * $product->tax_percent  / 100), 2, '.', '');
            $product->total_discount = number_format((float)($productPrices->discount * $product->tax_percent / 100), 2, '.', '');
            $product->product_after_discount = $product->total_price - $product->total_discount;
        } else {
            $product->total_price = number_format((float)$productPrices->price, 2, '.', '');
            $product->total_discount = number_format((float)$productPrices->discount, 2, '.', '');
            $product->product_after_discount = $product->total_price;
        }
    }
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
        'products' => $products
    ]);
})->name('home')->middleware('LocaleMiddleware');
