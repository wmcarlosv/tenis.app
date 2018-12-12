    <footer class="football-footer">
      <div class="container">
        <div class="row">
        <div class="col-md-4">
          <div class="widget spb-widget spb-text-widget">
          <div class="ft-logo">
            <a href="{{ url('/') }}">
              @if(isset($site->logo) and !empty($site->logo))
                <img src="{{ asset('application/storage/app/'.$site->logo) }}" alt="">
              @endif
            </a>
          </div>
          <p>
            @if(isset($site->description) and !empty($site->description))
              {{ $site->description }}
            @endif
          </p>
          <ul class="spb-social2">
            <li>
                  @if(isset($site->facebook) and !empty($site->facebook))
                    <a href="{{ $site->facebook }}"><i class="fa fa-facebook"></i></a>
                  @else
                    <a href="#"><i class="fa fa-facebook"></i></a>
                  @endif
                </li>
                <li>
                  @if(isset($site->twitter) and !empty($site->twitter))
                    <a href="{{ $site->twitter }}"><i class="fa fa-twitter"></i></a>
                  @else
                    <a href="#"><i class="fa fa-twitter"></i></a>
                  @endif                
                </li>
                <li>
                  @if(isset($site->twitter) and !empty($site->twitter))
                    <a href="{{ $site->linkedin }}"><i class="fa fa-linkedin"></i></a>
                  @else
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                  @endif
                </li>
                <li>
                  @if(isset($site->twitter) and !empty($site->twitter))
                    <a href="{{ $site->googleplus }}"><i class="fa fa-google-plus"></i></a>
                  @else
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                  @endif
                  
                </li>
          </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="widget spb-widget spb-popular">
          <h4>Ultimas Noticias</h4>
          @foreach($notices_header as $nh)
            <div class="spb-popular-dec">
              <figure>
                <img src="{{ asset('application/storage/app/public/notices/avatars/'.$nh->avatar) }}" class="footer-notice-image" alt="">
                <a data-rel="prettyPhoto[]" href="extra-images/popular-ft1.jpg') }}" class="spb-play"><i class="fa fa-plus"></i></a>
              </figure>
              <div class="text">
                <a href="{{ route('home.notice',['slug' => $nh->slug]) }}">{{ str_limit(strip_tags($nh->content),70) }}</a>
                <ul class="spb-meta2">
                  <li><a href="#"><i class="fa fa-calendar"></i>{{ date('d-m H:m',strtotime($nh->publisher_date)) }}</a></li>
                  <li><a href="#"><i class="fa fa-user"></i>{{ $nh->user->name }}</a></li>
                </ul>
              </div>
            </div>
          @endforeach
          </div>
        </div>
        <div class="col-md-4">
          <div class="widget spb-widget spb-flicker">
          <h4>Flicker Widgets</h4>
          <ul>
            <li>
              <a data-rel="prettyPhoto[]" href="extra-images/flicker-ft1.jpg') }}" class="spb-play"><i class="fa fa-plus"></i></a>
              <img src="{{ asset('extra-images/flicker-ft1.jpg') }}" alt="">
            </li>
            <li>
              <a data-rel="prettyPhoto[]" href="extra-images/flicker-ft2.jpg') }}" class="spb-play"><i class="fa fa-plus"></i></a>
              <img src="{{ asset('extra-images/flicker-ft2.jpg') }}" alt="">
            </li>
            <li>
              <a data-rel="prettyPhoto[]" href="extra-images/flicker-ft3.jpg') }}" class="spb-play"><i class="fa fa-plus"></i></a>
              <img src="{{ asset('extra-images/flicker-ft3.jpg') }}" alt="">
            </li>
            <li>
              <a data-rel="prettyPhoto[]" href="extra-images/flicker-ft4.jpg') }}" class="spb-play"><i class="fa fa-plus"></i></a>
              <img src="{{ asset('extra-images/flicker-ft4.jpg') }}" alt="">
            </li>
            <li>
              <a data-rel="prettyPhoto[]" href="extra-images/flicker-ft5.jpg') }}" class="spb-play"><i class="fa fa-plus"></i></a>
              <img src="{{ asset('extra-images/flicker-ft5.jpg') }}" alt="">
            </li>
            <li>
              <a data-rel="prettyPhoto[]" href="extra-images/flicker-ft6.jpg') }}" class="spb-play"><i class="fa fa-plus"></i></a>
              <img src="{{ asset('extra-images/flicker-ft6.jpg') }}" alt="">
            </li>
            <li>
              <a data-rel="prettyPhoto[]" href="extra-images/flicker-ft7.jpg') }}" class="spb-play"><i class="fa fa-plus"></i></a>
              <img src="{{ asset('extra-images/flicker-ft7.jpg') }}" alt="">
            </li>
            <li>
              <a data-rel="prettyPhoto[]" href="extra-images/flicker-ft8.jpg') }}" class="spb-play"><i class="fa fa-plus"></i></a>
              <img src="{{ asset('extra-images/flicker-ft8.jpg') }}" alt="">
            </li>
          </ul>
          <a class="spb-btn3" href="#">Load More</a>
          </div>
        </div>
        </div>
        <div class="spb-copyright">
        <ul class="sbp-ftnav">
          <li><a href="{{ url('/') }}">home</a></li>
          <li><a href="{{ url('/notices') }}">Noticias</a></li>
          <li><a href="{{ url('/champoinships') }}">Campeonatos</a></li>
          <li><a href="{{ url('/clubes') }}">Clubes</a></li>
          <li><a href="{{ url('/galleries') }}">Galeria</a></li>
          <li><a href="#">Rankings</a></li>
        </ul>
        <p>All Rights Reserved</p>
        <a id="kode-topbtn" href="#"><i class="fa fa-angle-double-up"></i></a>
        </div>
      </div>
      </footer>
    </div>

      <script src="{{ asset('js/jquery.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap-progressbar.js') }}"></script>
      <script src="{{ asset('js/jquery.flexslider.js') }}"></script>
      <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
      <script src="{{ asset('slick/slick.min.js') }}"></script>
      <script src="{{ asset('js/moment.min.js') }}"></script>
      <script src="{{ asset('js/jquery.accordion.js') }}"></script>
      <script src="{{ asset('js/jquery.prettyphoto.js') }}"></script>
      <script src="{{ asset('js/kode_pp.js') }}"></script>
      <script src="{{ asset('js/jquery.countdown.js') }}"></script>
      <script src="{{ asset('js/jquery.downCount.js') }}"></script>
      <script src="{{ asset('js/modernizr.custom.js') }}"></script>
      <script src="{{ asset('js/jquery.dlmenu.js') }}"></script>
      <script src="{{ asset('js/waypoints-min.js') }}"></script>
      <script src="{{ asset('js/fullcalendar.min.js') }}"></script>
      <script src="{{ asset('js/functions.js') }}"></script>
      @yield('js')
      <script type="text/javascript">
        $(document).ready(function(){

            $("#region_id").change(function(){
                $("#city_id").empty();
                var id = $(this).val();
                var url = '{{ asset("/admin/cities/getCities") }}/'+id;
                $("#city_id").append('<option value="">--Ciudad--</option>');

                $.get(url, function( response ){
                    if(response){
                        $.each(JSON.parse(response), function(index, obj){
                            $("#city_id").append('<option value="'+obj.value+'">'+obj.text+'</option>');
                        });   
                    }
                    
                });
            });
        });
    </script>
    </body>
  </html>