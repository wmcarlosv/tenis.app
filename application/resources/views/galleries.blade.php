@extends('layouts.app')
@section('title','Clubes')
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
		height: 100px;
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
		float: none;
	}
</style>
@stop
@section('content')
<!--// KODE BENNER1 START //-->
<div class="kode_benner1">
	<div class="kode_benner1_text">
		<h2>Galeria</h2>
	</div>
	<div class="kode_benner1_cols">
		<div class="container kf_container">
			<ul class="breadcrumb">
			  <li><a href="{{ url('/') }}">Home</a></li>
			  <li class="active">Galeria</li>
			</ul>
		</div>
	</div>
</div>
<!--// KODE BENNER1 END //-->
<!--// KODE BLOG WRAPER START //-->
<div class="kode_blog_wraper">
	<div class="container">
		<div class="row">
			<div class="kode_ply_gallery galy_2">
				<div class="heading5 black b_2">
				  <h4><span>Galeria</span></h4>
				</div>
					<div class="kode-ply-list">
						<ul class="kode_ply_galery_list list_2">
						@foreach($galleries as $photo)
							<li>
								<figure>
									<img src="{{ asset('application/storage/app/'.$photo->photo) }}" alt="">
									<a data-rel="prettyPhoto[]" class="like-icon" href="{{ asset('application/storage/app/'.$photo->photo) }}"><i class="fa fa-clone"></i></a>
								</figure>
							</li>
						@endforeach
						</ul>
					</div>
			</div>
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
<!--// KODE BLOG WRAPER END //-->
@stop