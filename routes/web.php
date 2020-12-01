<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeesController;
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
    return view('auth.register');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('/volunteer')->group(function () {
    Route::get('', [VolunteerController::class, 'create'])->name('volunter.create');

    Route::post('/store', [VolunteerController::class, 'store'])->name('volunter.store');

    Route::get('/index', [VolunteerController::class, 'index'])->name('volunter.index');

    Route::get('/{id}', [VolunteerController::class, 'show'])->name('volunter.show');

    Route::put('/{id}/update', [VolunteerController::class, 'update'])->name('volunter.update');

    Route::get('/{id}/edit', [VolunteerController::class, 'edit'])->name('volunter.edit');

    Route::get('/{id}/destroy', [VolunteerController::class, 'destroy'])->name('volunter.destroy');
});


Route::prefix('/department')->group(function () {
    Route::get('', [DepartmentController::class, 'create'])->name('department.create');

    Route::post('/store', [DepartmentController::class, 'store'])->name('department.store');

    Route::get('/index', [DepartmentController::class, 'index'])->name('department.index');

    Route::get('/{id}', [DepartmentController::class, 'show'])->name('department.show');

    Route::put('/{id}/update', [DepartmentController::class, 'update'])->name('department.update');

    Route::get('/{id}/edit', [DepartmentController::class, 'edit'])->name('department.edit');

    Route::get('/{id}/destroy', [DepartmentController::class, 'destroy'])->name('department.destroy');
});

Route::prefix('/employee')->group(function () {
    Route::get('', [EmployeesController::class, 'create'])->name('employee.create');

    Route::post('/store', [EmployeesController::class, 'store'])->name('employee.store');

    Route::get('/index', [EmployeesController::class, 'index'])->name('employee.index');

    Route::get('/{id}', [EmployeesController::class, 'show'])->name('employee.show');

    Route::put('/{id}/update', [EmployeesController::class, 'update'])->name('employee.update');

    Route::get('/{id}/edit', [EmployeesController::class, 'edit'])->name('employee.edit');

    Route::get('/{id}/destroy', [EmployeesController::class, 'destroy'])->name('employee.destroy');
});
