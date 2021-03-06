@extends('layouts.app')
@section('title','Campeonatos')
@section('css')
<style type="text/css">
	div.kode_benner1{
		margin-top: 185px;
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
		z-index: 0 !important;
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
		<h2>Campeonatos</h2>
	</div>
	<div class="kode_benner1_cols">
		<div class="container kf_container">
			<ul class="breadcrumb">
			  <li><a href="{{ url('/') }}">Home</a></li>
			  <li class="active">Campeonatos</li>
			</ul>
		</div>
	</div>
</div>
<!--// KODE BENNER1 END //-->
<!--// KODE BLOG WRAPER START //-->
<div class="kode_blog_wraper">
	<div class="container">
		<div class="row">
			@foreach($championships as $chp)
			<div class="col-md-4 col-sm-6">
				<div class="kode_blog_fig">
					<figure>
						<img src="{{ asset('application/storage/app/'.$chp->cover) }}" class="image-one-notice" alt="">
						<figcaption>
							<a href="#"><i class="fa fa-expand"></i></a>
						</figcaption>
					</figure>
					<div class="kode_blog_text">
						<div class="kode_blog_des">
							<div class="kode_blog_caption">
								<h5>{{ $chp->title }}</h5>
								<p>{{ str_limit($chp->description,100) }}</p>
							</div>
						</div>	
						<div class="kode_blog_comment">
							<a href="{{ route('home.championship',['id' => $chp->id]) }}">Ver Campeonato</a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<!--<div class="kode_blog_pagination">
			<a class="left" href="#"><i class="fa fa-angle-double-left"></i></a>
			<a href="#">1</a>
			<a href="#">2</a>
			<a href="#">3</a>
			<a href="#">4</a>
			<a href="#">5</a>
			<a class="right" href="#"><i class="fa fa-angle-double-right"></i></a>
		</div>-->
	</div>
</div>
@stop