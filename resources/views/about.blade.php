@extends('layouts.vaikunth')
@section('content')
        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
           @include('nav')
            <!-- Carousel Start -->
            
            <!-- Carousel End -->
        </div>
        <!-- Navbar & Hero End -->


        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">About Us</h1>
                <!-- <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">About</li>
                </ol>  -->   
            </div>
        </div>
        <!-- Header End -->

        <!-- About Start -->
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5">
                        <div class="h-100" style="border: 50px solid; border-color: transparent #13357B transparent #13357B;">
                            <img src="{{ asset('public/img/about-img.jpg')}}" class="img-fluid w-100 h-100" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url('{{ asset('public/img/about-img-1.png')}}'">
                        <h5 class="section-about-title pe-3">About Us</h5>
                        <h1 class="mb-2">Welcome to <span class="text-primary">Vaikunth Holidays Private Limited.</span></h1>
                        <p>When you wish you to experience the trust meanings of heavenly beauty and charm, knock the doors of "Vaikunth Holidays Private Limited". Vaikunth holidays private limited  provide travel, tourism related solutions to the free individuals as well as corporate groups. Our company competency lies in designing the best services which is only for you. We ensure a vicarious experience of your desired trip before you experience it. We want you to be delighted and not just satisfied. To ensure the delivery to be effective and efficient our travel agency involves only the experts from our team who work on their expertise. At Vaikunth Holidays Private Limited, we offer customized tours curated to suit your tastes. So, why wait? Inspire your next holiday and bring your travel vision to life!</p>
                        <!-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quos voluptatem suscipit neque enim, doloribus ipsum rem eos distinctio, dignissimos nisi saepe nulla? Libero numquam perferendis provident placeat molestiae quia?</p>
                        <div class="row gy-2 gx-4 mb-4">
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                            </div>
                        </div>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a> -->
                        <h1 class="mb-2">WHY ARE WE DIFFERENT?</h1>
                        <p>We help you to discover your Destination. Our simple web page allows you to look for exactly what you are looking. With the best prices and the broadest range of Package options, you’re already off to a good start. But Emeralds Holidays gives you even more. With our extensive knowledge and experience, we’ll inspire you, help you plan, and provide support for you throughout your journey.</p>


                    </div>
                </div>

                <div class="row g-5 align-items-center mt-3">
                    <div class="col-lg-12">
                        <h1 class="mb-2">INCREDIBLE INDIA</h1>
                        <p>“Atithi Devo Bhava”,is a social awareness campaign that aimed at providing the inbound tourist a greater sense of being welcomed to the country. India attracts millions of tourists each year. Indian states are famous for its unique traditions, culture, festivals, cuisines , architecture etc. </p>
                        <p>At Vaikunth Holidays Private Limited, we put our the best efforts to provide you a wide range of readymade and tailor made tour packages of India so that you can get an opportunity to get your dream vacation across India & its sub continental.</p>

                        <h1>We Offer Following Services:</h1>
                        <p>Hotel bookings.</p>
                        <p>Flight bookings.</p>
                        <p>Family Holiday Packages.</p>
                        <p>Honeymoon Packages.</p>
                        <p>Group Tours.</p>
                        <p>Special Interest Tour</p>
                        <p>Car & Coach Rental bookings.</p>
                        <p>Student Tour.</p>
                        <p>Tailor made tour package for India</p>
                        <p>International tour packages (Thailand / Malaysia / Singapore / Sri Lanka /Dubai/ Nepal/ Bhutan/ Maldives)</p>
                        <p>Government approved tour guides (English & Language speaking).</p>

                        <h1 class="mb-2">Why Choose Us?</h1>
                        <p>1.Unique Destinations: From the exotic sand dunes to the picturesque mountains and beaches. We have pledged to provide our customers with some outstanding vacation destinations. Witness the dramatic landscapes far away from your imagination with us.</p>
                        <p>2.Puts worth to your money: Travel is extravagant and an easy way to put worth your money. We are reliable and well trusted by our loyal customers to hand craft trips within the budget, uncompromising on the adventures. We let you roll on your options and we provide you alternatives automatically.</p>
                        <p>3.Memorable Experiences: We try to blend travelling with the most exquisite and unforgettable memories. Either you soak in the sun at the beach or you trek at the hills, we assure you of returning home with phenomenal experiences. At the end of the day it is all about the echo of your adventures.</p>
                        <p>4.Trusted Advisor: Our backup team assists you at all the stages of your travel-related queries. Our experienced travel advisors listen and create the best package holidays for you. Our travel agency in India is renowned for providing established and trusted assistance to the customers.</p>
                        <p>5.Your wish, Our Vision: We provide wishes with a vision. We will bridge the gap to your favorite destination in the blink of an eye. With our travel agency in India, not one mountain is as far as you know it is.</p>
                        <p>6.Simple and Easy: Book your next trip within a few clicks - easy and hassle free, just the way we intend your vacation to be. With our tour and travel company, we take the edge off your shoulders and let alone reach the escapade towards you.</p>
                        <h1 class="mb-2">Our Motto</h1>
                        <p>Customer satisfaction It’s the prime motto of our business, which has helped us to build a good network with travellers from the farthest corners of the world. The company today holds more than 1,000 satisfied travellers and is still framing the travel diaries of fresh clients.</p>
                        <h1 class="mb-2">Our Team</h1>
                        <p>We are young, dynamic and talented team. Above all we understand what you need from a travel operator and what best can be served to you. Our team is dedicated and obligated to serve every client with the perfection. Also, we have ample experience and presence in the travel business that makes us the most credible and banked upon travel team in the business.</p>
                        <p>Hope you will find above itinerary / package as per your requirements. In case you require any further information / clarification, please get in touch with us.We will look forward to hear back from you soon. <a href="{{url('/contact-us')}}">Contact Us</a></p>
                    </div>
                </div>

            </div>
        </div>
        <!-- About End -->

        

        <!-- Travel Guide Start -->
        <div class="container-fluid guide py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Travel Guide</h5>
                    <h1 class="mb-0">Meet Our Guide</h1>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="{{ asset('public/img/guide-1.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                                </div>
                                <div class="guide-icon rounded-pill p-2">
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <h4 class="mt-3">Full Name</h4>
                                    <p class="mb-0">Designation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="{{ asset('public/img/guide-2.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                                </div>
                                <div class="guide-icon rounded-pill p-2">
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <h4 class="mt-3">Full Name</h4>
                                    <p class="mb-0">Designation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="{{ asset('public/img/guide-3.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                                </div>
                                <div class="guide-icon rounded-pill p-2">
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <h4 class="mt-3">Full Name</h4>
                                    <p class="mb-0">Designation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="guide-item">
                            <div class="guide-img">
                                <div class="guide-img-efects">
                                    <img src="{{ asset('public/img/guide-4.jpg')}}" class="img-fluid w-100 rounded-top" alt="Image">
                                </div>
                                <div class="guide-icon rounded-pill p-2">
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-square btn-primary rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="guide-title text-center rounded-bottom p-4">
                                <div class="guide-title-inner">
                                    <h4 class="mt-3">Full Name</h4>
                                    <p class="mb-0">Designation</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Subscribe Start -->
        <div class="container-fluid subscribe py-5">
            <div class="container text-center py-5">
                <div class="mx-auto text-center" style="max-width: 900px;">
                    <h5 class="subscribe-title px-3">Subscribe</h5>
                    <h1 class="text-white mb-4">Our Newsletter</h1>
                    <p class="text-white mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum tempore nam, architecto doloremque velit explicabo? Voluptate sunt eveniet fuga eligendi! Expedita laudantium fugiat corrupti eum cum repellat a laborum quasi.
                    </p>
                    <div class="position-relative mx-auto">
                        <input class="form-control border-primary rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 px-4 mt-2 me-2">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subscribe End -->
@endsection