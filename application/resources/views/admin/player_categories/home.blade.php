@extends('adminlte::page')
@section('title', 'Categorias de Jugador')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12-lg">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Categorias de Jugador</h2>
                </div>
                <div class="panel-body">
                    @include('flash::message')
                    <a href="{{ route('player_categories.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Nueva Categoria de Jugador</a>
                    <br />
                    <br />
                    <table class="table table-bordered table-striped data-table">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Slug</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($player_categories as $player_category)
                                <tr>
                                    <td>{{ $player_category->id }}</td>
                                    <td>{{ $player_category->name }}</td>
                                    <td>{{ $player_category->slug }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('player_categories.edit',['id' => $player_category->id]) }}"><i class="fa fa-pencil"></i> Editar</a>
                                        {!! Form::open(['method' => 'DELETE','style' => 'display:inline','route' => ['player_categories.destroy', $player_category->id]]) !!}
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
