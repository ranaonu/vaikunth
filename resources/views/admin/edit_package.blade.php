@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-10 d-flex no-block align-items-center">
         <h4 class="page-title">Edit Package Detail</h4>        
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

              

              {!! Form::open(['url' => url('/edit-package-detail'),'id'=>'editPackageForm',  'class' => 'my_form  editPackageForm m-t-20 data-parsley-validate novalidate form-control1','enctype'=>'multipart/form-data'] ) !!}
              <div class="row g-3">



                <div class="col-md-6">
                      <label>Category <span class="requiredLabel">*</span></label>
                      <div class="form-group">
                          <select name="package_category" class="form-control border-1 required removeErrorField">
                              <option value="">--select--</option>
                              <option value="1" {{$packageDetails['package_category'] == 1  ? 'selected' : ''}}>Himachal Tour Packages</option>
                              <option value="2" {{$packageDetails['package_category'] == 2  ? 'selected' : ''}}>Kerala Tour Packages</option>
                              <option value="3" {{$packageDetails['package_category'] == 3  ? 'selected' : ''}}>Goa Tour Packages</option>
                              <option value="4" {{$packageDetails['package_category'] == 4  ? 'selected' : ''}}>Rajasthan Tour Packages</option>
                              <option value="5" {{$packageDetails['package_category'] == 5  ? 'selected' : ''}}>Kashmir Tour Packages</option>
                              <option value="6" {{$packageDetails['package_category'] == 6  ? 'selected' : ''}}>Uttarakhand  Tour Packages</option>
                              <option value="7" {{$packageDetails['package_category'] == 7  ? 'selected' : ''}}>Gujarat  Tour Packages</option>
                              <option value="8" {{$packageDetails['package_category'] == 8  ? 'selected' : ''}}>Leh Ladakh Tour Packages</option>
                              <option value="9" {{$packageDetails['package_category'] == 9  ? 'selected' : ''}}>Tamil Nadu Tour Packages</option>
                              <option value="10" {{$packageDetails['package_category'] == 10  ? 'selected' : ''}}>Karnataka Tour Packages</option>
                              <option value="11" {{$packageDetails['package_category'] == 11  ? 'selected' : ''}}>Odisha Tour Packages</option>
                              <option value="12" {{$packageDetails['package_category'] == 12  ? 'selected' : ''}}>Sikkim & Darjeeling Tour Packages</option>
                              <option value="13" {{$packageDetails['package_category'] == 13 ? 'selected' : ''}}>North East Tour Packages</option>
                              <option value="14" {{$packageDetails['package_category'] == 14 ? 'selected' : ''}}>Madhya Pradesh Tour Packages</option>
                              <option value="15" {{$packageDetails['package_category'] == 15 ? 'selected' : ''}}>Andaman and Nicobar Tour Packages</option>
                              <option value="16" {{$packageDetails['package_category'] == 16 ? 'selected' : ''}}>International Tours Packages</option>
                          </select>
                      </div>
                  </div>


                  <div class="col-md-6">
                      <label>Title <span class="requiredLabel">*</span></label>
                      <div class="form-group">
                          <input type="text" class="form-control border-1 required removeErrorField" id="title" name="title" placeholder="Your Name" value="{{$packageDetails['title']}}">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <label>Location <span class="requiredLabel">*</span></label>
                      <div class="form-group">
                          <input type="text" class="form-control border-1 required removeErrorField" id="location" name="location" placeholder="Your Name" value="{{$packageDetails['location']}}">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <label>Days <span class="requiredLabel">*</span></label>
                      <div class="form-group">
                          <select name="days" class="form-control border-1 required removeErrorField">
                            <option value="">select</option>
                            @for ($i = 1; $i <= 25; $i++)
                              <option value={{$i}} {{$packageDetails['days'] == $i  ? 'selected' : ''}}>{{$i}}</option>
                            @endfor
                             
                          </select>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <label>Nights <span class="requiredLabel">*</span></label>
                      <div class="form-group">
                          <select name="nights" class="form-control border-1 required removeErrorField">
                              @for ($i = 1; $i <= 25; $i++)
                              <option value={{$i}} {{$packageDetails['nights'] == $i  ? 'selected' : ''}}>{{$i}}</option>
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
                            class="form-control demo"
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
                            class="form-control demo"
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
                         <textarea class="form-control border-1 required removeErrorField" placeholder="Description" id="message" name="description" style="height: 160px">{{$packageDetails['description']}}
                         </textarea>
                      </div>
                  </div>



                  

                  <div class="col-md-12">
                      <label>Add Tour Description <span class="requiredLabel">*</span></label>
                  </div>


                  @if($packageDetails['day_heading'] && count($packageDetails['day_heading'])>0)
                          @foreach($packageDetails['day_heading'] as $key => $value)
                      <div class="row deleteRow mt-2">   
                        <div class="col-md-5">
                          <input type="text" class="form-control border-1" value="{{$value}}" id="day_heading" name="day_heading[]" placeholder="Day Title">
                        </div>
                        <div class="col-md-6">
                          <textarea class="form-control border-1" placeholder="Day Description" id="dayDescription" name="day_description[]" style="height: 100px">{{$packageDetails['day_description'][$key]}}</textarea>
                        </div>

                        @if($key>0) 
                        <div class="col-md-1"><button type="button" class="btn btn-primary" id="deleteRow">Delete</button></div>
                        @endif
                    </div>

                  @endforeach
                      @endif

                  <div class="col-md-12 desriptionRows"></div>


                  <div class="col-md-12">
                    <button type="button" class="btn btn-primary" id="addTourDescription">
                          {{ __('Add') }}
                      </button>
                  </div>



                  <div class="col-md-12">
                      <label>Add Tour Inclusion <span class="requiredLabel">*</span></label>
                      <div class="form-group ">

                         @if($packageDetails['tour_inclusion'] && count($packageDetails['tour_inclusion'])>0)
                          @foreach($packageDetails['tour_inclusion'] as $key => $value)
                            <input type="text" class="form-control border-1  mt-3" value="{{$value['title']}}" id="tour_inclusion10" name="tour_inclusion[]" placeholder="Tour Inclusion">
                          @endforeach
                          @endif
                           @for ($i = count($packageDetails['tour_inclusion']); $i < 10; $i++)
                           <input type="text" class="form-control border-1  mt-3" id="tour_inclusion10" name="tour_inclusion[]" placeholder="Tour Inclusion">
                            @endfor
                      </div>
                  </div>



                  <div class="col-md-12">
                      <label>Add Tour Exclusions <span class="requiredLabel">*</span></label>
                      <div class="form-group ">

                         @if($packageDetails['tour_exclusion'] && count($packageDetails['tour_exclusion'])>0)
                          @foreach($packageDetails['tour_exclusion'] as $key => $value)
                            <input type="text" class="form-control border-1  mt-3" id="tour_exclusion" value="{{$value['title']}}" name="tour_exclusion[]" placeholder="Tour Exclusion">
                          @endforeach
                          @endif
                           @for ($i = count($packageDetails['tour_exclusion']); $i < 10; $i++)
                           <input type="text" class="form-control border-1  mt-3" id="tour_exclusion" name="tour_exclusion[]" placeholder="Tour Exclusion">
                            @endfor
                      </div>
                  </div>

                  <input type="hidden" name="edit_id" value="{{$packageDetails['id']}}">





              </div>


              <div class="row mb-0">
                  <div class="col-md-8 offset-md-4">
                      <button type="button" class="btn btn-primary" id="submitEditPackageButton">
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