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
         <h4 class="page-title"> Add Blog</h4>        
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
            {!! Form::open(['url' => url('/admin/add-blog'),'id'=>'addBlog',  'class' => 'my_form  addBlog m-t-20 data-parsley-validate novalidate','enctype'=>'multipart/form-data'] ) !!}
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label for="hue-demo">Heading</label>
                  <input
                    type="text"
                    id="team_name"
                    name="heading"
                    class="form-control demo required removeErrorField"
                    data-control="hue"
                    value=""
                  />
                </div>
              </div>


              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Name</label>
                  <input
                    type="text"
                    id="name"
                    name="name"
                    class="form-control demo required removeErrorField"
                    data-control="hue"
                    value=""
                  />
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Location</label>
                  <input
                    type="text"
                    id="location"
                    name="location"
                    class="form-control demo required removeErrorField"
                    data-control="hue"
                    value=""
                  />
                </div>
              </div>



              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label for="hue-demo">Description</label>
                  <textarea name="description" class="form-control demo required removeErrorField" data-control="hue" rows="10"></textarea>
                 
                </div>
              </div>



              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">Add Blog Image</label>
                  <input
                    type="file"
                    id="team_profile_image"
                    class="form-control demo required removeErrorField"
                    data-position="bottom left"
                    name="blog_image"
                    value=""
                  />
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">Add Video URL</label>
                  <input
                    type="text"
                    id="video"
                    class="form-control demo removeErrorField"
                    data-position="bottom left"
                    name="blog_url"
                    value=""
                  />
                </div>
              </div>

            </div>
            <div class="row">
            <div class="col-12">
                  <h4 class="card-title">Blog Text</h4>
                  <!-- Create the editor container -->
                  <div id="editor" name="blog-text" style="height: 300px">
                   
                  </div>
                </div>
          </div>

          <textarea name="blog_content" style="display:none" id="hiddenArea" ></textarea>
          <br>
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <button type="button" class="btn btn-success text-white" id="addBlogButton">
                  Save
                </button>
              </div>
             
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


  var quill = new Quill("#editor", {
    theme: 'snow',
    modules: {

                toolbar: toolbarOptions
            }
      });
</script>
@endsection('js-files')