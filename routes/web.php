<?php

use App\Http\Controllers\admin\AdminBarangController;
use App\Http\Controllers\admin\AdminMainController;
use App\Http\Controllers\admin\AdminNotification;
use App\Http\Controllers\admin\AdminTransactions;
use App\Http\Controllers\admin\BidangController;
use App\Http\Controllers\admin\SupplierController;
use App\Http\Controllers\admin_daskrimti\auth\AdminDaskrimtiAuthController;
use App\Http\Controllers\admin_umum\auth\AdminUmumAuthController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\user\auth\UserAuthController;
use App\Http\Controllers\user\CartController;
use App\Http\Controllers\user\NotificationController;
use App\Http\Controllers\user\PermohonanController;
use App\Http\Controllers\user\UserMainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Row;

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

Route::get('/', [UserController::class, 'index'])->name('/')->middleware('authAdminMiddleware');
Route::post('/login', [AuthController::class, 'login'])->name('user.login');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard')->middleware('AdminAuthMiddleware');
Route::get('/companies', [CompaniesController::class, 'index'])->name('companies')->middleware('AdminAuthMiddleware');
Route::get('/companies/all', [CompaniesController::class, 'getCompanies'])->name('companies.all')->middleware('AdminAuthMiddleware');
Route::post('/companies/store', [CompaniesController::class, 'store'])->name('companies.store')->middleware('AdminAuthMiddleware');
Route::post('/companies/update', [CompaniesController::class, 'update'])->name('companies.update')->middleware('AdminAuthMiddleware');
Route::get('/companies/{id}', [CompaniesController::class, 'getCompaniesById'])->name('companies.getId')->middleware('AdminAuthMiddleware');
Route::get('/companies/destroy/{id}', [CompaniesController::class, 'destroy'])->name('companies.destroy')->middleware('AdminAuthMiddleware');


Route::get('/employee', [EmployeeController::class, 'index'])->name('employee')->middleware('AdminAuthMiddleware');
Route::get('/employee/all', [EmployeeController::class, 'getEmployee'])->name('employee.all')->middleware('AdminAuthMiddleware');
Route::post('/employee/store', [EmployeeController::class, 'store'])->name('employee.store')->middleware('AdminAuthMiddleware');
Route::post('/employee/update', [EmployeeController::class, 'update'])->name('employee.update')->middleware('AdminAuthMiddleware');
Route::get('/employee/{id}', [EmployeeController::class, 'getEmployeeById'])->name('employee.getId')->middleware('AdminAuthMiddleware');
Route::get('/employee/destroy/{id}', [EmployeeController::class, 'destroy'])->name('employee.destroy')->middleware('AdminAuthMiddleware');
