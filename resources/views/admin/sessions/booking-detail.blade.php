@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
         <h4 class="page-title"> Edit Session</h4>        
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
            {!! Form::open(['url' => url('/admin/edit-user-session'),'id'=>'editUserSession',  'class' => 'my_form  editUserSession m-t-20 data-parsley-validate novalidate','enctype'=>'multipart/form-data'] ) !!}
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Name</label>
                  <input
                    type="text"
                    id="team_name"
                    name="name"
                    class="form-control demo "
                    data-control="hue"
                    disabled
                    value="{{$bookingDetail->userDetail->name}}"
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
                    value="{{$bookingDetail->userDetail->email}}"
                  />
                </div>
              </div>

              

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Schedule Date</label>
                  <input
                    type="text"
                    id="team_name"
                    name="schedule_date"
                    class="form-control demo "
                    data-control="hue"
                    disabled
                    value="{{date('d/m/Y',strtotime($bookingDetail->schedule_date))}}"
                  />
                </div>
              </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <label for="hue-demo">Schedule Time</label>
                    <input
                      type="text"
                      id="time"
                      name="schedule_time"
                      class="form-control demo required removeErrorField"
                      data-control="hue"                    
                      value="{{($bookingDetail->scheduled_time)}}"
                      disabled
                    />
                  </div>
                </div>

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">Status</label>
                  <select class="form-control demo required removeErrorField" name="is_scheduled">
                    <option value="">-select-</option>
                      @if($bookingDetail->is_scheduled<2)
                      <option value="1" {{$bookingDetail->is_scheduled == 1  ? 'selected' : ''}}>In Process</option>
                      <option value="0" {{$bookingDetail->is_scheduled == 0  ? 'selected' : ''}}>Pending Payment</option>
                      <option value="2" {{$bookingDetail->is_scheduled == 2  ? 'selected' : ''}}>Confirm</option>
                      @endif


                    <option value="3" {{$bookingDetail->is_scheduled == 3  ? 'selected' : ''}}>Complete</option>
                  </select>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-6">
              </div>

              
              <input type="hidden" name="id" value="{{$bookingDetail->id}}">
              <input type="hidden" name="updated_time" value="" id="updated_time">
            </div>

            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left"></label>
                <button type="button" class="btn btn-primary  text-white" id="updateBooking">
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
  var today = new Date().toISOString().slice(0, 16);
  console.log(today)

document.getElementsByName("schedule_date")[0].min = today;
</script>
@endsection('js-files')