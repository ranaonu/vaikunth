@extends('layouts.vaikunth')
@section('content')
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
           @include('nav')            
        </div>
        <!-- Navbar & Hero End -->
        
        <div class="col-lg-12">
            <div class="imgArea">
                <img src="{{ asset('public/img/packages/rajasthan.jpg')}}" class="rounded-top w-100" alt="Image">
            </div>
        </div>

        <!-- Header End -->

        
       <div class="container py-5">
            <div class="row g-5">

               @if(count($rajasthanPackagesList)>0)
                  @foreach($rajasthanPackagesList as $key => $list)
                    <div class="col-md-4 col-lg-4 packages">
                        <div class="packages-item">
                            <div class="packages-img">
                                <img src="{{asset('public/uploads/packages/').'/'.$list['title_image']}}" class="rounded-top w-100" height="275" alt="Image">
                                <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                    <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Venice - Italy</small> -->
                                    <!-- <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>{{$list['days']}} days / {{$list['nights']}} Nights</small> -->
                                    <!-- <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small> -->
                                </div>
                                <!-- <div class="packages-price py-2 px-4">$349.00</div> -->
                            </div>
                            <div class="packages-content bg-light">
                                <div class="p-4 pb-0">
                                    <h5 class="mb-0">{{$list['title']}}</h5>
                                   <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>{{$list['days']}} days / {{$list['nights']}} Nights</small>
                                   <!--  <small class="text-uppercase">Hotel Deals</small>
                                    <div class="mb-3">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div> -->
                                    <p class="mb-4 mt-2">{{substr($list['description'], 0, 100)}}</p>
                                </div>
                                <div class="row bg-primary rounded-bottom mx-0">
                                    <div class="col-6 text-start px-0">
                                        <a href="{{url('/')}}/package/details/{{base64_encode($list['id'])}}" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                    </div>
                                    <div class="col-6 text-end px-0">
                                        <a href="" class="btn-hover btn text-white py-2 px-4" id="showQueryModal">Get Quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif


                <!-- <div class="col-md-4 col-lg-4 packages">
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{ asset('public/img/packages-4.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Venice - Italy</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                            </div>
                            <div class="packages-price py-2 px-4">$349.00</div> 
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Venice - Italy</h5>
                                <small class="text-uppercase">Hotel Deals</small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="" class="btn-hover btn text-white py-2 px-4" id="showQueryModal">Enquire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 packages">
                    <div class="packages-item">
                        <div class="packages-img">
                            <img src="{{ asset('public/img/packages-4.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                            <div class="packages-info d-flex border border-start-0 border-end-0 position-absolute" style="width: 100%; bottom: 0; left: 0; z-index: 5;">
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt me-2"></i>Venice - Italy</small>
                                <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt me-2"></i>3 days</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user me-2"></i>2 Person</small>
                            </div>
                            <div class="packages-price py-2 px-4">$349.00</div> 
                        </div>
                        <div class="packages-content bg-light">
                            <div class="p-4 pb-0">
                                <h5 class="mb-0">Venice - Italy</h5>
                                <small class="text-uppercase">Hotel Deals</small>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt nemo quia quae illum aperiam fugiat voluptatem repellat</p>
                            </div>
                            <div class="row bg-primary rounded-bottom mx-0">
                                <div class="col-6 text-start px-0">
                                    <a href="#" class="btn-hover btn text-white py-2 px-4">Read More</a>
                                </div>
                                <div class="col-6 text-end px-0">
                                    <a href="" class="btn-hover btn text-white py-2 px-4" id="showQueryModal">Enquire</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
@endsection

@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/users.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')  