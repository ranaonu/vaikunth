@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
         <h4 class="page-title"> Add Permission</h4>        
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
            {!! Form::open(['url' => url('/admin/add-new-permission'),'id'=>'addPermission',  'class' => 'my_form  addPermission m-t-20 data-parsley-validate novalidate','enctype'=>'multipart/form-data'] ) !!}
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Title</label>
                  <input
                    type="text"
                    id="permission_title"
                    name="title"
                    class="form-control demo required removeErrorField"
                    data-control="hue"
                    value=""
                  />
                </div>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="position-bottom-left">Code</label>
                  <input
                    type="text"
                    id="permission_code"
                    class="form-control demo required removeErrorField"
                    name="code"
                    autocomplete="off"
                    placeholder="code_value"
                    value=""
                  />
                </div>
              </div>
            </div>   

          </div>
           <div class="border-top">
            <div class="card-body">
              <button type="submit" class="btn btn-success text-white" id="submitAddPermissionForm">
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