<!doctype html>
<html lang="en">

  @include('admin.body.head')
    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
           @include('admin.body.header')  
            <!-- ========== Left Sidebar Start ========== -->

            <div class="vertical-menu">

                <div data-simplebar class="h-100">
                    @php
                        $id = Auth::user()->id;
                        $admindata = App\Models\User::find($id);
                    @endphp

                    <!-- User details -->
                    <div class="user-profile text-center mt-3">
                        <div class="">
                            <img src=" {{ (!empty($admindata->profile_image))? url('upload/admin_images/'.$admindata->profile_image):url('upload/no_image.jpg') }}" alt="" class="avatar-md rounded-circle">
                        </div>
                        <div class="mt-3">
                            <h4 class="font-size-16 mb-1">{{ $admindata->name }}</h4>
                            <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
                        </div>
                    </div>

                    <!--- Sidemenu -->
                   @include('admin.body.sidebar')
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

               @yield('admin')   
                <!-- End Page-content -->
               
               @include('admin.body.footer')
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
      
        <!-- /Right-bar -->
        @include('admin.body.rightbar')
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        

  

  ================================================
  
  {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  
   <script src="{{ asset('backend/assets/js/code.js') }}"></script>
  
  
  $(function(){
      $(document).on('click','#delete',function(e){
          e.preventDefault();
          var link = $(this).attr("href");
  
    
                    Swal.fire({
                      title: 'Are you sure?',
                      text: "Delete This Data?",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                          'Deleted!',
                          'Your file has been deleted.',
                          'success'
                        )
                      }
                    }) 
  
  
      });
  
    });
     --}}
      @include('admin.body.js')
    </body>

</html>