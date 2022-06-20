@extends('layouts.app')

@section('content')
<a href="{{route('home')}}" class=" btn btn-success  text-danger ">Home</a>

    <h1>Student profile!</h1>

<div class="container">
    <div class="row">
<div class="col-md-4">
<ul>
   <li><a href="{{route('Dashboard')}}" class="list-group-item text-danger active"><i class="glyphicon glyphicon-envelope text-primary active "></i> My profile</a>
   </li>  
   <li>
   <a href="{{route('Registetion')}}" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> Registion Now</a>
   </li>
   <li>
    <a href="{{route('Payment')}}" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> My payment details </a>
   </li>
   <li>
    <a href="{{route('Contact')}}" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> Contact</a>
   </li>
</ul>

</div>
<div class="col-md-8">

    
        <div class="form-group mb-3">
           <tr> <label><b>Student Name:-</b></label></tr>
            <td>saiful</td>
        </div>
        <div class="form-group mb-3">
            <tr> 
                <label ><b>Email:-</b></label>
            </tr>
             <td>saiful@gmail.com</td>
         </div>
         <div class="form-group mb-3">
            <tr> 
                <label ><b>ID:-</b></label>
            </tr>
             <td>353</td>
         </div>
         <div class="form-group mb-3">
            <tr> 
                <label ><b>Dept:-.</b></label>
            </tr>
             <td>Cse</td>
         </div>
      
         <div class="form-group mb-3">
            
         </div>
         <div class="form-group mb-3">
            <tr> 
                <label ><b>Student ID:-.</b></label>
            </tr>
             <td>5</td>
         </div>
       
       
  

 
</div>

</div>


    </div>

    <a href="{{route('Course')}}" class=" btn btn-dark list-group-item text-danger "> Your All Course Show </a>



</div>
@endsection