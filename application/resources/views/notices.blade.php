@extends('layouts.app')
@section('title','Noticias')
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

	div.kode_blog_comment ul li a{
		font-size:12px;
	}

	img.image-one-notice{
		width: 369px;
		height: 269px;
	}
</style>
@stop
@section('content')
<!--// KODE BENNER1 START //-->
<div class="kode_benner1">
	<div class="kode_benner1_text">
		<h2>Noticias</h2>
	</div>
	<div class="kode_benner1_cols">
		<div class="container kf_container">
			<ul class="breadcrumb">
			  <li><a href="{{ url('/') }}">Home</a></li>
			  <li class="active">Noticias</li>
			</ul>
		</div>
	</div>
</div>
<!--// KODE BENNER1 END //-->
<!--// KODE BLOG WRAPER START //-->
<div class="kode_blog_wraper">
	<div class="container">
		<div class="row">
			@foreach($notices as $ntc)
			<div class="col-md-4 col-sm-6">
				<div class="kode_blog_fig">
					<figure>
						<img src="{{ asset('application/storage/app/public/notices/avatars/'.$ntc->avatar) }}" class="image-one-notice" alt="">
						<figcaption>
							<a href="#"><i class="fa fa-expand"></i></a>
						</figcaption>
					</figure>
					<div class="kode_blog_text">
						<div class="kode_blog_des">
							<div class="kode_blog_caption">
								<h5>{{ $ntc->title }}</h5>
								<p>{{ str_limit(strip_tags($ntc->content),100) }}</p>
							</div>
						</div>	
						<div class="kode_blog_comment">
							<a href="{{ route('home.notice',['slug' => $ntc->slug]) }}">Leer Mas..</a>
							<ul>
								<li><a href="#"><i class="fa fa-calendar"></i>{{ date('d/m/Y',strtotime($ntc->publisher_date)) }}</a></li>
								<li><a href="#"><i class="fa fa-user"></i>{{ $ntc->user->name }}</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="kode_blog_pagination">
			<a class="left" href="#"><i class="fa fa-angle-double-left"></i></a>
			<a href="#">1</a>
			<a href="#">2</a>
			<a href="#">3</a>
			<a href="#">4</a>
			<a href="#">5</a>
			<a class="right" href="#"><i class="fa fa-angle-double-right"></i></a>
		</div>
	</div>
</div>
<!--// KODE BLOG WRAPER END //-->
@stop