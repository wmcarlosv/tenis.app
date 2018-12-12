@extends('adminlte::page')
@section('title', 'Nueva Foto')
@section('content_header')
    <h1>Galeria</h1>
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
                    <h2>Nueva Foto</h2>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'galleries.store','autocomplete' => 'off', 'files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('title', 'Titulo: ') !!}
                            {!! Form::text('title',null,['class' => 'form-control', 'id' => 'title']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Descripción: ') !!}
                            {!! Form::text('description',null,['class' => 'form-control', 'id' => 'description']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('photo', 'Foto: ') !!}
                            {!! Form::file('photo',['class' => 'form-control', 'id' => 'photo']) !!}
                        </div>

                        @if(Auth::user()->role == 'club_manager')
                            <input type="hidden" name="club_id" value="{{ Auth::user()->club_id }}">
                        @endif
                        
                        {!! Form::button('<i class="fa fa-floppy-o"></i> Guardar',['type' => 'submit', 'class' => 'btn btn-success']) !!}
                        <a href="{{ route('galleries.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
