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
    
            <form action="{{ url('') }}" method="POST" enctype="multipart/form-data">
                @csrf
       
                <div class="form-group mb-3">
                   <tr> <label><b>Name:-</b></label></tr>
                    <td>saiful</td>
                </div>
                <div class="form-group mb-3">
                    <tr> <label ><b>Email:-</b></label></tr>
                     <td>saiful@gmail.com</td>
                 </div>
                 <div class="form-group mb-3">
                    <tr> <label ><b> ID:-</b></label></tr>
                     <td>353</td>
                 </div>
                 <div class="form-group mb-3">
                    <tr> <label ><b>Student Dept:-.</b></label></tr>
                     <td>Cse</td>
                 </div>

                 <div class="form-group mb-3">
                    <tr> <label ><b>Total Due:-.</b></label></tr>
                     <td>500</td>
                 </div>
                <div class="form-group mb-3">
                    <label ><b> Payment Now :-</b></label>
                    <input type="text" name="payment" class="form-control">
                </div>
              
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