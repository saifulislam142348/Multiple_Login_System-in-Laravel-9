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
                        <h4>Registration From</h4>
                    </div>
                    <div class="card-body">
    
                        <form action="{{ route('registationstore') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                   
                            <div class="form-group mb-3">
                                <label for="">Name:</label>
                               <th>    {{ Auth::user()->name}}</th>
                            </div>
                            <div class="form-group mb-3">
                                <label> Email</label>
                                {{ Auth::user()->email }}
                            </div>
                           
                            <div class="form-group mb-3">
                            <label >Department Name:</label><br>
                              <select class="form-select form-select-sm mb-3" name="department_id" id="department">
                                <option selected>Open this select menu</option>
                                @foreach ($department as $item)
                               
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                              
                                
                              </select>
                            </div>
                            <div class="form-group mb-3">
                            <label for="">Course add</label>
                            <select class="form-select form-select-sm mb-3" name="course_id" id="course">
                                <option selected>Open this select menu</option>
 
                                @foreach ($department as $item)
                                <optgroup label="{{$item->name}}">
                                    @foreach($item->course as $courses)
                                        <option value="{{$courses->id}}">{{$courses->name}}</option>
                                    @endforeach
                                </optgroup>
                          
                                 
                             @endforeach
                                
                              
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