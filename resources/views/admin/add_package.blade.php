@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-10 d-flex no-block align-items-center">
         <h4 class="page-title">Package Detail</h4>        
      </div>
      <div class="col-2 text-end">
        <!-- <a href="{{url('/admin/add-package')}}"><button type="button" class="btn btn-success btn-sm text-white">
          Add Package
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
   
    <div class="row">
      <div class="col-12">
        <div class="card">
          
             <div class="card-body">

              

              {!! Form::open(['url' => url('/add-new-package'),'id'=>'addPackageForm',  'class' => 'my_form  addPackageForm m-t-20 data-parsley-validate novalidate form-control1','enctype'=>'multipart/form-data'] ) !!}
              <div class="row g-3">



                <div class="col-md-6">
                      <label>Category <span class="requiredLabel">*</span></label>
                      <div class="form-group">
                          <select name="package_category" class="form-control border-1 required removeErrorField">
                              <option value="">--select--</option>
                              <option value="1">Dharamshala Package Tour</option>
                              <option value="2">Kerala Package Tour</option>
                              <option value="3">Goa Package Tour</option>
                              <option value="4">Rajasthan Package Tour</option>
                          </select>
                      </div>
                  </div>


                  <div class="col-md-6">
                      <label>Title <span class="requiredLabel">*</span></label>
                      <div class="form-group">
                          <input type="text" class="form-control border-1 required removeErrorField" id="title" name="title" placeholder="Your Name">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <label>Location <span class="requiredLabel">*</span></label>
                      <div class="form-group">
                          <input type="text" class="form-control border-1 required removeErrorField" id="location" name="location" placeholder="Your Name">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <label>Days <span class="requiredLabel">*</span></label>
                      <div class="form-group">
                          <select name="days" class="form-control border-1 required removeErrorField">
                            @for ($i = 1; $i <= 25; $i++)
                              <option value={{$i}}>{{$i}}</option>
                            @endfor
                             
                          </select>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <label>Nights <span class="requiredLabel">*</span></label>
                      <div class="form-group">
                          <select name="nights" class="form-control border-1 required removeErrorField">
                              @for ($i = 1; $i <= 25; $i++)
                              <option value={{$i}}>{{$i}}</option>
                            @endfor
                          </select>
                      </div>
                  </div>


                  <div class="col-md-6">
                      <label>Title Image <span class="requiredLabel">*</span></label>
                      <div class="form-group">
                         <input
                            type="file"
                            id="addPhotos"
                            class="form-control demo required removeErrorField"
                            data-position="bottom left"
                            name="title_image"
                            value=""
                            accept="image/png, image/gif, image/jpeg,image/jpg"
                        />
                      </div>
                  </div>

                  <div class="col-md-6">
                      <label>Overview Image <span class="requiredLabel">*</span></label>
                      <div class="form-group">
                         <input
                            type="file"
                            id="addPhotos"
                            class="form-control demo required removeErrorField"
                            data-position="bottom left"
                            name="overview_image"
                            value=""
                            accept="image/png, image/gif, image/jpeg,image/jpg"
                        />
                      </div>
                  </div>


                  <div class="col-md-6">
                      <label>Description <span class="requiredLabel">*</span></label>
                      <div class="form-group">
                         <textarea class="form-control border-1 required removeErrorField" placeholder="Description" id="message" name="description" style="height: 160px"></textarea>
                      </div>
                  </div>

                  <div class="col-md-12">
                      <label>Add Tour Description <span class="requiredLabel">*</span></label>
                  </div>

                  <div class="col-md-5">
                    <input type="text" class="form-control border-1" id="day_heading" name="day_heading[]" placeholder="Day Title">
                  </div>
                  <div class="col-md-6">
                    <textarea class="form-control border-1" placeholder="Day Description" id="dayDescription" name="day_description[]" style="height: 100px"></textarea>
                  </div>

                  <div class="col-md-12 desriptionRows"></div>


                  <div class="col-md-12">
                    <button type="button" class="btn btn-primary" id="addTourDescription">
                          {{ __('Add') }}
                      </button>
                  </div>

                  <div class="col-md-12">
                      <label>Add Tour Inclusion <span class="requiredLabel">*</span></label>
                      <div class="form-group ">
                          <input type="text" class="form-control border-1  mt-3" id="tour_inclusion1" name="tour_inclusion[]" placeholder="Tour Inclusion">
                          <input type="text" class="form-control border-1  mt-3" id="tour_inclusion2" name="tour_inclusion[]" placeholder="Tour Inclusion">
                          <input type="text" class="form-control border-1  mt-3" id="tour_inclusion3" name="tour_inclusion[]" placeholder="Tour Inclusion">
                          <input type="text" class="form-control border-1  mt-3" id="tour_inclusion4" name="tour_inclusion[]" placeholder="Tour Inclusion">
                          <input type="text" class="form-control border-1  mt-3" id="tour_inclusion5" name="tour_inclusion[]" placeholder="Tour Inclusion">
                          <input type="text" class="form-control border-1  mt-3" id="tour_inclusion6" name="tour_inclusion[]" placeholder="Tour Inclusion">
                          <input type="text" class="form-control border-1  mt-3" id="tour_inclusion7" name="tour_inclusion[]" placeholder="Tour Inclusion">
                          <input type="text" class="form-control border-1  mt-3" id="tour_inclusion8" name="tour_inclusion[]" placeholder="Tour Inclusion">
                          <input type="text" class="form-control border-1  mt-3" id="tour_inclusion9" name="tour_inclusion[]" placeholder="Tour Inclusion">
                          <input type="text" class="form-control border-1  mt-3" id="tour_inclusion10" name="tour_inclusion[]" placeholder="Tour Inclusion">
                      </div>
                  </div>



                  <div class="col-md-12">
                      <label>Add Tour Exclusions <span class="requiredLabel">*</span></label>
                      <div class="form-group ">
                          <input type="text" class="form-control border-1  mt-3" id="tour_exclusion" name="tour_exclusion[]" placeholder="Tour Exclusion">
                          <input type="text" class="form-control border-1  mt-3" id="tour_exclusion" name="tour_exclusion[]" placeholder="Tour Exclusion">
                          <input type="text" class="form-control border-1  mt-3" id="tour_exclusion" name="tour_exclusion[]" placeholder="Tour Exclusion">
                          <input type="text" class="form-control border-1  mt-3" id="tour_exclusion" name="tour_exclusion[]" placeholder="Tour Exclusion">
                          <input type="text" class="form-control border-1  mt-3" id="tour_exclusion" name="tour_exclusion[]" placeholder="Tour Exclusion">
                          <input type="text" class="form-control border-1  mt-3" id="tour_exclusion" name="tour_exclusion[]" placeholder="Tour Exclusion">
                          <input type="text" class="form-control border-1  mt-3" id="tour_exclusion" name="tour_exclusion[]" placeholder="Tour Exclusion">
                          <input type="text" class="form-control border-1  mt-3" id="tour_exclusion" name="tour_exclusion[]" placeholder="Tour Exclusion">
                          <input type="text" class="form-control border-1  mt-3" id="tour_exclusion" name="tour_exclusion[]" placeholder="Tour Exclusion">
                          <input type="text" class="form-control border-1  mt-3" id="tour_exclusion" name="tour_exclusion[]" placeholder="Tour Exclusion">
                      </div>
                  </div>





              </div>


              <div class="row mb-0">
                  <div class="col-md-8 offset-md-4">
                      <button type="button" class="btn btn-primary" id="submitPackageButton">
                          {{ __('Submit') }}
                      </button>

                      <!-- @if (Route::has('password.request'))
                          <a class="btn btn-link" href="{{ route('password.request') }}">
                              {{ __('Forgot Your Password?') }}
                          </a>
                      @endif -->
                  </div>
              </div>

          {{ Form::close() }}





             </div>
           </div>
         </div>
       </div>
</div>


@endsection
@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/users.js?time='.time().''?>"></script>
<script type="text/javascript">
  $('.addPackageForm')[0].reset();
</script>
@endsection('js-files')