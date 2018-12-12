@extends('adminlte::page')
@section('title', 'Nuevo Juego')
@section('content_header')
    <h1>Juegos</h1>
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
                    <h2>Nuevo Juego</h2>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'games.store','autocomplete' => 'off']) !!}

                        <div class="form-group">
                            {!! Form::label('championship_id', 'Campeonato: ') !!}
                            {!! Form::select('championship_id',$championships,null,['class' => 'form-control', 'id' => 'championship_id']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('player_category_id', 'Categoria: ') !!}
                            {!! Form::select('player_category_id',$player_categories,null,['class' => 'form-control', 'id' => 'player_category_id']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('game_date', 'Fecha: ') !!}
                            {!! Form::text('game_date',null,['class' => 'form-control date-picker', 'id' => 'user_player_1']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('user_player_1', 'Jugador 1: ') !!}
                            {!! Form::select('user_player_1',[],null,['class' => 'form-control js-example-basic-multiple', 'id' => 'user_player_1']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('user_player_2', 'Jugador 2: ') !!}
                            {!! Form::select('user_player_2',[],null,['class' => 'form-control js-example-basic-multiple', 'id' => 'user_player_2']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('user_player_winner_id', 'Jugador Ganador: ') !!}
                            {!! Form::select('user_player_winner_id',['' => '-'],null,['class' => 'form-control', 'id' => 'user_player_winner_id']) !!}
                        </div>
                        {!! Form::button('<i class="fa fa-floppy-o"></i> Guardar',['type' => 'submit', 'class' => 'btn btn-success']) !!}
                        <a href="{{ route('games.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@stop
@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".date-picker").datepicker({
            dateFormat : 'dd/mm/yy',
            changeYear : true,
            changeMonth : true
        });

        $('.js-example-basic-multiple').select2();
    });
</script>
@stop