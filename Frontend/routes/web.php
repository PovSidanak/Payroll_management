<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[EmployeeController::class, 'homepage']);

Route::get('/History_payroll',[UserController::class, 'History_payroll']);
Route::get('/Payroll',[UserController::class, 'payroll']);

Route::get('/Employee',[UserController::class, 'Employee']);
Route::get('/PaymentHomepage',[UserController::class, 'PaymentHomepage']);
Route::get('/History_payroll',[UserController::class, 'History_payroll']);
Route::get('/LecturerPayment',[UserController::class, 'LecturerPayment']);



Route::post('/create_employee',[EmployeeController::class, 'create_employee']);
Route::post('/create_payroll',[EmployeeController::class, 'create_payroll']);

Route::post('/create_employeepayroll',[EmployeeController::class, 'create_employeepayroll']);


