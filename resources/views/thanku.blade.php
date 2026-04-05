@extends('layouts.vaikunth')
@section('content')
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
           @include('nav')            
        </div>
        <!-- Navbar & Hero End -->


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <!-- <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Packages</li>
                </ol>  -->   
            </div>
        </div>
        <!-- Header End -->

        
        <div class="container-fluid py-5 row">

            <div class="col-lg-12 col-md-12">

              <h1 class="text-center pt-5">THANK YOU</h1>

              <h4 style="text-align:center" class="pt-5">We have received your request successfully.</h4>

              <p style="text-align:center;"><img src="{{ asset('public/img/logo/mailsent.gif')}}" alt="mailsent"></p>

              <p style="text-align:center; font-size:20px; margin-top:10px;">Our support team will get back to you within the next 24 hours.</p>

              <p style="text-align:center; font-size:15px;">For immediate assistance, please call us at <a href="tel:07994219651" style="color:#e65122">07994219651</a> or email us at <a href="mailto:vaikunthholidaysindia@gmail.com" style="color:#e65122">vaikunthholidaysindia@gmail.com</a></p>

            </div>
        </div>
@endsection

@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/users.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')  