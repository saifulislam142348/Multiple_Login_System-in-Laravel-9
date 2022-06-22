@extends('layouts.app')

@section('content')
<a href="{{route('home')}}" class=" btn btn-success text-danger ">Home</a>

    <h1>Student Payment System </h1>

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
     <a href="{{route('Payment')}}" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-danger active"></i> My payment  </a>
    </li>
    <li>
     <a href="{{route('Contact')}}" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> Contact</a>
    </li>
</ul>

</div>
<div class="col-md-8">
    <div class="container">

        <div class="card-body">
            @if (session('status'))
            <h6 class="alert alert-success">{{ session('status') }}</h6>
        @endif
            <form action="{{ route('paymentstore') }}" method="POST" enctype="multipart/form-data">
                @csrf
       
                <div class="form-group mb-3">
                   <tr> <label><b>Name:-</b></label></tr>
                    <td> {{ Auth::user()->name}}</td>
                </div>
                <div class="form-group mb-3">
                    <tr> <label ><b>Email:-</b></label></tr>
                     <td> {{ Auth::user()->email}}</td>
                 </div>
                 <div class="form-group mb-3">
                    <tr> <label ><b> ID:-</b></label>
                    </tr>
                    @foreach ($student as $item)
                    <input type="number" name="student_id" value="{{ $item->id}}">
                    <b>{{ $item->id}}</b> 
                    @endforeach
                     
                 </div>
                 <div class="form-group mb-3">
                    <tr> <label ><b>Student Dept:-.</b></label></tr>
                    @foreach ($student as $item)
                    <td name="student_id" value="">{{ $item->department_id}} </td> 
                    @endforeach
                  
                     <td>cse</td>
                 </div>

                 <div class="form-group mb-3">
                    <tr> <label ><b>Total Due:-.</b></label></tr>
                     <td>500</td>
                 </div>
                <div class="form-group mb-3">
                    <label ><b> Payment Now :-</b></label>
                    <input type="text" name="amount" class="form-control">
                </div>
                <ul>
                    @foreach ($errors->all() as $error)
                       <li class="text-danger">{{ $error }}</li>
                    @endforeach
                 </ul>
              
                <div class="form-group mb-3">
                    <button type="submit" class="btn btn-primary">Payment Now </button>
                </div>

            </form>

        </div>
    </div>



</div>


    </div>





</div>
@endsection