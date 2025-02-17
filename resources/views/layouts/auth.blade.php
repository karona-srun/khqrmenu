

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}  ">
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="{{ asset('assets/css/core/libs.min.css') }}">
      
      
      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="{{ asset('assets/css/hope-ui.min.css') }}">
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="{{ asset('assets/css/custom.min.css') }}">
      
      <!-- Dark Css -->
      <link rel="stylesheet" href="{{ asset('assets/css/dark.min.css') }}">
      
      <!-- Customizer Css -->
      <link rel="stylesheet" href="{{ asset('assets/css/customizer.min.css') }}">
      
      <!-- RTL Css -->
      <link rel="stylesheet" href="{{ asset('assets/css/rtl.min.css') }} ">
      
      
  </head>
  <body class=" " data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">
    <!-- loader Start -->
    <div id="loading">
      <div class="loader simple-loader">
          <div class="loader-body">
          </div>
      </div>    </div>
        <!-- loader END -->
    
      <div class="wrapper">
        @yield('content')
      </div>
    
    <!-- Library Bundle Script -->
    <script src="assets/js/core/libs.min.js"></script>
    
    <!-- External Library Bundle Script -->
    <script src="assets/js/core/external.min.js"></script>
    
    <!-- Widgetchart Script -->
    <script src="assets/js/charts/widgetcharts.js"></script>
    
    <!-- mapchart Script -->
    <script src="assets/js/charts/vectore-chart.js"></script>
    <script src="assets/js/charts/dashboard.js" ></script>
    
    <!-- fslightbox Script -->
    <script src="assets/js/plugins/fslightbox.js"></script>
    
    <!-- Settings Script -->
    <script src="assets/js/plugins/setting.js"></script>
    
    <!-- Slider-tab Script -->
    <script src="assets/js/plugins/slider-tabs.js"></script>
    
    <!-- Form Wizard Script -->
    <script src="assets/js/plugins/form-wizard.js"></script>
    
    <!-- AOS Animation Plugin-->
    
    <!-- App Script -->
    <script src="assets/js/hope-ui.js" defer></script>
    
    
  </body>
</html>