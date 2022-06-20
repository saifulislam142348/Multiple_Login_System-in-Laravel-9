<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
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

return view('CourseAdd');
    
}
public function AdminCoursetManage(){

return view('Coursemanage');
    
}

}
