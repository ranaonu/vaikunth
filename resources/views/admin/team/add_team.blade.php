@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
         <h4 class="page-title"> Add Team</h4>        
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
            {!! Form::open(['url' => url('/admin/add-team-user'),'id'=>'addUsers',  'class' => 'my_form  createTeam m-t-20 data-parsley-validate novalidate','enctype'=>'multipart/form-data'] ) !!}
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Name <span class="requiredItem">*</span></label>
                  <input
                    type="text"
                    id="team_name"
                    name="name"
                    class="form-control demo required removeErrorField alphanumeric"
                    data-control="hue"
                    value=""
                  />
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">Email <span class="requiredItem">*</span></label>
                  <input
                    type="text"
                    id="team_email"
                    class="form-control demo required removeErrorField email"
                    name="email"
                    autocomplete="off"
                    value=""
                  />
                </div>
              </div>
            </div>   

            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Password <span class="requiredItem">*</span></label>
                  <input
                    type="password"
                    id="team_password"
                    class="form-control demo required removeErrorField"
                    data-control="hue"
                    name="password"
                    autocomplete="off"
                    value=""
                  />
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">Address <span class="requiredItem">*</span></label>
                  <input
                    type="text"
                    id="team_address "
                    class="form-control demo required removeErrorField"
                    data-position="bottom left"
                    value=""
                    name="address"
                  />
                </div>
              </div>
            </div>


            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Phone Number <span class="requiredItem">*</span></label>
                  <input
                    type="text"
                    id="team_phone_no"
                    class="form-control demo required removeErrorField number"
                    data-control="hue"
                    name="phone_number"
                    value=""
                  />
                </div>
              </div>

               <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Zip Code <span class="requiredItem">*</span></label>
                  <input
                    type="text"
                    id="team_zipcode"
                    class="form-control demo required removeErrorField"
                    data-control="hue"
                    name="zipcode"
                    value=""
                  />
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">Qualification <span class="requiredItem">*</span></label>
                  <input
                    type="text"
                    id="team_qualification"
                    class="form-control demo required removeErrorField"
                    data-position="bottom left"
                    name="qualification"
                    value=""
                  />
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Session Cost (INR) <span class="requiredItem">*</span></label>
                  <input
                    type="text"
                    id="team_memebr_session_cost"
                    class="form-control demo required removeErrorField onlynumber"
                    data-position="bottom left"
                    name="session_cost"
                    value=""
                  />
                </div>
              </div>


            </div>

            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Specilization <span class="requiredItem">*</span></label>
                  <textarea                    
                    id="team_specilization"
                    class="form-control demo required removeErrorField"
                    data-control="hue"
                    name="specilization"
                    value=""
                    rows="3"
                    cols="10"
                  ></textarea>
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">Profile Image <span class="requiredItem">*</span></label>
                  <input
                    type="file"
                    id="team_profile_image"
                    class="form-control demo required removeErrorField"
                    data-position="bottom left"
                    name="profile_pic"
                    value=""
                  />
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Breif  Description <span class="requiredItem">*</span></label>
                  <textarea                    
                    id="team_specilization"
                    class="form-control demo required removeErrorField"
                    data-control="hue"
                    name="description"
                    
                    rows="3"
                    cols="10"
                  ></textarea>
                </div>
              </div>
            </div>


          </div>
           <div class="border-top">
            <div class="card-body">
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
<script type="text/javascript" src="<?php echo url('/').'/public/js/users.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')