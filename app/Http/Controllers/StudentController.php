<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Student;
use App\Models\Payment;
use App\Models\Course;

class StudentController extends Controller
{

    
/*------------------------------------------
--------------------------------------------
  Routes List
--------------------------------------------
--------------------------------------------*/
    public function StudentDashboard(){
      
        return view('stdDashboard');


        
    }

    public function StudentRegistetion(){
          return view('studentRegistetion');


    }
    public function StudentPayment(){
      
        return view('studentPayment');


        
    }
    public function StudentContact(){
      
         return view('studentContact');


        
                                   }
    public function StudentCourse ()
                                   {
          return view('studentCourse');
   }
     public function StudentPaymentProcess(){
      
        return view('studentPaymentProcess');

return view('');
        
}


public function AdminStudentShow(){

return view('AdminViewStudent');

}



public function AdminDeptAdd(){

    return view('DeptAdd');
    
}

public function AdminDeptShow(){

return view('AdminDeptView');
    
}
public function AdminDeptManage(){

return view('DeptManage');
    
}
public function AdminCourseAdd(){

    $department= Department::all();

    return view('CourseAdd',compact('department'));
    
}
public function AdminCoursetManage(){

return view('Coursemanage');
    
}


/*------------------------------------------
--------------------------------------------
 Admin  store Routes List
--------------------------------------------
--------------------------------------------*/
public function AdminDeptAddStore(Request $request){

$Department= new Department();
$Department->name=$request->input('name');
$Department->save();
return redirect()->back()->with('status','Department Add successfully');

    
}
public function CourseStore(Request $request){
$course= new course();
$course->name=$request->input('name');
$course->department_id=$request->input('department_id');


$course->save();
return redirect()->back()->with('status','Course  Add successfully');

    
}


/*------------------------------------------
--------------------------------------------
 Department view  
--------------------------------------------
--------------------------------------------*/

public function DepartmentView(){
    $department= Department::all();
    return view('DepartmentView',compact('department'));

  }
/*------------------------------------------
--------------------------------------------
 Department view  
--------------------------------------------
--------------------------------------------*/

public function CourseView(){

 $course=course::all();
 return view('CourseView',compact('course'));

  }
}
