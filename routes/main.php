<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ThumbnailController;
use App\Http\Controllers\User\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home.index')->name('home');

//Route::get('/test', TestController::class)->name('test')->middleware('token:secret');
Route::get('/test', TestController::class)->name('test');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');

Route::resource('posts/{post}/comments', CommentController::class)->only([
    'index',
    'show',
]);

Route::redirect('/home', '/')->name('home.redirect');

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

Route::get('/post', [PostController::class, 'show2']);
Route::match(['get', 'post'], '/form', [PostController::class, 'form']);
Route::get('/result', [PostController::class, 'result']);
Route::get('/test/method', [PostController::class, 'test']);
Route::get('/post/all', [PostController::class, 'all']);

Route::get('/user/all', [UserController::class, 'all']);
Route::get('/user/form', [UserController::class, 'form']);
Route::post('/user/submit', [UserController::class, 'submit']);
Route::put('/user/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/user', [UserController::class, 'show']);
Route::get('/users', [UserController::class, 'showAll']);

Route::get('/{year}/{month}/{day}/', function ($year, $month, $day) {
    return $year . '-' . $month . '-' . $day;
})->where('year', '\d{2}')
    ->where('month', '\d{2}')
    ->where('day', '\d{4}');

Route::get('/users/{order}', function ($order) {
    return 'User ' . $order;
})->whereIn('order', ['name', 'surname', 'age']);
