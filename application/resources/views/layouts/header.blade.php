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
      <style type="text/css">
        div.kode_blog_fig figure{
          z-index: 0 !important;
        }
      </style>
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
                @if (!Auth::check())
                <li>
                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target=".media01">Iniciar Sesion</a>
                  <div class="modal fade bs-example-modal-lg media01" tabindex="-1" role="login" aria-labelledby="login">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="kode_modal_body">
                        <a href="#"><i class="fa fa-user"></i></a>
                        <h2>Iniciar Sesion</h2>
                        <form method="POST" action="{{ route('home.custom_login') }}">
                          @csrf
                          <div class="kode_modal_field">
                            <input type="text" name="email" placeholder="email" required>
                          </div>
                          <div class="kode_modal_field">
                            <input type="password" name="password" placeholder="password" required>
                          </div>
                          <div class="kode_model_btn">
                            <button type="submit">Etnrar</button>
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
                        <form method="POST" action="{{ route('home.custom_register') }}">
                          @csrf
                          <div class="kode_modal_field">
                            <input type="text" name="name" id="name" placeholder="Nombre Completo" required>
                          </div>
                          <div class="kode_modal_field">
                            <input type="text" name="email" id="email" placeholder="Correo" required>
                          </div>
                          <div class="kode_modal_field">
                            <select name="region_id" id="region_id" required>
                              <option>--Region--</option>
                              @foreach($regions as $region)
                                <option value="{{ $region->id }}">{{ $region->name }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="kode_modal_field" required>
                            <select name="city_id" id="city_id">
                              <option>--Ciudad--</option>
                            </select>
                          </div>
                          <div class="kode_modal_field">
                            <select name="club_id" id="club_id" required>
                              <option>--Club--</option>
                              @foreach($clubes as $club)
                                <option value="{{ $club->id }}">{{ $club->name }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="kode_modal_field">
                            <select name="player_category_id" id="player_category_id" required>
                              <option>--Categoria--</option>
                              @foreach($player_categories as $player_category)
                                <option value="{{ $player_category->id }}">{{ $player_category->name }}</option>
                              @endforeach
                            </select>
                          </div>
                          <div class="kode_modal_field">
                            <input type="password" name="password" id="password" placeholder="Contraseña" required>
                          </div>
                          <div class="kode_model_btn">
                            <input type="hidden" name="role" id="role" value="player" />
                            <button type="submit">Registrarme</button>
                          </div>
                        </form>
                      </div>
                    </div>
                    </div>
                  </div>
                </li>
                @else
                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Panel</a></li>
                <li><a href="{{ route('users.profile') }}"><i class="fa fa-user"></i> Perfil</a></li>
                @endif
                <!--<li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                <li><a id="ftb_btn_link" ><i class="fa fa-search"></i></a></li>-->
              </ul>
              <div id="show-class"><form><input type="text" placeholder="your key word"></form></div>
              <ul class="social-style3">
                <li><a href="{{ $site->facebook }}"><i class="fa fa-facebook"></i></a></li>
                <li><a href="{{ $site->twitter }}"><i class="fa fa-twitter"></i></a></li>
                <li><a href="{{ $site->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="{{ $site->googleplus }}"><i class="fa fa-google-plus"></i></a></li>
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