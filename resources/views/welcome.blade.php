<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <title>RICHKOFF - Perfumer</title>

  <!-- Meta Data -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="format-detection" content="address=no" />
  <meta name="author" content="" />
  <meta name="description" content="" />

  <!-- Twitter data -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="" />
  <meta name="twitter:title" content="" />
  <meta name="twitter:description" content="" />
  <meta name="twitter:image" content="" />

  <!-- Open Graph data -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="your url website" />
  <meta property="og:image" content="" />
  <meta property="og:description" content="" />
  <meta property="og:site_name" content="" />

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicons/apple-touch-icon-144x144.png') }}" />
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicons/apple-touch-icon-114x114.png') }}" />
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicons/apple-touch-icon-72x72.png') }}" />
  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicons/apple-touch-icon-57x57.png') }}" />
  <link rel="shortcut icon" href="{{ asset('assets/images/favicons/favicon.png') }}" type="image/png" />

  <!-- Styles -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/style.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/hi.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/demo/style-demo.css') }}" />
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/front-modal.css') }}" />

  <meta name="google-site-verification" content="t_iGshqh_1VqMygidDloGKvAwP9cFyL1VFsXQB8BGjY" />


  <!-- Google tag (gtag.js') }}) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-WZE9XVL170"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-WZE9XVL170');
  </script>


</head>

<body>
  <!-- Preloader -->
  <div class="preloader">
    <div class="preloader__wrap">
      <img class="preloader__logo" src="{{ asset('assets/images_/commun/logo-bg.png') }}" alt="RICHKOFF" />
      <div class="preloader__progress"><span></span></div>
    </div>
  </div>

  <!-- Top -->
  <nav class="navbar navbar-demo">
    <div class="mr-lg-auto logo-container">
      <a class="logo-link" href="./">
        <img class="logotype" src="{{ asset('assets/images_/commun/logo-bg-dark.png') }}" alt="RICHKOFF" width="16%" />
      </a>
    </div>
  </nav>
  <!-- /Top -->

  <!-- Intro -->
  <header class="header-half-demo">
    <div class="header-half-demo__left">
      <a class="underlineNone" href="{{route('diffuseur-index')}}">
        <img src="{{ asset('assets/images_/bipart/a.jpg') }}" alt="Richkoff, Diffuseur de parfum" />
      </a>
    </div>
    <div class="header-half-demo__right">
      <a class="underlineNone" href="{{route('parfum-index')}}">
        <img src="{{ asset('assets/images_/bipart/b.jpg') }}" alt="Richkoff, Parfum" />
      </a>
    </div>
  </header>
  <!-- /Intro -->

  <div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeBtn">&times;</span>
        <img src="{{asset('assets/images_/bipart/front.jpg')}}" alt="Description de l'image" class="img-front"/>
    </div>
</div>

  <div class="cursor"></div>
  <canvas class="elastic-border"></canvas>


  <!-- JavaScripts -->
  <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins.js') }}"></script>
  <script src="{{ asset('assets/demo/plugins-demo.js') }}"></script>
  <script src="{{ asset('assets/js/common.js') }}"></script>
  <script src="{{ asset('assets/js/disable-inspect.js') }}"></script>
  <script src="{{asset('assets/js/script.js')}}"></script>
  <script src="{{asset('assets/js/front-modal.js')}}"></script>

</body>

</html>