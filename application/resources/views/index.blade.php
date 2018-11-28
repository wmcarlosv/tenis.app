@extends('layouts.app')
@section('title',$site->title)
@section('css')
<style type="text/css">
	img.slider_image{
		height: 670px !important;
	}

	img.notice-one-image{
		width: 671px;
		height: 524px;
	}

	img.notice-more-image{
		width: 107px;
		height: 145px;	
	}

	div.text h4{
		line-height:23px;
	}
</style>
@stop
@section('content')
<div id="mainbanner">
<div class="flexslider">
<ul class="slides">
@if($site->slider_1)
	<li>
	<div class="thumb-slider">
	<img src="{{ asset('application/storage/app/'.$site->slider_1) }}" class="slider_image" alt="" />

	<div class="container">
	  <div class="kode-ft-caption text-left"> 
	  <div class="football-caption">      
	    <h6>{{ $site->slider_1_title }}</h6>
	    <h4>{{ $site->slider_1_subtitle }}</h4>
	  </div>
	  <div class="clearfix"></div>        
	  <p><a class="btn-4" href="{{ $site->slider_1_link }}">Leer Mas..<i class="fa fa-angle-right"></i></a></p>
	  <div class="clearfix"></div>
	  </div>
	</div>
	</div>
	</li>
@endif

@if($site->slider_2)
<li>
<div class="thumb-slider">
<img src="{{ asset('application/storage/app/'.$site->slider_2) }}" class="slider_image" alt="" />
<div class="container">
  <div class="kode-ft-caption text-center"> 
  <div class="football-caption">      
    <h6>{{ $site->slider_2_title }}</h6>
    <h4>{{ $site->slider_2_subtitle }}</h4>
  </div>
  <div class="clearfix"></div>        
  <p><a class="btn-4" href="{{ $site->slider_2_link }}">Leer Mas..<i class="fa fa-angle-right"></i></a></p>
  <div class="clearfix"></div>
  </div>
</div>
</div>
</li>
@endif

@if($site->slider_2)
<li>
<div class="thumb-slider">
<img src="{{ asset('application/storage/app/'.$site->slider_3) }}" class="slider_image" alt="" />
<div class="container">
  <div class="kode-ft-caption text-center"> 
  <div class="football-caption">      
    <h6>{{ $site->slider_3_title }}</h6>
    <h4>{{ $site->slider_3_subtitle }}</h4>
  </div>
  <div class="clearfix"></div>        
  <p><a class="btn-4" href="{{ $site->slider_3_link }}">Leer Mas..<i class="fa fa-angle-right"></i></a></p>
  <div class="clearfix"></div>
  </div>
</div>
</div>
</li>
@endif

</ul>
</div>
</div>
<div class="kode-content">
<div class="ft-match-slider">
<div class="owl-carousel-3 owl-theme" id="owl-demo6">
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
<div class="ft-match-dec">
  <span>23 June 2016</span>
  <div class="ft-match-teams">
  <div class="ft-team-1">
    <h5><a href="#">Turkey</a></h5>
    <a href="#"><img src="{{ asset('images/flag4.png') }}" alt=""></a>
  </div>
  <span>21 : 00</span>
  <div class="ft-team-1 ft-team-2">
    <h5><a href="#">Africa</a></h5>
    <a href="#"><img src="{{ asset('images/flag5.png') }}" alt=""></a>
  </div>
  </div>
</div>
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
    <a href="#"><img src="{{ asset('images/flag.png') }}" alt=""></a>
  </div>
  </div>
</div>
</div>
</div>
<div class="ftb-latestnew-wrap">
<div class="container">
<div class="row">
<!--// FOOTBALL LATEST NEWS //-->
<div class="col-md-7">
<!--// HEADING 5 //-->

<div class="heading5 text-left">
  <h4>Ultimas <span>Noticias</span></h4>
</div>
	@foreach($notices as $index => $ntc)
	<!--// HEADING 5 //-->
		@if($index == 0)
			<div class="ftb-latestnew">
			  <figure><img src="{{ asset('application/storage/app/public/notices/avatars/'.$ntc->avatar) }}" class="notice-one-image" alt=""></figure>
			  <div class="ftb-new-dec">
			  <div class="text">
			    <h4><a href="{{ route('home.notice',['slug' => $ntc->slug]) }}">{{ $ntc->title }}</a></h4>
			    <p>{{ str_limit(strip_tags($ntc->content),200) }}</p>
			    <a href="{{ route('home.notice',['slug' => $ntc->slug]) }}">Leer Mas..</a>
			    <ul>
			    <li><a href="#">{{ date('d/m/Y H:m:s',strtotime($ntc->publisher_date)) }}<i class="fa fa-calendar"></i></a></li>
			    <li><a href="#">{{ $ntc->user->name }}<i class="fa fa-user"></i></a></li>
			    </ul>
			  </div>
			  </div>
			</div>
		@endif	
	@endforeach
