@extends('layouts.app')
@section('title','Campeonatos')
@section('css')
<style type="text/css">
	div.kode_benner1{
		margin-top: 185px;
	}

	img#cover-cham{
		width: 570px;
		height: 370px;
	}

	div.kode_blog_caption{
		margin-left: 0px;
		padding-left: 0px;
	}

	div.kode_blog_caption h5{
		font-size:15px;
	}

	div.kode_blog_caption p{
		height: 50px;
		overflow: hidden;
	}

	div.kode_blog_comment ul li a{
		font-size:12px;
	}

	img.image-one-notice{
		width: 369px;
		height: 269px;
	}

	div.kode_blog_comment{
		text-align: center;
	}

	div.kode_blog_comment a{
		float:none;
	}
</style>
@stop
@section('content')
<!--// KODE BENNER1 START //-->
<div class="kode_benner1">
	<div class="kode_benner1_text">
		<h2>Campeonato</h2>
	</div>
	<div class="kode_benner1_cols">
		<div class="container kf_container">
			<ul class="breadcrumb">
			  <li><a href="{{ url('/') }}">Home</a></li>
			  <li class="active">Campeonato</li>
			</ul>
		</div>
	</div>
</div>
<!--// KODE CLUB WRAPER SRTART //-->
<div class="kode_club_wraper">
	<div class="container">

		<div class="kode_club_hdg">
			<h2>{{ $championship->title }}</h2>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="kode_club_fig">
					<figure>
						<img src="{{ asset('application/storage/app/'.$championship->cover) }}" id="cover-cham">
					</figure>
				</div>
			</div>
			<div class="col-md-6">
				<div class="kode_club_training">
					<h5>Sobre el Campeonato</h5>
					<p>{{ $championship->description }}</p>
					@if(Auth::check())
						<a href="#" class="btn btn-success"><i class="fa fa-trophy"></i> Quiero Participar en este Campeonato</a>
					@else
						<a href="{{ url('/championships') }}" class="btn btn-success"><i class="fa fa-trophy"></i> Volver a Campeonats</a>
					@endif
				</div>
			</div>
		</div>
		<section>
		  <div class="container">
			<!--// HEADING 5 //-->
			<div class="heading5 black margin">
			  <h4>Ultimos Jugadores <span>Inscritos</span></h4>
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
			  <!--// FOOTBALL TEAM //-->
			</div>
		  </div>
		</section>
	</div>
</div>
@stop