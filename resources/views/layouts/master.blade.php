<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Green Valley Preschool | Welcome to Green Valley Preschool Sargasan</title>
<!-- Stylesheets -->
<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/meanmenu.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">

<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
<div class="page-wrapper">
@include('navigation')
@yield('content')

</div>
<script src="{{ asset('assets/js/jquery.js')}}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.paroller.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/js/backtotop.js') }}"></script>
<script src="{{ asset('assets/js/odometer.js') }}"></script>
<script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>

<script src="{{ asset('assets/js/gsap.min.js') }}"></script>
<script src="{{ asset('assets/js/SplitText.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('assets/js/ScrollSmoother.min.js') }}"></script>

<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/nav-tool.js') }}"></script>
<script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/validate.js')}}"></script>
<script src="{{ asset('assets/js/magnific-popup.min.js')}}"></script>
<script src="{{ asset('assets/js/nav-tool.js')}}"></script>
<script src="{{ asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{ asset('assets/js/script.js')}}"></script>

<script>
	window.onload = function () {
      document.getElementById('modal').style.display = 'flex';
    };

    // Close modal on click
    document.querySelector('.close-modal').onclick = function () {
      document.getElementById('modal').style.display = 'none';
    };

</script>


</body>

</html>
