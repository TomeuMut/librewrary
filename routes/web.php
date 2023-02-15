<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HopController;
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
    return view('backend.list_recipes');
})->middleware(['auth', 'verified'])->name('list_recipes');


Route::get('/dashboard/recipes/create', function () {
    return view('backend.recipes');
})->middleware(['auth', 'verified'])->name('recipes');


Route::get('/dashboard/grain/create', function () {
    return view('backend.grain');
})->middleware(['auth', 'verified'])->name('grain');

Route::get('/dashboard/grain', function () {
    return view('backend.list_grain');
})->middleware(['auth', 'verified'])->name('list_grain');


// CRUD de los Lupulo
Route::get('/dashboard/hop', [HopController::class, 'index'], function () {
    return view('backend.list_hop');
})->middleware(['auth', 'verified'])->name('list_hop');

Route::get('/dashboard/hop/create', function () {
    return view('backend.hop');
})->middleware(['auth', 'verified'])->name('hop');

Route::post('/dashboard/hop', [HopController::class, 'store'])->name('hop.store');

Route::get('/dashboard/hop/{id}', [HopController::class, 'edit'])->name('hop.edit');

Route::post('/dashboard/hop/{id}', [HopController::class, 'update'])->name('hop.update');

Route::get('/dashboard/hop/{id}/delete', [HopController::class, 'destroy'])->name('hop.destroy');


Route::get('/dashboard/yeast', function () {
    return view('backend.list_yeast');
})->middleware(['auth', 'verified'])->name('list_yeast');

Route::get('/dashboard/yeast/create', function () {
    return view('backend.yeast');
})->middleware(['auth', 'verified'])->name('yeast');


Route::get('/dashboard/fermentable', function () {
    return view('backend.list_fermentable');
})->middleware(['auth', 'verified'])->name('list_fermentable');

Route::get('/dashboard/yeast', function () {
    return view('backend.list_yeast');
})->middleware(['auth', 'verified'])->name('list_yeast');

Route::get('/dashboard/fermentable/create', function () {
    return view('backend.fermentable');
})->middleware(['auth', 'verified'])->name('fermentable');

Route::get('/dashboard/other_ingredients/create', function () {
    return view('backend.other_ingredients');
})->middleware(['auth', 'verified'])->name('other_ingredients');

Route::get('/dashboard/other_ingredients', function () {
    return view('backend.list_other_ingredients');
})->middleware(['auth', 'verified'])->name('list_other_ingredients');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
