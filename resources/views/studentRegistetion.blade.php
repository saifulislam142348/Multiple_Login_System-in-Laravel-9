@extends('layouts.app')

@section('content')

<a href="{{route('home')}}" class="btn btn success "> Dashboard</a>
    <h1>Student profile!</h1>

<div class="container">
    <div class="row">
<div class="col-md-4">
<ul>
   <li><a href="" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary active "></i> My profile</a>
   </li>  
   <li>
   <a href="" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary active"></i> Registion Now</a>
   </li>
   <li>
    <a href="" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> My payment details </a>
   </li>
   <li>
    <a href="" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> Contact</a>
   </li>
</ul>

</div>
<div class="col-md-8">

    <div class="container">
        <a href="{{url('/data-show')}}" class="btn btn-success">showdata</a>
        <div class="row justify-content-center">
            <div class="col-md-6">
    
            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
    
                <div class="card">
                    <div class="card-header">
                        <h4>Add Student</h4>
                    </div>
                    <div class="card-body">
    
                        <form action="{{ url('insert-info') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                   
                            <div class="form-group mb-3">
                                <label for="">Student Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Student Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Student dept</label>
                                <input type="text" name="course" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Student Course</label>
                                <input type="text" name="course" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Student Section</label>
                                <input type="text" name="section" class="form-control">
                            </div>
                          
                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Save Student</button>
                            </div>
    
                        </form>
    
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


    </div>





</div>
@endsection