@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<link
      rel="stylesheet"
      type="text/css"
      href="<?php echo url('/').'/public/assets/libs/quill/dist/quill.snow.css?time='.time().''?>"
    />
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
         <h4 class="page-title"> Add Service</h4>        
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
            {!! Form::open(['url' => url('/admin/save-sub-service'),'id'=>'addSubServices',  'class' => 'my_form  addSubServices m-t-20 data-parsley-validate novalidate','enctype'=>'multipart/form-data'] ) !!}
            <div class="row">

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Service</label>
                  <select class="form-control demo required" name="service_id">
                    <option value="">--select service--</option>
                    @if(count($services)>0)
                     @foreach($services as $ser) 
                      <option value="{{$ser['id']}}">{{$ser['name']}}</option>
                      @endforeach
                    @endif
                  </select>
                </div>
              </div>


              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Name</label>
                  <input
                    type="text"
                    id="team_name"
                    name="name"
                    class="form-control demo required removeErrorField"
                    data-control="hue"
                    value=""
                  />
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">Image</label>
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

                <textarea name="content" style="display:none" id="service-hiddenArea" ></textarea>
              <div class="row">
            <div class="col-12">
                  <h4 class="card-title">Content</h4>
                  <!-- Create the editor container -->
                  <div id="service-editor" name="service-content" style="height: 300px">
                   
                  </div>
                </div>
          </div>
            </div>  

          </div>
           <div class="border-top">
            <div class="card-body">
              <button type="submit" class="btn btn-success text-white" id="submitAddSubServiceForm">
                Save
              </button>
             
            </div>
          </div>
          {{ Form::close() }}
         </div>
</div>
@endsection
@section('js-files')
<script src="<?php echo url('/').'/public/assets/libs/quill/dist/quill.min.js?time='.time().''?>"></script>

<script type="text/javascript" src="<?php echo url('/').'/public/js/admin.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>

<script type="text/javascript">

  var toolbarOptions = [
                ['bold', 'italic', 'underline'],        // toggled buttons
                ['blockquote', 'code-block'],

                [{ 'header': 1 }],               // custom button values
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                     // superscript/subscript
                [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
                [{ 'direction': 'rtl' }],                         // text direction

                [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                //[ 'image' ],          // add's image support
                [{ 'color': [] }], 
                [{ 'align': [] }],

                ['clean']                                         // remove formatting button
            ];


  var quill = new Quill("#service-editor", {
    theme: 'snow',
    modules: {

                toolbar: toolbarOptions
            }
      });
</script>

@endsection('js-files')