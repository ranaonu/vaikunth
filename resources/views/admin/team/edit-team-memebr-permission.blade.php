@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
         <h4 class="page-title"> Add Memebr Permissions</h4>        
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
          <div class="card-body">
            {!! Form::open(['url' => url('/admin/update-team-user-permission'),'id'=>'updateUserPermission',  'class' => 'my_form  updateUserPermission m-t-20 data-parsley-validate novalidate','enctype'=>'multipart/form-data'] ) !!}
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label for="hue-demo">Name </label>
                  <input
                    type="text"
                    id="team_name"
                    name="name"
                    class="form-control demo required removeErrorField alphanumeric"
                    data-control="hue"
                    value="{{$userInfo['name']}}"
                    disabled
                  />
                </div>
              </div>             
            </div>   
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-4">
                <input type="checkbox" id="checkUncheckAll" class="checkUncheckAll" name="" >
                <span>Select All</span>
              </div>
            </div>
            <br>
            <div class="row">
               @if(count($allPermission)>0)
                     @foreach($allPermission as $key => $permission)
                     <div class="col-md-4 col-sm-4 col-xs-4">
                        <input type="checkbox" {{(in_array($permission['id'], $userPerm))?'checked':''}} id="vehicle1" class="checkAllPermissions" name="userPermission[]" value="{{$permission['id']}}">
                        <span>{{$permission['title']}}</span>
                     </div>
                @endforeach
                  @else                 
                  @endif
            </div>
            <input type="hidden" name="user_id" value="{{$userInfo['id']}}">
          </div>
           <div class="border-top">
            <div class="card-body">
              <button type="submit" class="btn btn-success text-white" id="submitEditTeamMemberPermissionForm">
                Save
              </button>
             
            </div>
          </div>
          {{ Form::close() }}
         </div>
</div>
@endsection
@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/users.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')