@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-10 d-flex no-block align-items-center">
         <h4 class="page-title">User Sessions</h4>        
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
   
    <div class="row">
      <div class="col-12">
        <div class="card">
          
             <div class="card-body">

               <div class="table-responsive">
                 <table
                   id="zero_config"
                   class="table table-striped table-bordered"
                 >
                   <thead>
                     <tr>
                        <td><strong>Id</strong></td>
                       <th><strong>User Name</strong></th>
                       <th><strong>Schedule Date</strong></th>
                       <th><strong>Time</strong></th>
                       <th><strong>Status</strong></th>
                     </tr>
                   </thead>
                   <tbody>
                    @if(count($bookingSessions)>0)
                     @foreach($bookingSessions as $key => $booking)
                     <tr> 
                        <td>{{$key+1}}</td>
                        <td>{{$booking['user_detail']['name']}}</td>
                        <td>{{date('d/m/Y',strtotime($booking['schedule_date']))}} </td>
                        <td>{{($booking['scheduled_time'])}} </td>
                        <td>
                            @if($booking['complete']==1)
                            <button type="button" class="btn btn-info btn-sm text-white">
                              In Process
                            </button>
                            @elseif ($booking['complete']==2) 
                            <button type="button" class="btn btn-info btn-sm text-white">
                              Confirm
                            </button>
                            @elseif ($booking['complete']==3) 
                            <button type="button" class="btn btn-success btn-sm text-white">
                              Complete
                            </button>
                            @else
                            <button type="button" class="btn btn-warning btn-sm text-white">
                              Pending
                            </button>
                            @endif


                            @if ($booking['complete']>=3)
                          <a href="{{url('/')}}/admin/view/session/{{base64_encode($booking['id'])}}" target="_blank"><button type="button" class="btn btn-danger btn-sm text-white" style="margin-bottom: 5px;">
                              View Notes
                            </button>
                          </a>


                          <button type="button" class="btn btn-danger btn-sm text-white editNotesModal" id="editNotesModal" session_id="{{$booking['id']}}" style="margin-bottom: 5px;">
                              Add Notes
                          </button>
                          @endif

                        </td>
                      </tr>
                      @endforeach
                  @else
                  <tr><td colspan="7" align="center">No record found</td></tr>
                  @endif
                   </tbody>
                   
                 </table>
               </div>
             </div>
           </div>
         </div>
       </div>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Please Provide Session Summary</h5>
          </div>
          <div class="modal-body">
                {!! Form::open(['url' => url('/admin/save-session-summary'),'id'=>'saveSessionSummary',  'class' => 'my_form  saveSessionSummary m-t-20 data-parsley-validate novalidate','enctype'=>'multipart/form-data'] ) !!}
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label for="hue-demo">Chief Complaints : </label>

                      <textarea rows="3" cols="20" class="form-control required removeErrorField" name="cheif_complaints"></textarea>


                      
                    </div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label for="hue-demo">Observations : </label>
                      <textarea rows="3" cols="20" class="form-control required removeErrorField" name="observations"></textarea>
                    </div>
                  </div>

                   <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label for="hue-demo">Recommendations : </label>
                      <textarea rows="3" cols="20" class="form-control required removeErrorField" name="recommendations"></textarea>
                    </div>
                  </div>


                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <input id="no_next_follow_up"
                       type="checkbox" class="" name="no_next_follow_up"> No follow-up Required?
                    </div>
                  </div>

                   <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <label for="hue-demo">Next session follow up date: </label>
                      <input id="datepicker-autoclose"
                      placeholder="Enter Date" type="text" class="form-control" name="next_follow_up_date"  >
                    </div>
                  </div>
                  <input type="hidden" name="session_id" value="" id="summary_user_id">
                </div>  
               
              {{ Form::close() }}
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success text-white" id="submitSessionSummary">
                    Save
                  </button>
            <button type="button" class="btn btn-secondary" id="openModal" >Close</button>
          </div>
        </div>
      </div>
    </div>


@endsection

@section('css-files')
<link
      rel="stylesheet"
      type="text/css"
      href="<?php echo url('/').'/public/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css?time='.time().''?>"
    />
@endsection
@section('js-files')
<script src="<?php echo url('/').'/public/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js?time='.time().''?>"></script>
<script type="text/javascript" src="<?php echo url('/').'/public/js/admin.js?time='.time().''?>"></script>
<script type="text/javascript">
  jQuery("#datepicker-autoclose").datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        startDate: new Date(),
        endDate: new Date(new Date().setMonth(new Date().getMonth() + 1)),
      });
</script>
@endsection('js-files')