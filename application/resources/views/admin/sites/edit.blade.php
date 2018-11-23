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
                    {!! Form::open(['method' => 'PUT', 'route' => ['sites.update'], 'files' => true, 'autocomplete' => 'off']) !!}

                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#site_identity">Identidad del Sitio</a></li>
                          <li><a data-toggle="tab" href="#slider_images">Slider</a></li>
                          <li><a data-toggle="tab" href="#social_link">Enlaces Sociales</a></li>
                        </ul>

                        <div class="tab-content">
                          <div id="site_identity" class="tab-pane fade in active">
                            <br />
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
                                {!! Form::textarea('tags',$site->tags,['class' => 'form-control', 'id' => 'tags']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('logo', 'Logo: ') !!}
                                @if($site->logo)
                                    <div id="container_logo">
                                        <img src="{{ asset('application/storage/app/'.$site->logo) }}" class="img-thumbnail" width="150" height="200" />
                                        {!! Form::button('<i class="fa fa-times"></i> Eliminar Logo',['type' => 'button', 'class' => 'btn btn-danger delete-image', 'type-data' => 'logo']) !!}
                                    </div>
                                    {!! Form::file('logo',['class' => 'form-control', 'id' => 'file_logo', 'style' => 'display:none;']) !!}
                                @else
                                    {!! Form::file('logo',['class' => 'form-control', 'id' => 'logo']) !!}
                                @endif
                                
                            </div>
                          </div>
                          <div id="slider_images" class="tab-pane fade">
                            <br />
                            <div class="form-group">
                                {!! Form::label('slider_1_title', 'Titulo Slider 1: ') !!}
                                    {!! Form::text('slider_1_title',$site->slider_1_title,['class' => 'form-control', 'id' => 'slider_1_title']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('slider_1_subtitle', 'Sub Titulo Slider 1: ') !!}
                                {!! Form::text('slider_1_subtitle',$site->slider_1_subtitle,['class' => 'form-control', 'id' => 'slider_1_subtitle']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('slider_1', 'Imagen Slider 1: ') !!}
                                @if($site->slider_1)
                                    <div id="container_slider_1">
                                        <img src="{{ asset('application/storage/app/'.$site->slider_1) }}" class="img-thumbnail" width="150" height="200" />
                                        {!! Form::button('<i class="fa fa-times"></i> Eliminar Imagen',['type' => 'button', 'class' => 'btn btn-danger delete-image', 'type-data' => 'slider_1']) !!}
                                    </div>
                                    {!! Form::file('slider_1',['class' => 'form-control', 'id' => 'file_slider_1', 'style' => 'display:none;']) !!}
                                @else
                                {!! Form::file('slider_1',['class' => 'form-control', 'id' => 'slider_1', ]) !!}
                                @endif
                            </div>
                            <div class="form-group">
                                {!! Form::label('slider_1_link', 'Link Slider 1: ') !!}
                                {!! Form::text('slider_1_link',$site->slider_1_link,['class' => 'form-control', 'id' => 'slider_1_link']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('slider_2_title', 'Titulo Slider 2: ') !!}
                                {!! Form::text('slider_2_title',$site->slider_2_title,['class' => 'form-control', 'id' => 'slider_2_title']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('slider_2_subtitle', 'Sub Titulo Slider 2: ') !!}
                                {!! Form::text('slider_2_subtitle',$site->slider_2_subtitle,['class' => 'form-control', 'id' => 'slider_2_subtitle']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('slider_2', 'Imagen Slider 2: ') !!}
                                @if($site->slider_2)
                                    <div id="container_slider_2">
                                        <img src="{{ asset('application/storage/app/'.$site->slider_2) }}" class="img-thumbnail" width="150" height="200" />
                                        {!! Form::button('<i class="fa fa-times"></i> Eliminar Imagen',['type' => 'button', 'class' => 'btn btn-danger delete-image', 'type-data' => 'slider_2']) !!}
                                    </div>
                                    {!! Form::file('slider_2',['class' => 'form-control', 'id' => 'file_slider_2', 'style' => 'display:none;']) !!}
                                @else
                                {!! Form::file('slider_2',['class' => 'form-control', 'id' => 'slider_2', ]) !!}
                                @endif
                            </div>
                            <div class="form-group">
                                {!! Form::label('slider_2_link', 'Link Slider 2: ') !!}
                                {!! Form::text('slider_2_link',$site->slider_2_link,['class' => 'form-control', 'id' => 'slider_2_link']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('slider_3_title', 'Titulo Slider 3: ') !!}
                                {!! Form::text('slider_3_title',$site->slider_3_title,['class' => 'form-control', 'id' => 'slider_3_title']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('slider_3_subtitle', 'Sub Titulo Slider 3: ') !!}
                                {!! Form::text('slider_3_subtitle',$site->slider_31_subtitle,['class' => 'form-control', 'id' => 'slider_3_subtitle']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('slider_3', 'Slider 3: ') !!}
                                @if($site->slider_3)
                                    <div id="container_slider_3">
                                        <img src="{{ asset('application/storage/app/'.$site->slider_3) }}" class="img-thumbnail" width="150" height="200" />
                                        {!! Form::button('<i class="fa fa-times"></i> Eliminar Imagen',['type' => 'button', 'class' => 'btn btn-danger delete-image', 'type-data' => 'slider_3']) !!}
                                    </div>
                                    {!! Form::file('slider_3',['class' => 'form-control', 'id' => 'file_slider_3', 'style' => 'display:none;']) !!}
                                @else
                                {!! Form::file('slider_3',['class' => 'form-control', 'id' => 'slider_3', ]) !!}
                                @endif
                            </div>
                            <div class="form-group">
                                {!! Form::label('slider_3_link', 'Link Slider 3: ') !!}
                                {!! Form::text('slider_3_link',$site->slider_3_link,['class' => 'form-control', 'id' => 'slider_3_link']) !!}
                            </div>
                          </div>
                          <div id="social_link" class="tab-pane fade">
                            <br />
                            <div class="form-group">
                                {!! Form::label('facebook', 'Facebook: ') !!}
                                {!! Form::text('facebook',$site->facebook,['class' => 'form-control', 'id' => 'facebook']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('twitter', 'Twitter: ') !!}
                                {!! Form::text('twitter',$site->twitter,['class' => 'form-control', 'id' => 'twitter']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('linkedin', 'Linkedin: ') !!}
                                {!! Form::text('linkedin',$site->linkedin,['class' => 'form-control', 'id' => 'linkedin']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('vimeo', 'Vimeo: ') !!}
                                {!! Form::text('vimeo',$site->vimeo,['class' => 'form-control', 'id' => 'vimeo']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('googleplus', 'Google Plus: ') !!}
                                {!! Form::text('googleplus',$site->googleplus,['class' => 'form-control', 'id' => 'googleplus']) !!}
                            </div>
                          </div>
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
@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        $(".delete-image").click(function(){
            if(confirm("Esta Seguro de eleminar este elemento?")){
                var type = $(this).attr("type-data"); 
                var url = "{{ asset('admin/sites/drop_image') }}/"+type;
                $.get(url, function( response ){
                    var data = JSON.parse(response);
                    if(data.borrado == 'si'){
                        alert("Elemento borrado con Exito!!");
                        console.log( response );
                        $("#container_"+type).remove();
                        $("#file_"+type).show();
                    }
                });
            }
        });
    });
</script>
@stop