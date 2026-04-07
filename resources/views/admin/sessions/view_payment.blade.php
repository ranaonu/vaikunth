@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-9 d-flex no-block align-items-center">
         <h4 class="page-title">View Payment</h4>        
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
                   class="table table-striped table-bordered"
                 >
          <thead class="thead-dark">
            <tr>
              <th><strong>User Name</strong></th>
              <th><strong>Payment Id</strong></th>
              <th><strong>Payment Proof</strong></th>
            </tr>
          </thead>
          <tbody>
            <tr>
                <td>{{$bookingDetail['user_detail']['name']}}</td>
                <td>{{$bookingDetail['payment_id']}}</td>
                <td><a href="{{asset('public/uploads/payment/').'/'.$bookingDetail['payment_image_proof']}}" target="_blank"><img src="{{asset('public/uploads/payment/').'/'.$bookingDetail['payment_image_proof']}}" alt="user" class="rounded-circle" width="100" height="100" /></a></td>
            </tr>
          </tbody>
        </table>
    </div>
</div>
@endsection
@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/admin.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')