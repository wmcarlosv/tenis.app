@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
<div class="container-fluid">
  @if(Auth::user()->role == 'player')
  <div class="row">
    <div class="col-lg-12">
      @if(isset($payment_subscription->id) and !empty($payment_subscription->id))

        @if($payment_subscription->status == 2)

          @if(date('d/m/Y',strtotime($payment_subscription->payment_date . " + 1 year")) < strtotime(date('Y-m-d')))
            <div class="callout callout-success">
              <h4>Informaci&oacute;n!</h4>
              <p>Estas al dia con la Subscripci&oacute;n, la cual esta vigente hasta el {{ date('d/m/Y',strtotime($payment_subscription->payment_date . " + 1 year")) }}</p>
            </div>
          @else
            <div class="callout callout-danger">
              <h4>Informaci&oacute;n!</h4>
              <p>Tus Subscripci&oacute;n ya esta vencida, te invitamos a renovarla en el siguiente enlace <a href="{{ route('payments.subscribe_to_site',['id' => Auth::user()->id]) }}">Click para Renovar Subscripcio&oacute;n</a></p>
            </div>
          @endif

        @elseif($payment_subscription->status == 1)
          <div class="callout callout-info">
            <h4>Informaci&oacute;n!</h4>
            <p>Tu pago esta en verificaci&oacute;n por el administrador, puedes ver la lista de tus pagos y sus estatus <a href="{{ route('payments.my_payments',['id' => Auth::user()->id]) }}">aqu&iacute;</a></p>
          </div>
        @else
          <div class="callout callout-danger">
            <h4>Informaci&oacute;n!</h4>
            <p>Tu pago fue rechazado. es posible que los datos que enviastes esten erroneos, te invitamos a verificar y realizar otra solicitud, puedes hacerlo dando Click <a href="{{ route('payments.subscribe_to_site',['id' => Auth::user()->id]) }}">Aqu&iacute;</a></p>
          </div>
        @endif
      @else
        <div class="callout callout-info">
            <h4>Informaci&oacute;n!</h4>
            <p>Para poder utilizar todas las funcionalidades del sitio es necesario que pages la subscripci&oacute;n al sitio. <a href="{{ route('payments.subscribe_to_site',['id' => Auth::user()->id]) }}">Click aqui para Ello!</a></p>
        </div>
      @endif
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Ultimas Noticias Publicadas</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <ul class="products-list product-list-in-box">
            @foreach($notices as $notice)
            <li class="item">
              <div class="product-img">
                <img src="{{ asset('application/storage/app/public/notices/avatars/'.$notice->avatar) }}" alt="Product Image">
              </div>
              <div class="product-info">
                <a href="{{ route('home.notice',['slug' => $notice->slug]) }}" class="product-title">{{ $notice->title }}</a>
                <span class="product-description">
                  {{ str_limit(strip_tags($notice->content),60) }}..
                </span>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="box-footer text-center">
          <a href="{{ url('/notices') }}" class="uppercase">Ver Todas</a>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Ultimos Campeonatos Creados</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <ul class="products-list product-list-in-box">
            @foreach($championships as $championship)
            <li class="item">
              <div class="product-img">
                <img src="{{ asset('application/storage/app/'.$championship->cover) }}" alt="Product Image">
              </div>
              <div class="product-info">
                <a href="{{ route('home.championship',['id' => $championship->id]) }}" class="product-title">{{ $championship->title }}</a>
                <span class="product-description">
                  {{ str_limit($championship->description,100) }}..
                </span>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="box-footer text-center">
          <a href="{{ url('/championships') }}" class="uppercase">Ver Todos</a>
        </div>
      </div>
    </div>
  </div>
  @endif
</div>
@endsection