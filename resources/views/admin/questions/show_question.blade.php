@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-9 d-flex no-block align-items-center">
         <h4 class="page-title">Assessment Tools</h4>        
      </div>
      <div class="col-3 text-end">
        
        <a href="{{url('/admin/add-assessment')}}"><button type="button" class="btn btn-success btn-sm text-white">
          Add Assessment
        </button></a>
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

            <div class="table-responsive">
                 <table
                   id="zero_config"
                   class="table table-striped table-bordered serviceListTable"
                 >
                   <thead>
                     <tr>
                        <td><strong>Id</strong></td>
                       <th><strong>Name</strong></th>
                       <th><strong>Color</strong></th>
                       <th><strong>Cost</strong></th>
                       <th><strong>Created At</strong></th>
                       <th><strong>Action</strong></th>
                      
                     </tr>
                   </thead>
                   <tbody>
                    @if(count($assessments)>0)
                     @foreach($assessments as $key => $que) 
                      <tr id="assessmentsRow-{{$que['id']}}">
                        <td>{{$key+1}}</td>
                        <td>{{$que['name']}}</td>
                        <td style="background-color: {{$que['color']}}">{{$que['color']}}</td>
                        <td>{{$que['cost']}}</td>
                        <td>{{date('d/m/Y',strtotime($que['created_at']))}}</td>
                        <td>

                          <a href='{{url("/admin/edit/assessment/$que[id]")}}'><button
                          type="button"
                          class="btn btn-cyan btn-sm text-white"
                        >
                          Edit
                        </button></a>

                          <a href='{{url("/admin/view/assessment/$que[id]")}}'><button
                          type="button"
                          class="btn btn-success btn-sm text-white"
                        >
                          View
                        </button></a>

                          <button type="button" class="btn btn-danger btn-sm text-white deleteAssessment" row-id="{{$que['id']}}" id="deleteAssessment" modelName="Assessments" delete-rowId="assessmentsRow-">
                          Delete
                        </button></td>
                      </tr>
                      @endforeach
                    @else
                    <tr><td colspan="5" align="left">No reord found</td></tr>
                    @endif
                   </tbody>
                 </table>
               </div>

         </div>
</div>
@endsection
@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/admin.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')