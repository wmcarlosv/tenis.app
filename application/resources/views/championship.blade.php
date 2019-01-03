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

	p.info-payment{
		border:2px solid #ccc;
		padding: 10px;
		border-radius: 10px;
	}

	p.info-payment a{
		color: red;
		font-weight: bold;
	}

	p.info-payment-aproved{
		border:2px solid green;
		padding: 10px;
		border-radius: 10px;
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

						@if(isset($payment_subscription->id) and !empty($payment_subscription->id))

							@if($payment_subscription->status == 2)

								@if(date('d/m/Y',strtotime($payment_subscription->payment_date . " + 1 year")) < strtotime(date('Y-m-d')))

									@if($cham_player)
										@if($cham_player->payment->status == 1)
										        <p class="info-payment">Tu pago esta en verificaci&oacute;n por el administrador, puedes ver la lista de tus pagos y sus estatus <a href="{{ route('payments.my_payments',['id' => Auth::user()->id]) }}">aqu&iacute;</a></p>
										@elseif($cham_player->payment->status == 2)
												<p class="info-payment info-payment-aproved">
													Te has Inscritos satisfactoriamente al campeonato, te damos la bienvenida a esta aventura y suerte!!!
												</p>
										@else
												<p class="info-payment">Tu pago fue rechazado. es posible que los datos que enviastes esten erroneos, te invitamos a verificar y realizar otra solicitud, puedes hacerlo dando Click <a href="{{ route('payments.subscribe_to_championship',['id' => Auth::user()->id, 'championship_id' => $championship->id]) }}">Aqu&iacute;</a></p>
										@endif
									@else
											<a href="{{ route('payments.subscribe_to_championship',['id' => Auth::user()->id, 'championship_id' => $championship->id]) }}" class="btn btn-success"><i class="fa fa-trophy"></i> Quiero Participar en este Campeonato</a>
									@endif

								@else

								<p class="info-payment">Debes tener una subscripcion ya aprobada par poder acceder a los campeonatos, puedes tus pagos realizados desde <a href="{{ route('payments.my_payments',['id' => Auth::user()->id]) }}">Aqui</a></p>

								@endif

							@else
						
							<p class="info-payment">Debes tener una subscripcion ya aprobada par poder acceder a los campeonatos, puedes tus pagos realizados desde <a href="{{ route('payments.my_payments',['id' => Auth::user()->id]) }}">Aqui</a></p>	

							@endif

						@else
				            <p class="info-payment">Para poder utilizar todas las funcionalidades del sitio es necesario que pages la subscripci&oacute;n al sitio. <a href="{{ route('payments.subscribe_to_site',['id' => Auth::user()->id]) }}">Click aqui para Ello!</a></p>
						@endif
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
			<div class="row">
			@foreach($players as $player)
				@if($player->payment->status == 2)
				  	<div class="col-md-3 col-sm-6">
						<div class="ftb-team-thumb">
						  <figure>
						  	@if($player->user->avatar)
						  		<img src="{{ asset('application/storage/app/'.$player->user->avatar) }}" alt="">
						  	@else
						  		<img src="{{ asset('extra-images/ftb-teamone.png') }}" alt="">
						  	@endif
						  </figure>
						  <div class="ftb-team-dec">
							<div class="text">
							  <a href="{{ route('home.profile',['id' => $player->id]) }}">{{ $player->user->name }}</a>
							  <p></p>
							</div>
							<a class="arrow-iconbtn" href="{{ route('home.profile',['id' => $player->id]) }}"><i class="fa fa-arrow-right "></i></a>
						  </div>
						</div>
					</div>
				@endif  
			@endforeach
			</div>
		  </div>
		</section>
	</div>
</div>
@stop