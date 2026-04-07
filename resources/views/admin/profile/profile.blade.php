@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
         <h4 class="page-title"> My Profile</h4>        
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
            {!! Form::open(['url' => url('/update-profile'),'id'=>'addUsers',  'class' => 'my_form  createTeam m-t-20 data-parsley-validate novalidate','enctype'=>'multipart/form-data'] ) !!}
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
                    value="{{$userProfile['name']}}"
                  />
                </div>
              </div>


               <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">Category <span class="requiredItem">*</span></label>
                  <select class="form-control demo required removeErrorField" name="category">
                    <option value="0" {{$userProfile->category == 0  ? 'selected' : ''}}>--select--</option>
                    @if (count($categoryList)>0)
                    @foreach($categoryList as $key => $list)
                    <option value="{{$list['id']}}" {{$userProfile->category == $list['id']  ? 'selected' : ''}}>{{$list['name']}}</option>
                     @endforeach
                    @else
                    No category found
                    @endif
                  </select>
                </div>
              </div>



              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">Email</label>
                  <input
                    type="text"
                    id="team_email"
                    class="form-control demo"
                    name="email"
                    autocomplete="off"
                    value="{{$userProfile['email']}}"
                    disabled
                  />
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Phone Number <span class="requiredItem">*</span></label>
                  <input
                    type="text"
                    id="team_phone_no"
                    class="form-control demo required removeErrorField number"
                    data-control="hue"
                    name="phone_number"
                    value="{{$userProfile['phone_number']}}"
                  />
                </div>
              </div>


              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Profile Image</label>
                  <br >
                  <img src="{{asset('public/uploads/profile_img/').'/'.$userProfile['profile_pic']}}" alt="user" class="rounded-circle " width="60" height="60" />
                </div>
              </div>


              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Change Profile Image</label>
                  <input
                    type="file"
                    id="team_profile_image"
                    class="form-control demo removeErrorField"
                    data-position="bottom left"
                    name="profile_pic"
                  />
                </div>
              </div>


              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">Gender <span class="requiredItem">*</span></label>
                  <select class="form-control demo required removeErrorField" name="gender">
                    <option value="1" {{$userProfile->gender == 1  ? 'selected' : ''}}>Male</option>
                    <option value="2" {{$userProfile->gender == 2  ? 'selected' : ''}}>Female</option>
                    <option value="3" {{$userProfile->gender == 3  ? 'selected' : ''}}>Other</option>
                  </select>
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
                    value="{{$userProfile['address']}}"
                    name="address"
                  />
                </div>
              </div>

               <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">City <span class="requiredItem">*</span></label>
                  <input
                    type="text"
                    id="team_address "
                    class="form-control demo required removeErrorField"
                    data-position="bottom left"
                    value="{{$userProfile['city']}}"
                    name="city"
                  />
                </div>
              </div>

               <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">State <span class="requiredItem">*</span></label>
                  <input
                    type="text"
                    id="team_address "
                    class="form-control demo required removeErrorField"
                    data-position="bottom left"
                    value="{{$userProfile['address']}}"
                    name="state"
                  />
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">Counry <span class="requiredItem">*</span></label>
                  <select class="form-control demo required removeErrorField" name="country">

                    @if(count($countryList)>0)
                      @foreach($countryList as $list)
                        <option value="{{$list['id']}}" {{$userProfile->country == $list['id']  ? 'selected' : ''}}>{{$list['name']}}</option>
                    @endforeach
                    @endif


                    
                  </select>
                </div>
              </div>

               <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">Pin/Zip Code <span class="requiredItem">*</span></label>
                  <input
                    type="text"
                    id="team_address "
                    class="form-control demo required removeErrorField"
                    data-position="bottom left"
                    value="{{$userProfile['zipcode']}}"
                    name="zipcode"
                  />
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">Language <span class="requiredItem">*</span></label>
                  <input
                    type="text"
                    id="team_address "
                    class="form-control demo required removeErrorField"
                    data-position="bottom left"
                    value="{{$userProfile['langauge']}}"
                    name="langauge"
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
                    value="{{$userProfile['qualification']}}"
                  />
                </div>
              </div>

              
               <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Specilization <span class="requiredItem">*</span></label>
                  <textarea                    
                    id="team_specilization"
                    class="form-control demo required removeErrorField"
                    data-control="hue"
                    name="specilization"
                    rows="3"
                    cols="10"
                  >{{$userProfile['specilization']}}</textarea>
                </div>
              </div>

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
                  >{{$userProfile['description']}}</textarea>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">Experience <span class="requiredItem">*</span></label>
                  <select class="form-control demo required removeErrorField" name="experience">
                    <option value="1" {{$userProfile->experience == 1  ? 'selected' : ''}}>1</option>
                    <option value="2" {{$userProfile->experience == 2  ? 'selected' : ''}}>2</option>
                    <option value="3" {{$userProfile->experience == 3  ? 'selected' : ''}}>3</option>
                    <option value="4" {{$userProfile->experience == 4  ? 'selected' : ''}}>4</option>
                    <option value="5" {{$userProfile->experience == 5  ? 'selected' : ''}}>5</option>
                    <option value="6" {{$userProfile->experience == 6  ? 'selected' : ''}}>6</option>
                    <option value="7" {{$userProfile->experience == 7  ? 'selected' : ''}}>7</option>
                  </select>
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
                    value="{{$userProfile['session_cost']}}"
                  />
                </div>
              </div>


            </div>
            <div class="border-top">
            <div class="card-body">
              <button type="submit" class="btn btn-primary text-white" id="submitAddTeamForm">
                Update
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