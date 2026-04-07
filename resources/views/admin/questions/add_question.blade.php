@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
         <h4 class="page-title"> Add Assessment Questions</h4>        
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
            {!! Form::open(['url' => url('/admin/add-questions'),'id'=>'addQuestionsForm',  'class' => 'my_form  addQuestionsForm m-t-20 data-parsley-validate novalidate','enctype'=>'multipart/form-data'] ) !!}
            
             <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Select Assessment Tool</label>
                  <select class="form-control demo required removeErrorField" name="type">
                    
                    <option value="">--Select Tool--</option>

                     @if(count($toolList)>0)
                     @foreach($toolList as $key => $t) 
                     <option value="{{$t['id']}}">{{$t['name']}}</option>
                     @endforeach
                    @else
                    <option value="1">Test 1</option>
                    @endif
                  </select>
                </div>
              </div>
              </div>


            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Question</label>
                  <input
                    type="text"
                    id="question"
                    name="question"
                    class="form-control demo required removeErrorField"
                    data-control="hue"
                    value=""
                  />
                </div>
              </div>
              </div>

              <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Answer 1</label>
                  <input
                    type="text"
                    id="answer"
                    name="answer[]"
                    class="form-control demo required removeErrorField"
                    data-control="hue"
                    value=""
                  />
                </div>
              </div>
              </div>
               <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Answer 2</label>
                  <input
                    type="text"
                    id="answer"
                    name="answer[]"
                    class="form-control demo required removeErrorField"
                    data-control="hue"
                    value=""
                  />
                </div>
              </div>
            </div>
             <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Answer 3</label>
                  <input
                    type="text"
                    id="answer"
                    name="answer[]"
                    class="form-control demo required removeErrorField"
                    data-control="hue"
                    value=""
                  />
                </div>
              </div>
              </div>
               <div class="row">

              <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="form-group">
                  <label for="hue-demo">Answer 4</label>
                  <input
                    type="text"
                    id="answer"
                    name="answer[]"
                    class="form-control demo required removeErrorField"
                    data-control="hue"
                    value=""
                  />
                </div>
              </div>             
            </div> 
          </div>
           <div class="border-top">
            <div class="card-body">
              <button type="submit" class="btn btn-success text-white" id="submitAddQuestionForm">
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