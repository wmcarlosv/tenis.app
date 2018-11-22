<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
            <title>FootBall - Sports Html Template</title>
            <!--BOOTSTRAP CSS-->
            <link href="css/bootstrap.css" rel="stylesheet">
            <!--SLICK SLIDER CSS-->
            <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick-theme.css') }}"/>
            <link rel="stylesheet" type="text/css" href="{{ asset('slick/slick.css') }}"/>
            <!--BX SLIDER CSS-->
            <link rel="stylesheet" href="{{ asset('css/jquery.bxslider.css') }}">
            <!--OWL SLIDER CSS-->
            <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
            <!--FLEX SLIDER CSS-->
            <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
            <!--component CSS-->
            <link href="{{ asset('css/component.css') }}" rel="stylesheet">
            <!--PRETTY PHOTO CSS-->
            <link href="{{ asset('css/prettyphoto.css') }}" rel="stylesheet">
            <!--ICONS CSS-->
            <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
            <link href="svg-icon.css" rel="stylesheet">
            <!--THEME TYPO CSS-->
            <link href="{{ asset('css/themetypo.css') }}" rel="stylesheet">
            <link href="{{ asset('css/fullcalendar.css') }}" rel='stylesheet' />
            <!--WIDGET CSS-->
            <link rel="stylesheet" href="{{ asset('css/widget.css') }}">
            <!--CUSTOM STYLE CSS-->
            <link rel="stylesheet" href="{{ asset('style.css') }}">
            <!--component CSS-->
            <link href="{{ asset('css/component.css') }}" rel="stylesheet">
            <!--COLOR CSS-->
            <link rel="stylesheet" href="{{ asset('css/color.css') }}">
            <!--RESPONCIVE CSS-->
            <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
            @yield('css')
        </head>
        <body class="kode-football">
            <!--// Wrapper //-->
            <div class="kode-wrapper">
              <!--// Header //-->
              <header class="football-header">
                <div class="topbar4">
                  <div class="container">
                    <div class="pull-right">
                        <div class="login-wraper3">
                            <ul class="login-meta">
                              <li><a href="#">help desk</a></li>
                              <li><a href="#">live score</a></li>
                                <li>
                                    <!-- Large modal -->
                                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target=".media01">Login</a>

                                    <div class="modal fade bs-example-modal-lg media01" tabindex="-1" role="login" aria-labelledby="login">
                                      <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="kode_modal_body">
                                                <a href="#"><i class="fa fa-user"></i></a>
                                                <h2>member  login</h2>
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
                                    <!-- Large modal -->
                                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target=".media02">Register</a>
                                    
                                    <div class="modal fade bs-example-modal-lg media02" tabindex="-1" role="Register" aria-labelledby="Register">
                                      <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="kode_modal_body">
                                                <a href="#"><i class="fa fa-user"></i></a>
                                                <h2>Register</h2>
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
                                                        <button>register</button>
                                                        <a href="#">member  login</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                      </div>
                                    </div>
                                    
                                </li>
                              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                              <li><a id="ftb_btn_link" ><i class="fa fa-search"></i></a></li>
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
                      <a href="#"><img src="{{ asset('images/logo2.png') }}" alt=""></a>
                    </div>
                    <!--// SPB TICKER //-->
                    <div class="spb-ticker spb-ticker2">
                      <span>New:</span>
                      <ul class="top_slider_bxslider">
                        <li>
                          <div class="ticker-dec">
                            <a href="#">Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean soquis bibendum auctor, entum feugiat,</a>
                          </div>
                        </li>
                        <li>
                          <div class="ticker-dec">
                            <a href="#">Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean soquis bibendum auctor, entum feugiat,</a>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <!--// SPB TICKER //-->
                  </div>
                </div>

                <div class="nav4">
                  <div class="container">
                    <ul class="kode_nave">
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
                                  <li><a href="our-team-2.html">our team 02 </a></li>
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
                        <li><a href="contact-us.html">Contact Us</a></li>
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
                    <div class="ticket-wrap">
                      <a class="book-now" href="tickets.html"><i class="fa fa-ticket"></i>Buy Tickets</a>
                      <div class="lung-link">
                        <a href="#">en</a>
                        <a href="#">fr</a>
                      </div>
                    </div>
                  </div>
                </div>
              </header>
              <!--// Header //-->
              <!--// Main Banner //-->
              <div id="mainbanner">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                      <!--// THUMB SLIDER START //-->
                      <div class="thumb-slider">
                        <img src="{{ asset('extra-images/slide4.jpg') }}" alt="" />
                        <div class="container">
                          <div class="kode-ft-caption text-left"> 
                            <div class="football-caption">      
                              <h6>Welcome</h6>
                              <h4>football</h4>
                              <h5>Football Club</h5>
                            </div>
                            <div class="clearfix"></div>        
                            <p><a class="btn-4" href="#">Veiw More<i class="fa fa-angle-right"></i></a></p>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                      <!--// THUMB SLIDER END //-->
                    </li>
                    <li>
                      <!--// THUMB SLIDER START //-->
                      <div class="thumb-slider">
                        <img src="{{ asset('extra-images/slide5.jpg') }}" alt="" />
                        <div class="container">
                          <div class="kode-ft-caption text-center"> 
                            <div class="football-caption">      
                              <h6>Welcome</h6>
                              <h4>football</h4>
                              <h5>Football Club</h5>
                            </div>
                            <div class="clearfix"></div>        
                            <p><a class="btn-4" href="#">Veiw More<i class="fa fa-angle-right"></i></a></p>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                      <!--// THUMB SLIDER END //-->
                    </li>
                    <li>
                      <!--// THUMB SLIDER START //-->
                      <div class="thumb-slider">
                        <img src="{{ asset('extra-images/slide7.jpg') }}" alt="" />
                        <div class="container">
                          <div class="kode-ft-caption text-right"> 
                            <div class="football-caption">      
                              <h6>Welcome</h6>
                              <h4>football</h4>
                              <h5>Football Club</h5>
                            </div>
                            <div class="clearfix"></div>        
                            <p><a class="btn-4" href="#">Veiw More<i class="fa fa-angle-left"></i></a></p>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                      </div>
                      <!--// THUMB SLIDER END //-->
                    </li>
                  </ul>
                </div>
              </div>
              <!--// Main Banner //-->
              <!--// Main Content //-->
              <div class="kode-content">
                <div class="ft-match-slider">
                  <div class="owl-carousel-3 owl-theme" id="owl-demo6">
                    <!--// SLIDER ITEM //-->
                      <div class="ft-match-dec">
                          <span>23 June 2016</span>
                          <div class="ft-match-teams">
                            <div class="ft-team-1">
                              <h5><a href="#">Iceland</a></h5>
                              <a href="#"><img src="{{ asset('images/flag.png') }}" alt=""></a>
                            </div>
                            <span>21 : 00</span>
                            <div class="ft-team-1 ft-team-2">
                              <h5><a href="#">Poland</a></h5>
                              <a href="#"><img src="{{ asset('images/flag6.png') }}" alt=""></a>
                            </div>
                          </div>
                      </div>
                    <!--// SLIDER ITEM //-->
                    <!--// SLIDER ITEM //-->
                      <div class="ft-match-dec">
                          <span>23 June 2016</span>
                          <div class="ft-match-teams">
                            <div class="ft-team-1">
                              <h5><a href="#">England</a></h5>
                              <a href="#"><img src="{{ asset('images/flag2.png') }}" alt=""></a>
                            </div>
                            <span>21 : 00</span>
                            <div class="ft-team-1 ft-team-2">
                              <h5><a href="#">Germany</a></h5>
                              <a href="#"><img src="{{ asset('images/flag3.png') }}" alt=""></a>
                            </div>
                          </div>
                      </div>
                    <!--// SLIDER ITEM //-->
                    <!--// SLIDER ITEM //-->
                      <div class="ft-match-dec">
                          <span>23 June 2016</span>
                          <div class="ft-match-teams">
                            <div class="ft-team-1">
                              <h5><a href="#">Turkey</a></h5>
                              <a href="#"><img src="images/flag4.png" alt=""></a>
                            </div>
                            <span>21 : 00</span>
                            <div class="ft-team-1 ft-team-2">
                              <h5><a href="#">Africa</a></h5>
                              <a href="#"><img src="images/flag5.png" alt=""></a>
                            </div>
                          </div>
                      </div>
                    <!--// SLIDER ITEM //-->
                    <!--// SLIDER ITEM //-->
                      <div class="ft-match-dec">
                          <span>23 June 2016</span>
                          <div class="ft-match-teams">
                            <div class="ft-team-1">
                              <h5><a href="#">Iceland</a></h5>
                              <a href="#"><img src="images/flag.png" alt=""></a>
                            </div>
                            <span>21 : 00</span>
                            <div class="ft-team-1 ft-team-2">
                              <h5><a href="#">Poland</a></h5>
                              <a href="#"><img src="images/flag6.png" alt=""></a>
                            </div>
                          </div>
                      </div>
                    <!--// SLIDER ITEM //-->
                    <!--// SLIDER ITEM //-->
                      <div class="ft-match-dec">
                          <span>23 June 2016</span>
                          <div class="ft-match-teams">
                            <div class="ft-team-1">
                              <h5><a href="#">Iceland</a></h5>
                              <a href="#"><img src="images/flag.png" alt=""></a>
                            </div>
                            <span>21 : 00</span>
                            <div class="ft-team-1 ft-team-2">
                              <h5><a href="#">Poland</a></h5>
                              <a href="#"><img src="images/flag.png" alt=""></a>
                            </div>
                          </div>
                      </div>
                    <!--// SLIDER ITEM //-->
                  </div>
                </div>
                <section class="ftb_goalpost">
                    <div class="container">
                        <div class="heading5 hdg_6">
                          <h4>About the <span>Goalpost</span></h4>
                        </div>
                        <div class="row">
                            <div class="ftb_goal_tab_des">
                                <div class="col-md-3">
                                    <div class="ftb_goal_fig">
                                        <img src="extra-images/goal.jpg" alt="images">
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="panel panel-default">
                                        <div class="ftb_goal_tabs">
                                            <ul class="ftb_goal_tab_detail">
                                                <li><a class="active" href="#tab1" data-toggle="tab">Club History</a></li>
                                                <li><a href="#tab2" data-toggle="tab">Club Mission & vission</a></li>
                                                <li><a href="#tab3" data-toggle="tab">Club Stats</a></li>
                                            </ul>
                                            <div class="panel-body">    
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab1">
                                                        <div class="ftb_goal_tab_text">
                                                            <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit. Nam sed ligula odio. Sed id metus felis. Ut pretium nisl non justo condimentum id tincidunt nunc faucibus. Ut neque eros, pulvinar eu blandit quis, lacinia nec ipsum. Etiam vel orci ipsum. Sed eget velit ipsum. Duis in tortor scelerisque felis mattis imperdiet. Donec at libero tellus. Suspendisse consectetur consectetur bibendum.tincidunt nunc faucibus. </p>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="ftb_goal_caption">
                                                                        <span class="icon-football-2"></span>
                                                                        <h5><a href="#">Dolor Sit Nam Sed</a></h5>
                                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="ftb_goal_caption">
                                                                        <span class="icon-symbol-1"></span>
                                                                        <h5><a href="#">Dolor Sit Nam Sed</a></h5>
                                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="ftb_goal_caption margin_0">
                                                                        <span class="icon-signs"></span>
                                                                        <h5><a href="#">Dolor Sit Nam Sed</a></h5>
                                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="ftb_goal_caption margin_0">
                                                                        <span class="icon-football-1"></span>
                                                                        <h5><a href="#">Dolor Sit Nam Sed</a></h5>
                                                                        <p>The first mate and his Skipper too will do their very best to make the others comfort</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab2">
                                                        <div class="ftb_goal_club">
                                                            <h3>Club Mission</h3>
                                                            <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit. Nam sed ligula odio. Sed id metus felis. Ut pretium nisl non justo condimentum id tincidunt nunc faucibus. Ut neque eros, pulvinar eu blandit quis, lacinia nec ipsum. Etiam vel orci ipsum. Sed eget velit ipsum. Duis in tortor scelerisque felis mattis imperdiet. Donec at libero tellus. Suspendisse consectetur consectetur bibendum.tincidunt nunc faucibus. </p>
                                                        </div>
                                                        <div class="ftb_goal_club">
                                                            <h3>Club Vission</h3>
                                                            <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit. Nam sed ligula odio. Sed id metus felis. Ut pretium nisl non justo condimentum id tincidunt nunc faucibus. Ut neque eros, pulvinar eu blandit quis, lacinia nec ipsum. Etiam vel orci ipsum. Sed eget velit ipsum. Duis in tortor scelerisque felis mattis imperdiet. Donec at libero tellus. Suspendisse consectetur consectetur bibendum.tincidunt nunc faucibus. </p>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="tab3">
                                                        <div class="ftb_club_stats">
                                                            <p>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit. Nam sed ligula odio. Sed id metus felis. Ut pretium nisl non justo condimentum id tincidunt nunc faucibus. Ut neque eros, pulvinar eu blandit quis, lacinia nec ipsum. Etiam vel orci ipsum. Sed eget velit ipsum. Duis in tortor scelerisque felis mattis imperdiet. Donec at libero tellus. Suspendisse consectetur consectetur bibendum.tincidunt nunc faucibus. Ut neque eros, pulvinar eu blandit quis, lacinia nec ipsum. Etiam vel orci ipsum. Sed eget velit ipsum. Duis in tortor scelerisque felis mattis imperdiet. Donec at libero tellus. Suspendisse consectetur consectetur bibendum.</p>
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i>1990 Duis in tortor scelerisque felis</a></li>
                                                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i>1990 Duis in tortor scelerisque felis</a></li>
                                                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i>1993 Duis in tortor scelerisque felis mattis</a></li>
                                                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i>1990 Duis in tortor scelerisque felis</a></li>
                                                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i>1995 Duis in tortor scelerisque eget velit </a></li>
                                                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i>1990 Duis in tortor scelerisque felis</a></li>
                                                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i>2000 Duis in  felis mattis imperdiet</a></li>
                                                                <li><a href="#"><i class="fa fa-chevron-circle-right"></i>1990 Duis in tortor scelerisque felis</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </section>
                <!--// TENNIS EVENT BG //-->
                <section class="ftb-resultbg">
                  <div class="container">
                    <div class="heading5">
                      <h4>Latest <span>Match result</span></h4>
                    </div>
                    <div class="ftb-result-wrap">
                      <div class="ftb-result1">
                        <div class="ftb-result-logo">
                          <a href="#"><img src="images/ftb-result.png" alt=""></a>
                          <span><b>Win</b></span>
                        </div>
                        <div class="text">
                          <h6><a href="#">Eagle Sharks</a></h6>
                          <span>Daniel Sturridge - 1 goal</span>
                          <span>Edward Colier- 2 goal</span>
                        </div>
                      </div>

                      <div class="ftb-final-result">
                        <em>October 1, 2014 | 2:15 pm <i>Little Park</i></em>
                        <p><span class="grater">3</span> - <span>1</span></p>
                        <a class="btn-4"  href="#">SEE More</a>
                      </div>

                      <div class="ftb-result1 ftb-result2">
                        <div class="ftb-result-logo">
                          <a href="#"><img src="images/ftb-result2.png" alt=""></a>
                          <span><b>Loss</b></span>
                        </div>
                        <div class="text">
                          <h6><a href="#">Eagle Sharks</a></h6>
                          <span>Daniel Sturridge - 1 goal</span>
                          <span>Edward Colier- 2 goal</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <!--// TENNIS EVENT BG //-->
                <!--// TENNIS EVENT FIXTURE //-->
                <section>
                  <div class="container">
                    <div class="row">
                      <!--// BLOG SLIDER //-->
                      <div class="col-md-4">
                        <div class="heading6">
                          <h4>News <span>Post</span></h4>
                        </div>
                        <div class="ftb-bx-slider">
                          <ul class="bxslider">
                            <li>
                              <div class="ftb-post-thumb">
                                <a href="#"><img src="extra-images/ftb-post-slider.jpg" alt=""></a>
                                <div class="text">
                                  <h6>Best Goal Save In History</h6>
                                  <a class="btn-4" href="#">Read More</a>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="ftb-post-thumb">
                                <a href="#"><img src="extra-images/ftb-post-slider.jpg" alt=""></a>
                                <div class="text">
                                  <h6>Best Goal Save In History</h6>
                                  <a class="btn-4" href="#">Read More</a>
                                </div>
                              </div>
                            </li>
                            <li>
                              <div class="ftb-post-thumb">
                                <a href="#"><img src="extra-images/ftb-post-slider.jpg" alt=""></a>
                                <div class="text">
                                  <h6>Best Goal Save In History</h6>
                                  <a class="btn-4" href="#">Read More</a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <!--// BLOG SLIDER //-->
                      <!--// BLOG SLIDER //-->
                      <div class="col-md-4">
                        <!--// HEADING 6 //-->
                        <div class="heading6">
                          <h4>Recent<span>Videos</span></h4>
                        </div>
                        <!--// HEADING 6 //-->
                        <!--// POST //-->
                        <div class="ftb-post-thumb">
                          <a href="#"><img src="extra-images/ftb-post-slider2.jpg" alt=""></a>
                          <a class="spb-play" href="#"><i class="fa fa-play-circle"></i></a>
                          <div class="text">
                            <h6>Highlights OF Euro Cup 2nd Mtach</h6>
                          </div>
                        </div>
                        <!--// POST //-->
                        <!--// POST //-->
                        <div class="ftb-post-thumb">
                          <a href="#"><img src="extra-images/ftb-post-slider3.jpg" alt=""></a>
                          <a class="spb-play" href="#"><i class="fa fa-play-circle"></i></a>
                          <div class="text">
                            <h6>A Single Fan In Stadium</h6>
                          </div>
                        </div>
                        <!--// POST //-->
                      </div>
                      <!--// BLOG SLIDER //-->
                      <div class="col-md-4">
                        <!--// HEADING 6 //-->
                        <div class="heading6">
                          <h4>Club<span>Ranking</span></h4>
                        </div>
                        <!--// HEADING 6 //-->
                        <!--// RATING TABLE //-->
                        <ul class="ftb-rating-table">
                          <li>
                            <div class="ftb-position">
                              1 . 
                            </div>
                            <div class="ftb-team-name">
                              <img src="images/short-logo2.png" alt="">
                              <a href="#">Lore Ipsum Dolor</a>
                            </div>
                            <div class="ftb-team-points">
                              20
                            </div>
                          </li>
                          <li>
                            <div class="ftb-position">
                              2 . 
                            </div>
                            <div class="ftb-team-name">
                              <img src="images/short-logo3.png" alt="">
                              <a href="#">Lore Ipsum Dolor</a>
                            </div>
                            <div class="ftb-team-points">
                              25
                            </div>
                          </li>
                          <li>
                            <div class="ftb-position">
                              3 . 
                            </div>
                            <div class="ftb-team-name">
                              <img src="images/short-logo4.png" alt="">
                              <a href="#">Lore Ipsum Dolor</a>
                            </div>
                            <div class="ftb-team-points">
                              30
                            </div>
                          </li>
                          <li>
                            <div class="ftb-position">
                              4 . 
                            </div>
                            <div class="ftb-team-name">
                              <img src="images/short-logo1.png" alt="">
                              <a href="#">Lore Ipsum Dolor</a>
                            </div>
                            <div class="ftb-team-points">
                              45
                            </div>
                          </li>
                          <li>
                            <div class="ftb-position">
                              5 . 
                            </div>
                            <div class="ftb-team-name">
                              <img src="images/short-logo6.png" alt="">
                              <a href="#">Lore Ipsum Dolor</a>
                            </div>
                            <div class="ftb-team-points">
                              29
                            </div>
                          </li>
                          <li>
                            <div class="ftb-position">
                              6 . 
                            </div>
                            <div class="ftb-team-name">
                              <img src="images/short-logo7.png" alt="">
                              <a href="#">Lore Ipsum Dolor</a>
                            </div>
                            <div class="ftb-team-points">
                              03
                            </div>
                          </li>
                        </ul>
                        <!--// RATING TABLE //-->
                      </div>
                      <!--// BLOG SLIDER //-->
                    </div>
                    <!--// MAIN TABS TABLE //-->
                    
                    <div class="ftb-tabs-wrap">
                      <!--// MAIN TABS NAV //-->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a class="hire" href="#homeone" aria-controls="homeone" role="tab" data-toggle="tab">Next Match</a></li>
                        <li role="presentation"><a  class="hire" href="#profileone" aria-controls="profileone" role="tab" data-toggle="tab">Training Schedule</a></li>
                        <li role="presentation"><a  class="hire" href="#messagesone" aria-controls="messagesone" role="tab" data-toggle="tab">Leauge Table</a></li>
                      </ul>
                      <!--// MAIN TABS NAV //-->
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="homeone">
                          <!--// MAIN TABS TABLE //-->
                          <ul class="ftb-main-table">
                            <li>
                              <div class="ftb-date">
                                15th May
                              </div>
                              <div class="ftb-compitatev">
                                <div class="compitatev-team1">
                                  <img src="images/short-logo8.png" alt="">
                                  <a href="#">Bristol Academy</a>
                                </div>
                                <span>VS</span>
                                <div class="compitatev-team1 compitatev-team2">
                                  <img src="images/short-logo9.png" alt="">
                                  <a href="#">Bristol Academy</a>
                                </div>
                              </div>
                              <div class="ftb-venue">Camp Nou</div>
                              <div class="ftb-ticket"><a class="hire" href="#">Buy Ticket</a></div>
                            </li>
                            <li>
                              <div class="ftb-date">
                                15th May
                              </div>
                              <div class="ftb-compitatev">
                                <div class="compitatev-team1">
                                  <img src="images/short-logo10.png" alt="">
                                  <a href="#">Bristol Academy</a>
                                </div>
                                <span>VS</span>
                                <div class="compitatev-team1 compitatev-team2">
                                  <img src="images/short-logo11.png" alt="">
                                  <a href="#">Bristol Academy</a>
                                </div>
                              </div>
                              <div class="ftb-venue">Camp Nou</div>
                              <div class="ftb-ticket"><a class="hire" href="#">Buy Ticket</a></div>
                            </li>
                            <li>
                              <div class="ftb-date">
                                15th May
                              </div>
                              <div class="ftb-compitatev">
                                <div class="compitatev-team1">
                                  <img src="images/short-logo12.png" alt="">
                                  <a href="#">Bristol Academy</a>
                                </div>
                                <span>VS</span>
                                <div class="compitatev-team1 compitatev-team2">
                                  <img src="images/short-logo13.png" alt="">
                                  <a href="#">Bristol Academy</a>
                                </div>
                              </div>
                              <div class="ftb-venue">Camp Nou</div>
                              <div class="ftb-ticket"><a class="hire" href="#">Buy Ticket</a></div>
                            </li>
                            <li>
                              <div class="ftb-date">
                                15th May
                              </div>
                              <div class="ftb-compitatev">
                                <div class="compitatev-team1">
                                  <img src="images/short-logo14.png" alt="">
                                  <a href="#">Bristol Academy</a>
                                </div>
                                <span>VS</span>
                                <div class="compitatev-team1 compitatev-team2">
                                  <img src="images/short-logo15.png" alt="">
                                  <a href="#">Bristol Academy</a>
                                </div>
                              </div>
                              <div class="ftb-venue">Camp Nou</div>
                              <div class="ftb-ticket"><a class="hire" href="#">Buy Ticket</a></div>
                            </li>
                            <li>
                              <div class="ftb-date">
                                15th May
                              </div>
                              <div class="ftb-compitatev">
                                <div class="compitatev-team1">
                                  <img src="images/short-logo8.png" alt="">
                                  <a href="#">Bristol Academy</a>
                                </div>
                                <span>VS</span>
                                <div class="compitatev-team1 compitatev-team2">
                                  <img src="images/short-logo9.png" alt="">
                                  <a href="#">Bristol Academy</a>
                                </div>
                              </div>
                              <div class="ftb-venue">Camp Nou</div>
                              <div class="ftb-ticket"><a class="hire" href="#">Buy Ticket</a></div>
                            </li>
                          </ul>
                          <!--// MAIN TABS TABLE //-->
                        </div>
                        <div role="tabpanel" class="tab-pane" id="profileone">
                             <div class="kode_calendar">
                                <div id='calendar' style="display:block !important;"></div>
                             </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="messagesone">
                            <ul class="kode_ticket_list list_2">
                                <li>
                                    <span>04<i>SEp</i></span>
                                    <div class="kode_ticket_text">
                                        <h6>English Premier Leauge</h6>
                                        <div class="ticket_title">
                                            <h2>Great Titan</h2>
                                            <span>VS</span>
                                            <h2>Somalian Titans</h2>
                                        </div>
                                        <p>15:30 PM, Soccer Stadium, Dubai</p>
                                    </div>
                                    <div class="ticket_btn">
                                        <a href="#">Buy Ticket</a>
                                    </div>
                                </li>
                                
                                <li>
                                    <span>04<i>SEp</i></span>
                                    <div class="kode_ticket_text">
                                        <h6>English Premier Leauge</h6>
                                        <div class="ticket_title">
                                            <h2>Great Titan</h2>
                                            <span>VS</span>
                                            <h2>Somalian Titans</h2>
                                        </div>
                                        <p>15:30 PM, Soccer Stadium, Dubai</p>
                                    </div>
                                    <div class="ticket_btn">
                                        <a href="#">Buy Ticket</a>
                                    </div>
                                </li>
                                <li>
                                    <span>04<i>SEp</i></span>
                                    <div class="kode_ticket_text">
                                        <h6>English Premier Leauge</h6>
                                        <div class="ticket_title">
                                            <h2>Great Titan</h2>
                                            <span>VS</span>
                                            <h2>Somalian Titans</h2>
                                        </div>
                                        <p>15:30 PM, Soccer Stadium, Dubai</p>
                                    </div>
                                    <div class="ticket_btn">
                                        <a href="#">Buy Ticket</a>
                                    </div>
                                </li>
                                <li>
                                    <span>04<i>SEp</i></span>
                                    <div class="kode_ticket_text">
                                        <h6>English Premier Leauge</h6>
                                        <div class="ticket_title">
                                            <h2>Great Titan</h2>
                                            <span>VS</span>
                                            <h2>Somalian Titans</h2>
                                        </div>
                                        <p>15:30 PM, Soccer Stadium, Dubai</p>
                                    </div>
                                    <div class="ticket_btn">
                                        <a href="#">Buy Ticket</a>
                                    </div>
                                </li>
                                <li>
                                    <span>04<i>SEp</i></span>
                                    <div class="kode_ticket_text">
                                        <h6>English Premier Leauge</h6>
                                        <div class="ticket_title">
                                            <h2>Great Titan</h2>
                                            <span>VS</span>
                                            <h2>Somalian Titans</h2>
                                        </div>
                                        <p>15:30 PM, Soccer Stadium, Dubai</p>
                                    </div>
                                    <div class="ticket_btn">
                                        <a href="#">Buy Ticket</a>
                                    </div>
                                </li>
                                <li>
                                    <span>04<i>SEp</i></span>
                                    <div class="kode_ticket_text">
                                        <h6>English Premier Leauge</h6>
                                        <div class="ticket_title">
                                            <h2>Great Titan</h2>
                                            <span>VS</span>
                                            <h2>Somalian Titans</h2>
                                        </div>
                                        <p>15:30 PM, Soccer Stadium, Dubai</p>
                                    </div>
                                    <div class="ticket_btn">
                                        <a href="#">Buy Ticket</a>
                                    </div>
                                </li>
                                <li>
                                    <span>04<i>SEp</i></span>
                                    <div class="kode_ticket_text">
                                        <h6>English Premier Leauge</h6>
                                        <div class="ticket_title">
                                            <h2>Great Titan</h2>
                                            <span>VS</span>
                                            <h2>Somalian Titans</h2>
                                        </div>
                                        <p>15:30 PM, Soccer Stadium, Dubai</p>
                                    </div>
                                    <div class="ticket_btn">
                                        <a href="#">Buy Ticket</a>
                                    </div>
                                </li>
                            </ul>   
                        </div>
                      </div>
                    </div>
                    <!--// MAIN TABS TABLE //-->
                  </div>
                </section>
                <!--// TENNIS EVENT FIXTURE //-->
                <!--// TENNIS GALLERY //-->
                <section class="ftb-gallery-bg">
                    <div class="container">
                      <div class="heading5">
                        <h4>Our  <span>Gallery</span></h4>
                      </div>
                      <div class="ftb-gallery">
                        <ul>
                          <li>
                            <figure>
                              <img src="extra-images/ftbgallery1.jpg" alt="">
                              <figcaption>
                                <h4>Great Game Ever In History</h4>
                                <a data-rel="prettyPhoto[]" href="images/about.jpg"><i class="fa fa-eye"></i></a>
                              </figcaption>
                            </figure>
                          </li>
                          <li>
                            <figure>
                              <img src="extra-images/ftbgallery2.jpg" alt="">
                              <figcaption>
                                <h4>Great Game Ever In History</h4>
                                <a data-rel="prettyPhoto[]" href="images/about.jpg"><i class="fa fa-eye"></i></a>
                              </figcaption>
                            </figure>
                          </li>
                          <li>
                            <figure>
                              <img src="extra-images/ftbgallery3.jpg" alt="">
                              <figcaption>
                                <h4>Great Game Ever In History</h4>
                                <a data-rel="prettyPhoto[]" href="images/about.jpg"><i class="fa fa-eye"></i></a>
                              </figcaption>
                            </figure>
                          </li>
                          <li>
                            <figure>
                              <img src="extra-images/ftbgallery4.jpg" alt="">
                              <figcaption>
                                <h4>Great Game Ever In History</h4>
                                <a data-rel="prettyPhoto[]" href="images/about.jpg"><i class="fa fa-eye"></i></a>
                              </figcaption>
                            </figure>
                          </li>
                          <li>
                            <figure>
                              <img src="extra-images/ftbgallery5.jpg" alt="">
                              <figcaption>
                                <h4>Great Game Ever In History</h4>
                                <a data-rel="prettyPhoto[]" href="images/about.jpg"><i class="fa fa-eye"></i></a>
                              </figcaption>
                            </figure>
                          </li>
                          <li>
                            <figure>
                              <img src="extra-images/ftbgallery6.jpg" alt="">
                              <figcaption>
                                <h4>Great Game Ever In History</h4>
                                <a data-rel="prettyPhoto[]" href="images/about.jpg"><i class="fa fa-eye"></i></a>
                              </figcaption>
                            </figure>
                          </li>
                        </ul>
                        <div class="tns-load ftb-load">                
                          <a href="#">load more</a>
                        </div>
                      </div>
                    </div>
                </section>
                <!--// FOOTBALL COUNTER //-->
                <div class="ftb-counterup">
                  <div class="container">
                    <!--// HEADING 5 //-->
                    <div class="heading5">
                      <h4>Important Statictics</h4>
                    </div>
                    <!--// HEADING 5 //-->
                    <div class="row">
                      <!--// COUNTER //-->
                      <div class="col-md-3 col-sm-3">
                        <div class="counterup-dec">
                          <span class="icon-football"></span>
                          <div class="text">
                            <h3 class="word-count">250</h3>
                            <p>Played Games</p>
                          </div>
                        </div>
                      </div>
                      <!--// COUNTER //-->
                      <!--// COUNTER //-->
                      <div class="col-md-3 col-sm-3">
                        <div class="counterup-dec">
                          <span class="icon-soccer"></span>
                          <div class="text">
                            <h3 class="word-count">200</h3>
                            <p>Record Goals</p>
                          </div>
                        </div>
                      </div>
                      <!--// COUNTER //-->
                      <div class="col-md-3 col-sm-3">
                        <div class="counterup-dec">
                          <span class="icon-symbol"></span>
                          <div class="text">
                            <h3 class="word-count">154</h3>
                            <p>Great Winnings</p>
                          </div>
                        </div>
                      </div>
                      <!--// COUNTER //-->
                      <!--// COUNTER //-->
                      <div class="col-md-3 col-sm-3">
                        <div class="counterup-dec">
                          <span class="icon-cup"></span>
                          <div class="text">
                            <h3 class="word-count">24</h3>
                            <p>Awards & Trophies</p>
                          </div>
                        </div>
                      </div>
                      <!--// COUNTER //-->
                    </div>
                  </div>
                </div>
                <!--// FOOTBALL COUNTER //-->
                <!--// FOOTBALL TEAM SECTION //-->
                <section>
                  <div class="container">
                    <!--// HEADING 5 //-->
                    <div class="heading5 black">
                      <h4>Our  <span>Team</span></h4>
                    </div>
                    <!--// HEADING 5 //-->
                    <div class="row">
                      <!--// FOOTBALL TEAM //-->
                      <div class="col-md-3 col-sm-6">
                        <div class="ftb-team-thumb">
                          <figure><img src="extra-images/ftb-teamone.png" alt=""></figure>
                          <div class="ftb-team-dec">
                            <span>07</span>
                            <div class="text">
                              <a href="#">Leo Adam</a>
                              <p>Defender</p>
                            </div>
                            <a class="arrow-iconbtn" href="#"><i class="fa fa-arrow-right "></i></a>
                          </div>
                        </div>
                      </div>
                      <!--// FOOTBALL TEAM //-->
                      <!--// FOOTBALL TEAM //-->
                      <div class="col-md-3 col-sm-6">
                        <div class="ftb-team-thumb">
                          <figure><img src="extra-images/ftb-teamtwo.png" alt=""></figure>
                          <div class="ftb-team-dec">
                            <span>07</span>
                            <div class="text">
                              <a href="#">Leo Adam</a>
                              <p>Defender</p>
                            </div>
                            <a class="arrow-iconbtn" href="#"><i class="fa fa-arrow-right "></i></a>
                          </div>
                        </div>
                      </div>
                      <!--// FOOTBALL TEAM //-->
                      <!--// FOOTBALL TEAM //-->
                      <div class="col-md-3 col-sm-6">
                        <div class="ftb-team-thumb">
                          <figure><img src="extra-images/ftb-three.png" alt=""></figure>
                          <div class="ftb-team-dec">
                            <span>07</span>
                            <div class="text">
                              <a href="#">Leo Adam</a>
                              <p>Defender</p>
                            </div>
                            <a class="arrow-iconbtn" href="#"><i class="fa fa-arrow-right "></i></a>
                          </div>
                        </div>
                      </div>
                      <!--// FOOTBALL TEAM //-->
                      <!--// FOOTBALL TEAM //-->
                      <div class="col-md-3 col-sm-6">
                        <div class="ftb-team-thumb">
                          <figure><img src="extra-images/ftb-teamfour.png" alt=""></figure>
                          <div class="ftb-team-dec">
                            <span>07</span>
                            <div class="text">
                              <a href="#">Leo Adam</a>
                              <p>Defender</p>
                            </div>
                            <a class="arrow-iconbtn" href="#"><i class="fa fa-arrow-right "></i></a>
                          </div>
                        </div>
                      </div>
                      <!--// FOOTBALL TEAM //-->
                    </div>
                  </div>
                </section>
                <!--// FOOTBALL TEAM SECTION //-->
                <!--// FOOTBALL LATEST NEWS SECTION //-->
                <div class="ftb-latestnew-wrap">
                  <div class="container">
                    <div class="row">
                      <!--// FOOTBALL LATEST NEWS //-->
                      <div class="col-md-7">
                        <!--// HEADING 5 //-->
                        <div class="heading5 text-left">
                          <h4>Featured <span>News</span></h4>
                        </div>
                        <!--// HEADING 5 //-->
                        <div class="ftb-latestnew">
                          <figure><img src="extra-images/ftb-new1.jpg" alt=""></figure>
                          <div class="ftb-new-dec">
                            <span>
                              <b>April</b>
                              12
                            </span>
                            <div class="text">
                              <h4><a href="#">Great Win Over Chelsea</a></h4>
                              <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.Aenean sollicitudin, lorem quis bibe ...</p>
                              <a href="#">Read More</a>
                              <ul>
                                <li><a href="#">3<i class="fa fa-heart"></i></a></li>
                                <li><a href="#">3<i class="fa fa-comment"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--// FOOTBALL LATEST NEWS //-->
                      <!--// FOOTBALL LATEST NEWS //-->
                      <div class="col-md-5 ftb-latestnew2-wrap">
                        <!--// HEADING 5 //-->
                        <div class="heading5 text-left">
                          <h4>Latest  <span>Post</span></h4>
                        </div>
                        <!--// HEADING 5 //-->
                        <!--// FOOTBALL LATEST NEWS //-->
                        <div class="ftb-latestnew2">
                          <div class="ftb-new-dec">
                            <figure><img src="extra-images/ftb-new2.jpg" alt=""></figure>
                            <div class="text">
                              <h4><a href="#">Lore Ipsum Dolor</a></h4>
                              <p>This is Photoshop's version is theveltiocv sollicitudin, lorem quis bibe .This is Photoshop's version is ti ...</p>
                              <a href="#">Read More</a>
                            </div>
                          </div>
                        </div>
                        <!--// FOOTBALL LATEST NEWS //-->
                        <!--// FOOTBALL LATEST NEWS //-->
                        <div class="ftb-latestnew2">
                          <div class="ftb-new-dec">
                            <figure><img src="extra-images/ftb-new3.jpg" alt=""></figure>
                            <div class="text">
                              <h4><a href="#">Lore Ipsum Dolor</a></h4>
                              <p>This is Photoshop's version is theveltiocv sollicitudin, lorem quis bibe .This is Photoshop's version is ti ...</p>
                              <a href="#">Read More</a>
                            </div>
                          </div>
                        </div>
                        <!--// FOOTBALL LATEST NEWS //-->
                        <!--// FOOTBALL LATEST NEWS //-->
                        <div class="ftb-latestnew2">
                          <div class="ftb-new-dec">
                            <figure><img src="extra-images/ftb-new4.jpg" alt=""></figure>
                            <div class="text">
                              <h4><a href="#">Lore Ipsum Dolor</a></h4>
                              <p>This is Photoshop's version is theveltiocv sollicitudin, lorem quis bibe .This is Photoshop's version is ti ...</p>
                              <a href="#">Read More</a>
                            </div>
                          </div>
                        </div>
                        <!--// FOOTBALL LATEST NEWS //-->
                        <!--// FOOTBALL LATEST NEWS //-->
                        <div class="ftb-latestnew2">
                          <div class="ftb-new-dec">
                            <figure><img src="extra-images/ftb-new5.jpg" alt=""></figure>
                            <div class="text">
                              <h4><a href="#">Lore Ipsum Dolor</a></h4>
                              <p>This is Photoshop's version is theveltiocv sollicitudin, lorem quis bibe .This is Photoshop's version is ti ...</p>
                              <a href="#">Read More</a>
                            </div>
                          </div>
                        </div>
                        <!--// FOOTBALL LATEST NEWS //-->
                      </div>
                      <!--// FOOTBALL LATEST NEWS //-->
                    </div>
                  </div>
                </div>
                <!--// FOOTBALL LATEST NEWS SECTION //-->
                <!--// FOOTBALL PRODUCT SECTION //-->
                <div class="ftb-item_padding">
                  <div class="container">
                    <!--// HEADING 5 //-->
                    <div class="heading5 black">
                      <h4>SPORTS  <span>WEAR</span></h4>
                      <p>Etiam sodales ante id nunc. Proin ornare dignissim lacus. Nunc porttitor nunc a sem.</p>
                    </div>
                    <!--// HEADING 5 //-->
                    <div class="row">
                      <!--// FOOTBALL ITEM //-->
                        <div class="col-md-3 col-sm-6">
                          <div class="ftb-item">
                            <figure><img src="images/ftb-item1.png" alt=""></figure>
                            <div class="text">
                                    <h4>
                                        <a href="#">Sports Shoes</a>
                                    </h4>
                                    <span><del>$45 </del>$25</span>
                                    <div class="clear"></div>
                                    <div class="rating rating_3">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>   
                                </div>
                                <div class="text text-hover">
                                    <div class="ftb_item_detail">
                                        <a data-rel="prettyPhoto[]" class="like-icon" href="images/ftb-item1.png"><i class="fa fa-eye"></i></a>
                                        <a class="buy-btn" href="#">Buy Now</a>
                                        <a class="like-icon right" href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <h4><a href="#">Sports Shoes</a></h4>
                                    <span><del>$45 </del>$25</span>
                                    <div class="clear"></div>
                                    <div class="rating rating_3">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>   
                                </div>
                          </div>
                        </div>
                      <!--// FOOTBALL ITEM //-->
                      <!--// FOOTBALL ITEM //-->
                      <div class="col-md-3 col-sm-6">
                          <div class="ftb-item">
                            <figure><img src="images/ftb-item2.png" alt=""></figure>
                            <div class="text">
                                    <h4>
                                        <a href="#">Sports Shoes</a>
                                    </h4>
                                    <span><del>$45 </del>$25</span>
                                    <div class="clear"></div>
                                    <div class="rating rating_3">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>   
                                </div>
                                <div class="text text-hover">
                                    <div class="ftb_item_detail">
                                        <a data-rel="prettyPhoto[]" class="like-icon" href="images/ftb-item1.png"><i class="fa fa-eye"></i></a>
                                        <a class="buy-btn" href="#">Buy Now</a>
                                        <a class="like-icon right" href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <h4><a href="#">Sports Shoes</a></h4>
                                    <span><del>$45 </del>$25</span>
                                    <div class="clear"></div>
                                    <div class="rating rating_3">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>   
                                </div>
                          </div>
                      </div>
                      <!--// FOOTBALL ITEM //-->
                      <!--// FOOTBALL ITEM //-->
                      <div class="col-md-3 col-sm-6">
                          <div class="ftb-item">
                            <figure><img src="images/ftb-item3.png" alt=""></figure>
                            <div class="text">
                                    <h4>
                                        <a href="#">Sports Shoes</a>
                                    </h4>
                                    <span><del>$45 </del>$25</span>
                                    <div class="clear"></div>
                                    <div class="rating rating_3">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>   
                                </div>
                                <div class="text text-hover">
                                    <div class="ftb_item_detail">
                                        <a data-rel="prettyPhoto[]" class="like-icon" href="images/ftb-item1.png"><i class="fa fa-eye"></i></a>
                                        <a class="buy-btn" href="#">Buy Now</a>
                                        <a class="like-icon right" href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <h4><a href="#">Sports Shoes</a></h4>
                                    <span><del>$45 </del>$25</span>
                                    <div class="clear"></div>
                                    <div class="rating rating_3">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>   
                                </div>
                          </div>
                      </div>
                      <!--// FOOTBALL ITEM //-->
                      <!--// FOOTBALL ITEM //-->
                        <div class="col-md-3 col-sm-6">
                            <div class="ftb-item">
                                <figure><img src="images/ftb-item4.png" alt=""></figure>
                                <div class="text">
                                    <h4>
                                        <a href="#">Sports Shoes</a>
                                    </h4>
                                    <span><del>$45 </del>$25</span>
                                    <div class="clear"></div>
                                    <div class="rating rating_3">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>   
                                </div>
                                <div class="text text-hover">
                                    <div class="ftb_item_detail">
                                        <a data-rel="prettyPhoto[]" class="like-icon" href="images/ftb-item1.png"><i class="fa fa-eye"></i></a>
                                        <a class="buy-btn" href="#">Buy Now</a>
                                        <a class="like-icon right" href="#"><i class="fa fa-heart"></i></a>
                                    </div>
                                    <h4><a href="#">Sports Shoes</a></h4>
                                    <span><del>$45 </del>$25</span>
                                    <div class="clear"></div>
                                    <div class="rating rating_3">
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                        <span><i class="fa fa-star"></i></span>
                                    </div>   
                                </div>
                            </div>
                        </div>
                      </div>
                      <!--// FOOTBALL ITEM //-->
                    </div>
                  </div>
                </div>
                <!--// FOOTBALL PRODUCT SECTION //-->
            </div>
            <!--// Main Content //-->
            
          <!--// Contact Footer //-->
          <footer class="football-footer">
            <div class="container">
              <div class="row">
                <!--// TEXT WIDGET //-->
                <div class="col-md-4">
                  <div class="widget spb-widget spb-text-widget">
                    <div class="ft-logo">
                      <a href="#"><img src="images/logo2.png" alt=""></a>
                    </div>
                    <p>orem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet ante at nunc pretium mattis. Nunc ac semp a libero et, iaculis gravida orci.</p>
                    <p>Suspendisse imperdiet dolor in tristique dignissim. Fusce lacus dolor, accumsan . .</p>
                    <ul class="spb-social2">
                      <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"> <i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#"> <i class="fa fa-rss"></i></a></li>
                      <li><a href="#"> <i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#"> <i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>
                </div>
                <!--// TEXT WIDGET //-->
                <!--// POPULAR WIDGET //-->
                <div class="col-md-4">
                  <div class="widget spb-widget spb-popular">
                    <h4>Most  Popular</h4>
                    <div class="spb-popular-dec">
                      <figure>
                        <img src="extra-images/popular-ft1.jpg" alt="">
                        <a data-rel="prettyPhoto[]" href="extra-images/popular-ft1.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
                      </figure>
                      <div class="text">
                        <a href="#">Lorem ipsum dolor amet, conse-ctetur adipiscing elit. Donec st.</a>
                        <ul class="spb-meta2">
                          <li><a href="#"><i class="fa fa-heart"></i>13 like</a></li>
                          <li><a href="#"><i class="fa fa-comment"></i>14 comment</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="spb-popular-dec">
                      <figure>
                        <img src="extra-images/popular-ft2.jpg" alt="">
                        <a data-rel="prettyPhoto[]" href="extra-images/popular-ft2.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
                      </figure>
                      <div class="text">
                        <a href="#">Lorem ipsum dolor amet, conse-ctetur adipiscing elit. Donec st.</a>
                        <ul class="spb-meta2">
                          <li><a href="#"><i class="fa fa-heart"></i>13 like</a></li>
                          <li><a href="#"><i class="fa fa-comment"></i>14 comment</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="spb-popular-dec">
                      <figure>
                        <img src="extra-images/popular-ft3.jpg" alt="">
                        <a data-rel="prettyPhoto[]" href="extra-images/popular-ft3.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
                      </figure>
                      <div class="text">
                        <a href="#">Lorem ipsum dolor amet, conse-ctetur adipiscing elit. Donec st.</a>
                        <ul class="spb-meta2">
                          <li><a href="#"><i class="fa fa-heart"></i>13 like</a></li>
                          <li><a href="#"><i class="fa fa-comment"></i>14 comment</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!--// POPULAR WIDGET //-->
                <!--// FLICKER WIDGET //-->
                <div class="col-md-4">
                  <div class="widget spb-widget spb-flicker">
                    <h4>Flicker Widgets</h4>
                    <ul>
                      <li>
                          <a data-rel="prettyPhoto[]" href="extra-images/flicker-ft1.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
                          <img src="extra-images/flicker-ft1.jpg" alt="">
                      </li>
                      <li>
                          <a data-rel="prettyPhoto[]" href="extra-images/flicker-ft2.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
                          <img src="extra-images/flicker-ft2.jpg" alt="">
                      </li>
                      <li>
                          <a data-rel="prettyPhoto[]" href="extra-images/flicker-ft3.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
                          <img src="extra-images/flicker-ft3.jpg" alt="">
                      </li>
                      <li>
                          <a data-rel="prettyPhoto[]" href="extra-images/flicker-ft4.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
                          <img src="extra-images/flicker-ft4.jpg" alt="">
                      </li>
                      <li>
                          <a data-rel="prettyPhoto[]" href="extra-images/flicker-ft5.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
                          <img src="extra-images/flicker-ft5.jpg" alt="">
                      </li>
                      <li>
                          <a data-rel="prettyPhoto[]" href="extra-images/flicker-ft6.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
                          <img src="extra-images/flicker-ft6.jpg" alt="">
                      </li>
                      <li>
                          <a data-rel="prettyPhoto[]" href="extra-images/flicker-ft7.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
                          <img src="extra-images/flicker-ft7.jpg" alt="">
                      </li>
                      <li>
                          <a data-rel="prettyPhoto[]" href="extra-images/flicker-ft8.jpg" class="spb-play"><i class="fa fa-plus"></i></a>
                          <img src="extra-images/flicker-ft8.jpg" alt="">
                      </li>
                    </ul>
                    <a class="spb-btn3" href="#">Load More</a>
                  </div>
                </div>
                <!--// FLICKER WIDGET //-->
              </div>
              <!--// COPY RIGHT //-->
              <div class="spb-copyright">
                <ul class="sbp-ftnav">
                  <li><a href="#">home</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">Topics</a></li>
                  <li><a href="#">Stats</a></li>
                  <li><a href="#">Videos</a></li>
                  <li><a href="#">post</a></li>
                </ul>
                <p>All Rights Reserved</p>
                <a id="kode-topbtn" href="#"><i class="fa fa-angle-double-up"></i></a>
              </div>
              <!--// COPY RIGHT //-->
            </div>
          </footer>
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
            <script src="{{ asset('js/moment.min.js') }}"></script>
            <!--ACCORDIAN JavaScript--> 
            <script src="{{ asset('js/jquery.accordion.js') }}"></script>
            <!--PRETTY PHOTO JavaScript-->
            <script src="{{ asset('js/jquery.prettyphoto.js') }}"></script>
            <script src="{{ asset('js/kode_pp.js') }}"></script>
            <!--Number Count (Waypoints) JavaScript-->
            <script src="{{ asset('js/jquery.countdown.js') }}"></script>
            <script src="{{ asset('js/jquery.downCount.js') }}"></script>
            <script src="{{ asset('js/modernizr.custom.js') }}"></script>
            <script src="{{ asset('js/jquery.dlmenu.js') }}"></script>
            <script src="{{ asset('js/waypoints-min.js') }}"></script>
            <script src="{{ asset('js/fullcalendar.min.js') }}"></script>
            <!--CUSTOM JavaScript-->
            <script src="{{ asset('js/functions.js') }}"></script>
            @yield('js')
        </body>
    </html>