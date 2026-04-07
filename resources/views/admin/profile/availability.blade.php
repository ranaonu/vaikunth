@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-10 d-flex no-block align-items-center">
         <h4 class="page-title"> My Availability</h4>        
      </div>
      <div class="col-2 text-end">
        <a href="{{url('/admin/add-availability')}}"><button type="button" class="btn btn-success btn-sm text-white">
          Add Time
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
          <div class="card-body">
             <div class="table-responsive">
                 <table
                   id="zero_config"
                   class="table table-striped table-bordered"
                 >
                   <thead>
                     <tr>
                      <td><strong>Sr No.</strong></td>
                      <th><strong>Day</strong></th>
                      <th><strong>Time Slot</strong></th>
                     </tr>
                   </thead>
                   <tbody>
                    @if(count($data)>0)
                      @foreach($day as $key => $time)
                      <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$time}}</td>
                        <td>{{implode(',',array_filter($slot))}}</td>
                      </tr>
                      @endforeach
                    @else
                    <tr>
                      <td colspan="3" align="center">No data found</td>
                    </tr>
                    @endif
                   </tbody>
                   
                 </table>
               </div>


         </div>
</div>
@endsection
@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/profile.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')