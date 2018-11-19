@extends('adminlte::page')
@section('title', 'Nuevo Campeonato')
@section('content_header')
    <h1>Campeonatos</h1>
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
                    <h2>Nuevo Campeonato</h2>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'championships.store','autocomplete' => 'off', 'files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('title', 'Titulo: ') !!}
                            {!! Form::text('title',null,['class' => 'form-control', 'id' => 'title']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Descripción: ') !!}
                            {!! Form::textarea('description',null,['class' => 'form-control', 'id' => 'description']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('cover', 'Cover: ') !!}
                            {!! Form::file('cover',['class' => 'form-control', 'id' => 'cover']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('datefrom', 'Fecha Inicio: ') !!}
                            {!! Form::text('datefrom',null,['class' => 'form-control', 'id' => 'datefrom']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('dateto', 'Fecha Hasta: ') !!}
                            {!! Form::text('dateto',null,['class' => 'form-control', 'id' => 'dateto']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('point_to_winner_game', 'Puntos para Ganador: ') !!}
                            {!! Form::text('title',null,['class' => 'form-control', 'id' => 'point_to_winner_game']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('total_points', 'Total Puntos: ') !!}
                            {!! Form::text('total_points',null,['class' => 'form-control', 'id' => 'total_points']) !!}
                        </div>
                        {!! Form::button('<i class="fa fa-floppy-o"></i> Guardar',['type' => 'submit', 'class' => 'btn btn-success']) !!}
                        <a href="{{ route('championships.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
