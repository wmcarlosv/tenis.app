@extends('layouts.app')
@section('title','Club')
@section('css')
<style type="text/css">
	div.kode_benner1{
		margin-top: 185px;
	}

	img.club-image{
		width: 315px;
		height: 368px;
	}

	div.kode_detail_find_row{
		padding: 0px !important;
	}

	a.button-go-notice{
		padding-top:15px;
		color:red;
		font-weight: bold;
	}

	table.kode_ply_table tr td, table.kode_ply_table tr th{
		border:1px solid #2a2c2a;
	}

	table.kode_ply_table {
		border-right: 1px solid #2a2c2a;
	}

	tr.kode_ply_two td{
		background:white;
		color: black !important;
	}

	div.contact-form{
		padding: 10px 0px !important;
	}
</style>
@stop
@section('content')
<!--// KODE BENNER1 START //-->
<div class="kode_benner1">
	<div class="kode_benner1_text">
		<h2>Club</h2>
	</div>
	<div class="kode_benner1_cols">
		<div class="container kf_container">
			<ul class="breadcrumb">
			  <li><a href="{{ url('/') }}">Home</a></li>
			  <li class="active">Club</li>
			</ul>
		</div>
	</div>
</div>
<!--// KODE BENNER1 END //-->
<div class="kode-content">
	<!--// KODE PLAYER WRAPER START //-->
	<div class="kode_ply_sidebar">
		<div class="kode_player_wraper wrp_3">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row">
							<div class="kode_ply_des">
								<div class="col-md-5">
									<div class="kode_player_fig fig_2">
										<figure>
											<img src="{{ asset('application/storage/app/public/clubes/covers/'.$club->cover) }}" class="club-image" alt="">
											<!--<figcaption>
												<a href="#"><img src="{{ asset('images/ftb-result.png') }}" alt=""></a>
												<div class="kode_player_text">
													<h6>Team : Eagle Sharks </h6>
													<h6>Player No : 10</h6>
												</div>
											</figcaption>-->
										</figure>
									</div>
								</div>
								<div class="col-md-7">
									<div class="kode_player_item">
										<h2 class="kode_ply_titile">{{ $club->name }}</h2>	
										<div class="row">
											<div class="kode-ply-slid">
												<div>
													@foreach($club->services as $service)
														<div class="col-md-6 col-sm-6 col-xs-6">
															<div class="kode_ply_list">
																<a href="#">{{ $service->name }}:<span>SI</span></a>
															</div>
														</div>
													@endforeach
												</div>
											</div>	
											<div class="col-md-12">
												<div class="kode_ply_text">
													<p>{{ $club->description }}</p>
													<div class="kode_ply_icon">
														<h6>Redes Sociales :</h6>
														<ul>
															@if(isset($club->facebook) and !empty($club->facebook))
																<li><a href="{{ $club->facebook }}"><i class="fa fa-facebook"></i></a></li>
															@endif
															@if(isset($club->twitter) and !empty($club->twitter))
																<li><a href="{{ $club->twitter }}"><i class="fa fa-twitter"></i></a></li>
															@endif
															@if(isset($club->googleplus) and !empty($club->googleplus))
																<li><a href="{{ $club->googleplus }}"><i class="fa fa-google-plus"></i></a></li>
															@endif
															@if(isset($club->instagram) and !empty($club->instagram))
																<li><a href="{{ $club->instagram }}"><i class="fa fa-instagram"></i></a></li>
															@endif
															@if(isset($club->youtube) and !empty($club->youtube))
																<li><a href="{{ $club->youtube }}"><i class="fa fa-youtube"></i></a></li>
															@endif
														</ul>
													</div>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="kode_ply_gallery galy_2">
							<div class="heading5 black b_2">
							  <h4><span>Galeria</span></h4>
							</div>
									
							<div class="kode-ply-list">
								<div>
									<ul class="kode_ply_galery_list list_2">
										@foreach($galleries as $gallery)
										<li>
											<figure>
												<img src="{{ asset('application/storage/app/'.$gallery->photo) }}" alt="">
												<a data-rel="prettyPhoto[]" class="like-icon" href="{{ asset('application/storage/app/'.$gallery->photo) }}"><i class="fa fa-clone"></i></a>
											</figure>
										</li>
										@endforeach
									</ul>
								</div>					
							</div>	
						</div>
						<div class="kode_ply_gallery gly_3">
							<div class="heading5 black b_2">
							  <h4><span>Jugadores</span></h4>
							</div>
							<table class="kode_ply_table">
								<tr class="kode_ply_first">
									<th>Nombre</th>
									<th>Edad</th>
									<th>Categoria</th>
									<th>Mano Habil</th>
									<th>Region</th>
									<th>Ciudad</th>
									<th>Foto</th>
								</tr>
								@foreach($club->users as $player)
								<tr class="kode_ply_two">
									<td><a href="{{ route('home.profile',['id' => $player->id]) }}">{{ $player->name }}</a></td>
									<td></td>
									<td>{{ $player->player_category->name }}</td>
									<td></td>
									<td>{{ $player->city->region->name }}</td>
									<td>{{ $player->city->name }}</td>
									<td>
									<center>
										@if($player->avatar)
											<a href="{{ route('home.profile',['id' => $player->id]) }}"><img src="{{ asset('application/storage/app/'.$player->avatar) }}" class="img-thumbnail" width="100" height="150"></a>
										@else
											Sin Foto
										@endif
									</center>
									</td>
								</tr>
								@endforeach
							</table>
						</div>
					</div>
					<div class="col-md-3">
						<div class="kode_detail_side_bar">
							<!--// KODE DETAIL CATEGORIES FLICKER START //-->
							<div class="kode_detail_categories">
								<h5>Personal</h5>
								<ul>
									@foreach($staffs as $staff)
									<li><a href="#">{{ $staff->name }} ({{ $staff->charge }})</a></li>
									@endforeach
								</ul>
							</div>
							<div class="kode_detail_categories flicker">
								<h5>Ultimas Noticias</h5>
								<div class="kode-flicker-slide">
									@foreach($notices as $notice)
									<div>
										<figure>
											<img src="{{ asset('application/storage/app/public/notices/avatars/'.$notice->avatar) }}" alt="">
										</figure>
										<div class="kode_detail_flick_text">
											<h5>{{ $notice->title }}</h5>
											<a href="{{ route('home.notice',['slug' => $notice->slug]) }}" class="button-go-notice">Ir a Noticia</a>
										</div>
									</div>
									@endforeach
								</div>
							</div>
							<div class="kode_detail_categories">
								<h5>Contactar</h5>
								<div class="contact-form">
								<form class="form">
									<div class="form-group">
										<input type="text" name="name" class="form-control" placeholder="Nombre">
									</div>
									<div class="form-group">
										<input type="text" name="email" class="form-control" placeholder="Email">
									</div>
									<div class="form-group">
										<input type="text" name="phone" class="form-control" placeholder="Telefono">
									</div>
									<div class="form-group">
										<input type="text" name="message" class="form-control" placeholder="Mensaje">
									</div>
									<button type="sumit" class="btn btn-danger">Enviar Mensaje</button>
								</form>
								</div>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>
</div>
@stop