@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-9 d-flex no-block align-items-center">
         <h4 class="page-title">Service Lists </h4>        
      </div>
      <!-- <div class="col-3 text-end">
        <a href="{{url('/admin/add-service')}}"><button type="button" class="btn btn-success btn-sm text-white">
          Add Service
        </button></a>
       
      </div> -->

     


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
                       <th><strong>Created At</strong></th>
                      
                     </tr>
                   </thead>
                   <tbody>
                    @if(count($services)>0)
                     @foreach($services as $key => $ser) 
                     <tr>
                       <td>{{$key+1}}</td>
                       <td><a href="services/{{base64_encode($ser['id'])}}">{{$ser['name']}}</a></td>
                       <td>{{date('d/m/Y',strtotime($ser['created_at']))}}</td>
                      </tr>
                      @endforeach
                    @else
                    <tr><td colspan="3" align="left">No reord found</td></tr>
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