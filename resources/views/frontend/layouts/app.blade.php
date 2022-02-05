<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.include.header')
</head>

<body>

  <!-- ======= Header ======= -->
  @include('frontend.include.navbar')
  
  <main id="main">

    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
@include('frontend.include.footer')

@include('frontend.include.script')

</body>

</html>