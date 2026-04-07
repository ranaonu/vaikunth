@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-10 d-flex no-block align-items-center">
         <h4 class="page-title">Packages List</h4>        
      </div>
      <div class="col-2 text-end">
        <a href="{{url('/admin/add-package')}}"><button type="button" class="btn btn-success btn-sm text-white">
          Add Package
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
                       <th><strong>Qualification</strong></th>
                       <th><strong>Specialization</strong></th>
                       <th><strong>Profile Image</strong></th>
                       <th><strong>Creation Date</strong></th>
                       
                        <th>Action</th>
                     </tr>
                   </thead>
                   <tbody>
                    <td>1</td>
                    <td>12</td>
                    <td>34</td>
                    <td>56</td>
                    <td>88</td>
                    <td>97</td>
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