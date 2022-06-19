<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function StudentDashboard(){
      
        return view('stdDashboard');


        
    }
    public function StudentPayment(){
      
        return view('studentPayment.blad');


        
    }
    public function StudentContact(){
      
        return view('studentContact');


        
    }


    public function StudentPaymentProcess(){
      
        return view('studentPaymentProcess');


        
    }
}
