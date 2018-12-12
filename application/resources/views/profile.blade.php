@extends('layouts.app')
@section('title','user')
@section('css')
<style type="text/css">
	div.kode_benner1{
		margin-top: 185px;
	}

	img.user-image{
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
		<h2>Perfil</h2>
	</div>
	<div class="kode_benner1_cols">
		<div class="container kf_container">
			<ul class="breadcrumb">
			  <li><a href="{{ url('/') }}">Home</a></li>
			  <li class="active">Perfil</li>
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
					<div class="col-md-12">
						<div class="row">
							<div class="kode_ply_des">
								<div class="col-md-4">
									<div class="kode_player_fig fig_2">
										<figure>
											<img src="{{ asset('application/storage/app/'.$user->avatar) }}" class="user-image" alt="">
										</figure>
									</div>
								</div>
								<div class="col-md-8">
									<div class="kode_player_item">
										<h2 class="kode_ply_titile">{{ $user->name }}</h2>	
										<div class="row">
											<div class="kode-ply-slid">
												<div>
													@if(isset($user->birthdate) and !empty($user->birthdate))
													<div class="col-md-6 col-sm-6 col-xs-6">
														<div class="kode_ply_list">
															<a href="#">Nacimiento:<span>{{ $user->birthdate }}</span></a>
														</div>
													</div>
													@endif

													@if(isset($user->weight) and !empty($user->weight))
													<div class="col-md-6 col-sm-6 col-xs-6">
														<div class="kode_ply_list">
															<a href="#">Peso:<span>{{ $user->weight }} Kg</span></a>
														</div>
													</div>
													@endif

													@if(isset($user->height) and !empty($user->height))
													<div class="col-md-6 col-sm-6 col-xs-6">
														<div class="kode_ply_list">
															<a href="#">Estatura:<span>{{ $user->height }} Cm</span></a>
														</div>
													</div>
													@endif

													@if(isset($user->skillful_hand) and !empty($user->skillful_hand))
													<div class="col-md-6 col-sm-6 col-xs-6">
														<div class="kode_ply_list">
															<a href="#">Mano Activa:<span>
																@if($user->skillful_hand == "right")
																	Derecha
																@else
																	Izquierda
																@endif
															</span></a>
														</div>
													</div>
													@endif

													<div class="col-md-6 col-sm-6 col-xs-6">
														<div class="kode_ply_list">
															<a href="#">Region:<span>
																{{ $user->city->region->name }}
															</span></a>
														</div>
													</div>

													<div class="col-md-6 col-sm-6 col-xs-6">
														<div class="kode_ply_list">
															<a href="#">Ciudad:<span>
																{{ $user->city->name }}
															</span></a>
														</div>
													</div>

													<div class="col-md-6 col-sm-6 col-xs-6">
														<div class="kode_ply_list">
															<a href="#">Club:<span>
																{{ $user->club->name }}
															</span></a>
														</div>
													</div>

													<div class="col-md-6 col-sm-6 col-xs-6">
														<div class="kode_ply_list">
															<a href="#">Categoria:<span>
																{{ $user->player_category->name }}
															</span></a>
														</div>
													</div>

												</div>
											</div>	
											<div class="col-md-12">
												<div class="kode_ply_text">
													<p>{{ $user->about }}</p>
													<div class="kode_ply_icon">
														<h6>Redes Sociales :</h6>
														<ul>
															@if(isset($user->facebook) and !empty($user->facebook))
																<li><a href="{{ $user->facebook }}"><i class="fa fa-facebook"></i></a></li>
															@endif
															@if(isset($user->twitter) and !empty($user->twitter))
																<li><a href="{{ $user->twitter }}"><i class="fa fa-twitter"></i></a></li>
															@endif
															@if(isset($user->googleplus) and !empty($user->googleplus))
																<li><a href="{{ $user->googleplus }}"><i class="fa fa-google-plus"></i></a></li>
															@endif
															@if(isset($user->instagram) and !empty($user->instagram))
																<li><a href="{{ $user->instagram }}"><i class="fa fa-instagram"></i></a></li>
															@endif
															@if(isset($user->youtube) and !empty($user->youtube))
																<li><a href="{{ $user->youtube }}"><i class="fa fa-youtube"></i></a></li>
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
				</div>
			</div>
		</div>
	</div>
</div>
@stop