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
route::get('/StudentCourse',[StudentController::class, 'StudentCourse'])->name('Course');

/*------------------------------------------
--------------------------------------------
All Students   store Routes List
--------------------------------------------
--------------------------------------------*/
route::get('/StudentDashboardStore',[StudentController::class, 'StudentDashboardStore']);
route::get('/StudentPaymentStore',[StudentController::class, 'StudentPaymentStore']);
route::get('/StudentPaymentProcessStore',[StudentController::class, 'StudentPaymentProcessStore']);
route::get('/StudentRegistetionStore',[StudentController::class, 'StudentRegistetionStore']);
route::get('/StudentContactStore',[StudentController::class, 'StudentContactStore']);




/*------------------------------------------
--------------------------------------------
 Admin  Routes List
--------------------------------------------
--------------------------------------------*/
route::get('/AdminStudentDetails',[StudentController::class, 'AdminStudentShow'])->name('StudentShow');
route::get('/AdminDeptAdd',[StudentController::class, 'AdminDeptAdd'])->name('AdminDeptAdd');
route::get('/AdminDeptShow',[StudentController::class, 'AdminDeptShow'])->name('AdminDeptShow');
route::get('/AdminDeptManage',[StudentController::class, 'AdminDeptManage'])->name('AdminDeptManage');
route::get('/AdminDeptCourseAdd',[StudentController::class, 'AdminCourseAdd'])->name('AdminCourseAdd');
route::get('/AdminDeptCourseManage',[StudentController::class, 'AdminCoursetManage'])->name('AdminCourseManage');


/*------------------------------------------
--------------------------------------------
 Admin  store Routes List
--------------------------------------------
--------------------------------------------*/

route::get('/AdminStudentDetailsStore',[StudentController::class, 'AdminStudentShowStore'])->name('StudentShowStore');
route::get('/AdminDeptAddStore',[StudentController::class, 'AdminDeptAddStore'])->name('AdminDeptAddStore');
route::get('/AdminDeptShowStore',[StudentController::class, 'AdminDeptShowStore'])->name('AdminDeptShowStore');
route::get('/AdminDeptManageStore',[StudentController::class, 'AdminDeptManageStore'])->name('AdminDeptManageStore');
route::get('/AdminDeptCourseAddStore',[StudentController::class, 'AdminDeptManageStore'])->name('AdminDeptCourseAddStore');
route::get('/AdminDeptCourseManageStore',[StudentController::class, 'AdminDeptManageStore'])->name('AdminDeptCourseManageStore');

