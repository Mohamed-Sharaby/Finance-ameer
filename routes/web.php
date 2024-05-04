<?php

use App\Http\Controllers\Admin\OrderController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('site.index');
})->name('site.index');


Route::get('/company', function () {
    return view('site.company');
})->name('site.company');

Route::get('/strategies', function () {
    return view('site.strategies');
})->name('site.strategies');

Route::get('/form', function () {
    return view('site.form');
})->name('site.form');

Route::get('/blog', function () {
    return view('site.blog');
})->name('site.blog');

Route::get('/contact-us', function () {
    return view('site.contact-us');
})->name('site.contact-us');


Route::post('/save', function (Request $request) {

    $request->validate([
        's_first_name' => ['string', 'max:255'],
        's_last_name' => ['string', 'max:255'],
        's_zip' => ['string', 'max:255'],
        's_address' => ['string', 'max:255'],
        's_city' => ['string', 'max:255'],
        's_state' => ['string', 'max:255'],
        's_dob' => ['string', 'max:255'],
        's_email' => ['string', 'max:255'],
        's_phone' => ['string', 'max:255'],
        's_passport' => ['image', 'sometimes', 'mimes:jpg,jpeg,png,bmp,svg,gif'],
        's_eid' => ['image', 'sometimes', 'mimes:jpg,jpeg,png,bmp,svg,gif'],
        's_salary' => ['image', 'sometimes', 'mimes:jpg,jpeg,png,bmp,svg,gif'],
        's_type' => ['string', 'max:255'],

        'r_first_name' => ['string', 'max:255'],
        'r_last_name' => ['string', 'max:255'],
        'r_zip' => ['string', 'max:255'],
        'r_address' => ['string', 'max:255'],
        'r_city' => ['string', 'max:255'],
        'r_state' => ['string', 'max:255'],
        'r_dob' => ['string', 'max:255'],
        'r_email' => ['string', 'max:255'],
        'r_phone' => ['string', 'max:255'],
        'r_passport' => ['image', 'sometimes', 'mimes:jpg,jpeg,png,bmp,svg,gif'],
        'r_eid' => ['image', 'sometimes', 'mimes:jpg,jpeg,png,bmp,svg,gif'],
        'r_salary' => ['image', 'sometimes', 'mimes:jpg,jpeg,png,bmp,svg,gif'],
        'r_type' => ['string', 'max:255'],
    ]);
    \App\Models\Order::create($request->all());

    return back()->with('success', __('Saved Successfully'));

})->name('save');

Route::get('orders/export/', [OrderController::class, 'export'])->name('export');




