@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
@stop
@section('content')
<div class="container-fluid">
   <div class="panel panel-default">
       <div class="panel-heading">
           <h2>Dashboard</h2>
       </div>
       <div class="panel-body">
        @if(Auth::user()->role == "player")
          @if($user_payments->count() > 0)
            @foreach($user_payments as $payment)
              @if($payment->product_id == 1)
                @if($payment->status == 1)
                  <div class="alert alert-info">
                    <strong>Ya has realizado el pago para subscribirte al sitio, sin embargo aun no se ha verficado tu pago por el administrador, apenas este verifique tu pago podras tener acceso a toda la plataforma</strong>
                  </div>
                  @break
                @else
                  <div class="alert alert-success">
                    <strong>Perfil subscrito al sitio, usted puede hacer uso de todas las caracteristicas del sitio!!!</strong>
                  </div>
                @endif
              @else
                <div class="alert alert-info">
                <strong>Debes Subscribirte al Sitio para poder entrar en los campeonatos!</strong> <a href="{{ route('payments.subscribe_to_site',['id' => Auth::user()->id]) }}" class="alert-link">click Aqui para Subscribirte</a>
              </div>
              @endif
            @endforeach
          @else
            <div class="alert alert-info">
              <strong>Debes Subscribirte al Sitio para poder entrar en los campeonatos!</strong> <a href="{{ route('payments.subscribe_to_site',['id' => Auth::user()->id]) }}" class="alert-link">click Aqui para Subscribirte</a>
            </div>
          @endif
        @endif
      </div>
   </div>
</div>
@endsection
