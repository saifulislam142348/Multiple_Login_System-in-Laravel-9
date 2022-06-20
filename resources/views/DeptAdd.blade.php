@extends('layouts.app')
@section('content')
	
<div style="background-image:url({{asset('images/project-5.jpg')}});">
    <div class="header bg-light.bg-gradient">
        
        <div style="text-align:center;" class="list-group-item active text-dark "><h2> Admin Dashboard</h2> 
            <p>Welcome <strong><></strong></p>
            <p>  </p>
        
        
        
        </div>
        </div>
        <nav class="navbar navbar-primary">
        <div class="container-fluid">
            <div class="navbar-header">
                
                
            </div>
            
            
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
         
                <a href="{{route('home')}}" class="list-group-item text-danger "><i class="glyphicon glyphicon-envelope text-primary"></i> home</a>
                 <a href="" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> student details</a>
         
                <div class="dropdown">
                    <div class=" dropdown-toggle list-group-item text-success"   data-bs-toggle="dropdown" >
                        <span class="glyphicon glyphicon-education">Dept. Add</span>
                    </div>
                    <ul class="dropdown-menu " >
                      <li><a class="dropdown-item nav-link active " href="{{route('AdminDeptAdd')}}">Create </a></li>
                      <li><a class="dropdown-item nav-link" href="{{route('AdminDeptManage')}}">Manage</a></li>
                     
                    </ul>

                    <div class="dropdown">
                        <div  class="dropdown-toggle list-group-item text-success"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="glyphicon glyphicon-education">Course Add</span>
                        </div>>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item nav-link" href="{{route('AdminCourseAdd')}}">Create </a></li>
                          <li><a class="dropdown-item nav-link" href="{{route('AdminDeptManage')}}">Manage</a></li>
                         
                        </ul>
          
                  </div>
                       

                    <a href="" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> massege</a>
                     
               
       
                    
                    
    
                </div>
            </div>   
            <div class="col-sm-10">

                @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
                <form action="{{route('AdminDeptAddStore')}}" method="POST" enctype="multipart/form-data">
                    @csrf
           
                    <div class="form-group mb-3">
                        <label > Departmentt Name:</label>
                      <input type="text" name="name" class="text-primary" >
                      <input type="submit" class="btn btn-success" value="Department Add ">
                    </div>
                  
                </form>
                <a  class="btn btn-success" href="{{route('DepartmentView')}}" >Department View</a>
            </div>
                </div>
                
            </div>
        </div>
            
        </div>
     


@endsection