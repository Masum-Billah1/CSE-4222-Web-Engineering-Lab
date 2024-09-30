<?php

use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
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

// Route::get('/',[EmployeeController::class,'index'])->name('employee.index');
Route::get('/',[EmployeeController::class, 'index']) -> name('employee.index'); 
Route::get('/{id}/show',[EmployeeController::class,  'show'])->name('employee.show');
Route::get('/employee/create',[EmployeeController::class, 'create']) ->name('employee.create');
Route::post('/employee/j',[EmployeeController::class, 'store']) ->name('employee.store');
Route::delete('/books/{id}', [EmployeeController::class, 'destroy']) -> name('employee.distroy');