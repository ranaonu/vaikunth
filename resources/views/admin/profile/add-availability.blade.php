@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
         <h4 class="page-title"> My Availability</h4>        
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
            <p class="availabiltiyError" style="color:red"></p>
            {!! Form::open(['url' => url('/admin/update-availability'),'id'=>'addavailabilityTime',  'class' => 'my_form  createavailibility m-t-20 data-parsley-validate novalidate','enctype'=>'multipart/form-data'] ) !!}
            <div class="row addMoreTimeRow" id="addMoreTimeRow">


              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label for="position-bottom-left">Select Day</label>
                  <input type="checkbox" name="day[]" value="Sunday" class="availabilityDays"> Sunday
                  <input type="checkbox" name="day[]" value="Monday" class="availabilityDays"> Monday
                  <input type="checkbox" name="day[]" value="Tuesday" class="availabilityDays"> Tuesday
                  <input type="checkbox" name="day[]" value="Wednesday" class="availabilityDays"> Wednesday
                  <input type="checkbox" name="day[]" value="Thursday" class="availabilityDays"> Thursday
                  <input type="checkbox" name="day[]" value="Friday" class="availabilityDays"> Friday
                  <input type="checkbox" name="day[]" value="Saturday" class="availabilityDays"> Saturday
                  <!-- <select class="form-control demo required removeErrorField" name="day[]">
                    <option value="">Select Day</option>
                    <option value="Sunday">Sunday</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                  </select> -->
                </div>
              </div>

              @for($i=1;$i<=4;$i++)

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">Slot {{$i}}</label>
                  <select class="form-control demo {{ $i == '1' ? 'required' : '' }} removeErrorField" name="slot[]">
                    <option value="">Select Time</option>
                    <?php
                    $start = strtotime('00:00');
                    $end   = strtotime('23:00');

                  while ($start <= $end) {

                      // Set dates to display
                      $date1 = $start;        
                      $date2 = $start + (60*60);
                  ?>
                    <option value="{{date('g:i A',$date1) . " - " . date('g:i A',$date2)}}">{{date('g:i A',$date1) . " - " . date('g:i A',$date2)}}</option>
                  <?php  $start += (60*60);

                  }

                  ?>
                  </select>
                </div>
              </div>
              @endfor

               


            </div>
            <div class="border-top1">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <!-- <button type="submit" class="btn btn-primary text-white" id="addMoreTimeAvailability">
                  Add More Time
                </button> -->
                <button type="submit" class="btn btn-success text-white" id="submitAddTeamForm">
                  Save
                </button>               
              </div>
          </div>
            {{ Form::close() }}

         </div>

</div>
@endsection
@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/profile.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')