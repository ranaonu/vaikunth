@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-10 d-flex no-block align-items-center">
         <h4 class="page-title">Team Memebr Permissions</h4>        
      </div>
      <!-- <div class="col-2 text-end">
        <a href="{{url('/admin/add-team')}}"><button type="button" class="btn btn-success btn-sm text-white">
          Add Team
        </button></a>
      </div> -->
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
                       <th><strong>Permissions</strong></th>
                       <th><strong>Creation Date</strong></th>
                       <th><strong>Edit Permission</strong></th>
                     </tr>
                   </thead>
                   <tbody>
                    @if(count($users)>0)
                     @foreach($users as $user) 
                     <tr>
                       <td>{{$user['id']}}</td>
                       <td>{{$user['name']}}</td>
                       <td>
                        @php
                        $permis = getUserPermission($user['default_permission_ids']);
                        @endphp
                        {{$permis}}</td>
                       <td>{{date('d/m/Y',strtotime($user['created_at']))}}</td>
                       <td><a href="{{url('/')}}/admin/edit/user/permissions/{{base64_encode($user['id'])}}" class="light-blue-btn btn"><button type="button" class="btn btn-cyan btn-sm text-white">
                              Edit
                            </button></a></td>
                     </tr>
                      @endforeach
                  @else
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