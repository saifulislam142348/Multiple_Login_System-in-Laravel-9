@extends('layouts.app')

@section('content')

<a href="{{route('home')}}" class=" btn btn-success text-danger ">Home</a>


    <h1>Student Registetion From!</h1>

<div class="container">
    <div class="row">
<div class="col-md-4">
<ul>
    <li><a href="{{route('Dashboard')}}" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary active "></i> My profile</a>
    </li>  
    <li>
    <a href="{{route('Registetion')}}" class="list-group-item text-danger active"><i class="glyphicon glyphicon-envelope text-primary"></i> Registion Now</a>
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

    <div class="container">
   
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
                                <label for="">Name:</label>
                               <th>saiful</th>
                            </div>
                            <div class="form-group mb-3">
                                <label> Email</label>
                                <th>saiful@gmail</th>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Semester select :</label>
                            <select class="form-select form-select-sm mb-3">
                                <option selected>Open this select menu</option>
                                <option value="1">1st Semester</option>
                                <option value="2">2nd Semester</option>
                                <option value="3">3nd Semester</option>
                              </select>
                            </div>
                            <div class="form-group mb-3">
                            <label >dept:</label><br>
                              <select class="form-select form-select-sm mb-3">
                                <option selected>Open this select menu</option>
                                <option value="1">CSE</option>
                                <option value="2">EEE</option>
                                <option value="3">ENG</option>
                              </select>
                            </div>
                            <div class="form-group mb-3">
                            <label for="">Course add</label>
                            <select class="form-select form-select-sm mb-3">
                                <option selected>Open this select menu</option>
                                <option value="1">1st</option>
                                <option value="2">2nd </option>
                                <option value="3">3nd </option>
                              </select>
                            </div>

                          

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Save </button>
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