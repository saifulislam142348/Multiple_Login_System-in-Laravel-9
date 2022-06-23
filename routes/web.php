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

route::get('/Student/Dashboard',[StudentController::class, 'StudentDashboard'])->name('Dashboard');
route::get('/Student/Payment/',[StudentController::class, 'StudentPayment'])->name('Payment');
route::get('/Student/PaymentProcess',[StudentController::class, 'PaymentProcess'])->name('PaymentProcess');
route::get('/Student/Registetion',[StudentController::class, 'StudentRegistetion'])->name('Registetion');
route::get('/Student/Contact',[StudentController::class, 'StudentContact'])->name('Contact');
route::get('/Student/Course',[StudentController::class, 'StudentCourse'])->name('Course');

/*------------------------------------------
--------------------------------------------
All Students   store Routes List
--------------------------------------------
--------------------------------------------*/
route::post('/Student/DashboardStore',[StudentController::class, 'StudentDashboardStore']);
route::post('/Student/PaymentStore',[StudentController::class, 'PaymentStore'])->name('paymentstore');

route::post('/Student/Registetion/Store',[StudentController::class, 'RegistetionStore'])->name('registationstore');
route::post('/Student/ContactStore',[StudentController::class, 'StudentContactStore']);




/*------------------------------------------
--------------------------------------------
 Admin  Routes List view
--------------------------------------------
--------------------------------------------*/
route::get('/Admin/Student/Details',[StudentController::class, 'AdminStudentShow'])->name('StudentShow');
route::get('/Admin/Dept/Add',[StudentController::class, 'DepartmentAdd'])->name('AdminDeptAdd');
route::get('/Admin/Dept/Show',[StudentController::class, 'AdminDeptShow'])->name('AdminDeptShow');
route::get('/Department/View',[StudentController::class, 'DepartmentView'])->name('DepartmentView');
route::get('/Admin/DeptManage',[StudentController::class, 'AdminDeptManage'])->name('AdminDeptManage');
route::get('/Course/create',[StudentController::class, 'AdminCourseAdd'])->name('AdminCourseAdd');
route::get('/Admin/CourseManage',[StudentController::class, 'AdminCoursetManage'])->name('AdminCourseManage');
route::get('/Admin/CourseView',[StudentController::class, 'CourseView'])->name('CourseView');


/*------------------------------------------
--------------------------------------------
 Admin panel student delete Routes List
--------------------------------------------
--------------------------------------------*/
Route::delete('/Student/Registetion/{id}', [StudentController::class, 'destroy'])->name('delete');
/*------------------------------------------
--------------------------------------------
 Admin  store Routes List
--------------------------------------------
--------------------------------------------*/

route::post('/Admin/Student/DetailsStore',[StudentController::class, 'AdminStudentShowStore'])->name('StudentShowStore');
route::post('/Admin/Dept/AddStore',[StudentController::class, 'AdminDeptAddStore'])->name('AdminDeptAddStore');
route::post('/Admin/DeptStore',[StudentController::class, 'AdminDeptShowStore'])->name('AdminDeptShowStore');
route::post('/Admin/Dept/ManageStore',[StudentController::class, 'AdminDeptManageStore'])->name('departmentManage');
route::post('/Admin/CourseStore',[StudentController::class, 'CourseStore'])->name('CourseStore');
route::post('/Admin/CourseManageStore',[StudentController::class, 'AdminDeptManageStore'])->name('AdminDeptCourseManageStore');

/*------------------------------------------
--------------------------------------------
  student all couse Routes List
--------------------------------------------
--------------------------------------------*/
route::get('/student/all/course/view/{id}',[StudentController::class, 'StudentCourseview']);
