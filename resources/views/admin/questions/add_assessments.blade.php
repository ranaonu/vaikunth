@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
         <h4 class="page-title"> Add Assessment</h4>        
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
            {!! Form::open(['url' => url('/admin/save-assessments'),'id'=>'addAssements',  'class' => 'my_form  addAssements m-t-20 data-parsley-validate novalidate','enctype'=>'multipart/form-data'] ) !!}
            <div class="row">

             
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Color</label>
                  <select class="form-control demo required" name="color">
                    <option value="">--select color--</option>
                    <option value="#ecbcb2" style="background-color: #ecbcb2;">ecbcb2</option>
                    <option value="#aab2b4" style="background-color: #aab2b4;">aab2b4</option>
                    <option value="#bed1cf" style="background-color: #bed1cf;">bed1cf</option>
                    <option value="#dfc4b1" style="background-color: #dfc4b1;">dfc4b1</option>
                    <option value="#829fa7" style="background-color: #829fa7;">829fa7</option>
                    <option value="#c9a8a1" style="background-color: #c9a8a1;">c9a8a1</option>
                    <option value="#4a5768" style="background-color: #4a5768;">4a5768</option>
                    <option value="#718687" style="background-color: #718687;">718687</option>
                    <option value="#c59e8d" style="background-color: #c59e8d;">c59e8d</option>
                    <option value="#9c7771" style="background-color: #9c7771;">9c7771</option>
                    <option value="#9c7771" style="background-color: #9c7771;">9c7771</option>
                    <option value="#8f9981" style="background-color: #8f9981;">8f9981</option>
                    
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
                  <label for="hue-demo">Cost</label>
                  <input
                    type="text"
                    id="team_name"
                    name="cost"
                    class="form-control demo required removeErrorField onlynumber"
                    data-control="hue"
                    value=""
                  />
                </div>
              </div>
             
            </div>  

          </div>
           <div class="border-top">
            <div class="card-body">
              <button type="submit" class="btn btn-success text-white" id="submitAddAssessmentsForm">
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