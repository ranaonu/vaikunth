@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
         <h4 class="page-title"> Edit Payment</h4>        
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
            {!! Form::open(['url' => url('/admin/edit-therapist-payment'),'id'=>'edittherapistpayment',  'class' => 'my_form  edittherapistpayment m-t-20 data-parsley-validate novalidate','enctype'=>'multipart/form-data'] ) !!}
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Therapist Name</label>
                  <input
                    type="text"
                    id="team_name"
                    name="name"
                    class="form-control demo "
                    data-control="hue"
                    disabled
                    value="{{$paymentDetail['therepist_detail']['name']}}"
                  />
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Email</label>
                  <input
                    type="text"
                    id="team_name"
                    name="name"
                    class="form-control demo "
                    data-control="hue"
                    disabled
                    value="{{$paymentDetail['therepist_detail']['email']}}"
                  />
                </div>
              </div>

             
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Total Amount</label>
                  <input
                    type="text"
                    id="team_name"
                    name="total_amount"
                    class="form-control demo "
                    data-control="hue"
                    disabled
                    value="{{$paymentDetail['total_amount']}}"
                  />
                </div>
              </div>

               <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Total Paid</label>
                  <input
                    type="text"
                    id="total_paid11"
                    name="total_paid11"
                    class="form-control demo"
                    data-control="hue"  
                    disabled                  
                    value="{{$paymentDetail['total_paid']}}"
                  />
                </div>
              </div>


              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Total Balance</label>
                  <input
                    type="text"
                    id="total_balance"
                    name="total_balance"
                    class="form-control demo "
                    data-control="hue"
                    disabled
                    value="{{($paymentDetail['total_amount'] - $paymentDetail['total_paid'])}}"
                  />
                </div>
              </div> 

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Total To Paid</label>
                  <input
                    type="text"
                    id="total_paid"
                    name="total_paid"
                    class="form-control demo required onlynumber removeErrorField"
                    data-control="hue"                    
                    value=""
                  />
                </div>
              </div>
             

              
             
              
               <input type="hidden" name="id" value="{{$paymentDetail['id']}}">
               <input type="hidden" name="check_total_amount" id="check_total_amount" value="{{($paymentDetail['total_amount'] - $paymentDetail['total_paid'])}}">
            </div>

            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left"></label>
                <button type="button" class="btn btn-primary  text-white" id="editPaymentButton">
                  Update
                </button>
                </div>
              </div>
            </div>

          {{ Form::close() }}
         </div>
</div>
@endsection
@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/admin.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')