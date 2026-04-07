@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-9 d-flex no-block align-items-center">
         <h4 class="page-title"> Images</h4>        
      </div>
      <div class="col-3 text-end">
        
        <a href="{{url('/admin/add-banner-images')}}"><button type="button" class="btn btn-success btn-sm text-white">
          Add Image
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
          
          <div class="table-responsive">
                 <table
                   id="zero_config"
                   class="table table-striped table-bordered serviceListTable"
                 >
                   <thead>
                     <tr>
                        <td><strong>Id</strong></td>
                       <th><strong>Content</strong></th>
                       <th><strong>Section</strong></th>
                       <th><strong>Image</strong></th>
                       <th><strong>Action</strong></th>
                      
                     </tr>
                   </thead>
                   <tbody>
                    @if(count($images)>0)
                     @foreach($images as $key => $ser) 
                     <tr id="images-{{$ser['id']}}">
                       <td>{{$key+1}}</td>
                       <td>{{$ser['content']}}</td>
                       <td>{{$ser['section']}}</td>
                       <td><img src="{{asset('public/uploads/banner_images/').'/'.$ser['images_name']}}" alt="user" class="rounded-circle" width="40" height="40" /></td>
                       <td><button type="button" class="btn btn-danger btn-sm text-white deleteAssessment" row-id="{{$ser['id']}}" id="deleteAssessment" modelName="imaegs" delete-rowId="images-">
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