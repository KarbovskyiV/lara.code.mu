<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ThumbnailController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
Route::match(['get', 'post'], '/form', [PostController::class, 'form']);
Route::get('/result', [PostController::class, 'result']);
Route::get('/test/method', [PostController::class, 'test']);
Route::get('/post/all', [PostController::class, 'all']);

Route::get('/user/all', [UserController::class, 'all']);
Route::get('/user/form', [UserController::class, 'form']);
Route::post('/user/submit', [UserController::class, 'submit']);
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/user/{user}', [UserController::class, 'edit'])->name('users.edit');
Route::get('/user', [UserController::class, 'show']);
Route::get('/users', [UserController::class, 'showAll']);

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
