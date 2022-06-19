<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

/*------------------------------------------
--------------------------------------------
All general user Routes List
--------------------------------------------
--------------------------------------------*/

Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

/*------------------------------------------
--------------------------------------------
All manager Routes List
--------------------------------------------
--------------------------------------------*/

Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});


/*------------------------------------------
--------------------------------------------
All Students  from Routes List
--------------------------------------------
--------------------------------------------*/

route::get('/StudentDashboard',[StudentController::class, 'StudentDashboard'])->name('Dashboard');
route::get('/StudentPayment',[StudentController::class, 'StudentPayment'])->name('Payment');
route::get('/StudentPaymentProcess',[StudentController::class, 'StudentPaymentProcess'])->name('PaymentProcess');
route::get('/StudentRegistetion',[StudentController::class, 'StudentRegistetion'])->name('Registetion');
route::get('/StudentContact',[StudentController::class, 'StudentContact'])->name('Contact');

/*------------------------------------------
--------------------------------------------
All Students   store Routes List
--------------------------------------------
--------------------------------------------*/
route::get('/StudentDashboardStore',[StudentController::class, 'StudentDashboardStore']);
route::get('/StudentPaymentStore',[StudentController::class, 'StudentPaymentStore']);
route::get('/StudentPayment',[StudentController::class, 'StudentPaymentProcessStore']);
route::get('/StudentRegistetionStore',[StudentController::class, 'StudentRegistetionStore']);
route::get('/StudentContactStore',[StudentController::class, 'StudentContactStore']);