@extends('adminlte::page')
@section('title', 'Editar Foto')
@section('content_header')
    <h1>Galerias</h1>
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
                    <h2>Editar Foto</h2>
                </div>
                <div class="panel-body">
                    {!! Form::open(['method' => 'PUT', 'route' => ['galleries.update',$gallery->id], 'files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('title', 'Titulo: ') !!}
                            {!! Form::text('title',$gallery->title,['class' => 'form-control', 'id' => 'title']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Descripción: ') !!}
                            {!! Form::text('description',$gallery->description,['class' => 'form-control', 'id' => 'description']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('photo', 'Foto: ') !!}
                            @if($gallery->photo)
                                <img src="{{ asset('application/storage/app/'.$gallery->photo) }}" class="img-thumbnail" width="200" height="250">
                            @endif
                            {!! Form::file('photo',['class' => 'form-control', 'id' => 'photo']) !!}
                        </div>
                        {!! Form::button('<i class="fa fa-floppy-o"></i> Guardar',['type' => 'submit', 'class' => 'btn btn-success']) !!}
                        <a href="{{ route('galleries.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
