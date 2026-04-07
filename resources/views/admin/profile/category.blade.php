@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-10 d-flex no-block align-items-center">
         <h4 class="page-title">Team</h4>        
      </div>
      <div class="col-2 text-end">
        <a href="{{url('/admin/add-category')}}"><button type="button" class="btn btn-success btn-sm text-white">
          Add Category
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
   
    <div class="row">
      <div class="col-12">
        <div class="card">
          
             <div class="card-body">

               <div class="table-responsive">
                 <table
                   id="zero_config"
                   class="table table-striped table-bordered"
                 >
                   <thead>
                     <tr>
                        <td><strong>Id</strong></td>
                       <th><strong>Name</strong></th>
                       <th><strong>Action</strong></th>
                   </thead>
                   <tbody>
                    @if(count($category)>0)
                     @foreach($category as $key => $list) 
                     <tr id="categoryRow-{{$list['id']}}">
                       <td>{{$key+1}}</td>
                       <td>{{$list['name']}}</td>
                       <td><button type="button" class="btn btn-danger btn-sm text-white deleteAssessment" row-id="{{$list['id']}}" id="deleteAssessment" modelName="category" delete-rowId="categoryRow-">
                          Delete
                        </button></td>
                     </tr>
                      @endforeach
                  @else
                   <tr>
                      <td colspan="3" align="center">No record found</td>
                    </tr>
                  @endif
                   </tbody>
                   
                 </table>
               </div>
             </div>
           </div>
         </div>
       </div>
</div>
@endsection
@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/admin.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')