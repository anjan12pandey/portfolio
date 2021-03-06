<?php

use App\Http\Controllers\CategoryPostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use TCG\Voyager\Facades\Voyager;

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


Route::get('/', function () {
    return Inertia::render('Home', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

Route::get('/blogs', [PostController::class, 'index'])->name('blogs.index');
Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');

Route::get('/categories/{category:slug}', [CategoryPostController::class, 'index'])->name('categories.posts.index');

Route::get('/contact', function () {
    return Inertia::render('Contact');
})->name('contact');

Route::post('contacts', [ContactController::class, 'store'])->name('contacts.store');

Route::get('/about', function () {
    return Inertia::render('About');
})->name('about');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
