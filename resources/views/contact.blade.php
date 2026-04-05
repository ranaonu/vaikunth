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
                <h3 class="text-white display-3 mb-4">Contact Us</h1>
                <!-- <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Packages</li>
                </ol>  -->   
            </div>
        </div>
        <!-- Header End -->

        <!-- Contact Start -->
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Contact Us</h5>
                    <h1 class="mb-0">Contact For Any Query</h1>
                </div>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-4">
                        <div class="bg-white rounded p-4">
                            <div class="text-center mb-4">
                                <i class="fa fa-map-marker-alt fa-3x text-primary"></i>
                                <h4 class="text-primary"><Address></Address></h4>
                                <p class="mb-0">Ward No. 7, Tehsil Dehra, Muhal, <br> Kangra Himachal Pradesh 177117</p>
                            </div>
                            <div class="text-center mb-4">
                                <i class="fa fa-phone-alt fa-3x text-primary mb-3"></i>
                                <h4 class="text-primary">Mobile</h4>
                                <p class="mb-0">+91 9816427706</p>
                                <p class="mb-0">+91 8219216280</p>
                            </div>
                           
                            <div class="text-center">
                                <i class="fa fa-envelope-open fa-3x text-primary mb-3"></i>
                                <h4 class="text-primary">Email</h4>
                                <p class="mb-0">vaikunthholidaysindia@gmail.com</p>
                                <p class="mb-0">info@vaikunthholidays.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <h3 class="mb-2">Send us a message</h3>
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                        {!! Form::open(['url' => url('/send-contact-us-form'),'id'=>'contactForm',  'class' => 'my_form  contactForm m-t-20 data-parsley-validate novalidate form-control','enctype'=>'multipart/form-data'] ) !!}
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 required removeErrorField" id="name" name="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-0 required removeErrorField email" id="email" name="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 required removeErrorField number" id="phoneno" name="phoneno" placeholder="Contact No">
                                        <label for="contact">Contact No.</label>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 required removeErrorField" id="subject" name="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-0 required removeErrorField" placeholder="Leave a message here" id="message" name="message"style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" id="submitContactUsForm">Send Message</button>
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>


                    <div class="col-md-4">
                        <h5>Dharamshala office Address:</h5>
                        <p class="mb-0">Civil Lines, Kangra road Dharamshala, Himachal Pradesh 176215</p>
                        <p class="mb-0"><i class="fa fa-phone-alt text-primary mb-3"></i> +91 9317575655</p>
                    </div>

                    <div class="col-md-4">
                        <h5>Kerala office Address:</h5>
                        <p class="mb-0">S A Road, Elamkulam, Kadavanthra, Cochin Kerala 682020 </p>
                        <p class="mb-0"><i class="fa fa-phone-alt text-primary mb-3"></i> +91 7994219651</p>
                    </div>

                    <div class="col-md-4">
                        <h5>Mumbai office Address:</h5>
                        <p class="mb-0">Shop No 5, near siddhivinayak Enclave, Near DAV School, New panvel (E)  Mumbai 410206</p>
                        <p class="mb-0"><i class="fa fa-phone-alt text-primary mb-3"></i> +91 9317595955</p>
                    </div>

                    <div class="col-md-4">
                        <h5>Goa office Address:</h5>
                        <p class="mb-0">Poriat, Naika Vaddo, Calangute, Goa 403516</p>
                        <p class="mb-0"><i class="fa fa-phone-alt text-primary mb-3"></i> +91 9503575651</p>
                    </div>

                    <div class="col-md-4">
                        <h5>Jaipur office Address:</h5>
                        <p class="mb-0">Metro Station, Near, 116, New Sanganer Rd, Vivek Vihar, Sodala, Jaipur, Rajasthan 302019</p>
                        <p class="mb-0"><i class="fa fa-phone-alt text-primary mb-3"></i> +91 8306136858</p>
                    </div>

                    <div class="col-md-4">
                        <h5>Gujarat office Address:</h5>
                        <p class="mb-0">1st floor municipal shopping centre kalal Darwaja Bus stand Road Godhra Gujarat 389001</p>
                        <p class="mb-0"><i class="fa fa-phone-alt text-primary mb-3"></i> +91 9317575655</p>
                    </div>

                    <div class="col-md-4">
                        <h5>Kashmir office Address:</h5>
                        <p class="mb-0">City Tower Complex, Opp. Khyber Hospital, Khyam Chowk, Srinagar, Jammu and Kashmir 190001</p>
                        <p class="mb-0"><i class="fa fa-phone-alt text-primary mb-3"></i> +91 9317575955</p>
                    </div>



                    <div class="col-12">
                        <div class="rounded">
                            <iframe class="rounded w-100" 
                            style="height: 450px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27004.273991047943!2d76.31916525!3d32.216778549999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391b50df65bd7311%3A0x3e08bdb100c6dc10!2sDharamshala%2C%20Himachal%20Pradesh!5e0!3m2!1sen!2sin!4v1774909917554!5m2!1sen!2sin" 
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->




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

@section('js-files')
<script type="text/javascript" src="<?php echo url('/').'/public/js/users.js?time='.time().''?>"></script>
<script type="text/javascript">
</script>
@endsection('js-files')  