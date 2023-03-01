<?php

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
    return view('welcome');
});

Route::get('/user/profile', function () {
    return 'profile';
})->name('user.profile');

// group
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return 'all';
    });
    Route::get('/user/{id}', function ($id) {
        return $id;
    });
});

Route::get('/city/{city?}', function ($city = 'Kyiv') {
    return 'City ' . $city;
})->whereAlpha('city');

Route::get('/user/{id}', function ($id) {
    return 'User ' . $id;
});

Route::get('/post/{slug}', function ($slug) {
    return 'Post with slug ' . $slug;
});

Route::get('/posts/{date}', function ($date) {
    return 'Date ' . $date;
})->where('date', '^\d{2}-\d{2}-\d{4}$');

Route::get('/{year}/{month}/{day}/', function ($year, $month, $day) {
    return $year . '-' . $month . '-' . $day;
})->where('year', '\d{2}')
    ->where('month', '\d{2}')
    ->where('day', '\d{4}');

Route::get('/users/{order}', function ($order) {
    return 'User ' . $order;
})->whereIn('order', ['name', 'surname', 'age']);