</div>
<div class="col-md-5 ftb-latestnew2-wrap">
<div class="heading5 text-left">
  <h4>&nbsp;</h4>
</div>
@foreach($notices as $index => $ntc)
	@if($index != 0)
	<div class="ftb-latestnew2">
	  <div class="ftb-new-dec">
	  <figure><img src="{{ asset('application/storage/app/public/notices/avatars/'.$ntc->avatar) }}" class="notice-more-image" alt=""></figure>
	  <div class="text">
	    <h4><a href="{{ route('home.notice',['slug' => $ntc->slug]) }}">{{ $ntc->title }}</a></h4>
	    <p>{{ str_limit(strip_tags($ntc->content),100) }}</p>
	    <a href="{{ route('home.notice',['slug' => $ntc->slug]) }}">Leer Mas..</a>
	  </div>
	  </div>
	</div>
	@endif
@endforeach
</div>
</div>
</div>
</div>
<section class="ftb-resultbg">
<div class="container">
<div class="heading5">
<h4>Latest <span>Match result</span></h4>
</div>
<div class="ftb-result-wrap">
<div class="ftb-result1">
<div class="ftb-result-logo">
  <a href="#"><img src="{{ asset('images/ftb-result.png') }}" alt=""></a>
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
  <a href="#"><img src="{{ asset('images/ftb-result2.png') }}" alt=""></a>
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
<section>
<div class="container">
<div class="row">
<div class="col-md-4">
<div class="heading6">
  <h4>News <span>Post</span></h4>
</div>
<div class="ftb-bx-slider">
  <ul class="bxslider">
  <li>
    <div class="ftb-post-thumb">
    <a href="#"><img src="{{ asset('extra-images/ftb-post-slider.jpg') }}" alt=""></a>
    <div class="text">
      <h6>Best Goal Save In History</h6>
      <a class="btn-4" href="#">Read More</a>
    </div>
    </div>
  </li>
  <li>
    <div class="ftb-post-thumb">
    <a href="#"><img src="{{ asset('extra-images/ftb-post-slider.jpg') }}" alt=""></a>
    <div class="text">
      <h6>Best Goal Save In History</h6>
      <a class="btn-4" href="#">Read More</a>
    </div>
    </div>
  </li>
  <li>
    <div class="ftb-post-thumb">
    <a href="#"><img src="{{ asset('extra-images/ftb-post-slider.jpg') }}" alt=""></a>
    <div class="text">
      <h6>Best Goal Save In History</h6>
      <a class="btn-4" href="#">Read More</a>
    </div>
    </div>
  </li>
  </ul>
</div>
</div>
<div class="col-md-4">
<div class="heading6">
  <h4>Recent<span>Videos</span></h4>
</div>
<div class="ftb-post-thumb">
  <a href="#"><img src="{{ asset('extra-images/ftb-post-slider2.jpg') }}" alt=""></a>
  <a class="spb-play" href="#"><i class="fa fa-play-circle"></i></a>
  <div class="text">
  <h6>Highlights OF Euro Cup 2nd Mtach</h6>
  </div>
</div>
<div class="ftb-post-thumb">
  <a href="#"><img src="{{ asset('extra-images/ftb-post-slider3.jpg') }}" alt=""></a>
  <a class="spb-play" href="#"><i class="fa fa-play-circle"></i></a>
  <div class="text">
  <h6>A Single Fan In Stadium</h6>
  </div>
</div>
</div>
<div class="col-md-4">
<div class="heading6">
  <h4>Club<span>Ranking</span></h4>
</div>
<ul class="ftb-rating-table">
  <li>
  <div class="ftb-position">
    1 . 
  </div>
  <div class="ftb-team-name">
    <img src="{{ asset('images/short-logo2.png') }}" alt="">
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
    <img src="{{ asset('images/short-logo3.png') }}" alt="">
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
    <img src="{{ asset('images/short-logo4.png') }}" alt="">
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
    <img src="{{ asset('images/short-logo1.png') }}" alt="">
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
    <img src="{{ asset('images/short-logo6.png') }}" alt="">
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
    <img src="{{ asset('images/short-logo7.png') }}" alt="">
    <a href="#">Lore Ipsum Dolor</a>
  </div>
  <div class="ftb-team-points">
    03
  </div>
  </li>
