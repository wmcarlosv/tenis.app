@extends('layouts.app')
@section('title','Noticia - '.$notice->title)
@section('content')
@section('css')
<style type="text/css">
	div.kode_benner1{
		margin-top: 185px;
	}

	div.kode_detail_title, div.kode_blog_caption{
		padding-left: 0px;
		margin-left: 0px;
	}

	img.relate_notice_image{
		width: 390px;
		height: 285px;
	}

	div.kode_blog_comment ul li a{
		font-size:14px;
	}
</style>
@stop
<!--// KODE BENNER1 START //-->
<div class="kode_benner1">
	<div class="kode_benner1_text">
		<h2>Noticias</h2>
	</div>
	<div class="kode_benner1_cols">
		<div class="container kf_container">
			<ul class="breadcrumb">
			  <li><a href="{{ url('/') }}">Home</a></li>
			  <li class="active">{{ $notice->title }}</li>
			</ul>
		</div>
	</div>
</div>
<!--// KODE BENNER1 END //-->
<!--// KODE BLOG WRAPER START //-->
<div class="kode_blog_wraper">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="kode_detail_row">
					<!-- KODE DETAIL FIG START -->
					<div class="kode_detail_fig">
						@if($notice->avatar)
						<figure>
							<img src="{{ asset('application/storage/app/public/notices/avatars/'.$notice->avatar) }}" width="871" height="304" alt="">
						</figure>
						@endif
						<div class="kode_detail_admin">
							<div class="kode_detail_title">
								<ul>
									<li><a href="#"><i class="fa fa-calendar"></i>{{ date('d/m/Y H:m:s',strtotime($notice->publisher_date)) }}</a></li>
									<li><a href="#"><i class="fa fa-user"></i>Por {{ $notice->user->name }}</a></li>
								</ul>
								<h2>{{ $notice->title }}</h2>
							</div>
						</div>
						<div class="kode_detail_text">
							{!! $notice->content !!}
						</div>
					</div>
					<!-- KODE DETAIL FIG END -->
					<!-- KODE DETAIL POST START -->
					<div class="kode_detail_post">
						<div class="kode_detail_share">
							<h5><a href="#"><i class="fa fa-share-alt"></i></a>Compartir la Noticia: </h5>
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- KODE DETAIL POST END -->
					
					<!-- KODE DETAIL RELATED START -->
					<div class="kode_detail_related">
						<h2>Noticias Relacionadas</h2>
						<div class="kode-related-slide">
							@foreach($related_notices as $rn)
							<div class="kode_blog_fig fig_2">
								<figure>
									<img src="{{ asset('application/storage/app/public/notices/avatars/'.$rn->avatar) }}" class="relate_notice_image" alt="">
									<figcaption>
										<a href="#"><i class="fa fa-expand"></i></a>
									</figcaption>
								</figure>
								<div class="kode_blog_text">
									<div class="kode_blog_des">
										<div class="kode_blog_caption">
											<h5>{{ $rn->title }}</h5>
											<p>{!! $rn->content !!}</p>
										</div>
									</div>	
									<div class="kode_blog_comment">
										<a href="{{ route('home.notice',['slug' => $rn->slug]) }}">Leer Mas..</a>
										<ul>
											<li><a href="#"><i class="fa fa-calendar"></i>{{ date('d-m-Y',strtotime($rn->publisher_date)) }}</a></li>
											<li><a href="#"><i class="fa fa-user"></i>{{ $rn->user->name }}</a></li>
										</ul>
									</div>
								</div>
							</div>
							@endforeach							
						</div>
					</div>
					<!-- KODE DETAIL RELATED END -->
				</div>
			</div>
			<div class="col-md-3">
				<div class="kode_detail_side_bar">
					<form class="kode_detail_side_field">
						<input type="text" placeholder="Search here" required>
						<button><i class="fa fa-search"></i></button>
					</form>
					
					<!--// KODE DETAIL CATEGORIES START //-->
					<div class="kode_detail_categories">
						<h5>Categorias</h5>
						<ul>
							@foreach($notice_categories as $nc)
							<li><a href="#">{{ $nc->name }}</a></li>
							@endforeach
						</ul>
					</div>
					<!--// KODE DETAIL CATEGORIES END //-->
					
					<!--// KODE DETAIL CATEGORIES FLICKER START //-->
					<div class="kode_detail_categories flicker">
						<h5>Flicker PhotoStream</h5>
						<div class="kode-flicker-slide">
							<div>
								<figure>
									<img src="{{ asset('extra-images/flicker.jpg') }}" alt="">
								</figure>
								<div class="kode_detail_flick_text">
									<h5>Worldcup fever</h5>
									<span>Germany, Berlin</span>
								</div>
							</div>
							<div>
								<figure>
									<img src="{{ asset('extra-images/flicker.jpg') }}" alt="">
								</figure>
								<div class="kode_detail_flick_text">
									<h5>Worldcup fever</h5>
									<span>Germany, Berlin</span>
								</div>
							</div>
							<div>
								<figure>
									<img src="{{ asset('extra-images/flicker.jpg') }}" alt="">
								</figure>
								<div class="kode_detail_flick_text">
									<h5>Worldcup fever</h5>
									<span>Germany, Berlin</span>
								</div>
							</div>
						</div>
					</div>
					<!--// KODE DETAIL CATEGORIES FLICKER END//-->
					
					<!--// KODE DETAIL CATEGORIES FLICKER MACTH START //-->
					<div class="kode_detail_categories flicker macth">
						<h5>Next Matches</h5>
						<div class="kode-flicker-slide">
							<div>
								<ul class="kode_detail_macth">
									<li>
										<h6>FERNAND</h6>
										<img src="{{ asset('images/next.png') }}" alt="">
									</li>
									<li>
										<h2>- VS -</h2>
									</li>
									<li>
										<h6>BRAIN</h6>
										<img src="{{ asset('images/next1.png') }}" alt="">
									</li>
								</ul>
								<div class="kode_macth_text">
									<h6>Champions Leauge</h6>
									<p><span>April 22, 2016 ~ 2:30pm</span> 
										Canada Stadium
									</p>
								</div>
							</div>
							<div>
								<ul class="kode_detail_macth">
									<li>
										<h6>FERNAND</h6>
										<img src="{{ asset('images/next.png') }}" alt="">
									</li>
									<li>
										<h2>- VS -</h2>
									</li>
									<li>
										<h6>BRAIN</h6>
										<img src="{{ asset('images/next1.png') }}" alt="">
									</li>
								</ul>
								<div class="kode_macth_text">
									<h6>Champions Leauge</h6>
									<p><span>April 22, 2016 ~ 2:30pm</span> 
										Canada Stadium
									</p>
								</div>
							</div>
							<div>
								<ul class="kode_detail_macth">
									<li>
										<h6>FERNAND</h6>
										<img src="{{ asset('images/next.png') }}" alt="">
									</li>
									<li>
										<h2>- VS -</h2>
									</li>
									<li>
										<h6>BRAIN</h6>
										<img src="{{ asset('images/next1.png') }}" alt="">
									</li>
								</ul>
								<div class="kode_macth_text">
									<h6>Champions Leauge</h6>
									<p><span>April 22, 2016 ~ 2:30pm</span> 
										Canada Stadium
									</p>
								</div>
							</div>
						</div>
					</div>
					<!--// KODE DETAIL CATEGORIES FLICKER MACTH END//-->
					
					<!--// KODE DETAIL CATEGORIES FLICKER MACTH FIND START //-->
					<div class="kode_detail_categories flicker macth find">
						<h5>Find us</h5>
						<div class="kode_detail_find_row">
							<div class="kode_detail_sport">
								<figure>
									<img src="{{ asset('images/kick.jpg') }}" alt="">
								</figure>
								<div class="kode_soprt_text">
									<h6>Kickoff Sports</h6>
									<a href="#"><i class="fa fa-facebook-official"></i>Like</a>
								</div>
							</div>
							<div class="kode_detail_find_fig">
								<p>10,500 People like Kickoof Sports</p>
								<ul>
									<li><a href="#"><img src="{{ asset('extra-images/find.jpg') }}" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('extra-images/find1.jpg') }}" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('extra-images/find2.jpg') }}" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('extra-images/find3.jpg') }}" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('extra-images/find4.jpg') }}" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('extra-images/find5.jpg') }}" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('extra-images/find6.jpg') }}" alt=""></a></li>
									<li><a href="#"><img src="{{ asset('extra-images/find7.jpg') }}" alt=""></a></li>
								</ul>
							</div>
							<a class="kode_detail_find_facebook" href="#"><i class="fa fa-facebook-official"></i>Facebook Social Plugin</a>
						</div>	
					</div>
					<!--// KODE DETAIL CATEGORIES FLICKER MACTH FIND END//-->
					
					<!--// KODE DETAIL CATEGORIES START //-->
					<div class="kode_detail_categories">
						<h5>Archieve</h5>
						<ul>
							<li><a href="#">September 2016</a></li>
							<li><a href="#">June 2016</a></li>
							<li><a href="#">May 2015</a></li>
							<li><a href="#">Feb 2016</a></li>
							<li><a href="#">July 205</a></li>
							<li><a href="#">December 2015</a></li>
						</ul>
					</div>
					<!--// KODE DETAIL CATEGORIES END //-->
				</div>
			</div>
		</div>
	</div>
</div>
<!--// KODE BLOG WRAPER END //-->
@stop