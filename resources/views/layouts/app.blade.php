<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Proton - Bootstrap 4 Template</title>

    <!-- Bootstrap CSS -->
    @include('layouts.css')
  </head>
  
  <body>

    <!-- Header Section Start -->
    @include('layouts.Headers')
    <!-- Header Section End --> 

    <!-- features Section Start -->
    @yield('content')
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    @include('layouts.footer')
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lni-chevron-up"></i>
    </a> 

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    @include('layouts.scripts')
    
  </body>
</html>