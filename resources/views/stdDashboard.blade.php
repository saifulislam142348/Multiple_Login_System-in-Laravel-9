@extends('layouts.app')

@section('content')

<a href="{{route('home')}}" class="btn btn success "> Dashboard</a>
    <h1>Student profile!</h1>

<div class="container">
    <div class="row">
<div class="col-md-4">
<ul>
   <li><a href="{{route('Dashboard')}}" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary active "></i> My profile</a>
   </li>  
   <li>
   <a href="" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> Registion Now</a>
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

profile

</div>


    </div>





</div>
@endsection