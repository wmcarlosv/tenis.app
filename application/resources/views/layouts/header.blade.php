<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title')</title>
      <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
      <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
      <link rel="stylesheet" href="{{ asset('css/jquery.bxslider.css') }}">
      <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
      <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
      <link href="{{ asset('css/component.css') }}" rel="stylesheet">
      <link href="{{ asset('css/prettyphoto.css') }}" rel="stylesheet">
      <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
      <link href="{{ asset('svg-icon.css') }}" rel="stylesheet">
      <link href="{{ asset('css/themetypo.css') }}" rel="stylesheet">
      <link href="{{ asset('css/fullcalendar.css') }}" rel='stylesheet' />
      <link rel="stylesheet" href="{{ asset('css/widget.css') }}">
      <link rel="stylesheet" href="{{ asset('style.css') }}">
      <link href="{{ asset('css/component.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/color.css') }}">
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      @yield('css')
    </head>
    <body class="kode-football">
      <div class="kode-wrapper">
        <header class="football-header">
        <div class="topbar4">
          <div class="container">
          <div class="pull-right">
            <div class="login-wraper3">
              <ul class="login-meta">
                <li>
                  <a type="button" class="btn btn-primary" data-toggle="modal" data-target=".media01">Iniciar Sesion</a>
                  <div class="modal fade bs-example-modal-lg media01" tabindex="-1" role="login" aria-labelledby="login">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="kode_modal_body">
                        <a href="#"><i class="fa fa-user"></i></a>
                        <h2>Iniciar Sesion</h2>
                        <form>
                          <div class="kode_modal_field">
                            <input type="text" placeholder="username" required>
                          </div>
                          <div class="kode_modal_field">
                            <input type="text" placeholder="password" required>
                          </div>
                          <div class="kode_model_btn">
                            <button>login</button>
                            <a href="#">forget password?</a>
                          </div>
                        </form>
                      </div>
                    </div>
                    </div>
                  </div>
                </li>
                <li>
                <a type="button" class="btn btn-primary" data-toggle="modal" data-target=".media02">Registrate</a>
                  <div class="modal fade bs-example-modal-lg media02" tabindex="-1" role="Register" aria-labelledby="Register">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="kode_modal_body">
                        <a href="#"><i class="fa fa-user"></i></a>
                        <h2>Registrate</h2>
                        <form>
                          <div class="kode_modal_field">
                            <input type="text" placeholder="username" required>
                          </div>
                          <div class="kode_modal_field">
                            <input type="text" placeholder="password" required>
                          </div>
                          <div class="kode_modal_field">
                            <input type="text" placeholder="confirm password" required>
                          </div>
                          <div class="kode_model_btn">
                            <button>Registrarme</button>
                            <a href="#">member  login</a>
                          </div>
                        </form>
                      </div>
                    </div>
                    </div>
                  </div>
                </li>
                <!--<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a id="ftb_btn_link" ><i class="fa fa-search"></i></a></li>-->
              </ul>
              <div id="show-class"><form><input type="text" placeholder="your key word"></form></div>
              <ul class="social-style3">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
          </div>
        </div>
        <div class="logo-wrap2">
          <div class="container">
          <div class="logo logo-3">
            <a href="{{ url('/') }}">
              @if($site->logo)
                <img src="{{ asset('application/storage/app/'.$site->logo) }}" alt="">
              @else
                <img src="#" alt="">
              @endif
            </a> </div>
          <div class="spb-ticker spb-ticker2">
            <span>Ultimas Noticias:</span>
            <ul class="top_slider_bxslider">
              @foreach($notices_header as $nh)
            <li>
              <div class="ticker-dec">
              <a href="{{ route('home.notice',['slug' => $nh->slug]) }}">{!! $nh->title !!}</a>
              </div>
            </li>
            @endforeach
            </ul>
          </div>
          </div>
        </div>
        <div class="nav4">
          <div class="container">
          <ul class="kode_nave">
            <li><a href="{{ url('/') }}">home</a></li>
            <li><a href="{{ url('/notices') }}">Noticias</a></li>
            <li><a href="{{ url('/championships') }}">Campeonatos</a> </li>
            <li><a href="{{ url('/clubes') }}">Equipos</a></li>
            <li><a href="shop.html">Galeria</a></li>
            <li><a href="blog.html">Ranking</a></li>
          </ul>
          <div id="kode-responsive-navigation" class="dl-menuwrapper">
          <button class="dl-trigger">Open Menu</button>
            <ul class="dl-menu">
              <li class="active"><a class="active" href="{{ url('/') }}">Home</a></li>
              <li class="menu-item kode-parent-menu"><a href="{{ url('/notices') }}">Noticias</a></li>
              <li class="menu-item kode-parent-menu"><a href="fixtures.html">Campeonatos</a></li>
              <li class="menu-item kode-parent-menu"><a href="#">Equipos</a></li>
              <li class="menu-item kode-parent-menu"><a href="shop.html">Galeria</a></li>
              <li class="menu-item kode-parent-menu"><a href="#">Ranking</a></li>
            </ul>
          </div>
          </div>
          </div>
        </div>
    </header>
    <!--// Header //-->