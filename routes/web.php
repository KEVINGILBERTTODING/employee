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
Route::prefix('/user')->group(function () {
    Route::post('/login', [AuthController::class, 'login'])->name('user.login');
});
