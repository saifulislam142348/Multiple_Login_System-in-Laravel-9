@extends('layouts.app')

@section('content')
<a href="{{route('home')}}" class=" btn btn-success  text-danger ">Home</a>

    <h1>Student profile!</h1>

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
            <td> {{ Auth::user()->name }}</td>
        </div>
        
         <div class="form-group mb-3">
            <tr> <label ><b>Student ID:-</b></label></tr>
             <td> {{ Auth::user()->id }}</td>
         </div>
         <div class="form-group mb-3">
            <tr> <label ><b>Student Dept:-.</b></label></tr>
             <td>Cse</td>
         </div>
      
        
  

         <div class="jumbotron">
            <table class="table table-hover table-dark table-striped">
                <thead>
                    <tr>
                        <th class=" table-secondary"> Dept. Cse Course (1st Semister)</th>
                    </tr>
                    <tr>
                        <td>cse101</td>
                        <td>cse102</td>
                        <td>cse300</td>
                        <td>eee101</td>
                        <td>eee102</td>
                        <td>eng101</td>
                        <td>text101</td>
                    </tr>
                    <tr>
                        <td>cse101</td>
                        <td>cse102</td>
                        <td>cse300</td>
                        <td>eee101</td>
                        <td>eee102</td>
                        <td>eng101</td>
                        <td>text101</td>
                    </tr>
                   
                        
                  
                    
                        
                  
                    <tr>
                        <th class=" table-secondary"> Dept. Cse Course (2st Semister)</th>
                    </tr>
                    <tr>
                        <td>cse101</td>
                        <td>cse102</td>
                        <td>cse300</td>
                        <td>eee101</td>
                        <td>eee102</td>
                        <td>eng101</td>
                        <td>text101</td>
                    </tr>
                    <tr>
                        <td>cse101</td>
                        <td>cse102</td>
                        <td>cse300</td>
                        <td>eee101</td>
                        <td>eee102</td>
                        <td>eng101</td>
                        <td>text101</td>
                    </tr>
                   
                        
                  
                    
                </thead>
               </table>
        
        </div>

</div>

</div>


    </div>





</div>


@endsection