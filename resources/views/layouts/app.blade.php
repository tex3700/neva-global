<!DOCTYPE html>
<html lang="ru">
  <head>
    <title>@yield('title', 'Клининговая компания Нева Глобал')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>

    <div class="wrap">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-12 col-md d-flex align-items-center">
            <p class="mb-0 phone"><span class="mailus">Телефон:</span> <a href="#">+7 (495) 123-45-67</a> или <span class="mailus">напишите нам:</span> <a href="#">info@neva-global.ru</a></p>
          </div>
          <div class="col-12 col-md d-flex justify-content-md-end">
            <div class="social-media">
              <p class="mb-0 d-flex">
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">Нева<span>Глобал</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Переключить навигацию">
          <span class="fa fa-bars"></span> Меню
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}" class="nav-link">Главная</a></li>
            <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}"><a href="{{ route('about') }}" class="nav-link">О нас</a></li>
            <li class="nav-item {{ request()->routeIs('services') ? 'active' : '' }}"><a href="{{ route('services') }}" class="nav-link">Услуги</a></li>
            <li class="nav-item {{ request()->routeIs('portfolio') ? 'active' : '' }}"><a href="{{ route('portfolio') }}" class="nav-link">Портфолио</a></li>
            <li class="nav-item {{ request()->routeIs('pricing') ? 'active' : '' }}"><a href="{{ route('pricing') }}" class="nav-link">Цены</a></li>
            <li class="nav-item {{ request()->routeIs('blog') ? 'active' : '' }}"><a href="{{ route('blog') }}" class="nav-link">Блог</a></li>
            <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}" class="nav-link">Контакты</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    @yield('content')

    @include('partials.footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/scrollax.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('js/google-map.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

  </body>
</html>
