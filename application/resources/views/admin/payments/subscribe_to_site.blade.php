@extends('adminlte::page')
@section('title', 'Subscribirse al Sitio')
@section('content_header')
    <h1>Subscripci&oacute;n al Sitio</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12-lg">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Nueva Subscripci&oacute;n</h2>
                </div>
                <div class="panel-body">
                    <div class="alert alert-info">
                      <strong>Información del Pago!</strong><br>
                      La subscripcion al sitio es un requisito fundamental para poder usar de forma completa todas sus caracteristicas, tiene un valor de <strong>{{ $product->price }}$ Chilenos</strong>
                    </div>
                    {!! Form::open(['route' => 'payments.store','autocomplete' => 'off', 'files' => true]) !!}

                        {!! Form::hidden('user_id',$user->id) !!}
                        {!! Form::hidden('product_id',$product->id) !!}
                        {!! Form::hidden('amount',$product->price) !!}
                        {!! Form::hidden('page_from','subscribe_to_site') !!}
                        <div class="form-group">
                            {!! Form::label('payment_method_id', 'Metodo de Pago: ') !!}
                            {!! Form::select('payment_method_id',$payment_methods,null,['class' => 'form-control', 'id' => 'payment_method_id']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('reference_number', 'Numero de Referencia: ') !!}
                            {!! Form::text('reference_number',NULL,['class' => 'form-control', 'id' => 'reference_number']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('attachment', 'Debe Adjuntar Comprobante de Pago ya sea Imagen o Pdf: ') !!}
                            {!! Form::file('attachment',['class' => 'form-control', 'id' => 'attachment']) !!}
                        </div>
                        {!! Form::button('<i class="fa fa-floppy-o"></i> Guardar',['type' => 'submit', 'class' => 'btn btn-success']) !!}
                        <a href="{{ route('home') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
