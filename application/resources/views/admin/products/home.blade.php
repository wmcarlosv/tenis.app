@extends('adminlte::page')
@section('title', 'Productos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12-lg">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Productos</h2>
                </div>
                <div class="panel-body">
                    @include('flash::message')
                    <a href="{{ route('products.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Nueva Producto</a>
                    <br />
                    <br />
                    <table class="table table-bordered table-striped data-table">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <td>Codigo</td>
                            <th>Precio</th>
                            <th>Recurrente</th>
                            <th>Tipo de Recurrencia</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->code }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>
                                        @if($product->is_recurrent == 0)
                                            No
                                        @else
                                            Si
                                        @endif
                                    </td>
                                    <td>
                                        @if($product->recurrent_type == 'year')
                                            Anual
                                        @elseif($product->recurrent_type == 'month')
                                            Mensual
                                        @elseif($product->recurrent_type == 'week')
                                            Semanal
                                        @elseif($product->recurrent_type == 'day')
                                            Diario
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('products.edit',['id' => $product->id]) }}"><i class="fa fa-pencil"></i> Editar</a>
                                        {!! Form::open(['method' => 'DELETE','style' => 'display:inline','route' => ['products.destroy', $product->id]]) !!}
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
