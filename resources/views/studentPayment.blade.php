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
              <td>Cse</td>
          </div>
          <div class="form-group mb-3">
            <tr> <label ><b>Student Id:-.</b></label></tr>
             <td>
              @foreach ($student as $item)
                  {{$item->id}}
              @endforeach
          
             </td>
         </div>
       
         
       
   
 
          <div class="jumbotron">
             <table class="table table-hover table-dark table-striped">
                 <thead>
                     <tr>
                         <th class=" table-secondary">Total Statement </th>
                     </tr>
                     <tr>
                         <th>date</th>
                         
                       
                     </tr>
                     <tr>

                        <th>2/3/22</th>
                        <td>500</td>
                     </tr>
                     <tr>

                        <th>2/3/22</th>
                        <td>500</td>
                     </tr>
                     <tr>

                        <th>2/3/22</th>
                        <td>500</td>
                     </tr>
                     
                     
                        
                      
                       
                        
                 
                    
                         
                   
                     
                         
                   
                     
                     <tr>
                        <th class=" table-secondary">Total Payment </th>
                        <th class=" table-secondary">500000 </th>
                    </tr>
                         
                   
                     
                 </thead>
                </table>
         
         </div>
 
    </div>



</div>


    </div>



</div>
@endsection