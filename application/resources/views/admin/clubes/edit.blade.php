@extends('adminlte::page')
@section('title', 'Editar Region')
@section('content_header')
    <h1>Regiones</h1>
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
                    <h2>Editar Region</h2>
                </div>
                <div class="panel-body">
                    {!! Form::open(['method' => 'PUT', 'route' => ['clubes.update',$club->id], 'files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre: ') !!}
                            {!! Form::text('name',$club->name,['class' => 'form-control', 'id' => 'name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('region_id', 'Region: ') !!}
                            {!! Form::select('region_id',$regions,$club->city->region_id,['class'=>'form-control','id' => 'region_id']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('city_id', 'Ciudad: ') !!}
                            {!! Form::select('city_id',$cities,$club->city->id,['class'=>'form-control','id' => 'city_id']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('address', 'Direccion: ') !!}
                            {!! Form::text('address',$club->address,['class' => 'form-control', 'id' => 'address']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('logo', 'Logo: ') !!}
                            @if($club->logo)
                                <img src="{{ asset('application/storage/app/public/clubes/logos/'.$club->logo) }}" width="80" height="100" id="image_logo_{{ $club->id }}" class="img-thumbnail">
                                {!! Form::button('<i class="fa fa-times"></i> Eliminar', ['type' => 'button', 'class' => 'btn btn-danger delete-logo','data-id' => $club->id, 'id' => 'boton_'.$club->id]) !!}
                                {!! Form::file('logo',['class' => 'form-control', 'id' => 'logo_'.$club->id, 'style' => 'display:none']) !!}
                            @else
                                {!! Form::file('logo',['class' => 'form-control', 'id' => 'logo']) !!}
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('cover', 'Cover: ') !!}
                            @if($club->cover)
                                <img src="{{ asset('application/storage/app/public/clubes/covers/'.$club->cover) }}" width="80" height="100" id="image_cover_{{ $club->id }}" class="img-thumbnail">
                                {!! Form::button('<i class="fa fa-times"></i> Eliminar', ['type' => 'button', 'class' => 'btn btn-danger delete-cover','data-id' => $club->id, 'id' => 'boton_cover_'.$club->id]) !!}

                                {!! Form::file('cover',['class' => 'form-control', 'id' => 'cover_'.$club->id, 'style' => 'display:none']) !!}

                            @else
                                {!! Form::file('cover',['class' => 'form-control', 'id' => 'cover']) !!}
                            @endif
                        </div>
                    {!! Form::button('<i class="fa fa-floppy-o"></i> Guardar',['type' => 'submit', 'class' => 'btn btn-success']) !!}
                        <a href="{{ route('clubes.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
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

        $("#region_id").change(function(){
            $("#city_id").empty();
            var id = $(this).val();
            var url = '{{ asset("/admin/cities/getCities") }}/'+id;
            $("#city_id").append('<option value="">-</option>');

            $.get(url, function( response ){
                if(response){
                    $.each(JSON.parse(response), function(index, obj){
                        $("#city_id").append('<option value="'+obj.value+'">'+obj.text+'</option>');
                    });   
                }
                
            });
        });

        $(".delete-logo").click(function(){
            var id = $(this).attr("data-id");
            var url = '{{ asset("/admin/clubes/delete_logo/") }}/'+id;
            if(confirm("Esta Seguro de Eliminar este Logo?")){
                $.get(url, function( response ){
                    var data = JSON.parse(response);

                    if(data.borrado == 'si'){
                        alert("Logo Borrada con Exito!!");
                        $("#logo_"+id).css("display","block");
                        $("#image_logo_"+id).remove();
                        $("#boton_"+id).remove();
                    }
                });
            }
        });

        $(".delete-cover").click(function(){
            var id = $(this).attr("data-id");
            var url = '{{ asset("/admin/clubes/delete_cover/") }}/'+id;
            if(confirm("Esta Seguro de Eliminar este Cover?")){
                $.get(url, function( response ){
                    var data = JSON.parse(response);

                    if(data.borrado == 'si'){
                        alert("cover Borrado con Exito!!");
                        $("#cover_"+id).css("display","block");
                        $("#image_cover_"+id).remove();
                        $("#boton_cover_"+id).remove();
                    }
                });
            }
        });

    });
    
</script>
@stop
