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
      $student= Student::all();
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


      $payment= payment::all();
      $student= student::all();
      $user= auth::user();
     
 
     

      return view('studentPayment',compact('payment','student','user'));
      
      
      
        


        
    }
    /*------------------------------------------
--------------------------------------------
 student contact Routes List
--------------------------------------------
--------------------------------------------*/
    public function StudentContact(){
      
         return view('studentContact');


        
  }
   /*------------------------------------------
--------------------------------------------
 student course Routes List
--------------------------------------------
--------------------------------------------*/
    public function StudentCourse ()
                                   {
          return view('studentCourse');
   }
   /*------------------------------------------
--------------------------------------------
 Department page  Routes List
--------------------------------------------
--------------------------------------------*/
    public function DepartmentAdd()
                                   {
          return view('DeptAdd');
   }

     public function PaymentProcess(){
     
    $student= Student::all();

    return view('studentPaymentProcess',compact('student'));

     
  
    

        
}
/*------------------------------------------
--------------------------------------------
  Admin student registetion show Routes List
--------------------------------------------
--------------------------------------------*/

public function AdminStudentShow(){

  $student=student::all();
 
 
  $payment=payment::all();

 return view('AdminViewStudent',compact('student','payment'));



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
$rules=[
  'name'=>'required',
  
];
$this->validate($request,$rules);
$Department->save();
return redirect()->back()->with('status','Department Add successfully');

    
}
public function CourseStore(Request $request){
$course= new course();
$course->name=$request->input('name');
$course->department_id=$request->input('department_id');

$rules=[
  'name'=>'required',
  
];
$this->validate($request,$rules);
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
    $student->name=$request->input('name');
    $student->department_id=$request->input('department_id');
    $student->course_id=$request->input('course_id');
    
   $this->validate($request,['department_id'=>'required','course_id'=>'required']);
    $student->save();
    return redirect()->back()->with('status','Course  Add successfully');
    
        
    }

      /*------------------------------------------
--------------------------------------------
 student  delete store
--------------------------------------------
--------------------------------------------*/
public function destroy($id){

  $student= student::find($id);
  $student->delete();
  return redirect()->back()->with('status','student data delete successfully');
}



      /*------------------------------------------
--------------------------------------------
 student    all course view
--------------------------------------------
--------------------------------------------*/
public function DepartmentCourse ()
{



    return view('AllCourseView');

}
 /*------------------------------------------
--------------------------------------------
 student    all course view
--------------------------------------------
--------------------------------------------*/
public function StudentCourseview($id)
{
  $student= student::find($id);


    return view('AllCourseView',compact('student'));

}


      /*------------------------------------------
--------------------------------------------
 alll store
--------------------------------------------
--------------------------------------------*/
      /*------------------------------------------
--------------------------------------------
 student  payment store
--------------------------------------------
--------------------------------------------*/
  public function PaymentStore(Request $request){
    $payment= new payment();
 
 
    $payment->student_id=$request->input('student_id');
    $payment->amount=$request->input('amount');
    $rules=[
      'student_id'=>'required',
      'amount'=>'required'
  ];
  $this->validate($request,$rules);
    
    $payment->save();
    return redirect()->back()->with('status','payment successfully');
    
        
    }


    
  
}

