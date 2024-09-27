<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/profiles/edit', [ProfileController::class, 'edit'])->name('profiles.edit');
Route::get('/user/dashboard', [DashboardController::class, 'user'])->middleware(['auth', 'verified', UserMiddleware::class])->name('homeUser');
Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->middleware(['auth', 'verified', AdminMiddleware::class])->name('home');

Route::Resource('profiles', ProfileController::class);
Route::Resource('products', ProductController::class);
Route::Resource('galleries', GalleryController::class);

// Rute untuk produk
Route::resource('jasa', ProductController::class);
Route::get('/about', [AboutController::class, 'indexAbout'])->name('about');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::get('/visimisi', [VisiMisiController::class, 'index'])->name('visimisi');
Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries');
Route::get('/klien', [KlienController::class, 'index'])->name('klien');
Route::get('/event', [EventController::class, 'index'])->name('event');
Route::get('/artikel', [ArticleController::class, 'index'])->name('artikel');
Route::get('/profile', [ProfilesController::class, 'index'])->name('profiles');
Route::get('/product', [ProductController::class, 'index'])->name('products');
// Rute lainnya bisa diletakkan di sini

//Route::get('/profile', [ProfileController::class, 'index'])->name('profiles.edit');



require __DIR__.'/auth.php';
