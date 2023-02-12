<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\isAdminMiddleware;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\TestController;
use App\Models\PersonalTest;
use App\Http\Controllers\PersonalTestController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\emp\EmpFinanceController;
use App\Http\Controllers\emp\EmpTransactionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\CalenderController;
Auth::routes();
Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard')->middleware(['auth', 'verified']);
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

require __DIR__ . '/auth.php';
Route::get('/empfinance', [EmpFinanceController::class, 'index'])->name('emp.finance');
Route::get('/emptransaction', [EmpTransactionController::class, 'index'])->name('emp.transaction');
Route::get('/report', [ReportController::class, 'index'])->name('report');

Route::group(['isAdminMiddleware' => ['is_admin']], function () {
    Route::get('/admin', function () {


        return view('admin');
    })->name('admin');

    ////// customers routes
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/store', [HomeController::class, 'store'])->name('store');
    Route::get('/employee', [EmployeeController::class, 'index'])->name('admin.employee');
    Route::get('/checkid', [HomeController::class, 'checkIdAction'])->name('admin.checkidAction');
    Route::get('/customer', [CustomerController::class, 'index'])->name('admin.customer');
    Route::get('/customer/create', [CustomerController::class, 'create'])->name('admin.customer.create');
    Route::post('/customer/store', [CustomerController::class, 'store'])->name('admin.customer.store');
    Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('admin.customer.edit');
    Route::get('/customer/show/{id}', [CustomerController::class, 'show'])->name('admin.customer.profile');
    Route::get('/customer/checkid', [CustomerController::class, 'checkId'])->name('admin.customer.checkId');

    Route::get('/customer/checkidAction', [CustomerController::class, 'checkidAction'])->name('admin.customer.checkidAction');
    Route::put('/customer/update/{id}', [CustomerController::class, 'update'])->name('admin.customer.update');
    Route::get('/customer/delete/{id}', [CustomerController::class, 'destroy'])->name('admin.customer.delete');
    //////
    //// appointment routes
    Route::get('/appointment', [AppointmentController::class, 'index'])->name('admin.appointment');
    Route::get('/appointment/create', [AppointmentController::class, 'create'])->name('admin.appointment.create');
    Route::post('/appointment/store', [AppointmentController::class, 'store'])->name('admin.appointment.store');
    Route::get('/appointment/edit/{id}', [AppointmentController::class, 'edit'])->name('admin.appointment.edit');

    Route::put('/appointment/update/{id}', [AppointmentController::class, 'update'])->name('admin.appointment.update');
    Route::get('/appointment/delete/{id}', [AppointmentController::class, 'destroy'])->name('admin.appointment.delete');
    //// test routes
    Route::get('/test', [TestController::class, 'index'])->name('admin.test');
    Route::get('/test/create', [TestController::class, 'create'])->name('admin.test.create');
    Route::post('/test/store', [TestController::class, 'store'])->name('admin.test.store');
    Route::get('/test/edit/{id}', [TestController::class, 'edit'])->name('admin.test.edit');
    Route::put('/test/update/{id}', [TestController::class, 'update'])->name('admin.test.update');
    Route::get('/test/delete/{id}', [TestController::class, 'destroy'])->name('admin.test.delete');
    ////personal test routes
    Route::get('/ptest', [PersonalTestController::class, 'index'])->name('admin.ptest');
    Route::get('/ptest/create', [PersonalTestController::class, 'create'])->name('admin.ptest.create');
    Route::post('/ptest/store', [PersonalTestController::class, 'store'])->name('admin.ptest.store');
    Route::get('/ptest/edit/{id}', [PersonalTestController::class, 'edit'])->name('admin.ptest.edit');
    Route::put('/ptest/update/{id}', [PersonalTestController::class, 'update'])->name('admin.ptest.update');
    Route::get('/ptest/delete/{id}', [PersonalTestController::class, 'destroy'])->name('admin.ptest.delete');
    // finance routes
    Route::get('/finance', [FinanceController::class, 'index'])->name('admin.finance');
    Route::get('/finance/create', [FinanceController::class, 'create'])->name('admin.finance.create')->middleware('password.confirm');
    Route::post('/finance/store', [FinanceController::class, 'store'])->name('admin.finance.store');
    Route::get('/finance/edit/{id}', [FinanceController::class, 'edit'])->name('admin.finance.edit')->middleware('password.confirm');;
    Route::put('/finance/update/{id}', [FinanceController::class, 'update'])->name('admin.finance.update');
    Route::get('/finance/delete/{id}', [FinanceController::class, 'destroy'])->name('admin.finance.delete');
    // transaction routes
    ///
    Route::post('register', [RegisteredUserController::class, 'store'])->name('register.store');
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('registertraion')->middleware('password.confirm');
    ///


    Route::get('/transaction', [TransactionController::class, 'index'])->name('admin.transaction');
    Route::get('/transaction/create', [TransactionController::class, 'create'])->name('admin.transaction.create')->middleware('password.confirm');;
    Route::post('/transaction/store', [TransactionController::class, 'store'])->name('admin.transaction.store');
    Route::get('/transaction/edit/{transaction}', [TransactionController::class, 'edit'])->name('admin.transaction.edit')->middleware('password.confirm');;
    Route::put('/transaction/update/{transaction}', [TransactionController::class, 'update'])->name('admin.transaction.update');
    Route::get('/transaction/delete/{id}', [TransactionController::class, 'destroy'])->name('admin.transaction.delete');
});

/// emp controller
