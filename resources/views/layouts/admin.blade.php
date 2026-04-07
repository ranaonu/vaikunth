<!DOCTYPE html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta
      name="keywords"
      content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
    />
    <meta
      name="description"
      content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
    />
    <meta name="robots" content="noindex,nofollow" />
    <title>Vaikunth Holidays Pvt Ltd</title>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{ asset('public/assets/images/favicon.png')}}"
    />

    @yield('css-files')

    <link href="{{ asset('public/dist/css/style.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/common.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/css/custom.css')}}" rel="stylesheet" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body id="">
     <input name="_token" value="{{ csrf_token() }}" type="hidden">
   

    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
    @include('admin/header')
      <!-- Sidebar -->
    @include('admin/sidebar')
    <div class="page-wrapper">
     @yield('content')
      <!-- /.content-wrapper -->

      @include('admin/footer')
    </div>
    </div>
    

    <!-- Bootstrap core JavaScript-->
    
    <!-- <script src="{{ asset('sb-admin/js/jquery.min.js') }}"></script> -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('public/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('public/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{ asset('public/assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('public/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    
    <!-- <script src="{{ asset('public/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script> -->
    
    <!--Menu sidebar -->
    <script src="{{ asset('public/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('public/dist/js/custom.min.js')}}"></script>
    <!--This page JavaScript -->
    <!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    
   
    <script src="{{ asset('public/assets/libs/moment/min/moment.min.js')}}"></script>
    
    <script src="{{ asset('public/js/common.js')}}"></script>
    
   <script type="text/javascript">
     var site_url = "{{url('/')}}";
   </script> 
@yield('js-files')


<!--End of Tawk.to Script-->
  </body>
</html>