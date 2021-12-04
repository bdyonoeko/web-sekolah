<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SchoolClassController;
use App\Http\Controllers\Admin\SchoolProfileController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/sekolah', [HomeController::class, 'profil_sekolah'])
  ->name('sekolah');
  
Route::get('/kelas', [HomeController::class, 'kelas'])
->name('kelas');

Route::get('/kelas/{id}', [HomeController::class, 'detail_kelas'])
->name('detail-kelas');
  
Route::prefix('admin')
->middleware(['auth', 'admin'])
->group(function(){
  Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard');
  Route::get('/dashboard/daftar_siswa', [DashboardController::class, 'daftar_siswa'])
    ->name('daftar-siswa');
  Route::resource('/profil-sekolah', SchoolProfileController::class);
  Route::resource('/kelas', SchoolClassController::class);
});

Route::resource('user', UserController::class)->middleware(['auth', 'verified']);
Route::resource('answer', AnswerController::class)->middleware(['auth', 'verified']);

Auth::routes(['verify' => true]);
