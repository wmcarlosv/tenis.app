@extends('adminlte::page')
@section('title', 'Clubes')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12-lg">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Clubes</h2>
                </div>
                <div class="panel-body">
                    @include('flash::message')
                    <a href="{{ route('clubes.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo Club</a>
                    <br />
                    <br />
                    <table class="table table-bordered table-striped data-table">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Region</th>
                            <th>Ciudad</th>
                            <th>Logo</th>
                            <th>Slug</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($clubes as $club)
                                <tr>
                                    <td>{{ $club->id }}</td>
                                    <td>{{ $club->city->region->name }}</td>
                                    <td>{{ $club->city->name }}</td>
                                    <td>{{ $club->logo }}</td>
                                    <td>{{ $club->slug }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('clubes.edit',['id' => $club->id]) }}"><i class="fa fa-pencil"></i> Editar</a>
                                        {!! Form::open(['method' => 'DELETE','style' => 'display:inline','route' => ['clubes.destroy', $club->id]]) !!}
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
