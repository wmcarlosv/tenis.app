@extends('adminlte::page')
@section('title', 'Editar Metodo de Pago')
@section('content_header')
    <h1>Metodos de Pago</h1>
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
                    <h2>Editar Metodo de Pago</h2>
                </div>
                <div class="panel-body">
                    {!! Form::open(['method' => 'PUT', 'route' => ['payment_methods.update',$payment_method->id]]) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre: ') !!}
                            {!! Form::text('name',$payment_method->name,['class' => 'form-control', 'id' => 'name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('payment_method_config', 'Configuracion Metodo de Pago: ') !!}
                            {!! Form::textarea('payment_method_config',$payment_method->payment_method_config,['class' => 'form-control', 'id' => 'name']) !!}
                        </div>
                        {!! Form::button('<i class="fa fa-floppy-o"></i> Guardar',['type' => 'submit', 'class' => 'btn btn-success']) !!}
                        <a href="{{ route('payment_methods.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
