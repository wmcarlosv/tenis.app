@extends('adminlte::page')
@section('title', 'Nueva Categoria de Noticias')
@section('content_header')
    <h1>Categoria de Noticias</h1>
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
                    <h2>Nueva Categoria de Noticias</h2>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'notice_categories.store','autocomplete' => 'off']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre: ') !!}
                            {!! Form::text('name',null,['class' => 'form-control', 'id' => 'name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('parent_id', 'Categorias Padre: ') !!}
                            {!! Form::select('parent_id',$parent_categories,null,['class' => 'form-control', 'id' => 'parent_id']) !!}
                        </div>
                        {!! Form::button('<i class="fa fa-floppy-o"></i> Guardar',['type' => 'submit', 'class' => 'btn btn-success']) !!}
                        <a href="{{ route('notice_categories.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection