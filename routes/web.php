<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('welcome');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/**
 * Routes for companies, middleware is in controllers
 */
Route::group([
    'prefix' => 'companies',
    'controller' => CompanyController::class
], function($router) {
    Route::get('/', 'index')->name('companies');
    Route::get('/create', 'create')->name('company.create');
    Route::get('/{companyId}', 'show')->name('company');
    Route::get('/{companyId}/edit', 'edit')->name('company.edit');

    Route::post('/create', 'store')->name('company.store');
    Route::post('/{companyId}/edit', 'update')->name('company.update');
    Route::delete('/{companyId}', 'destroy')->name('company.destroy');
});

/**
 * Routes for employees, middleware is in controllers
 */
Route::group([
  'prefix' => 'employees',
  'controller' => EmployeeController::class
], function($router) {
  Route::get('/', 'index')->name('employees');
  Route::get('/create/{companyId}', 'create')->name('employee.create');
  Route::get('/{employeeId}', 'show')->name('employee');
  Route::get('/{employeeId}/edit', 'edit')->name('employee.edit');
  
  Route::post('/create', 'store')->name('employee.store');
  Route::post('/{employeeId}/edit', 'update')->name('employee.update');
  Route::delete('/{employeeId}', 'destroy')->name('employee.destroy');
});

require __DIR__.'/auth.php';
