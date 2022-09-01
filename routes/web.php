<?php

use App\Http\Controllers\CausesController;
use App\Http\Controllers\ProjectController;
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
    return view('dashboard');
})->name('home');

Route::get('/causes', [CausesController::class, 'index'])->name('causes');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/causes/{cause}', [CausesController::class, 'show'])->name('causes.show');

Route::get('/gallery', function(){
    return view('pages.gallery');
})->name('gallery');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