</ul>
</div>
</div>
<div class="ftb-tabs-wrap">
<ul class="nav nav-tabs" role="tablist">
<li role="presentation" class="active"><a class="hire" href="#homeone" aria-controls="homeone" role="tab" data-toggle="tab">Next Match</a></li>
<li role="presentation"><a  class="hire" href="#profileone" aria-controls="profileone" role="tab" data-toggle="tab">Training Schedule</a></li>
<li role="presentation"><a  class="hire" href="#messagesone" aria-controls="messagesone" role="tab" data-toggle="tab">Leauge Table</a></li>
</ul>
<div class="tab-content">
<div role="tabpanel" class="tab-pane active" id="homeone">
  <ul class="ftb-main-table">
  <li>
    <div class="ftb-date">
    15th May
    </div>
    <div class="ftb-compitatev">
    <div class="compitatev-team1">
      <img src="{{ asset('images/short-logo8.png') }}" alt="">
      <a href="#">Bristol Academy</a>
    </div>
    <span>VS</span>
    <div class="compitatev-team1 compitatev-team2">
      <img src="{{ asset('images/short-logo9.png') }}" alt="">
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
      <img src="{{ asset('images/short-logo10.png') }}" alt="">
      <a href="#">Bristol Academy</a>
    </div>
    <span>VS</span>
    <div class="compitatev-team1 compitatev-team2">
      <img src="{{ asset('images/short-logo11.png') }}" alt="">
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
      <img src="{{ asset('images/short-logo12.png') }}" alt="">
      <a href="#">Bristol Academy</a>
    </div>
    <span>VS</span>
    <div class="compitatev-team1 compitatev-team2">
      <img src="{{ asset('images/short-logo13.png') }}" alt="">
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
      <img src="{{ asset('images/short-logo14.png') }}" alt="">
      <a href="#">Bristol Academy</a>
    </div>
    <span>VS</span>
    <div class="compitatev-team1 compitatev-team2">
      <img src="{{ asset('images/short-logo15.png') }}" alt="">
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
      <img src="{{ asset('images/short-logo8.png') }}" alt="">
      <a href="#">Bristol Academy</a>
    </div>
    <span>VS</span>
    <div class="compitatev-team1 compitatev-team2">
      <img src="{{ asset('images/short-logo9.png') }}" alt="">
      <a href="#">Bristol Academy</a>
    </div>
    </div>
    <div class="ftb-venue">Camp Nou</div>
    <div class="ftb-ticket"><a class="hire" href="#">Buy Ticket</a></div>
  </li>
  </ul>
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
    <img src="{{ asset('extra-images/ftbgallery1.jpg') }}" alt="">
    <figcaption>
    <h4>Great Game Ever In History</h4>
    <a data-rel="prettyPhoto[]" href="images/about.jpg') }}"><i class="fa fa-eye"></i></a>
    </figcaption>
  </figure>
  </li>
  <li>
  <figure>
    <img src="{{ asset('extra-images/ftbgallery2.jpg') }}" alt="">
    <figcaption>
    <h4>Great Game Ever In History</h4>
    <a data-rel="prettyPhoto[]" href="images/about.jpg') }}"><i class="fa fa-eye"></i></a>
    </figcaption>
  </figure>
  </li>
  <li>
  <figure>
    <img src="{{ asset('extra-images/ftbgallery3.jpg') }}" alt="">
    <figcaption>
    <h4>Great Game Ever In History</h4>
    <a data-rel="prettyPhoto[]" href="images/about.jpg') }}"><i class="fa fa-eye"></i></a>
    </figcaption>
  </figure>
  </li>
  <li>
  <figure>
    <img src="{{ asset('extra-images/ftbgallery4.jpg') }}" alt="">
    <figcaption>
    <h4>Great Game Ever In History</h4>
    <a data-rel="prettyPhoto[]" href="images/about.jpg') }}"><i class="fa fa-eye"></i></a>
    </figcaption>
  </figure>
  </li>
  <li>
  <figure>
    <img src="{{ asset('extra-images/ftbgallery5.jpg') }}" alt="">
    <figcaption>
    <h4>Great Game Ever In History</h4>
    <a data-rel="prettyPhoto[]" href="images/about.jpg') }}"><i class="fa fa-eye"></i></a>
    </figcaption>
  </figure>
  </li>
  <li>
  <figure>
    <img src="{{ asset('extra-images/ftbgallery6.jpg') }}" alt="">
    <figcaption>
    <h4>Great Game Ever In History</h4>
    <a data-rel="prettyPhoto[]" href="images/about.jpg') }}"><i class="fa fa-eye"></i></a>
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
  <figure><img src="{{ asset('extra-images/ftb-teamone.png') }}" alt=""></figure>
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
  <figure><img src="{{ asset('extra-images/ftb-teamtwo.png') }}" alt=""></figure>
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
  <figure><img src="{{ asset('extra-images/ftb-three.png') }}" alt=""></figure>
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
	  <figure><img src="{{ asset('extra-images/ftb-teamfour.png') }}" alt=""></figure>
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
</div>
</div>
</div>
<!--// FOOTBALL PRODUCT SECTION //-->
</div>
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
@stop