@extends('adminlte::page')
@section('title', 'Actualizar Noticia')
@section('content_header')
    <h1>Actualizar Noticia</h1>
@stop
@section('content')
<div class="container-fluid">
    {!! Form::open(['method' => 'PUT','route' => ['notices.update',$notice->id],'autocomplete' => 'off', 'files' => true]) !!}
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
                            {!! Form::text('title',$notice->title,['class' => 'form-control', 'id' => 'title']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('content', 'Contenido: ') !!}
                            {!! Form::textarea('content',$notice->content,['class' => 'form-control summernote', 'id' => 'content']) !!}
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
                        {!! Form::select('notice_category_id',$notice_categories,$notice->notice_category_id,['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('tags', 'Tags: ') !!}
                        {!! Form::select('tags[]',$tags,$selected_tags,['class' => 'form-control js-example-basic-multiple', 'multiple' => 'multiple', 'style' => 'width:100%;']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('avatar', 'Imagen de Portada: ') !!}
                        @if($notice->avatar)
                            <center><img class="img-thumbnail" id="avatar_{{ $notice->id }}" width="200" height="300" src="{{ asset('application/storage/app/public/notices/avatars/'.$notice->avatar) }}">
                            {!! Form::button('<i class="fa fa-times"></i> Eliminar Imagen',['type' => 'button', 'class' => 'btn btn-danger', 'id' => 'delete-image', 'data-id' => $notice->id]) !!}</center>
                            {!! Form::file('avatar',['class' => 'form-control', 'style' => 'display:none;', 'id' => 'file_avatar']) !!}
                        @else
                            {!! Form::file('avatar',['class' => 'form-control']) !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <input type="hidden" name="club_id" value="{{ $notice->club_id }}">
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

      $("#delete-image").click(function(){
            if(confirm("Esta seguro de eliminar la Imagen de Portada?")){

                var id = $(this).attr("data-id");
                var url = "{{ asset('admin/notices/delete_avatar') }}/"+id;
                $.get(url, function( response ){
                    var data = JSON.parse(response);
                    if(data.borrado == "si"){
                        alert("Imagen de Portada Eliminada con Exito!!!");
                        $("#avatar_"+id).remove();
                        $("#delete-image").remove();
                        $("#file_avatar").show();
                    }
                });

            }
            
      });

    });
</script>
@stop
