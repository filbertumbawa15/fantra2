<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="au theme template">
  <meta name="author" content="Hau Nguyen">
  <meta name="keywords" content="au theme template">

  <!-- Title Page-->
  <title>Dashboard</title>

  <!-- Fontfaces CSS-->
  <link href="{{ asset('css/font-face.css" rel="stylesheet') }}" media="all">
  <link href="{{ asset('vendors/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('vendors/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('vendors/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

  <!-- Bootstrap CSS-->
  <link href="{{ asset('vendors/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

  <!-- Vendors CSS-->
  <link href="{{ asset('vendors/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('vendors/wow/animate.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('vendors/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('vendors/slick/slick.css" rel="stylesheet') }}" media="all">
  <link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet" media="all">
  <link href="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
  <!-- Daterangepicker -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

  <!-- Main CSS-->
  <link href="{{ asset('css/theme.css') }}" rel="stylesheet" media="all">

</head>

<body class="animsition">
  <div class="page-wrapper">

    @include('admin.layouts._sidebar')


    <!-- PAGE CONTAINER-->
    <div class="page-container">

      @include('admin.layouts._navbar')

      @yield('content')
      <!-- End of Main Content -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- Jquery JS-->
  <script src="{{ asset('vendors/jquery-3.2.1.min.js') }}"></script>
  <!-- Bootstrap JS-->
  <script src="{{ asset('vendors/bootstrap-4.1/popper.min.js') }}"></script>
  <script src="{{ asset('vendors/bootstrap-4.1/bootstrap.min.js') }}"></script>
  <!-- Vendors JS       -->
  <script src="{{ asset('vendors/slick/slick.min.js') }}">
  </script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{ asset('vendors/wow/wow.min.js') }}"></script>
  <script src="{{ asset('vendors/animsition/animsition.min.js') }}"></script>
  <script src="{{ asset('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
  </script>
  <script src="{{ asset('vendors/counter-up/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('vendors/counter-up/jquery.counterup.min.js') }}">
  </script>
  <script src="{{ asset('vendors/circle-progress/circle-progress.min.js') }}"></script>
  <script src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('vendors/chartjs/Chart.bundle.min.js') }}"></script>
  <script src="{{ asset('vendors/select2/select2.min.js') }}">
  </script>
  <script src="{{ asset('script.js') }}"></script>

  <!-- Daterangepicker -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

  <!-- Main JS-->
  <script src="{{ asset('js/main.js') }}"></script>
  <!-- Page level plugins -->
  @stack('page_plugins')

  <!-- Page level custom scripts -->
  @stack('page_custom_scripts')

</body>

</html>