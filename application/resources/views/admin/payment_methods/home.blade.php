@extends('adminlte::page')
@section('title', 'Metodos de Pago')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12-lg">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Metodos de Pago</h2>
                </div>
                <div class="panel-body">
                    @include('flash::message')
                    <a href="{{ route('payment_methods.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo Metodo de Pago</a>
                    <br />
                    <br />
                    <table class="table table-bordered table-striped data-table">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($payment_methods as $payment_method)
                                <tr>
                                    <td>{{ $payment_method->id }}</td>
                                    <td>{{ $payment_method->name }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('payment_methods.edit',['id' => $payment_method->id]) }}"><i class="fa fa-pencil"></i> Editar</a>
                                        {!! Form::open(['method' => 'DELETE','style' => 'display:inline','route' => ['payment_methods.destroy', $payment_method->id]]) !!}
                                            {!! Form::button('<i class="fa fa-times"></i> Eliminar',['type' => 'submit', 'class' => 'btn btn-danger delete-button']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
