<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product_discount', function () {
    return view('productForm');
});

Route::post('/product_discount', function (Request $request) {
    $description = $request->description;
    $price = $request->price;
    $discountPercent = $request->discountPercent;

    if ($request->description == $description && $request->price == $price && $request->discountPercent == $discountPercent) {
        return view('discount_calculation', compact('description','price','discountPercent'));
    } else {
        return 'ban nhap chua dung thong tin';
    }

});

