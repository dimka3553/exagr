<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SearchController;
use \App\Http\Controllers\WelcomeController;
use \App\Http\Controllers\DashboardController;
use \App\Http\Controllers\AdminUpdateController;

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

Route::get('/', WelcomeController::class)->name('welcome');

Route::get('/search/{assetone_id}/{assetttwo_id}', SearchController::class)->name('search');

Route::get('/dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');


# Update type
Route::post('/update/type', [AdminUpdateController::class, 'update_type'])->middleware(['auth', 'verified']);

# Update asset
Route::post('/update/assetname', [AdminUpdateController::class, 'update_asset_name'])->middleware(['auth', 'verified']);
Route::post('/update/assetsymbol', [AdminUpdateController::class, 'update_asset_symbol'])->middleware(['auth', 'verified']);
Route::post('/update/assetlogo', [AdminUpdateController::class, 'update_asset_logo'])->middleware(['auth', 'verified']);

# Update exchange
Route::post('/update/exname', [AdminUpdateController::class, 'update_ex_name'])->middleware(['auth', 'verified']);
Route::post('/update/exlogo', [AdminUpdateController::class, 'update_ex_logo'])->middleware(['auth', 'verified']);
Route::post('/update/exprice', [AdminUpdateController::class, 'update_ex_price'])->middleware(['auth', 'verified']);

# Create
Route::post('/create/type', [AdminUpdateController::class, 'create_type'])->middleware(['auth', 'verified']);
Route::post('/create/asset', [AdminUpdateController::class, 'create_asset'])->middleware(['auth', 'verified']);
Route::post('/create/exchange', [AdminUpdateController::class, 'create_ex'])->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
