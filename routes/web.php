<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SchoolProfileController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])
  ->name('home');

// Route::get('/profil-sekolah', [HomeController::class, 'show'])
//   ->name('profil');
  
Route::get('/kelas', [HomeController::class, 'index'])
->name('kelas');
  
Route::prefix('admin')
// ->middleware(['auth', 'admin'])
->group(function(){
  Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard');
  Route::resource('/profil-sekolah', SchoolProfileController::class);
});
