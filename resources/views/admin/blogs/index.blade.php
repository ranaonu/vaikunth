@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-10 d-flex no-block align-items-center">
         <h4 class="page-title">Blogs</h4>        
      </div>
      <div class="col-2 text-end">
        <a href="{{url('/admin/create/blog')}}"><button type="button" class="btn btn-success btn-sm text-white">
          Add blog
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
                        <th><strong>Creation Date</strong></th>
                        <th>Action</th>
                     </tr>
                   </thead>
                   <tbody>
                    @if(count($blogs)>0)
                     @foreach($blogs as $key =>$b) 
                     <tr>
                       <td>{{$key+1}}</td>
                       <td>{{$b['heading']}}</td>
                       <td>{{date('d/m/Y',strtotime($b['created_at']))}}</td>
                       <td>
                          <button type="button" class="btn btn-danger btn-sm text-white deleteBlog" id="deleteAssessment" row-id="{{$b['id']}}" modelName="blog" delete-rowId="{{$b['id']}}">
                              Delete
                          </button>
                        </td>
                     </tr>
                      @endforeach
                  @else
                  <tr><td colspan="4" align="center">No record found</td></tr>
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
@endsection('js-files')