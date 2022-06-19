
@extends('layouts.app')

@section('content')

<a href="{{route('home')}}" class="btn btn success "> Dashboard</a>
    <h1>Student profile!</h1>

<div class="container">
    <div class="row">
<div class="col-md-4">
<ul>
   <li><a href="" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary  "></i> My profile</a>
   </li>  
   <li>
   <a href="" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> Registion Now</a>
   </li>
   <li>
    <a href="" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> My payment details </a>
   </li>
   <li>
    <a href="" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary active "></i> Contact</a>
   </li>
</ul>

</div>
<div class="col-md-8">

    <div class="card-body">
    
        <form action="{{ url('insert-info') }}" method="POST" enctype="multipart/form-data">
            @csrf
   
            <div class="form-group mb-3">
                <tr> <label >Student Name</label></tr>
                <td> saiful</td>
            </div>
            <div class="form-group mb-3">
                <tr> <label for="">Student Email</label></tr>
                <td> saiful@gmail.com</td>
            </div>
            <div class="form-group mb-3">
               <tr> <label for="">Student dept</label></tr>
                <td> Cse</td>
            </div>
          
            <div class="form-group mb-3">
                <label for="">Student Comment </label>
                <textarea type="text" name="section" class="form-control">
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