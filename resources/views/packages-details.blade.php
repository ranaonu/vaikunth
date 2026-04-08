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
                        <li class="breadcrumb-item"><a href="index.html">Home</a></p>
                        <li class="breadcrumb-item"><a href="#">Pages</a></p>
                        <li class="breadcrumb-item active text-white">Services</p>
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
                    <div class="row mb-2">
                      <div class="col-lg-12">
                        <div class="InquireNowBestRT"> <a href="javascript:void(0);" class="NowInquireBTN generateForm" id="showQueryModal">
                          <h4>Request for a Quote </h4>
                          Instant Quote, Best Deals - 100% Customizable, Includes hotels + car + guides <i></i></a>
                          <p class="PricesINquire"> Cost depends on various factors like, number of people you are, travel dates, category of hotel and transportation etc.<span>Drop your Inquiry to get the best deals as per your requirements. 100% Satisfaction Guaranteed.</span></p>
                        </div>
                      </div>
                    </div>



                    <div class="row">
                      <div class="col-lg-12 mt-3" id="trip-highlights">
                        <h4>Special Attentions:</h4>
                        <div class="trip-h">
                            <div class="trip-spl"> 
                              <article>
                                  <p>Personal assistance by our representative at airports.</p>
                                  <p>At arrival you will get a kit of your complete tour documents.</p>
                                  <p>Our representative will explain you the tour detail at you arrival.</p>
                                  <p>Female representative assistance specially for Solo female travellers at Delhi Airport.</p>
                                  <p>We provide baby seater and baby stroller for small kids if required</p>
                                  <p>Wheel Chair for the Olders or the Physically Challanged Traveler if required.</p>
                                  <p>Stay connected 24 x 7 with our tour experts during your tour over phone for hassle free travel.</p>
                                  <p>Special take care of senior citizens , Physically challenged travels and Kids.</p>
                                  <p>Exclusive Air Condition Vehicle, Professional Govt authorised tour Guides and Well experienced Co-operative driver.</p>
                                  <p>Vehicle availability 24x 7 during the entire tour.</p>
                              </article>
                            </div>
                        </div>
                      </div>
                    </div>




               
            </div>
        </div>
@endsection
@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/users.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')