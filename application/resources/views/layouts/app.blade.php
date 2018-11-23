<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
    <!--BOOTSTRAP CSS-->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!--SLICK SLIDER CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
    <!--BX SLIDER CSS-->
    <link rel="stylesheet" href="{{ asset('css/jquery.bxslider.css') }}"> 
    <!--OWL SLIDER CSS-->
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
    <!--FLEX SLIDER CSS-->
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
    <!--FLEX SLIDER CSS-->
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
    <!--PRETTY PHOTO CSS-->
    <link href="{{ asset('css/prettyphoto.css') }}" rel="stylesheet">
    <!--ICONS CSS-->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <!--component CSS-->
    <link href="{{ asset('css/component.css') }}" rel="stylesheet">
    <link href="{{ asset('svg-icon.css') }}" rel="stylesheet">
    <!--THEME TYPO CSS-->
    <link href="{{ asset('css/themetypo.css') }}" rel="stylesheet">
    <!--WIDGET CSS-->
    <link rel="stylesheet" href="{{ asset('css/widget.css') }}">
    <!--CUSTOM STYLE CSS-->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!--COLOR CSS-->
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <!--RESPONCIVE CSS-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    @yield('css')
    </head>
    <body class="kode-tennis">
    
    <!--// Wrapper //-->
    <div class="kode-wrapper">
      <!--// Header //-->
      <header class="tennis-header">
      <div class="topbar">
        <div class="container">
        <ul class="social-wrap">
          <li><a href="{{ $site->vimeo }}" class="fa fa-vimeo"></a></li>
          <li><a href="{{ $site->googleplus }}" class="fa fa-google-plus"></a></li>
          <li><a href="{{ $site->linkedin }}" class="fa fa-linkedin"></a></li>
          <li><a href="{{ $site->facebook }}" class="fa fa-facebook"></a></li>
          <li><a href="{{ $site->twitter }}" class="fa fa-twitter"></a></li>
          </ul>
        <div class="pull-right">
          <ul class="login-wrap">
          <li>
            <div class="login-dec">
              <a data-target="#myModal" data-toggle="modal" href="#">login</a>
              <a data-target="#myModalTwo" data-toggle="modal" href="#">register</a>
            </div>
          </li>
          <li>
            <div class="dropdown">
            <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="false">
            english
            <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Français</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Polski</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Occitan</a></li>
            </ul>
            </div>
          </li>
          <li>
            <div class="dropdown">
            <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-expanded="false">
            usd
            <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">ban</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Use</a></li>
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Aus</a></li>
            </ul>
            </div>
          </li>
          </ul>
        </div>
        </div>
      </div>
      <div class="logo-wrap">
        <div class="container">
        <div class="tennis-logo">
          <a href="#"><img src="{{ asset('application/storage/app/'.$site->logo) }}" alt=""></a>
        </div>
        <div class="tennis-nav">
          <ul class="navigation">
          <li><a href="#">home</a>
            <ul>
              <li><a href="index.html">home</a></li>
              <li><a href="tennis.html">tennis </a></li>
              <li><a href="sport-news.html">sport news</a></li>
            </ul> 
          </li>
          <li><a href="about-us.html">About Us</a></li>
          <li><a href="fixtures.html">Fixture</a>
            <ul>
              <li><a href="result.html">result</a></li>
               <li><a href="tickets.html">tickets</a></li>
                <li><a href="ticket-single.html">ticket single </a></li>
            </ul>   
          </li>
          <li><a href="#">Team & Player</a>
            <ul>
               <li><a href="our-team.html">our team</a></li>
                <li><a href="our-team-2.html">our team old </a></li>
                <li><a href="single-player.html">single player</a></li>
                <li><a href="single-player-sidebar.html">single player sidebar</a></li>
            </ul>
          </li>
          <li><a href="shop.html">Shop</a></li>
          <li><a href="blog.html">Blog</a>
            <ul>
               <li><a href="blog.html">Blog</a></li>
                <li><a href="blog2.html">blog 02 </a></li>
                 <li><a href="blog-detail.html">blog detail</a></li>
                <li><a href="blog-sidebar.html">blog sidebar</a></li>
            </ul>
          </li>
          <li><a href="#">page</a>
              <ul>
                <li><a href="404.html">404</a></li>
                <li><a href="404-2.html">404 02</a></li>
                <li><a href="404-3.html">404 03</a></li>
                <li><a href="coming-soon.html">coming soon</a></li>
              </ul>
            </li>
          <li><a href="#">Contact Us</a></li>
          </ul>
          <!--DL Menu Start-->
          <div id="kode-responsive-navigation" class="dl-menuwrapper">
          <button class="dl-trigger">Open Menu</button>
            <ul class="dl-menu">
              <li class="active"><a class="active" href="#">Home</a>
                <ul class="dl-submenu"> 
                  <li><a href="index.html">home</a></li>
                  <li><a href="tennis.html">tennis </a></li>
                  <li><a href="sport-news.html">sport news</a></li>
                </ul>
              </li>
              <li class="menu-item kode-parent-menu"><a href="about-us.html">About Us</a></li>
              <li class="menu-item kode-parent-menu"><a href="fixtures.html">fixtures</a>
                <ul class="dl-submenu">
                  <li><a href="result.html">result</a></li>
                  <li><a href="tickets.html">tickets</a></li>
                  <li><a href="ticket-single.html">ticket single</a></li>
                </ul>
              </li>
              <li class="menu-item kode-parent-menu"><a href="#">Team & Player</a>
                <ul class="dl-submenu">
                  <li><a href="our-team.html">our team</a></li>
                  <li><a href="our-team-2.html">our team 2</a></li>
                  <li><a href="single-player.html">single player</a></li>
                  <li><a href="single-player-sidebar.html">single player sidebar</a></li>
                </ul>
              </li>
              <li class="menu-item kode-parent-menu"><a href="shop.html">shop</a></li>
              <li class="menu-item kode-parent-menu"><a href="#">blog</a>
                <ul class="dl-submenu">
                  <li><a href="blog.html">blog</a></li>
                  <li><a href="blog2.html">blog 02</a></li>
                  <li><a href="blog-detail.html">blog detail</a></li>
                  <li><a href="blog-sidebar.html">blog sidebar</a></li>
                </ul>
              </li>
              <li class="menu-item kode-parent-menu"><a href="#">page</a>
                <ul class="dl-submenu">
                  <li><a href="404.html">404</a></li>
                  <li><a href="404-2.html">404 02</a></li>
                  <li><a href="404-3.html">404 03</a></li>
                  <li><a href="coming-soon.html">coming soon</a></li>
                </ul>
              </li>
              <li><a href="contact-us.html">contact Us</a></li>
            </ul>
          </div>
          <!--DL Menu END-->
          <div class="ad-search">
          <i class="fa fa-search show"></i>
          <a href="#" ><i class="fa fa-shopping-cart"><span>02</span></i></a>
          </div>
        </div>
        </div>
      </div>
      </header>
      <!--// Header //-->
      <!--// Main Banner //-->
      <div class="tns-banner">
      <ul class="bxslider7">
        <li>
        <!--// Main Banner Wrap//-->
        @if($site->slider_1)
        <div class="tns-banner-wrap">
          <img src="{{ asset('application/storage/app/'.$site->slider_1) }}" width="1344" height="579" alt="{{ $site->slider_1_title }}">
          <div class="container">
          <div class="text-caption text-left">
            <span>{{ $site->slider_1_title }}</span>
            <p>{{ $site->slider_1_subtitle }}</p>
            <a href="{{ $site->slider_1_link }}">Ver Informaci&oacute;n</a>
          </div>
          </div>
        </div>
        @endif
        <!--// Main Banner Wrap//-->
        </li>
        <li>
        <!--// Main Banner Wrap//-->
        @if($site->slider_2)
        <div class="tns-banner-wrap">
          <img src="{{ asset('application/storage/app/'.$site->slider_2) }}" width="1344" height="579" alt="{{ $site->slider_2_title }}">
          <div class="container">
          <div class="text-caption text-left">
            <span>{{ $site->slider_2_title }}</span>
            <p>{{ $site->slider_2_subtitle }}</p>
            <a href="{{ $site->slider_2_link }}">Ver Informaci&oacute;n</a>
          </div>
          </div>
        </div>
        @endif
        <!--// Main Banner Wrap//-->
        </li>
        <li>
        <!--// Main Banner Wrap//-->
        @if($site->slider_3)
        <div class="tns-banner-wrap">
          <img src="{{ asset('application/storage/app/'.$site->slider_3) }}" width="1344" height="579" alt="{{ $site->slider_3_title }}">
          <div class="container">
          <div class="text-caption text-left">
            <span>{{ $site->slider_3_title }}</span>
            <p>{{ $site->slider_3_subtitle }}</p>
            <a href="{{ $site->slider_3_link }}">Ver Informaci&oacute;n</a>
          </div>
          </div>
        </div>
        @endif
        <!--// Main Banner Wrap//-->
        </li>
      </ul>
      </div>
      <!--// Main Banner //-->
      <!--// Main Content //-->
      <div class="kode-content">
      <section>
        <div class="container">
        <!--// TENNIS HEADING //-->
        <div class="tns-heading1">
          <p>Mantente informado con nuestra Web</p>
          <h4>Ultimas Noticias</h4>
          <span><i class="icon-sport"></i></span>
        </div>
        <!--// TENNIS HEADING //-->
        <div class="row">
          @foreach($notices as $notice)
            <!--// TENNIS CLASSES//-->
            <div class="col-md-3">
            <div class="tns-classes">
              <div class="thumb">
              <img src="{{ asset('application/storage/app/public/notices/avatars/'.$notice->avatar) }}" width="271" height="287" alt="">
              <div class="thumb-caption thumb-caption-overlay">
                <h4><a href="#">{{ $notice->title }}</a></h4>
                <p>{!! $notice->content !!}</p>
                <a href="#" class="tns-btn">Leer Mas...</a>
              </div>
              </div>
            </div>
            </div>
          @endforeach
        </div>
        </div>
      </section>
      <!--// TENNIS EVENT BG //-->
      <section class="tns-eventbg">
        <div class="container">
        <!--// TENNIS HEADING //-->
        <div class="tns-heading1 white">
          <p>Participa en los Mejores torneos del Pais</p>
          <h4>Proximos Torneos</h4>
          <span><i class="icon-sport"></i></span>
        </div>
        <!--// TENNIS HEADING //-->
        <div class="row">
          <!--// TENNIS EVENT WRAP //-->
          <div class="col-md-4">
          <div class="tns-event">
            <div class="thumb">
            <img src="extra-images/tns-event1.jpg" alt="">
            </div>
            <div class="tns-event-caption">
            <h6>JUN 27 - JUL 10, 2016</h6>
            <h4><a href="#">French Open Tennis Championship</a></h4>
            <p>Wimbledon, also known The Championships, is considered by many the world's most prestigious tournament. Launched in 1877, the event is held in late June and early July at the All England Lawn Tennis and Croquet Club in London and is the only major still played on grass - the game's original surface.</p>
            <a href="#">Read More</a>
            </div>
          </div>
          </div>
          <!--// TENNIS EVENT WRAP //-->
          <!--// TENNIS EVENT WRAP //-->
          <div class="col-md-4">
          <div class="tns-event">
            <div class="thumb">
            <img src="extra-images/tns-event2.jpg" alt="">
            </div>
            <div class="tns-event-caption">
            <h6>JUN 27 - JUL 10, 2016</h6>
            <h4><a href="#">THE CHAMPIONSHIPS, WIMBLEDON</a></h4>
            <p>Wimbledon, also known The Championships, is considered by many the world's most prestigious tournament. Launched in 1877, the event is held in late June and early July at the All England Lawn Tennis and Croquet Club in London and is the only major still played on grass - the game's original surface.</p>
            <a href="#">Read More</a>
            </div>
          </div>
          </div>
          <!--// TENNIS EVENT WRAP //-->
          <!--// TENNIS EVENT WRAP //-->
          <div class="col-md-4">
          <div class="tns-event">
            <div class="thumb">
            <img src="extra-images/tns-event3.jpg" alt="">
            </div>
            <div class="tns-event-caption">
            <h6>August - September  </h6>
            <h4><a href="#">FUS Open tennis championship</a></h4>
            <p>Wimbledon, also known The Championships, is considered by many the world's most prestigious tournament. Launched in 1877, the event is held in late June and early July at the All England Lawn Tennis and Croquet Club in London and is the only major still played on grass - the game's original surface.</p>
            <a href="#">Read More</a>
            </div>
          </div>
          </div>
          <!--// TENNIS EVENT WRAP //-->
        </div>
        </div>
      </section>
      <!--// TENNIS EVENT BG //-->
      <!--// TENNIS EVENT FIXTURE //-->
      <section class="tns-fixure-wrap">
        <div class="container">
        <div class="col-md-8">
          <div class="tns-fixure-dec">
          <div class="text">
            <div class="tns-heading1">
            <p>Watch All The Stunning Matches</p>
            <h4>NExt Sensation Match</h4>
            <span><i class="icon-sport"></i></span>
            </div>
            <div class="tns-countdown-wrap">
            <h5>MEN'S Single 2016 SEASON KICKOFF</h5>
            <div class="thumb-left">
              <figure>
              <img src="extra-images/tens-plyer1.jpg" alt="">
              </figure>
              <h6><a href="#">Rogeiro Febrio </a></h6>
            </div>
            <div class="tns-countdown">
              <ul class="tns-tags">
              <li>Sat</li>
              <li>AUG 20, 2016</li>
              <li>7:00 PM</li>
              <li>HARDER StaDIUM</li>
              </ul>
              <ul class="countdown count_2">
              <li>
                <div class="countdown-dec countdown">
                <h4 class="days">365</h4>
                <p class="days_ref">Days</p>
                </div>
              </li>
              <li>
                <div class="countdown-dec countdown">
                <h4 class="hours">97</h4>
                <p class="hours_ref">hours</p>
                </div>
              </li>
              <li>
                <div class="countdown-dec countdown">
                <h4 class="minutes">56</h4>
                <p class="minutes_ref">minutes</p>
                </div>
              </li>
              <li>
                <div class="countdown-dec countdown">
                <h4 class="seconds">20</h4>
                <p class="seconds_ref">seconds</p>
                </div>
              </li>
              </ul>
            </div>
            <div class="thumb-right">
              <figure>
              <img src="extra-images/tens-plyer2.jpg" alt="">
              </figure>
              <h6><a href="#">Rogeiro Febrio </a></h6>
            </div>
            </div>
            <a class="tns-btn2" href="#">Buy Ticket</a>
          </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="tns-fixure-tabs">
          <!-- Nav tabs -->
          <ul class="tns-tabnav" role="tablist">
            <li role="presentation" class="active"><a href="#home"  role="tab" data-toggle="tab">Live</a></li>
            <li role="presentation"><a href="#profile"  role="tab" data-toggle="tab">Result</a></li>
            <li role="presentation"><a href="#messages"  role="tab" data-toggle="tab">Fixture</a></li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
            <div class="tns-tab-content-wrap">
              <div class="tns-tab-content">
              <div class="tns-tabs-teams">
                <div class="tns-team-1">
                <a href="#"><img src="images/team1-logo.png" alt=""></a>
                <h5><a href="#">FERNAND</a></h5>
                </div>
                <span >vs</span>
                <div class="tns-team-1 tns-team-2">
                <a href="#"><img src="images/team2-logo.png" alt=""></a>
                <h5><a href="#">FERNAND</a></h5>
                </div>
              </div>
              <h6>22/06/2015 14:30 - 16:00</h6>
              </div>
              <div class="tns-tab-content">
              <div class="tns-tabs-teams">
                <div class="tns-team-1">
                <a href="#"><img src="images/team1-logo.png" alt=""></a>
                <h5><a href="#">FERNAND</a></h5>
                </div>
                <span >vs</span>
                <div class="tns-team-1 tns-team-2">
                <a href="#"><img src="images/team2-logo.png" alt=""></a>
                <h5><a href="#">FERNAND</a></h5>
                </div>
              </div>
              <h6>22/06/2015 14:30 - 16:00</h6>
              </div>
              <div class="tns-tab-content">
              <div class="tns-tabs-teams">
                <div class="tns-team-1">
                <a href="#"><img src="images/team1-logo.png" alt=""></a>
                <h5><a href="#">FERNAND</a></h5>
                </div>
                <span >vs</span>
                <div class="tns-team-1 tns-team-2">
                <a href="#"><img src="images/team2-logo.png" alt=""></a>
                <h5><a href="#">FERNAND</a></h5>
                </div>
              </div>
              <h6>22/06/2015 14:30 - 16:00</h6>
              </div>
              <div class="tns-tab-content">
              <div class="tns-tabs-teams">
                <div class="tns-team-1">
                <a href="#"><img src="images/team1-logo.png" alt=""></a>
                <h5><a href="#">FERNAND</a></h5>
                </div>
                <span >vs</span>
                <div class="tns-team-1 tns-team-2">
                <a href="#"><img src="images/team2-logo.png" alt=""></a>
                <h5><a href="#">FERNAND</a></h5>
                </div>
              </div>
              <h6>22/06/2015 14:30 - 16:00</h6>
              </div>
              <a class="tns-viewall" href="#">Veiw ALl</a>
            </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
            <div class="tns-tab-content-wrap">
              <div class="tns-tab-content">
              <div class="tns-tabs-teams">
                <div class="tns-team-1">
                <a href="#"><img src="images/team1-logo.png" alt=""></a>
                <h5><a href="#">FERNAND</a></h5>
                </div>
                <span >vs</span>
                <div class="tns-team-1 tns-team-2">
                <a href="#"><img src="images/team2-logo.png" alt=""></a>
                <h5><a href="#">FERNAND</a></h5>
                </div>
              </div>
              <h6>22/06/2015 14:30 - 16:00</h6>
              </div>
              <div class="tns-tab-content">
              <div class="tns-tabs-teams">
                <div class="tns-team-1">
                <a href="#"><img src="images/team1-logo.png" alt=""></a>
                <h5><a href="#">FERNAND</a></h5>
                </div>
                <span >vs</span>
                <div class="tns-team-1 tns-team-2">
                <a href="#"><img src="images/team2-logo.png" alt=""></a>
                <h5><a href="#">FERNAND</a></h5>
                </div>
              </div>
              <h6>22/06/2015 14:30 - 16:00</h6>
              </div>
              <a class="tns-viewall" href="#">Veiw ALl</a>
            </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="messages">
              <div class="tns-tab-content-wrap">
              <div class="tns-tab-content">
              <div class="tns-tabs-teams">
                <div class="tns-team-1">
                <a href="#"><img src="images/team1-logo.png" alt=""></a>
                <h5><a href="#">FERNAND</a></h5>
                </div>
                <span >vs</span>
                <div class="tns-team-1 tns-team-2">
                <a href="#"><img src="images/team2-logo.png" alt=""></a>
                <h5><a href="#">FERNAND</a></h5>
                </div>
              </div>
              <h6>22/06/2015 14:30 - 16:00</h6>
              </div>
              <a class="tns-viewall" href="#">Veiw ALl</a>
            </div>
            </div>
          </div>
          </div>
        </div>
        </div>
      </section>
      <!--// TENNIS EVENT FIXTURE //-->
      <!--// TENNIS GALLERY //-->
      <section class="tns-gallery-bg">
        <!--// TENNIS HEADING //-->
        <div class="tns-heading1 black">
          <p>Watch All The Stunning Matches</p>
          <h4>OUr  Latest Gallery</h4>
          <span><i class="icon-sport"></i></span>
        </div>
        <!--// TENNIS HEADING //-->
        <!--// TENNIS MASONRY GALLERY //-->
        <div class="tns-gallery masonry masonryFlyIn">
          <div class="col-md-3 masonry-item">
          <div class="tns-gallery-thumb">
            <img src="extra-images/tns-gallery1.jpg" alt="">
            <div class="tns-gallery-caption">
            <span>Picture of Stunning US Open</span>
            <span>Tournment Match</span>
            <a data-rel="prettyPhoto[]" href="images/about.jpg"><i class="fa fa-search"></i></a>
            <a href="#"><i class="fa fa-expand"></i></a>
            </div>
          </div>
          </div>
          <div class="col-md-3 masonry-item">
          <div class="tns-gallery-thumb">
            <img src="extra-images/tns-gallery2.jpg" alt="">
            <div class="tns-gallery-caption">
            <span>Picture of Stunning US Open</span>
            <span>Tournment Match</span>
            <a data-rel="prettyPhoto[]" href="images/about.jpg"><i class="fa fa-search"></i></a>
            <a href="#"><i class="fa fa-expand"></i></a>
            </div>
          </div>
          </div>
          <div class="col-md-3 masonry-item">
          <div class="tns-gallery-thumb">
            <img src="extra-images/tns-gallery4.jpg" alt="">
            <div class="tns-gallery-caption">
            <span>Picture of Stunning US Open</span>
            <span>Tournment Match</span>
            <a data-rel="prettyPhoto[]" href="images/about.jpg"><i class="fa fa-search"></i></a>
            <a href="#"><i class="fa fa-expand"></i></a>
            </div>
          </div>
          </div>
          <div class="col-md-3 masonry-item">
          <div class="tns-gallery-thumb">
            <img src="extra-images/tns-gallery6.jpg" alt="">
            <div class="tns-gallery-caption">
            <span>Picture of Stunning US Open</span>
            <span>Tournment Match</span>
            <a data-rel="prettyPhoto[]" href="images/about.jpg"><i class="fa fa-search"></i></a>
            <a href="#"><i class="fa fa-expand"></i></a>
            </div>
          </div>
          </div>
          <div class="col-md-3 masonry-item">
          <div class="tns-gallery-thumb">
            <img src="extra-images/tns-gallery5.jpg" alt="">
            <div class="tns-gallery-caption">
            <span>Picture of Stunning US Open</span>
            <span>Tournment Match</span>
            <a data-rel="prettyPhoto[]" href="images/about.jpg"><i class="fa fa-search"></i></a>
            <a href="#"><i class="fa fa-expand"></i></a>
            </div>
          </div>
          </div>
          <div class="col-md-3 masonry-item">
          <div class="tns-gallery-thumb">
            <img src="extra-images/tns-gallery3.jpg" alt="">
            <div class="tns-gallery-caption">
            <span>Picture of Stunning US Open</span>
            <span>Tournment Match</span>
            <a data-rel="prettyPhoto[]" href="images/about.jpg"><i class="fa fa-search"></i></a>
            <a href="#"><i class="fa fa-expand"></i></a>
            </div>
          </div>
          </div>
          <div class="col-md-3 masonry-item">
          <div class="tns-gallery-thumb">
            <img src="extra-images/tns-gallery7.jpg" alt="">
            <div class="tns-gallery-caption">
            <span>Picture of Stunning US Open</span>
            <span>Tournment Match</span>
            <a data-rel="prettyPhoto[]" href="images/about.jpg"><i class="fa fa-search"></i></a>
            <a href="#"><i class="fa fa-expand"></i></a>
            </div>
          </div>
          </div>
        </div>
        <!--// TENNIS MASONRY GALLERY //-->
        <div class="tns-load">
          <a href="#">Load More</a>
        </div>
      </section>
      <!--// TENNIS GALLERY //-->

      <!--// TENNIS MID BAR //-->
      <section class="tns-midbar-bg">
        <div class="container">
        <div class="tns-midbar">
          <h6>Get Your best Trainer Today</h6>
          <p>Tennis is a perfect combination of violent action taking place in an atmosphere of tota</p>
          <a class="hire" href="#">Hire Us</a>
          <a class="hire" href="#">Discover More</a>
        </div>
        </div>
      </section>
      <!--// TENNIS MID BAR //-->
      <!--// TENNIS BLOG SECTION //-->
      <section>
        <div class="container">
        <!--// TENNIS HEADING //-->
        <div class="tns-heading1 black">
          <p>Watch All The Stunning Matches</p>
          <h4>Latest Blog Post</h4>
          <span><i class="icon-sport"></i></span>
        </div>
        <!--// TENNIS HEADING //-->
        <div class="row">
          <!--// TENNIS BLOG DEC //-->
          <div class="col-md-4">
          <div class="tns-blog-wrap">
            <span class="tns-date">
            <b>25</b>
            <b>July</b>
            </span>
            <div class="thumb">
            <img src="extra-images/tns-blog1.jpg" alt="">
            </div>
            <div class="tns-blog-caption">
            <h4><a href="#">Racket Into Two Pieces By An Player</a></h4>
            <ul>
              <li><a href="#"><i class="fa fa-comment"></i>10 Comment</a></li>
              <li><a href="#"><i class="fa fa-eye"></i>30 Views</a></li>
            </ul>
            <p>Tennis is a perfect combination of violent action itaking place in an atmosphere of total tranquility.Tennis is a perfect combination ...</p>
            <a href="#">Read More</a>
            </div>
          </div>
          </div>
           <!--// TENNIS BLOG DEC //-->
           <!--// TENNIS BLOG DEC //-->
          <div class="col-md-4">
          <div class="tns-blog-wrap">
            <span class="tns-date">
            <b>25</b>
            <b>July</b>
            </span>
            <div class="thumb">
            <img src="extra-images/tns-blog1.jpg" alt="">
            </div>
            <div class="tns-blog-caption">
            <h4><a href="#">Racket Into Two Pieces By An Player</a></h4>
            <ul>
              <li><a href="#"><i class="fa fa-comment"></i>10 Comment</a></li>
              <li><a href="#"><i class="fa fa-eye"></i>30 Views</a></li>
            </ul>
            <p>Tennis is a perfect combination of violent action itaking place in an atmosphere of total tranquility.Tennis is a perfect combination ...</p>
            <a href="#">Read More</a>
            </div>
          </div>
          </div>
           <!--// TENNIS BLOG DEC //-->
           <!--// TENNIS BLOG DEC //-->
          <div class="col-md-4">
          <div class="tns-blog-wrap">
            <span class="tns-date">
            <b>25</b>
            <b>July</b>
            </span>
            <div class="thumb">
            <img src="extra-images/tns-blog1.jpg" alt="">
            </div>
            <div class="tns-blog-caption">
            <h4><a href="#">Racket Into Two Pieces By An Player</a></h4>
            <ul>
              <li><a href="#"><i class="fa fa-comment"></i>10 Comment</a></li>
              <li><a href="#"><i class="fa fa-eye"></i>30 Views</a></li>
            </ul>
            <p>Tennis is a perfect combination of violent action itaking place in an atmosphere of total tranquility.Tennis is a perfect combination ...</p>
            <a href="#">Read More</a>
            </div>
          </div>
          </div>
           <!--// TENNIS BLOG DEC //-->
        </div>
        </div>
      </section>
      <!--// TENNIS BLOG SECTION //-->
      <!--// TENNIS LATEST GALLERY SECTION //-->
      <section class="tns-gallery2-bg">
        <div class="container">
        <!--// TENNIS HEADING //-->
        <div class="tns-heading1 white">
          <p>Watch All The Stunning Matches</p>
          <h4>OUr  Latest Gallery</h4>
          <span><i class="icon-sport"></i></span>
        </div>
        <!--// TENNIS HEADING //-->
        <div class="row">
          <!--// LATEST GALLERY 2 //-->
          <div class="col-md-3">
          <div class="tns-gallery2">
            <div class="thumb">
            <img src="extra-images/tns-blog2.png" alt="">
            <ul class="thumb-caption2">
              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              <li><a href="#"><i class="fa fa-heart"></i></a></li>
              <li><a data-rel="prettyPhoto[]" href="extra-images/tns-blog2.png"><i class="fa fa-search"></i></a></li>
            </ul>
            </div>
            <div class="text">
            <h4><a href="#">Tennis Hand Bag Kit</a></h4>
            <div class="rating">
              <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
            </div>
            <p>375 . 00</p>
            </div>
          </div>
          </div>
          <!--// LATEST GALLERY 2 //-->
          <!--// LATEST GALLERY 2 //-->
          <div class="col-md-3">
          <div class="tns-gallery2">
            <div class="thumb">
            <img src="extra-images/tns-blog3.png" alt="">
            <ul class="thumb-caption2">
              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              <li><a href="#"><i class="fa fa-heart"></i></a></li>
              <li><a data-rel="prettyPhoto[]" href="extra-images/tns-blog3.png"><i class="fa fa-search"></i></a></li>
            </ul>
            </div>
            <div class="text">
            <h4><a href="#">Tennis Hand Bag Kit</a></h4>
            <div class="rating">
              <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
            </div>
            <p>375 . 00</p>
            </div>
          </div>
          </div>
          <!--// LATEST GALLERY 2 //-->
          <!--// LATEST GALLERY 2 //-->
          <div class="col-md-3">
          <div class="tns-gallery2">
            <div class="thumb">
            <img src="extra-images/tns-blog4.png" alt="">
            <ul class="thumb-caption2">
              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              <li><a href="#"><i class="fa fa-heart"></i></a></li>
              <li><a data-rel="prettyPhoto[]" href="extra-images/tns-blog4.png"><i class="fa fa-search"></i></a></li>
            </ul>
            </div>
            <div class="text">
            <h4><a href="#">Tennis Hand Bag Kit</a></h4>
            <div class="rating">
              <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
            </div>
            <p>375 . 00</p>
            </div>
          </div>
          </div>
          <!--// LATEST GALLERY 2 //-->
          <!--// LATEST GALLERY 2 //-->
          <div class="col-md-3">
          <div class="tns-gallery2">
            <div class="thumb">
            <img src="extra-images/tns-blog5.png" alt="">
            <ul class="thumb-caption2">
              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
              <li><a href="#"><i class="fa fa-heart"></i></a></li>
              <li><a data-rel="prettyPhoto[]" href="extra-images/tns-blog5.png"><i class="fa fa-search"></i></a></li>
            </ul>
            </div>
            <div class="text">
            <h4><a href="#">Tennis Hand Bag Kit</a></h4>
            <div class="rating">
              <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
            </div>
            <p>375 . 00</p>
            </div>
          </div>
          </div>
          <!--// LATEST GALLERY 2 //-->
        </div>
        </div>
      </section>
      <!--// TENNIS LATEST GALLERY SECTION //-->
      <div class="tns-counterup">
        <div class="container">
        <div class="row">
          <div class="col-md-3">
          <div class="counterup-dec">
            <span class="icon-ball"></span>
            <h3><i class="fa fa-plus"></i><b class="word-count">300</b>Matches</h3>
          </div>
          </div>
          <div class="col-md-3">
          <div class="counterup-dec">
            <span class="icon-three-star-hotel"></span>
            <h3><i class="fa fa-plus"></i><b class="word-count">275</b>Winnings</h3>
          </div>
          </div>
          <div class="col-md-3">
          <div class="counterup-dec">
            <span class="icon-cup-1"></span>
            <h3><i class="fa fa-plus"></i><b class="word-count">275</b>Trophies</h3>
          </div>
          </div>
          <div class="col-md-3">
          <div class="counterup-dec">
            <span class="icon-medal"></span>
            <h3><i class="fa fa-plus"></i><b class="word-count">50</b>Award</h3>
          </div>
          </div>
        </div>
        </div>
      </div>
      <!--// TENNIS TEAM SECTION //-->
      <section>
        <div class="container">
        <!--// TENNIS HEADING //-->
        <div class="tns-heading1 black">
          <p>Watch All The Stunning Matches</p>
          <h4>Our  Team & Coaches</h4>
          <span><i class="icon-sport"></i></span>
        </div>
        <!--// TENNIS HEADING //-->
        <div class="row">
          <!--// TENNIS TEAM DEC //-->
          <div class="col-md-3">
          <div class="tns-team">
            <img src="extra-images/tns-team1.png" alt="">
            <div class="tns-team-caption">
            <h5><a href="#">JOHN MONTGOMERY</a></h5>
            </div>
            <div class="tns-team-caption tns-team-caption-overlay">
            <h5><a href="#">JOHN MONTGOMERY</a></h5>
            <p>Tennis is a perfect combination of violent action itaking place in an atmosphere</p>
            <ul class="tns-social2">
              <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
              <li><a href="#"> <i class="fa fa-twitter"></i></a></li>
              <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"> <i class="fa fa-google-plus"></i></a></li>
            </ul>
            </div>
          </div>
          </div>
          <!--// TENNIS TEAM DEC //-->
          <!--// TENNIS TEAM DEC //-->
          <div class="col-md-3">
          <div class="tns-team">
            <img src="extra-images/tns-team2.png" alt="">
            <div class="tns-team-caption">
            <h5><a href="#">Maria Kirilenko</a></h5>
            </div>
            <div class="tns-team-caption tns-team-caption-overlay">
            <h5><a href="#">Maria Kirilenko</a></h5>
            <p>Tennis is a perfect combination of violent action itaking place in an atmosphere</p>
            <ul class="tns-social2">
              <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
              <li><a href="#"> <i class="fa fa-twitter"></i></a></li>
              <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"> <i class="fa fa-google-plus"></i></a></li>
            </ul>
            </div>
          </div>
          </div>
          <!--// TENNIS TEAM DEC //-->
          <!--// TENNIS TEAM DEC //-->
          <div class="col-md-3">
          <div class="tns-team">
            <img src="extra-images/tns-team3.png" alt="">
            <div class="tns-team-caption">
            <h5><a href="#">Anna Kournikova</a></h5>
            </div>
            <div class="tns-team-caption tns-team-caption-overlay">
            <h5><a href="#">Anna Kournikova</a></h5>
            <p>Tennis is a perfect combination of violent action itaking place in an atmosphere</p>
            <ul class="tns-social2">
              <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
              <li><a href="#"> <i class="fa fa-twitter"></i></a></li>
              <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"> <i class="fa fa-google-plus"></i></a></li>
            </ul>
            </div>
          </div>
          </div>
          <!--// TENNIS TEAM DEC //-->
          <!--// TENNIS TEAM DEC //-->
          <div class="col-md-3">
          <div class="tns-team">
            <img src="extra-images/tns-team4.png" alt="">
            <div class="tns-team-caption">
            <h5><a href="#">BENJAMIN MENDOZA</a></h5>
            </div>
            <div class="tns-team-caption tns-team-caption-overlay">
            <h5><a href="#">BENJAMIN MENDOZA</a></h5>
            <p>Tennis is a perfect combination of violent action itaking place in an atmosphere</p>
            <ul class="tns-social2">
              <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
              <li><a href="#"> <i class="fa fa-twitter"></i></a></li>
              <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"> <i class="fa fa-google-plus"></i></a></li>
            </ul>
            </div>
          </div>
          </div>
          <!--// TENNIS TEAM DEC //-->
        </div>
        </div>
      </section>
      <!--// TENNIS TEAM SECTION //-->
      <!--// TENNIS TESTIMONIAL SECTION //-->
      <section class="tns-testimonial-bg">
        <div class="container">
        <!--// TENNIS HEADING //-->
        <div class="tns-heading1 white">
          <p>Watch All The Stunning Matches</p>
          <h4>What People say about us</h4>
          <span><i class="icon-sport"></i></span>
        </div>
        <!--// TENNIS HEADING //-->
        <div class="tns-testimonial-silder">
          <ul class="bxslider7">
          <li>
            <div class="tns-testimonial">
            <figure>
              <img src="extra-images/testimonial-4.jpg" alt="">
            </figure>
            <h6><a href="#">Julia George</a></h6>
            <p>Tennis is a perfect combination of violent action taking place in an atmosphere of total tranquility.Tennis is a perfect combination of violent action taking place in an atmosphere of total tranquility.Tennis is a perfect combination of violent action taking place in an atmosphere..</p>
            </div>
          </li>
          <li>
            <div class="tns-testimonial">
            <figure>
              <img src="extra-images/testimonial-4.jpg" alt="">
            </figure>
            <h6><a href="#">Julia George</a></h6>
            <p>Tennis is a perfect combination of violent action taking place in an atmosphere of total tranquility.Tennis is a perfect combination of violent action taking place in an atmosphere of total tranquility.Tennis is a perfect combination of violent action taking place in an atmosphere..</p>
            </div>
          </li>
          <li>
            <div class="tns-testimonial">
            <figure>
              <img src="extra-images/testimonial-4.jpg" alt="">
            </figure>
            <h6><a href="#">Julia George</a></h6>
            <p>Tennis is a perfect combination of violent action taking place in an atmosphere of total tranquility.Tennis is a perfect combination of violent action taking place in an atmosphere of total tranquility.Tennis is a perfect combination of violent action taking place in an atmosphere..</p>
            </div>
          </li>
          <li>
            <div class="tns-testimonial">
            <figure>
              <img src="extra-images/testimonial-4.jpg" alt="">
            </figure>
            <h6><a href="#">Julia George</a></h6>
            <p>Tennis is a perfect combination of violent action taking place in an atmosphere of total tranquility.Tennis is a perfect combination of violent action taking place in an atmosphere of total tranquility.Tennis is a perfect combination of violent action taking place in an atmosphere..</p>
            </div>
          </li>
          </ul>
        </div>
        </div>
      </section>
      <!--// TENNIS TESTIMONIAL SECTION //-->
      <!--// TENNIS ACHIVEMENT SECTION //-->
      <section>
        <div class="container">
        <!--// TENNIS HEADING //-->
        <div class="tns-heading1 black">
          <p>Watch All The Stunning Matches</p>
          <h4>Our Achievement</h4>
          <span><i class="icon-sport"></i></span>
        </div>
        <!--// TENNIS HEADING //-->
        <div class="row">
          <div class="col-md-3">
          <div class="tns-achiv">
            <figure>
            <img src="extra-images/tns-achivement1.png" alt="">
            <figcaption><a data-rel="prettyPhoto[]" href="images/about.jpg"><i class="fa fa-search"></i></a></figcaption>
            </figure>
          </div>
          </div>
          <div class="col-md-3">
          <div class="tns-achiv">
            <figure>
            <img src="extra-images/tns-achivement2.png" alt="">
            <figcaption><a data-rel="prettyPhoto[]" href="images/about.jpg"><i class="fa fa-search"></i></a></figcaption>
            </figure>
          </div>
          </div>
          <div class="col-md-3">
          <div class="tns-achiv">
            <figure>
            <img src="extra-images/tns-achivement3.png" alt="">
            <figcaption><a data-rel="prettyPhoto[]" href="images/about.jpg"><i class="fa fa-search"></i></a></figcaption>
            </figure>
          </div>
          </div>
          <div class="col-md-3">
          <div class="tns-achiv">
            <figure>
            <img src="extra-images/tns-achivement4.png" alt="">
            <figcaption><a data-rel="prettyPhoto[]" href="images/about.jpg"><i class="fa fa-search"></i></a></figcaption>
            </figure>
          </div>
          </div>
        </div>
        </div>
      </section>
      <!--// TENNIS ACHIVEMENT SECTION //-->
      </div>
      <!--// Main Content //-->
    </div>

      <footer class="tennis-footer">
      <div class="container">
        <div class="col-md-3">
        <div class="widget tns-text-widget">
          <div class="tns-ftlogo">
          <a href="#"><img src="images/tennis-logo.png" alt=""></a>
          </div>
          <p>Lorem ipsum dolor sit , consect etur adipisicing elit, sed do usmotempor incidt dolore magna aliqua</p>
          <ul class="tns-social2">
          <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
          <li><a href="#"> <i class="fa fa-twitter"></i></a></li>
          <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        </div>

        <div class="col-md-3">
        <div class="widget tsn-widget tsn-contact">
          <h4>Contact Us</h4>
          <div class="tsn-contact-dec">
          <h6><i class="fa fa-home" ></i>Address</h6>
          <span>building 3550  Lorem ispum, China city  </span>
          </div>
          <div class="tsn-contact-dec">
          <h6><i class="fa fa-phone" ></i>call</h6>
          <span>(123)456-78-90</span>
          </div>
          <div class="tsn-contact-dec">
          <h6><i class="fa fa-envelope" ></i>Email Us</h6>
          <span>Sales@kodetennis.com</span>
          </div>
        </div>
        </div>

        <div class="col-md-3">
        <div class="widget tsn-widget tsn-news">
          <h4>Latest News</h4>
          <ul>
          <li><a href="#"><span>01</span>Improve Your Strok Using The Wall</a></li>
          <li><a href="#"><span>01</span>Improve Your Strok Using The Wall</a></li>
          <li><a href="#"><span>01</span>Improve Your Strok Using The Wall</a></li>
          </ul>
        </div>
        </div>
        <div class="col-md-3">
        <div class="widget tsn-widget tsn-search">
          <h4>Newsletter</h4>
          <p>Lorem ipsum dolor sit amet, coned do usmotempor dolorna aliqua </p>
          <form>
          <input type="text" placeholder="Enter Your Email">
          <button>Subscribe</button>
          </form>
        </div>
        </div>
      </div>
      </footer>
      <div class="tns-copyright">
      <div class="container">
        <span>© 2016-17 kickoff.com All right reserved</span>
        <p>Website by <a href="#">Kodeforest</a> </p>
      </div>
      </div>
      <!--// Contact Footer //-->
      <!--// Wrapper //-->
      <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header thbg-color">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Login To Your Account</h4>
        </div>
        <div class="modal-body">
          <form class="kode-loginform">
          <p><span>User Name</span> <input type="text" placeholder="User Name"></p>
          <p><span>Password</span> <input type="password" placeholder="Password"></p>
          <p><label><input type="checkbox"><span>Remember Me</span></label></p>
          <p class="kode-submit"><a href="#">Lost Your Password</a> <input class="thbg-colortwo" type="submit" value="Sign in"></p>
          </form>
        </div>
        </div>
      </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="myModalTwo" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header thbg-color">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Register</h4>
          </div>
          <div class="modal-body">
          <form class="kode-loginform">
            <p><span>Email</span> <input type="text" placeholder="Email"></p>
            <p><span>Password</span> <input type="password" placeholder="Password"></p>
            <p><span>Retype Password</span> <input type="password" placeholder="Retype Password"></p>
            <p><label><input type="checkbox"><span>Remember Me</span></label></p>
            <p class="kode-submit"><a href="#">Lost Your Password</a> <input class="thbg-colortwo" type="submit" value="Sign Up"></p>
          </form>
          </div>
        </div>
        </div>
      </div>

    <!-- jQuery (necessary for JavaScript plugins) -->
    <!--JavaScript-->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <!--BOOTSTRAP JavaScript-->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!--BOOTSTRAP PROGRESS BAR JavaScript-->
    <script src="{{ asset('js/bootstrap-progressbar.js') }}"></script>
    <!--FLEX SLIDER JavaScript-->
    <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
    <!--OWL SLIDER JavaScript-->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!--BX SLIDER JavaScript-->
    <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
    <!--SLICK SLIDER JavaScript-->
    <script src="{{ asset('slick/slick.min.js') }}"></script>
    <!--SLICK SLIDER JavaScript-->
    <script src="{{ asset('js/masonry.min.js') }}"></script>
    <!--ACCORDIAN JavaScript--> 
    <script src="{{ asset('js/jquery.accordion.js') }}"></script>
    <!--PRETTY PHOTO JavaScript-->
    <script src="{{ asset('js/jquery.prettyphoto.js') }}"></script>
    <script src="{{ asset('js/kode_pp.js') }}"></script>
    <!--MASONRY JavaScript-->
    <script src="{{ asset('js/masonry.min.js') }}"></script>
    <!--Number Count (Waypoints) JavaScript-->
    <script src="{{ asset('js/jquery.countdown.js') }}"></script> 
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
      <script src="{{ asset('js/jquery.dlmenu.js') }}"></script>
    <script src="{{ asset('js/jquery.downCount.js') }}"></script>
    <script src="{{ asset('js/waypoints-min.js') }}"></script>
    <script src="{{ asset('js/moment.min.js') }}"></script>
    <!--CUSTOM JavaScript-->
    <script src="{{ asset('js/functions.js') }}"></script>
    @yield('js')
  </body>
</html>