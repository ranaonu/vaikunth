 <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 navigationBar">
    <a href="{{url('/')}}" class="navbar-brand p-0">
        <!-- <h1 class="m-0"><i class="fa fa-map-marker-alt me-3"></i>Travela 111</h1> -->
        <img src="{{ asset('public/img/logo/logo.png')}}" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="{{url('/')}}" class="nav-item nav-link @if(isset($active_menu)) {{$active_menu == 'home'?'active':''}} @endif">Home</a>
            <a href="{{url('/about')}}" class="nav-item nav-link @if(isset($active_menu)) {{$active_menu == 'about'?'active':''}} @endif">About</a>
            <a href="{{url('/services')}}" class="nav-item nav-link @if(isset($active_menu)) {{$active_menu == 'services'?'active':''}} @endif">Services</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle @if(isset($active_menu)) {{$active_menu == 'packages'?'active':''}} @endif" data-bs-toggle="dropdown">Packages</a>
                <div class="dropdown-menu m-0">
                    <a href="{{url('/kerala-tour-packages')}}" class="dropdown-item">Kerala Tour Packages</a>
                    <a href="{{url('/rajasthan-tour-packages')}}" class="dropdown-item">Rajasthan Tour Packages</a>
                    <a href="{{url('/dharamshala-tour-packages')}}" class="dropdown-item">Dharamshala Tour Packages</a>
                    <a href="{{url('/goa-tour-packages')}}" class="dropdown-item">Goa tour Packages</a>
                </div>
            </div>


            <!-- <a href="blog.html" class="nav-item nav-link">Blog</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="destination.html" class="dropdown-item">Destination</a>
                    <a href="tour.html" class="dropdown-item">Explore Tour</a>
                    <a href="booking.html" class="dropdown-item">Travel Booking</a>
                    <a href="gallery.html" class="dropdown-item">Our Gallery</a>
                    <a href="guides.html" class="dropdown-item">Travel Guides</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                </div>
            </div> -->
            <a href="{{url('/contact-us')}}" class="nav-item nav-link @if(isset($active_menu)) {{$active_menu == 'contact'?'active':''}} @endif">Contact</a>
            @guest
                <a href="{{url('/login')}}" class="nav-item nav-link">Sign In </a>
            @else
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                </form>
                <a class="nav-item nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                ><i class="fa fa-power-off me-1 ms-1"></i> {{ __('Logout') }}</a>
            @endif

            @auth
                <a href="{{url('/admin')}}" class="nav-item nav-link" target="_blank">Admin</a>
            @endauth
        </div>
        <!-- <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a> -->
    </div>
</nav>