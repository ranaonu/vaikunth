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
            <a href="{{url('/admin')}}" class="nav-item nav-link @if(isset($active_menu)) {{$active_menu == 'home'?'active':''}} @endif">Home</a>
            
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
        </div>
        <!-- <a href="" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Book Now</a> -->
    </div>
</nav>