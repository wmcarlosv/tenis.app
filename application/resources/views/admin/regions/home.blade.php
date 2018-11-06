@extends('adminlte::page')
@section('title', 'Regiones')
@section('content_header')
    <h1>Regiones</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12-lg">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Regiones</h2>
                </div>
                <div class="panel-body">
                    @include('flash::message')
                    <a href="{{ route('regions.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Nueva Region</a>
                    <br />
                    <br />
                    <table class="table table-bordered table-striped data-table">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($regions as $region)
                                <tr>
                                    <td>{{ $region->id }}</td>
                                    <td>{{ $region->name }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('regions.edit',['id' => $region->id]) }}"><i class="fa fa-pencil"></i> Editar</a>
                                        {!! Form::open(['method' => 'DELETE','style' => 'display:inline','route' => ['regions.destroy', $region->id]]) !!}
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
