@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-10 d-flex no-block align-items-center">
         <h4 class="page-title">Team</h4>        
      </div>
      <div class="col-2 text-end">
        <a href="{{url('/admin/add-team')}}"><button type="button" class="btn btn-success btn-sm text-white">
          Add Team
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
                        @if(Auth::user()->role==1)
                          <th>View Account</th>
                        @endif
                        <th>Action</th>
                     </tr>
                   </thead>
                   <tbody>
                    @if(count($users)>0)
                     @foreach($users as $key => $user) 
                     <tr id="teamList-{{$user['id']}}">
                       <td>{{$key+1}}</td>
                       <td>{{$user['name']}}</td>
                       <td>{{$user['qualification']}}</td>
                       <td>{{substr($user['specilization'],0,50)}}</td>
                       <td style="text-align: center;"><img src="{{asset('public/uploads/profile_img/').'/'.$user['profile_pic']}}" alt="user" class="rounded-circle" width="45" height="40" /></td>
                       <td>{{date('d/m/Y',strtotime($user['created_at']))}}</td>
                       @if(Auth::user()->role==1)
                       <td><a href="{{url('/')}}/admin/view/account/{{base64_encode($user['id'])}}" class="light-blue-btn btn">View Account</a></td>
                       @endif

                       <td><button type="button" class="btn btn-danger btn-sm text-white deleteAssessment" row-id="{{$user['id']}}" id="deleteAssessment" modelName="user" delete-rowId="teamList-">
                          Delete
                        </button></td>

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
@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/admin.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')