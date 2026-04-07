@extends('layouts.admin')
@section('css-files')
{!! HTML::style('public/frontend/css/chat.css?v='.time()) !!}
@endsection
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
         <h4 class="page-title">Chat</h4>        
      </div>
   </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container clearfix">
      <br/>
        <div class="people-list" id="people-list">      
              <ul class="list">
                @if(count($users)>0)
                  @foreach($users as $user)
                    <li class="clearfix userChatList" user-id="{{$user['id']}}" user-name="{{$user['name']}}" user-image="{{$user['profile_pic']}}">

                    @if ($user['profile_pic'])
                      <img src="{{asset('public/uploads/profile_img/').'/'.$user['profile_pic']}}" alt="user" class="rounded-circle " width="40" height="40" />
                    @else
                      <img src="{{asset('public/uploads/profile_img/avatar.png')}}" alt="user" class="rounded-circle " width="40" height="40" />
                    @endif                      
                    <div class="about">
                      <div class="name">{{ucwords($user['name'])}}</div>
                      <!-- <div class="status">
                        <i class="fa fa-circle online"></i> online
                      </div> -->
                    </div>
                    </li>
                   @endforeach
                @else
                @endif
              </ul>
            </div>
            
            <div class="chat">
              <div class="chat-header clearfix">
                <img src="{{ asset('public/frontend/images/disorder1.png')}}" alt="avatar" id="selectedUserImage"/>                
                <div class="chat-about">
                  <div class="chat-with" id="currentUserName"></div>                  
                </div>                
              </div> <!-- end chat-header -->
              
              <div class="chat-history" id="chat-history">
                  <ul>
                    <li>
                      <div class="message-data">
                      </div>
                      <div class="message my-message">
                        Please select any user from left side to start conversation
                      </div>
                    </li>

                  </ul>
                    
              </div> <!-- end chat-history -->
              
              <div class="chat-message clearfix">
                <textarea name="message-to-send" id="message-to-send" class="textMessage" placeholder ="Type your message" rows="2"></textarea>
                        
                <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
                <i class="fa fa-file-image-o"></i>
                
                <button id="send_message">Send</button>
                <input class="chat-user-id" id="chat-user-id" value="" type="hidden">
              </div> <!-- end chat-message -->
              
            </div> <!-- end chat -->
      </div>
@endsection

@section('js-files')

<style type="text/css">
  #showChatList {
    height: 470px;
    overflow-y: auto !important;
  }

</style>
<script type="text/javascript" src="<?php echo url('/').'/public/js/chat.js?time='.time().''?>"></script>
<script type="text/javascript">
   
 </script>
@endsection('js-files')