@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-9 d-flex no-block align-items-center">
         <h4 class="page-title">Assessment Payments</h4>        
      </div>
      <div class="col-3 text-end">
        
        <!-- <a href="{{url('/admin/add-assessment')}}"><button type="button" class="btn btn-success btn-sm text-white">
          Add Assessment
        </button></a> -->
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
                       <th><strong>Cost</strong></th>
                       <th><strong>Payment Id</strong></th>
                       <th><strong>Payment Proof</strong></th>
                       <th><strong>Status</strong></th>
                       <th><strong>Action</strong></th>
                      
                     </tr>
                   </thead>
                   <tbody>
                    @if(count($assessmentPayments)>0)
                     @foreach($assessmentPayments as $key => $pay) 
                      <tr id="assessmentsRow-{{$pay['id']}}">
                        <td>{{$key+1}}</td>
                        <td>{{$pay['user_detail']['name']}}</td>
                        <td>{{$pay['get_test_detail']['name']}}</td>
                        <td>{{$pay['get_test_detail']['cost']}}</td>
                        <td>{{$pay['payment_id']}}</td>
                        <td>
                          
                          <a href="{{asset('public/uploads/payment/').'/'.$pay['payment_image_proof']}}" target="_blank"><img src="{{asset('public/uploads/payment/').'/'.$pay['payment_image_proof']}}" alt="user" class="rounded-circle" width="40" height="40" /></a>



                        </td>
                        <td>
                          @if($pay['is_payment']==0)
                            <button
                          type="button"
                          class="btn btn-orange btn-sm text-white"
                        >Payment Pending </button>
                            @elseif($pay['is_payment']==1)
                            <button
                          type="button"
                          class="btn btn-cyan btn-sm text-white"
                        >Payment Under Verification </button>
                            @else
                           <button
                          type="button"
                          class="btn btn-success btn-sm text-white"
                        > Payment Verified </button>
                            @endif

                        </td>
                        <td>
                          @if($pay['is_payment']<2)
                          <a href="{{url('/')}}/admin/edit/user/test/payment/{{base64_encode($pay['id'])}}">
                            <button type="button" class="btn btn-info btn-sm text-white" style="margin-bottom: 5px;">
                              Edit
                            </button> </a>
                          @else
                          <a href="{{url('/')}}/admin/edit/user/test/payment/{{base64_encode($pay['id'])}}">
                            <button type="button" class="btn btn-success btn-sm text-white" style="margin-bottom: 5px;">
                              View
                            </button> </a>
                          @endif
                          
                        </td>
                      </tr>
                      @endforeach
                    @else
                    <tr><td colspan="8" align="center">No reord found</td></tr>
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