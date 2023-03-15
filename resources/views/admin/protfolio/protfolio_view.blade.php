@extends('admin.admin_master')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Contact Message All</h4>

                                     

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
    <div class="row">
        <div class="col-19">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Projects list</h4>
                    

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Title</th>
                            <th>Short Title</th>
                            <th>Describtion</th>
                            <th>Image</th>
                            <th>Date(DD\MM\YY)</th>
                            <th>Action</th>
                            
                        </thead>


                        <tbody>
                        	{{-- @php($i = 1) --}}
                        	@foreach($projects as $key=>$item)
                        <tr>
                            <td> {{ $key}} </td>
                            <td> {{ $item->title }} </td>
                            <td> {{ $item->short_title }} </td>
                            <td> {{ $item->describtion }} </td>
                            <td> <img src="{{ $item->protfolio_image }}" alt="" width="50"> </td>
                            <td> {{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }} </td>
                            
                            <td>
 
  
                                <a href="{{ route('delete.project',$item->id) }}" onclick="return confirm('Are you sure you want to delete this message?');" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>
     
                                <a href="{{ route('update_view_page.project',$item->id) }}" class="btn btn-primary sm" title="Edit Data" id="delete">  <i class="fas fa-edit"></i> </a>
                            </td>
                           
                        </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
        
                    </div>
                </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        
                     
                        
        </div> <!-- container-fluid -->
    </div>
 

@endsection