<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>University of South-East Asia</title>
    {{-- css  --}}
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles-en.css') }}">

    {{-- fontawesome icon --}}
    <script src="https://kit.fontawesome.com/9db7cd6c46.js"></script>

    <!-- Slick Slider -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>



</head>
<body>

    {{-- head  --}}
    @include('components.head')

    {{-- navigation bar  --}}
    @include('components.navbar')

    {{-- home slider --}}
    {{-- @include('components.slider') --}}

    {{-- events --}}
    {{-- @include('components.events') --}}

    {{-- partnerships  --}}
    {{-- @include('components.partnership') --}}

    {{-- buttom menu bar  --}}
    {{-- @include('components.buttom-menu') --}}

    {{-- footer --}}
    {{-- @include('components.footer') --}}

























    <!-- Carousel -->
    <script src={{ asset("js/owl.carousel.min.js") }}></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src={{ asset("js/jquery.min.js") }}></script>
    {{-- fontawsome cdn icon --}}
    <script src="https://kit.fontawesome.com/9db7cd6c46.js" crossorigin="anonymous"></script>
    <script>
		$('.owl-carousel').owlCarousel({
    loop:true,
    nav:false,
	dots: false,
	autoplay: true,
    responsive:{
        0:{
            items:3
        },
        600:{
            items:3
        },
        1000:{
            items:8
        }
    }
})
	</script>

    {{-- custom script  --}}
    <script src={{ asset("js/main-en.js") }}></script>
</body>
</html>
