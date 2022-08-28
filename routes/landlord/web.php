<?php

use App\Http\Controllers\AdvanceController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\IncrementController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\OperatingController;
use App\Http\Controllers\OperatingPartialController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\PartialController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentDateController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\PresuntivePaymentController;
use App\Http\Controllers\RemissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TenantController;
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

Route::domain('liquidar.test')->group(function () {
    Route::get('/', function () {
        return view('auth/login');
    });
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('landlord.tenant.index');
})->name('dashboard');

Route::resource('user', UserController::class);

Route::resource('tenant', TenantController::class);



