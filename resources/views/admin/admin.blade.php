@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-10 d-flex no-block align-items-center">
         <h4 class="page-title">Packages List</h4>        
      </div>
      <div class="col-2 text-end">
        <a href="{{url('/admin/add-package')}}"><button type="button" class="btn btn-success btn-sm text-white">
          Add Package
        </button></a>
      </div>
   </div>
</div>


<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
   
    <div class="row">
      <div class="col-12">
        <div class="card">
          
             <div class="card-body">

               <div class="table-responsive">
                 <table
                   id="zero_config"
                   class="table table-striped table-bordered"
                 >
                   <thead>
                    <tr>
                      <th><strong>Sr. No.</strong></th>
                      <th><strong>Title</strong></th>
                      <th><strong>Category</strong></th>
                      <th><strong>Location</strong></th>
                      <th><strong>Duration</strong></th>
                      <th><strong>Action</strong></th>
                    </tr>
                   </thead>
                   <tbody>
                    @if($allPackagesList && count($allPackagesList)>0)
                      @foreach($allPackagesList as $key => $list)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$list['title']}}</td>
                        <td>{{$list['package_category']['name']}}</td>
                        <td>{{$list['location']}}</td>
                        <td>{{$list['days']}} Days / {{$list['nights']}} Nights</td>
                        <td>
                          <a href="{{url('/')}}/edit/package/{{base64_encode($list['id'])}}"><button class="btn btn-info">Edit</button></a>
                          <button class="btn btn-danger" id="deletePackage" row-id="{{$list['id']}}">Delete</button>
                        </td>
                      </tr>
                       @endforeach
                @endif
                   </tbody>
                   
                 </table>
               </div>
             </div>
           </div>
         </div>
       </div>
</div>


@endsection
@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/users.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')