<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="autor" content="YAO Guy Evrard" />
  <meta name="keywords" content="Déclaration de sinistre, déclaration en ligne, sinistres,accidents" />

  <title>Déclaration de sinistre - Mon artisan </title>

  <link rel="stylesheet" href="{{asset('assets/index/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/index/css/responsive.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/index/css/font.css')}}" />

  <link rel="stylesheet" href="{{asset('assets/index/css/swiper-bundle.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/index/css/aos.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/index/css/lightgallery.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/index/css/owl.carousel.min.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/index/css/owl.theme.default.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/index/css/all.min.css')}}" />

  <link rel="shortcut icon" href="{{asset('assets/index/images/favicon.png')}}" type="image/x-icon" />
</head>

<body>
  <!---MAIN WRAPPER START ==================================-->
    <div id="main-wrapper" class="clearfix">
        @yield('content')
    </div>
  <!--- MAIN WRAPPER END -->

  <!-- Footer Scripts =====================-->

  <!-- External -->
  <script src="{{asset('assets/index/js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{asset('assets/index/js/aos.js')}}"></script>
  <script src="{{asset('assets/index/js/jquery.smartmenus.min.js')}}"></script>
  <script src="{{asset('assets/index/js/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/index/js/lightgallery.min.js')}}"></script>
  <script src="{{asset('assets/index/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/index/js/isotope.js')}}"></script>
  <script src="{{asset('assets/index/js/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/index/js/jquery.sticky-kit.min.js')}}"></script>
  <script src="{{asset('assets/index/js/main.js')}}"></script>
</body>

</html>
