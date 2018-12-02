@extends('adminlte::page')
@section('title', 'Subscribirse a Campeonatos')
@section('content_header')
    <h1>Subscripci&oacute;n a Campeonatos</h1>
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
                    <h2>Subscripci&oacute;n a Campeonato ({{ $championship->title }})</h2>
                </div>
                <div class="panel-body">
                    <div class="alert alert-info">
                      <strong>Información del Pago!</strong><br>
                      Para poder participar en un campeonato es necesario Subscrirce al mismo, el precio es de <strong>{{ $product->price }}$ Chilenos</strong>
                      para todos los campeonatos.
                    </div>
                    {!! Form::open(['route' => 'payments.store','autocomplete' => 'off', 'files' => true]) !!}

                        {!! Form::hidden('user_id',$user->id) !!}
                        {!! Form::hidden('product_id',$product->id) !!}
                        {!! Form::hidden('amount',$product->price) !!}
                        {!! Form::hidden('championship_id',$championship->id) !!}
                        {!! Form::hidden('page_from','subscribe_to_championship') !!}
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <td rowspan="6" align="center">
                                            @if($championship->cover)
                                                <img src="{{ asset('application/storage/app/'.$championship->cover) }}" class="img-thumbnail" width="300" height="350" style="display:inline;">
                                            @endif
                                        </td>
                                        <td><h3>Nombre del Campeonato</h3></td>
                                    </tr>
                                    <tr>
                                        <td>{{ $championship->title }}</td>
                                    </tr>
                                    <tr>
                                        <td><h3>Descripci&oacute;n</h3></td>
                                    </tr>
                                    <tr>
                                        <td>{{ $championship->description }}</td>
                                    </tr>
                                    <tr>
                                        <td><h3>Precio</h3></td>
                                    </tr>
                                    <tr>
                                        <td>{{ $product->price }}$ Chilenos</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
