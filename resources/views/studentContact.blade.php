
@extends('layouts.app')

@section('content')
<a href="{{route('home')}}" class=" btn btn-success text-danger ">Home</a>

    <h1>Student Contact From!</h1>

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
     <a href="{{route('Contact')}}" class="list-group-item text-danger active "><i class="glyphicon glyphicon-envelope text-primary"></i> Contact</a>
    </li>
</ul>

</div>
<div class="col-md-8">

    <div class="card-body">
    
        <form action="{{ url('insert-info') }}" method="POST" enctype="multipart/form-data">
            @csrf
   
            <div class="form-group mb-3">
                <tr> 
                    <label > <b>  Student Name:-</label></b>
                  
                </tr>
                <td> saiful</td>
            </div>
            <div class="form-group mb-3">
                <tr>
                     <b> <label for="">Student Email:-</label></b>
                   
                </tr>
                <td> saiful@gmail.com</td>
            </div>
            <div class="form-group mb-3">
               <tr> 
                <b><label for="">Student dept:-</label></b>
                
            </tr>
                <td> Cse</td>
            </div>
          
            <div class="form-group mb-3">
                <b>   <label>Student Comment :-</label></b>
             
                <textarea type="text" name="section" class="form-control"></textarea>
            </div>
          
            <div class="form-group mb-3">
                <button type="submit" class="btn btn-primary">Contact now</button>
            </div>

        </form>

    </div>

</div>


    </div>





</div>
@endsection