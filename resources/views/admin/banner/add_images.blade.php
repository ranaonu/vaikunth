@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
         <h4 class="page-title">Add Image</h4>        
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
               {!! Form::open(['url' => url('/admin/add-images'),'id'=>'addImages',  'class' => 'my_form  addImages m-t-20 data-parsley-validate novalidate','enctype'=>'multipart/form-data'] ) !!}

                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                      <label for="hue-demo">Select Banner Image</label>
                      <select class="form-control demo required removeErrorField" name="section">
                        <option value="">--Select Section--</option>
                        <option value="logo">Logo</option>
                        <option value="home_page_slider">Home Page Slider</option>
                        <option value="home_page_quotes">Home Page Quotes</option>
                        <option value="therapy_banner_image">Therapy Banner Image</option>
                        <option value="faq">FAQ</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">Profile Image</label>
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

              <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                      <label for="hue-demo">Title</label>
                      <input
                        type="text"
                        id="team_profile_image"
                        class="form-control demo removeErrorField"
                        data-position="bottom left"
                        name="content"
                        value=""
                  />
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="form-group">
                      <label for="hue-demo">Description</label>

                      <textarea name="description" rows="5" cols="20" class="form-control demo removeErrorField"></textarea>
                    </div>
                  </div>



                </div>
             

             </div>
              <div class="border-top">
                <div class="card-body">
                  <button type="submit" class="btn btn-success text-white" id="submitAddImages">
                    Save
                  </button>
                 
                </div>
               </div>
               {{ Form::close() }}
           </div>
</div>


@endsection

@section('js-files')


<script type="text/javascript" src="<?php echo url('/').'/public/js/admin.js?time='.time().''?>"></script>
<script type="text/javascript">
   $(document).ready(function(){
     $("#addImages")[0].reset()
   })
 </script>
@endsection('js-files')