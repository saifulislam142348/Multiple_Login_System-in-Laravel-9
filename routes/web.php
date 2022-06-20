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
 Admin  Routes List view
--------------------------------------------
--------------------------------------------*/
route::get('/Admin/Student/Details',[StudentController::class, 'AdminStudentShow'])->name('StudentShow');
route::get('/Admin/Dept/Add',[StudentController::class, 'AdminDeptAdd'])->name('AdminDeptAdd');
route::get('/Admin/Dept/Show',[StudentController::class, 'AdminDeptShow'])->name('AdminDeptShow');
route::get('/Department/View',[StudentController::class, 'DepartmentView'])->name('DepartmentView');
route::get('/Admin/DeptManage',[StudentController::class, 'AdminDeptManage'])->name('AdminDeptManage');
route::get('/Course/create',[StudentController::class, 'AdminCourseAdd'])->name('AdminCourseAdd');
route::get('/Admin/CourseManage',[StudentController::class, 'AdminCoursetManage'])->name('AdminCourseManage');
route::get('/Admin/CourseView',[StudentController::class, 'CourseView'])->name('CourseView');


/*------------------------------------------
--------------------------------------------
 Admin  store Routes List
--------------------------------------------
--------------------------------------------*/

route::post('/Admin/Student/Details/Store',[StudentController::class, 'AdminStudentShowStore'])->name('StudentShowStore');
route::post('/Admin/Dept/Add/Store',[StudentController::class, 'AdminDeptAddStore'])->name('AdminDeptAddStore');
route::post('/Admin/Dept/Store',[StudentController::class, 'AdminDeptShowStore'])->name('AdminDeptShowStore');
route::post('/Admin/Dept/Manage/Store',[StudentController::class, 'AdminDeptManageStore'])->name('departmentManage');
route::post('/Admin/Course/Store',[StudentController::class, 'CourseStore'])->name('CourseStore');
route::post('/Admin/CourseManage/Store',[StudentController::class, 'AdminDeptManageStore'])->name('AdminDeptCourseManageStore');

