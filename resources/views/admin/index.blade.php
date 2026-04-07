@extends('layouts.admin')
@section('content')

@section('css-files')
<link href="{{ asset('public/assets/libs/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet" />
<link href="{{ asset('public/assets/extra-libs/calendar/calendar.css')}}" rel="stylesheet" />
@endsection('css-files')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
         <h4 class="page-title">Dashboard</h4>        
      </div>
   </div>
</div>

<div class="row">
      <div class="col-md-12">
@if(session()->has('success'))
        <p class="alert alert-success  text-center md_top" style="width:100%"> 
           <strong>{{ session()->get('success') }}</strong>
           <i class="fa fa-close pull-right mar-top"></i>
        </p>
    @endif

    
     @if(session()->has('errors'))
        <p class="alert alert-danger md_top text-center" style="width:100%"> 
           <strong>{{ session()->get('errors') }}</strong>
           <i class="fa fa-close pull-right mar-top"></i>
        </p>
         


       
    @endif
 </div>
</div>


<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">



   
   <!-- ============================================================== -->
   <!-- Sales chart -->
   <!-- ============================================================== -->
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card-body">
                <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-6">
              <div class="card card-hover">
                <a href="{{url('/admin/sessions')}}">
                  <div class="box bg-cyan text-center">
                    <h1 class="font-light text-white">
                      {{count($totalSessions)}}
                    </h1>
                    <h6 class="text-white">Total Sessions</h6>
                  </div>
                </a>
              </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-6">
              <div class="card card-hover">
                <a href="{{url('/admin/sessions')}}">
                  <div class="box bg-success text-center">
                    <h1 class="font-light text-white">
                      {{count($todaySession)}}
                    </h1>
                    <h6 class="text-white">Today Sessions</h6>
                  </div>
                </a>
              </div>
            </div>
            <!-- Column -->
            <!-- <div class="col-md-6 col-lg-3">
              <div class="card card-hover">
                <div class="box bg-warning text-center">
                  <h1 class="font-light text-white">
                    10
                  </h1>
                  <h6 class="text-white">Profile View</h6>
                </div>
              </div>
            </div> -->
            <!-- Column -->
           <!--  <div class="col-md-6 col-lg-3">
              <div class="card card-hover">
                <div class="box bg-danger text-center">
                  <h1 class="font-light text-white">
                    5
                  </h1>
                  <h6 class="text-white">Messages</h6>
                </div>
              </div>
            </div> -->
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="">
                  <div class="row">
                   
                    <div class="col-lg-12">
                      <div class="card-body b-l calender-sidebar">
                        <div id="calendar"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            </div>
         </div>
      </div>
   </div>
   <!-- ============================================================== -->
   <!-- Sales chart -->
   
</div>
@endsection

@section('js-files')
<script src="{{ asset('public/assets/libs/fullcalendar/dist/fullcalendar.min.js')}}"></script>
<script src="{{ asset('public/dist/js/pages/calendar/cal-init.js')}}"></script>
@endsection('js-files')