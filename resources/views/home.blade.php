@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if(auth()->user()->is_admin == 'admin')
                    <a href="{{url('admin/routes')}}">Admin</a>
                    @else
                    <div style="background-image:url({{asset('images/project-5.jpg')}});">
                        <div class="header bg-light.bg-gradient">
                            
                            <div style="text-align:center;" class="list-group-item active text-dark "><h2> student Dashboard</h2> 
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
                                <div class="col-sm-6">
                                
                          
                                        <a href="{{route('Dashboard')}}" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> My profile</a>
                                        <a href="#" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> Registion Now</a>

                                        <a href="#" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> My payment details </a>
                                        <a href="{{route('Contact')}}" class="list-group-item text-success"><i class="glyphicon glyphicon-envelope text-primary"></i> Contact</a>
                                        
                           
                                        
                                        
                        
                                    </div>
                                </div>   
                                    </div>
                                    
                                </div>
                            </div>
                                
                            </div>
                    @endif
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
