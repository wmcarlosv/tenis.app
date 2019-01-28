@extends('layouts.app')

@if( isset($site->title) and !empty($site->title) )
  @section('title',$site->title)
@else
  @section('title',"")
@endif

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

	div.football-caption h4{
		font-size:16px;
		line-height: 23px;
	}

	img.championships-img{
		width: 268px;
		height: 276px;
	}

  img.club-image{
    width: 380px;
    height: 340px;
  }

  div.ftb-gallery ul li{
    padding:5px;
  }

  img.footer-notice-image{
    width: 99px;
    height: 83px;
  }

  div.ft-logo img, div.logo img{
    width: 290px;
    height: 60px;
  }

  .ftb-tabs-wrap .nav-tabs li{
    margin:0px 5px 0px 0px !important;
  }
</style>
@stop
@section('content')
<div id="mainbanner">
<div class="flexslider">
<ul class="slides">
@if(isset($site->slider_1) and !empty($site->slider_1))
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

@if(isset($site->slider_2) and !empty($site->slider_2))
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

@if(isset($site->slider_3) and !empty($site->slider_3))
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
<!--<div class="ft-match-dec">
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
</div>-->
</div>





@if($show_ranking)
<!--Rankings -->
<div class="container">
  <div class="ftb-tabs-wrap">
      <ul class="nav nav-tabs" role="tablist">
      @foreach($player_categories as $index => $pc)
        @if($index == 0)
          <li role="presentation" class="active"><a  class="hire" href="#cat_{{ $pc->id }}" aria-controls="cat_{{ $pc->id }}" role="tab" data-toggle="tab">{{ $pc->name }}</a></li>
        @else
          <li role="presentation"><a  class="hire" href="#cat_{{ $pc->id }}" aria-controls="cat_{{ $pc->id }}" role="tab" data-toggle="tab">{{ $pc->name }}</a></li>
        @endif
      @endforeach
      </ul>
      @foreach($players_and_categories as $index => $player_and_category)
        <div role="tabpanel" class="tab-pane" id="cat_{{ $index }}">
          <ul class="kode_ticket_list list_2">
            @foreach($player_and_category as $pac)
              <li>
                <span>{{ $loop->index + 1 }}<i>Pos</i></span>
                <div class="kode_ticket_text">
                  <h6>{{ $pac->user->name }}</h6>
                  <div class="ticket_title">
                    <h2>{{ $pac->user->club->name }}</h2>
                    <!--<span>VS</span>
                    <h2>Somalian Titans</h2>-->
                  </div>
                  <!--<p>15:30 PM, Soccer Stadium, Dubai</p>-->
                </div>
                <div class="ticket_btn">
                  <a href="#">{{ $pac->points }} pts</a>
                </div>
              </li>
            @endforeach
          </ul> 
        </div>
      @endforeach
  </div>
</div>
<!--Fin Rankings-->
@endif





<div class="ftb-latestnew-wrap">
<div class="container">
<div class="row">
<div class="col-md-7">
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

<section class="ftb-gallery-bg">
<div class="container">
<div class="heading5">
<h4>Ultimos  <span>Clubes Registrados</span></h4>
</div>
<div class="ftb-gallery">
<ul>
  @foreach($clubes as $club)
  <li>
  <figure>
    <img src="{{ asset('application/storage/app/public/clubes/logos/'.$club->logo) }}" class="club-image" alt="">
    <figcaption>
    <h4>{{ $club->name }}</h4>
    <a href="{{ route('home.club',['slug' => $club->slug]) }}"><i class="fa fa-eye"></i></a>
    </figcaption>
  </figure>
  </li>
  @endforeach
</ul>
<div class="tns-load ftb-load">                
  <a href="{{ url('/clubes') }}">Ver Todos</a>
</div>
</div>
</div>
</section>

<section>
	<div class="container">
	<!--// HEADING 5 //-->
	<div class="heading5 black">
	<h4>Ultimos  <span>Campeonatos Registrados</span></h4>
	</div>
		<!--// HEADING 5 //-->
		<div class="row">
			@foreach($championships as $ch)
			<div class="col-md-3 col-sm-6">
				<div class="ftb-team-thumb">
				  <figure><img src="{{ asset('application/storage/app/'.$ch->cover) }}" class="championships-img" alt=""></figure>
				  <div class="ftb-team-dec">
				  <div class="text">
				    <a href="{{ route('home.championship',['id' => $ch->id]) }}">{{ $ch->title }}</a>
				    <p>{{ $ch->description }}</p>
				  </div>
				  <a class="arrow-iconbtn" href="{{ route('home.championship',['id' => $ch->id]) }}"><i class="fa fa-arrow-right "></i></a>
				  </div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>


<section class="ftb-gallery-bg">
  <div class="container">
    <div class="heading5">
    <h4><span>Galeria</span></h4>
    </div>
    <div class="ftb-gallery">
    <ul>
      @foreach($photos as $photo)
      <li>
      <figure>
        <img src="{{ asset('application/storage/app/'.$photo->photo) }}" class="championships-img" alt="">
        <figcaption>
        <h4>{{ $photo->title }}</h4>
        <a data-rel="prettyPhoto[]" href="{{ asset('application/storage/app/'.$photo->photo) }}"><i class="fa fa-eye"></i></a>
        </figcaption>
      </figure>
      </li>
      @endforeach
    </ul>
    <!--<div class="tns-load ftb-load">                
      <a href="#">load more</a>
    </div>-->
    </div>
  </div>
</section>

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