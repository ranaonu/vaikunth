@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-9 d-flex no-block align-items-center">
         <h4 class="page-title"> {{$services['name']}} Service List</h4>        
      </div>
      <div class="col-3 text-end">
        
        <a href="{{url('/admin/add-sub-service')}}"><button type="button" class="btn btn-success btn-sm text-white">
          Add Service
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
        <div class="card">          
          
          <div class="table-responsive">
                 <table
                   id="zero_config"
                   class="table table-striped table-bordered serviceListTable"
                 >
                   <thead>
                     <tr>
                        <td><strong>Id</strong></td>
                       <th><strong>Name</strong></th>
                       <th><strong>Image</strong></th>
                       <th><strong>Action</strong></th>
                      
                     </tr>
                   </thead>
                   <tbody>
                    @if(count($serviceList)>0)
                     @foreach($serviceList as $key => $ser) 
                     <tr id="subServicesRow-{{$ser['id']}}">
                       <td>{{$key+1}}</td>
                       <td>{{$ser['name']}}</td>
                       <td><img src="{{asset('public/uploads/services/').'/'.$ser['profile_pic']}}" alt="user" class="rounded-circle" width="40" height="40" /></td>
                       
                       <td><button type="button" class="btn btn-danger btn-sm text-white deleteAssessment" row-id="{{$ser['id']}}" id="deleteAssessment" modelName="subservices" delete-rowId="subServicesRow-">
                          Delete
                        </button></td>
                      </tr>
                      @endforeach
                    @else
                    <tr><td colspan="5" align="left">No reord found</td></tr>
                    @endif
                   </tbody>
                 </table>
               </div>
         </div>
</div>
@endsection
@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/admin.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')