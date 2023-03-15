@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">protfolio Page </h4>
            @if(session('status1'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>{{session('status1')}}</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
           </div>
           @endif

           @if ($errors->any())
           <div class="alert alert-danger">
             <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
             </ul>
            </div>
           @endif
            <form method="post" action="{{ route('store.project') }}" enctype="multipart/form-data">
                @csrf

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input name="title" required="title"  class="form-control" type="text" id="example-text-input">
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Short Title </label>
                <div class="col-sm-10">
                    <input name="short_title" required="title"  class="form-control" type="text"  id="example-text-input">
                </div>
            </div>
            <!-- end row -->

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Description </label>
                <div class="col-sm-10">
                    <textarea id="elm1" required="describtion"  name="describtion">
                      
                    </textarea>
                </div>
            </div>
            <!-- end row -->


    
            <!-- end row -->

             <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Upload Image </label>
                <div class="col-sm-10">
                     <input name="protfolio_image" class="form-control" type="file" id="image">
                </div>
            </div>
            <!-- end row -->


              {{-- <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
                    <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($aboutpage->about_image))? url( $aboutpage->about_image):url('upload/no_image.jpg') }}" alt="Card image cap">
                </div>
            </div> --}}
            <!-- end row -->
        <input type="submit" class="btn btn-info waves-effect waves-light" value="add">
            </form>
             
           
           
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>


<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>

@endsection 
