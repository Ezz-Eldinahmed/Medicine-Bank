<?php

use App\Http\Controllers\VolunteerController;
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
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/volunteer', [VolunteerController::class, 'create'])->name('volunter.create');

Route::post('/volunteer/store', [VolunteerController::class, 'store'])->name('volunter.store');

Route::get('/volunteer/index', [VolunteerController::class, 'index'])->name('volunter.index');

Route::get('/volunteer/{id}', [VolunteerController::class, 'show'])->name('volunter.show');

Route::put('/volunteer/{id}/update', [VolunteerController::class, 'update'])->name('volunter.update');

Route::get('/volunteer/{id}/edit', [VolunteerController::class, 'edit'])->name('volunter.edit');

Route::get('/volunteer/{id}/destroy', [VolunteerController::class, 'destroy'])->name('volunter.destroy');
