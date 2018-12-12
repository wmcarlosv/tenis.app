@extends('adminlte::page')
@section('title', 'Nuevo Club')
@section('content_header')
    <h1>Clubes</h1>
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
                    <h2>Nuevo Club</h2>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'clubes.store','autocomplete' => 'off', 'files' => true]) !!}

                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#club">Datos del Club</a></li>
                          <li><a data-toggle="tab" href="#social">Redes Sociales</a></li>
                          <li><a data-toggle="tab" href="#services">Servicios</a></li>
                        </ul>

                        <div class="tab-content">
                          <div id="club" class="tab-pane fade in active">
                            <h3>Club</h3>
                            <div class="form-group">
                                {!! Form::label('name', 'Nombre: ') !!}
                                {!! Form::text('name',null,['class' => 'form-control', 'id' => 'name']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('description', 'Sobre el Club: ') !!}
                                {!! Form::textarea('description',null,['class' => 'form-control', 'id' => 'description']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', 'Email: ') !!}
                                {!! Form::text('email',null,['class' => 'form-control', 'id' => 'email']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('phone', 'Telefono: ') !!}
                                {!! Form::text('phone',null,['class' => 'form-control', 'id' => 'phone']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('region_id', 'Region: ') !!}
                                {!! Form::select('region_id',$regions,NULL,['class'=>'form-control','id' => 'region_id']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('city_id', 'Ciudad: ') !!}
                                {!! Form::select('city_id',[''=>'-'],NULL,['class'=>'form-control','id' => 'city_id']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('address', 'Direccion: ') !!}
                                {!! Form::text('address',null,['class' => 'form-control', 'id' => 'address']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('logo', 'Logo: ') !!}
                                {!! Form::file('logo',['class' => 'form-control', 'id' => 'address']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('cover', 'Cover: ') !!}
                                {!! Form::file('cover',['class' => 'form-control', 'id' => 'cover']) !!}
                            </div>
                          </div>
                          <div id="social" class="tab-pane fade">
                            <h3>Redes Sociales</h3>
                            <div class="form-group">
                                {!! Form::label('facebook', 'Facebook: ') !!}
                                {!! Form::text('facebook',null,['class' => 'form-control', 'id' => 'facebook']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('twitter', 'Twitter: ') !!}
                                {!! Form::text('twitter',null,['class' => 'form-control', 'id' => 'twitter']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('googleplus', 'Google Plus: ') !!}
                                {!! Form::text('googleplus',null,['class' => 'form-control', 'id' => 'googleplus']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('instagram', 'Instagram: ') !!}
                                {!! Form::text('instagram',null,['class' => 'form-control', 'id' => 'instagram']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('youtube', 'Youtube: ') !!}
                                {!! Form::text('youtube',null,['class' => 'form-control', 'id' => 'youtube']) !!}
                            </div>
                          </div>
                          <div id="services" class="tab-pane fade">
                            <h3>Servicios</h3>
                            <ul class="list-group">
                                @foreach($services as $service)
                                    <li class="list-group-item">
                                        {!! Form::checkbox('services[]',$service->id,false) !!} {{ $service->name }}
                                    </li>
                                @endforeach
                            </ul>
                          </div>
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
    });
</script>
@stop