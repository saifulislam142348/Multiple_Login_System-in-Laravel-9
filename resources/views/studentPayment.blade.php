@extends('layouts.app')

@section('content')
<a href="{{route('home')}}" class=" btn btn-success text-danger ">Home</a>
<a href="{{route('PaymentProcess')}}" class=" btn btn-dark list-group-item text-danger ">Payment Now </a>
    <h1>Student Payment Details!</h1>

<div class="container">
    <div class="row">
<div class="col-md-4">
<ul>
    <li><a href="{{route('Dashboard')}}" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary active "></i> My profile</a>
    </li>  
    <li>
    <a href="{{route('Registetion')}}" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> Registion Now</a>
    </li>
    <li>
     <a href="{{route('Payment')}}" class="list-group-item text-danger active"><i class="glyphicon glyphicon-envelope text-primary"></i> My payment details </a>
    </li>
    <li>
     <a href="{{route('Contact')}}" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> Contact</a>
    </li>
</ul>

</div>
<div class="col-md-8">
    <div class="container">

        <div class="form-group mb-3">
            <tr> <label><b>Student Name:-</b></label></tr>
             <td>    {{ Auth::user()->name }}</td>
         </div>
         
          <div class="form-group mb-3">
             <tr> <label ><b>Student email:-</b></label></tr>
              <td>    {{ Auth::user()->email }}</td>
          </div>
          <div class="form-group mb-3">
             <tr> <label ><b>Student Dept:-.</b></label></tr>
              <td>
            cse
              </td>
          </div>
          <div class="form-group mb-3">
            <tr> <label ><b>Student Id:-.</b></label></tr>
             <td>
         

                <th>{{auth::user()->id}}</th>
                
              
          
          
             </td>

             <td>
                
            
               
         </div>
       
         
       
   
 
          <div class="jumbotron">
             <table class="table table-hover table-dark table-striped">
                 <thead>
                     <tr>
                         <th class=" table-secondary">Total Statement </th>
                     </tr>
                    
                     <tr>

                        
                     </tr>
                     <tr>
                         <tr>
                         <th>date</th>
                         <th>money</th>
                         
                         @foreach ($payment as $item)
                         <th>{{$item->created_at}}</th>
                         <td>{{$item->amount}}</td>
                       
                    
                       
                  
                      

                    </tr>
                     
                        @endforeach
         
       
               
                             
                     </tr>
                    
                     
                     
                        
                      
                       
                        
                 
                    
                         
                   
                     
                         
                   
                  
                   
                     
                 </thead>
                    
               
                     
                </table>
                <table>
                    <tr>
                        <th class=" table-secondary">Total Payment:- </th>
                        <th class=" table-secondary">{{$payment->sum('amount')}}</th>
                    </tr>
                </table>
               
                <table>
                    <tr>
                        <th class=" table-secondary">Max Payment:- </th>
                        <th class=" table-secondary">{{$payment->max('amount')}}</th>
                    </tr>
                </table>
               
         </div>
 
    </div>



</div>


    </div>



</div>
@endsection