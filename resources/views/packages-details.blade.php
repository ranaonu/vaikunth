@extends('layouts.vaikunth')
@section('content')
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
           @include('nav')            
        </div>
        <!-- Navbar & Hero End -->
        <!-- <br>
        <br>
        <br>
        <br>
        <br> -->
        <div class="container-fluid bg-breadcrumb1">
                <div class="container text-center py-2">
                        <!-- <div class="imgArea">
                            <img src="{{asset('public/uploads/packages/').'/'.$packageDetails['overview_image']}}" class="rounded-top w-100" alt="Image">
                        </div> -->
                    <!-- <h3 class="text-white display-3 mb-4">Our Services</h1> -->
                    <!-- <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active text-white">Services</li>
                    </ol>    --> 
                </div>
            </div>

        <div class="container-fluid testimonial">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12">
                        <h5 class="mb-0">{{$packageDetails['title']}}</h5>
                        <p class="mt-2">
                            <small class="flex-fill text-center py-2">
                                <i class="fa fa-map-marker-alt me-2"></i>{{$packageDetails['location']}}
                            </small>
                        </p>
                        <p><small class="flex-fill text-center  py-2"><i class="fa fa-calendar-alt me-2"></i> {{$packageDetails['days']}} Days / {{$packageDetails['nights']}} Nights</small></p>
                    </div>
                     <div class="col-lg-12">
                        <div class="imgArea">
                            <img src="{{asset('public/uploads/packages/').'/'.$packageDetails['overview_image']}}" class="rounded-top w-100" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-12 py-3">
                       <h5>Overview</h5>
                       <p>{{$packageDetails['description']}}</p>
                    </div>

                    <div class="col-lg-12">
                        <h5>Tour Inclusions:</h5>
                    </div>

                    @if($packageDetails['tour_inclusion'] && count($packageDetails['tour_inclusion'])>0)
                        @foreach($packageDetails['tour_inclusion'] as $key => $value)
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 trip-txt">
                                    <p class="mb-0">{{$value['title']}}</p>
                            </div>
                        @endforeach
                    @endif


                    <div class="col-lg-12 mt-2">
                        <h5>Tour Exclusions:</h5>
                    </div>

                    @if($packageDetails['tour_exclusion'] && count($packageDetails['tour_exclusion'])>0)
                        @foreach($packageDetails['tour_exclusion'] as $key => $value)
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 trip-ext">
                                    <p class="mb-0">{{$value['title']}}</p>
                            </div>
                        @endforeach
                    @endif


                </div>
            </div>
        </div>
@endsection