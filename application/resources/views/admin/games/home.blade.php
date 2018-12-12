@extends('adminlte::page')
@section('title', 'Juegos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12-lg">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Juegos</h2>
                </div>
                <div class="panel-body">
                    @include('flash::message')
                    <a href="{{ route('games.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Nueva Juego</a>
                    <br />
                    <br />
                    <table class="table table-bordered table-striped data-table">
                        <thead>
                            <th>ID</th>
                            <th>Campeonato</th>
                            <th>Fecha</th>
                            <th>Jugador 1</th>
                            <th>Jugador 2</th>
                            <th>Ganador</th>
                            <th>Categoria</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($games as $game)
                                <tr>
                                    <td>{{ $game->id }}</td>
                                    <td>{{ $game->championship->title }}</td>
                                    <td>{{ date('d-m-Y',strtotime($game->game_date)) }}</td>
                                    <td>{{ $game->user_player_1 }}</td>
                                    <td>{{ $game->user_player_2 }}</td>
                                    <td>{{ $game->user_player_winner }}</td>
                                    <td>{{ $game->player_category->name }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('games.edit',['id' => $game->id]) }}"><i class="fa fa-pencil"></i> Editar</a>
                                        {!! Form::open(['method' => 'DELETE','style' => 'display:inline','route' => ['games.destroy', $game->id]]) !!}
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
