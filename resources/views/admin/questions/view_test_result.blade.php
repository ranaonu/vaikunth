@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-9 d-flex no-block align-items-center">
         <h4 class="page-title">View Result</h4>        
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
                  <h4 class="">User Name : <span class="text-muted"
                        >{{ucfirst($userDetail['name'])}}</span></h4>
                  <h4 class="">Assessment Test : <span class="text-muted"
                        >{{ucfirst($testDetail['name'])}}</span></h4>

           <ul class="list-style-none">
            @if(count($getQuestion)>0)
                     @foreach($getQuestion as $key => $que)
                  <li class="d-flex no-block card-body border-top">
                    <i class="mdi mdi-check-circle fs-4 w-30px mt-1"></i>
                    <div>
                    <a href="#" class="mb-0 font-medium p-0"
                        > {{$que['question']}}</a>
                      <span class="text-muted"
                        >{{$getAnswers[$key]['answer']}}</span
                      >
                    </div>
                    
                  </li>
                
                   @endforeach
                    @else
                    <li class="d-flex no-block card-body">
                    <i class="mdi mdi-check-circle fs-4 w-30px mt-1"></i>
                    <div>
                      
                      <span class="text-muted"
                        >No record found</span
                      >
                    </div>
                    
                  </li>
                
                    @endif
                </ul>

            

         </div>
</div>
@endsection
@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/admin.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')