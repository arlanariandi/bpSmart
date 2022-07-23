<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Payment\ClassroomController;
use App\Http\Controllers\Dashboard\Payment\PaymentController;
use App\Http\Controllers\Dashboard\Payment\SppExpenditureController;
use App\Http\Controllers\Dashboard\Payment\SppIncomeController;
use App\Http\Controllers\Dashboard\Payment\StudentClassroomController;
use App\Http\Controllers\Dashboard\Payment\StudentController;
use App\Http\Controllers\Dashboard\Payment\StudentPaymentController;
use App\Http\Controllers\Dashboard\Payment\ThirdIncomeController;
use App\Http\Controllers\Dashboard\UserController;
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
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])
    ->name('dashboard.')
    ->prefix('dashboard')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('index');

        Route::middleware(['admin'])->group(function () {
            // user
            Route::resource('user', UserController::class);
            // classroom
            Route::resource('classroom', ClassroomController::class);
            // student
            Route::resource('student', StudentController::class);
            // payment
            Route::resource('payment', PaymentController::class);
            // student_classroom
            Route::resource('classroom.student-classroom', StudentClassroomController::class)->shallow();
            // student_payment
            Route::resource('student-classroom.student-payment', StudentPaymentController::class)->shallow();
            // spp income
            Route::resource('sppincome', SppIncomeController::class);
            // third income
            Route::resource('thirdincome', ThirdIncomeController::class);
            // spp expenditure
            Route::resource('sppexpenditure', SppExpenditureController::class);
        });
    });
