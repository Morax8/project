<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Zian" />

  <title>
    @yield('title') - SMK STRADA JAKARTA
  </title>

  <!-- normalize core CSS -->
  <link href="{{ asset('Frontend/css/normalize.css') }}" rel="stylesheet" />

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('Frontend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('Frontend/bootstrap/css/carousel.css') }}" rel="stylesheet" />
  <link href="{{ asset('Frontend/bootstrap/fonts/glyphicons-halflings-regular.eot') }}" rel="stylesheet" />

  <!-- Load jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  {{--
  <link href="{{ asset('Frontend/bootstrap/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet" />

  <script src="{{ asset('Frontend/bootstrap/js/ie-emulation-modes-warning.js') }}"></script> --}}

  <!-- Google Fonts - Change if needed -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat&family=Oxygen:wght@300;400;700&family=Source+Sans+3:wght@400;500;600;700&display=swap"
    rel="stylesheet">


  <!-- For solid icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

  <!-- For regular icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/regular.min.css" rel="stylesheet">

  <!-- For brand icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/brands.min.css" rel="stylesheet">

  {{-- AOS --}}
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- maps -->
  <script src="https://www.bing.com/api/maps/mapcontrol?callback=initMap" async defer></script>

  <!-- Menu shrinking -->
  <script type="text/javascript" src="{{ asset('Frontend/js/menu.js') }}"></script>

  <!-- Main styles of this template -->
  <link href="{{ asset('Frontend/css/style.min.css?v=1.0.0') }}" rel="stylesheet" />

  <!-- Custom CSS. Input here your changes -->
  <link href="{{ asset('Frontend/css/custom.css') }}" rel="stylesheet" />
</head>

<body>
  @include('partials.navbar')
  @yield('container')
  <br>
  <br>

  <style>
    .custom-container {
      margin-bottom: 40px;
      /* Add the desired space at the bottom */
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  <!-- Scripts -->
  <!-- Loads Bootstrap Main JS -->
  <script src="{{ asset('Frontend/bootstrap/js/bootstrap.min.js') }}"></script>

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  {{-- <script src="{{ asset('Frontend/bootstrap/js/ie10-viewport-bug-workaround.js') }}"></script> --}}

  <!-- Initiate Google Maps - For more Infos look into the documentation -->
  <script src="{{ asset('Frontend/js/google-map.js') }}"></script>

  <!-- Initiate Portoflio Script -->
  <script src="{{ asset('Frontend/extensions/portfolio/isotope.min.js') }}"></script>
  <script src="{{ asset('Frontend/extensions/portfolio/portfolio.js') }}"></script>

  <!-- Initiate Fancybox/Lightbox Script -->
  <!-- Fancybox/Lightbox -->
  <script type="text/javascript" src="{{ asset('Frontend/extensions/fancybox/jquery.fancybox.js') }}"></script>
  <script type="text/javascript" src="{{ asset('Frontend/extensions/fancybox/jquery.fancybox.pack.js') }}"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('Frontend/extensions/fancybox/jquery.fancybox.css') }}"
    media="screen" />
  <script type="text/javascript" src="{{ asset('Frontend/extensions/fancybox/jquery.fancybox-media.js') }}"></script>

  {{-- AOS --}}
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>

  <!-- Initiate Fancybox/Lightbox for Videos -->
  <script type="text/javascript">
    $(document).ready(function () {
         
          $(".fancybox-media")
              .attr("rel", "media-gallery")
              .fancybox({
                  openEffect: "none",
                  closeEffect: "none",
                  prevEffect: "none",
                  nextEffect: "none",
                  arrows: false,
                  helpers: {
                      media: {},
                      buttons: {},
                  },
              });
      });
  </script>
  @include('partials.footer')
</body>


</html>