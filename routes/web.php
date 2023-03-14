<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ThumbnailController;
use App\Http\Controllers\UserController;
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

Route::get('/role', [RoleController::class, 'show']);
Route::get('/city', [CityController::class, 'show']);
Route::get('/country', [CountryController::class, 'show']);
Route::get('/country/all', [CountryController::class, 'all']);
Route::get('/thumbnail/all', [ThumbnailController::class, 'all']);
Route::get('/profile/all', [ProfileController::class, 'all']);
Route::get('/post', [PostController::class, 'show']);
Route::get('/post/all', [PostController::class, 'all']);
Route::get('/user/all', [UserController::class, 'all']);
Route::get('/user', [UserController::class, 'show']);
Route::get('/user/{surname}/{name}', [UserController::class, 'showAll']);

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
