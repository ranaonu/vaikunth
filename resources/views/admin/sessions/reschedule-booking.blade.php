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
            {!! Form::open(['url' => url('/admin/reschedule-user-booking'),'id'=>'rescheduleUserSession',  'class' => 'my_form  rescheduleUserSession m-t-20 data-parsley-validate novalidate','enctype'=>'multipart/form-data'] ) !!}
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
                  <label for="hue-demo">Therapist</label>
                  <input
                    type="text"
                    id="team_name"
                    name="name"
                    class="form-control demo "
                    data-control="hue"
                    disabled
                    value="{{$bookingDetail->therepistDetail->name}}"
                  />
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Schedule Date</label>
                  <input
                    type="date"
                    id="team_name"
                    name="schedule_date"
                    class="form-control demo required "
                    data-control="hue"
                    value=""
                  />
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Schedule Time</label>
                  <input
                    type="time"
                    id="time"
                    name="schedule_time"
                    class="form-control demo required removeErrorField"
                    data-control="hue"                    
                    value="{{($bookingDetail->scheduled_time)}}"
                  />
                </div>
              </div>

              
              <div class="col-md-6 col-sm-6 col-xs-6">
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left"></label>
                <button type="button" class="btn btn-primary  text-white" id="reschduleBooking">
                  Update
                </button>
                </div>
              </div>
              <input type="hidden" name="id" value="{{$bookingDetail->id}}">
              <input type="hidden" name="updated_time" value="" id="updated_time">
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