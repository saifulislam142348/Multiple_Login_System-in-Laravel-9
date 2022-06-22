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
               
  
                 <a href="" class="list-group-item text-danger active "><i class="glyphicon glyphicon-envelope text-primary"></i> student details</a>
         
                <div class="dropdown">
                    <div class=" dropdown-toggle list-group-item text-success"   data-bs-toggle="dropdown" >
                        <span class="glyphicon glyphicon-education">Dept. Add</span>
                    </div>
                    <ul class="dropdown-menu " >
                      <li><a class="dropdown-item nav-link" href="{{route('AdminDeptAdd')}}">Create </a></li>
                      <li><a class="dropdown-item nav-link" href="{{route('AdminDeptManage')}}">Manage</a></li>
                     
                    </ul>

                    <div class="dropdown">
                        <div  class="dropdown-toggle list-group-item text-success"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="glyphicon glyphicon-education">Course Add</span>
                        </div>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item nav-link" href="{{route('AdminCourseAdd')}}">Create </a></li>
                          <li><a class="dropdown-item nav-link" href="{{route('AdminDeptManage')}}">Manage</a></li>
                         
                        </ul>
          
                  </div>
                       

                    <a href="" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> massege</a>
                     
               
       
                    
                    
    
                </div>
            </div>   
            <div class="col-sm-10">

<div class="container">
    <div class="jumbotron">
        <table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
       
        <th>Department</th>
        
        <th>Status</th>
        <th>Action</th>
        <th>All Course View</th>
        <th>All Payment View</th>
    </tr>
    <tr>
        @foreach ($student as $item)
            
      
        <td>{{$item->id}}</td>
        <td>
            {{$item->name}}
        </td>
        
        <td>{{$item->department->name}}</td>
        <td>
            <a  class="btn btn-success" href="">active</a>
        </td>
        <td>
            <a  class="btn btn-success" href="{{url('Student/Edit/'.$item->id)}}">Edit</a>
            <a  class="btn btn-danger" href="{{url('delete/'.$item->id)}}">Delete</a>
        </td>
      
        <td>
            <a class="btn btn-primary" href="{{url('/student/all/course/view/'.$item->id)}}">Click here</a>
        </td>
        <td>
            <a class="btn btn-primary" href="">Click here</a>
        </td>
    </tr>
    @endforeach
</thead>
        </table>

        
    </div>
    </div>
            
            </div>
                </div>
                
            </div>
        </div>
            
        </div>
     


@endsection