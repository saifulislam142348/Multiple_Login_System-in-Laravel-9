<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Student;
use App\Models\Payment;
use App\Models\Course;
use Auth;

class StudentController extends Controller
{

    
/*------------------------------------------
--------------------------------------------
  Routes List
--------------------------------------------
--------------------------------------------*/
    public function StudentDashboard(){

      $department= Department::all();
      return view('stdDashboard' ,compact('department'));

      
     


        
    }
/*------------------------------------------
--------------------------------------------
 student registetion Routes List
--------------------------------------------
--------------------------------------------*/
    public function StudentRegistetion(){

      $department= Department::all();
          return view('studentRegistetion' ,compact('department'));


    }
    /*------------------------------------------
--------------------------------------------
 student Payment Routes List
--------------------------------------------
--------------------------------------------*/
  
    public function StudentPayment(){


      $student= Student::all();

      return view('studentPayment',compact('student'));
      
        


        
    }
    /*------------------------------------------
--------------------------------------------
 student contact Routes List
--------------------------------------------
--------------------------------------------*/
    public function StudentContact(){
      
         return view('studentContact');


        
                                   }
    public function StudentCourse ()
                                   {
          return view('studentCourse');
   }
     public function PaymentProcess(){
     
    $student= Student::all();

    return view('studentPaymentProcess',compact('student'));

     
  
    
return view('');
        
}
/*------------------------------------------
--------------------------------------------
  Admin student registetion show Routes List
--------------------------------------------
--------------------------------------------*/

public function AdminStudentShow(){

return view('AdminViewStudent');

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
 Department course view  
--------------------------------------------
--------------------------------------------*/

public function CourseView(){

 $course=course::all();
 return view('CourseView',compact('course'));

  }

  /*------------------------------------------
--------------------------------------------
 student dept. course store
--------------------------------------------
--------------------------------------------*/
  public function RegistetionStore(Request $request){
    $student= new student();
    $student->user_id=Auth::user()->id;
    $student->department_id=$request->input('department_id');
    $student->course_id=$request->input('course_id');
    
    
    $student->save();
    return redirect()->back()->with('status','Course  Add successfully');
    
        
    }

      /*------------------------------------------
--------------------------------------------
 student  payment store
--------------------------------------------
--------------------------------------------*/
  public function PaymentStore(Request $request){
    $payment= new payment();
 
 
    $payment->student_id=$request->input('student_id');
    $payment->amount=$request->input('amount');
    
    
    $payment->save();
    return redirect()->back()->with('status','payment successfully');
    
        
    }


    
  
}

