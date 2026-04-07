@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-9 d-flex no-block align-items-center">
         <h4 class="page-title">View Assessment</h4>        
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
          <div class="card-body form-check">
                  
                  <h4 class="">Assessment Test : <span class="text-muted"
                        >{{ucfirst($testDetail['name'])}}</span></h4>


               @if(count($question)>0)
                    @foreach($question as $key => $que)         
                        <div class="d-flex flex-row comment-row mt-0">
                            <div class="comment-text w-100">
                                <h6 class="font-medium">Que: {{$que['question']}}</h6>
                                Ans: 
                                @if($que['get_answers'] && count($que['get_answers'])>0)
                                    @foreach($que['get_answers'] as $anskey => $ans)
                                        <span class="assessmentTestQuestions">{{$ans['answer']}}</span>
                                    @endforeach
                                @endif
                                <div class="comment-footer">
                                    <a href='{{url("/admin/edit/assessment/question/$que[id]")}}' class="mb-0 font-medium p-0 "><button
                                    type="button"
                                    class="btn btn-cyan btn-sm text-white"
                                    >
                                    Edit
                                    </button></a>                                    
                                    <button type="button" class="btn btn-danger btn-sm text-white deleteAssessment" row-id="{{$que['id']}}" id="deleteAssessment" modelName="questions" delete-rowId="question-">
                          Delete
                        </button>
                                </div>
                            </div>
                        </div>
                        <br>
                    @endforeach
                @else
                <div>                      
                  <span class="text-muted"
                    >No record found</span
                  >
                </div>
                @endif
           

            

         </div>
</div>
@endsection
@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/admin.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')