@extends('admin.admin_master')
@section('admin')
<div class="page-content">
    <div class="container-fluid">
        <div class="page-content">
            <div class="container-fluid">
            
            
            <div class="row">
                <div class="col-lg-10">
                    <div class="card"><br><br>
             <center>
                        <img class="rounded-circle avatar-xl" src="{{ (!empty($admindata->profile_image))? url('upload/admin_images/'.$admindata->profile_image):url('upload/no_image.jpg') }}" alt="Card image cap">
             
            
                        <div class="card-body">
                            <h4 class="card-title">Name : {{ $admindata->name }} </h4>
                            <hr>
                            <h4 class="card-title">User Email : {{ $admindata->email }} </h4>
                            <hr>
                            <h4 class="card-title">User Name : {{ $admindata->name }} </h4>
                            <hr>
                            <a href="{{ route('admin.edit_profile') }}" class="btn btn-info btn-rounded waves-effect waves-light" > Edit Profile</a>
                            
                        </div>
                    </center>
                    </div>
                </div> 
                                        
                    
              </div> 
            
            
            </div>
            </div>
    </div>
    
</div>
@endsection