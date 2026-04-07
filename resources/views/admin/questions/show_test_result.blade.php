@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-9 d-flex no-block align-items-center">
         <h4 class="page-title">User's Test</h4>        
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
          <div class="card-body form-check">

            <div class="table-responsive">
                 <table
                   id="zero_config"
                   class="table table-striped table-bordered serviceListTable"
                 >
                   <thead>
                     <tr>
                        <td><strong>Id</strong></td>
                       <th><strong>User Name</strong></th>
                       <th><strong>Assessment</strong></th>
                       <th><strong>Action</strong></th>
                      
                     </tr>
                   </thead>
                   <tbody>
                    @if(count($testUsers)>0)
                     @foreach($testUsers as $key => $uid) 
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$uid['test_users']['name']}}</td>
                        <td>{{$uid['test']['name']}}</td>
                        <td><a href="show/result/{{base64_encode($uid['id'])}}"><button
                          type="button"
                          class="btn btn-success btn-sm text-white"
                        >
                          View
                        </button></a></td>
                      </tr>
                      @endforeach
                    @else
                    <tr><td colspan="4" align="left">No reord found</td></tr>
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