@extends('adminlte::page')
@section('title', 'Nueva Noticia')
@section('content_header')
    <h1>Nueva Noticia</h1>
@stop
@section('content')
<div class="container-fluid">
    {!! Form::open(['route' => 'notices.store','autocomplete' => 'off', 'files' => true]) !!}
    <div class="row">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="col-lg-8 col-md-8">
            <div class="panel panel-default">
                 <div class="panel-body">
                        <div class="form-group">
                            {!! Form::label('title', 'Titulo: ') !!}
                            {!! Form::text('title',null,['class' => 'form-control', 'id' => 'title']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('content', 'Contenido: ') !!}
                            {!! Form::textarea('content',null,['class' => 'form-control summernote', 'id' => 'content']) !!}
                        </div>
                        {!! Form::button('<i class="fa fa-floppy-o"></i> Guardar',['type' => 'submit', 'class' => 'btn btn-success']) !!}
                        <a href="{{ route('notices.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">
                        {!! Form::label('status', 'Estatus: ') !!}
                        {!! Form::select('status',['draf' => 'borrador', 'publisher' => 'Publicado'],$notice->status,['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('notice_category_id', 'Categoria: ') !!}
                        {!! Form::select('notice_category_id',$notice_categories,null,['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('tags', 'Tags: ') !!}
                        {!! Form::select('tags[]',$tags,null,['class' => 'form-control js-example-basic-multiple', 'multiple' => 'multiple', 'style' => 'width:100%;']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('avatar', 'Imagen de Portada: ') !!}
                        {!! Form::file('avatar',['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
@endsection
@section('css')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@stop
@section('js')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('textarea.summernote').summernote({
        height:400
      });
      $('.js-example-basic-multiple').select2();
    });
</script>
@stop
