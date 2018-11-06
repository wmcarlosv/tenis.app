@extends('adminlte::page')
@section('title', 'Ciudades')
@section('content_header')
    <h1>Ciudades</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12-lg">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Ciudades</h2>
                </div>
                <div class="panel-body">
                    @include('flash::message')
                    <a href="{{ route('cities.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo Ciudad</a>
                    <br />
                    <br />
                    <table class="table table-bordered table-striped data-table">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Region</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($cities as $city)
                                <tr>
                                    <td>{{ $city->id }}</td>
                                    <td>{{ $city->name }}</td>
                                    <td>{{ $city->region->name }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('cities.edit',['id' => $city->id]) }}"><i class="fa fa-pencil"></i> Editar</a>
                                        {!! Form::open(['method' => 'DELETE','style' => 'display:inline','route' => ['cities.destroy', $city->id]]) !!}
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
