<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/recetas', function () {
    return view('recipes');
});
Route::get('/resenas', function () {
    return view('reviews');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/recipes', function () {
    return view('backend.recipes');
})->middleware(['auth', 'verified'])->name('recipes');


Route::get('/dashboard/hop', function () {
    return view('backend.hop');
})->middleware(['auth', 'verified'])->name('hop');


Route::get('/dashboard/grain', function () {
    return view('backend.grain');
})->middleware(['auth', 'verified'])->name('grain');


Route::get('/dashboard/yeast', function () {
    return view('backend.yeast');
})->middleware(['auth', 'verified'])->name('yeast');


Route::get('/dashboard/fermentable', function () {
    return view('backend.fermentable');
})->middleware(['auth', 'verified'])->name('fermentable');

Route::get('/dashboard/other_ingredients', function () {
    return view('backend.other_ingredients');
})->middleware(['auth', 'verified'])->name('other_ingredients');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
