@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
         <h4 class="page-title"> Add Category</h4>        
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
            {!! Form::open(['url' => url('/admin/submit-add-category'),'id'=>'addCategory',  'class' => 'my_form  addCategory m-t-20 data-parsley-validate novalidate','enctype'=>'multipart/form-data'] ) !!}
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Category Name</label>
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
            </div>   
          </div>
           <div class="border-top">
            <div class="card-body">
              <button type="submit" class="btn btn-success text-white" id="submitCategoryForm">
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
</script>
@endsection('js-files')