@extends('adminlte::page')
@section('title', 'Editar Configuraciones')
@section('content_header')
    <h1>Comfiguraciones de Sitio</h1>
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
                    <h2>Editar Configuraciones</h2>
                </div>
                <div class="panel-body">
                    {!! Form::open(['method' => 'PUT', 'route' => ['sites.update',$site->id], 'files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('title', 'Titulo: ') !!}
                            {!! Form::text('title',$site->title,['class' => 'form-control', 'id' => 'title']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('description', 'Descripción: ') !!}
                            {!! Form::textarea('description',$site->description,['class' => 'form-control', 'id' => 'description']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('tags', 'Tags: ') !!}
                            {!! Form::textarea('tags',$site->title,['class' => 'form-control', 'id' => 'tags']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('logo', 'Logo: ') !!}
                            {!! Form::file('logo',['class' => 'form-control', 'id' => 'logo']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('slider_1', 'Slider 1: ') !!}
                            {!! Form::file('slider_1',['class' => 'form-control', 'id' => 'slider_1']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('slider_2', 'Slider 2: ') !!}
                            {!! Form::file('slider_2',['class' => 'form-control', 'id' => 'slider_2']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('slider_3', 'Slider 3: ') !!}
                            {!! Form::file('slider_3',['class' => 'form-control', 'id' => 'slider_3']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('facebook', 'Facebook: ') !!}
                            {!! Form::text('facebook',$site->facebook,['class' => 'form-control', 'id' => 'facebook']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('twitter', 'Twitter: ') !!}
                            {!! Form::text('twitter',$site->twitter,['class' => 'form-control', 'id' => 'twitter']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('instagram', 'Instagram: ') !!}
                            {!! Form::text('instagram',$site->instagram,['class' => 'form-control', 'id' => 'instagram']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('googleplus', 'Google Plus: ') !!}
                            {!! Form::text('googleplus',$site->googleplus,['class' => 'form-control', 'id' => 'googleplus']) !!}
                        </div>
                        {!! Form::button('<i class="fa fa-floppy-o"></i> Guardar',['type' => 'submit', 'class' => 'btn btn-success']) !!}
                        <a href="{{ url('/home') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
