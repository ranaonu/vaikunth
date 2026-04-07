@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-10 d-flex no-block align-items-center">
         <h4 class="page-title">Permissions</h4>        
      </div>
      <div class="col-2 text-end">
        <a href="{{url('/admin/add-permission')}}"><button type="button" class="btn btn-success btn-sm text-white">
          Add New Permission
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
                       <th><strong>Title</strong></th>
                       <th><strong>Code</strong></th>
                       <th><strong>Creation Date</strong></th>
                     
                     </tr>
                   </thead>
                   <tbody>
                    @if(count($allPermission)>0)
                      @foreach($allPermission as $per) 
                      <tr>
                        <td>{{$per['id']}}</td>
                        <td>{{$per['title']}}</td>
                        <td>{{$per['code']}}</td>
                        <td>{{date('d/m/Y',strtotime($per['created_at']))}}</td>
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