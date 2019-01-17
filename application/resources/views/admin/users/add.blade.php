@extends('adminlte::page')
@section('title', 'Nuevo Usuario')
@section('content_header')
    <h1>Usuarios</h1>
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
                    <h2>Nuevo Usuario</h2>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'users.store','autocomplete' => 'off', 'files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre: ') !!}
                            {!! Form::text('name',null,['class' => 'form-control', 'id' => 'name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email: ') !!}
                            {!! Form::text('email',null,['class' => 'form-control', 'id' => 'email']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('role', 'Rol: ') !!}
                            {!! Form::select('role',['' => '-','administrator' => 'Administrador','club_manager' => 'administrador de Club','player' => 'Jugador'],null,['class' => 'form-control', 'id' => 'role']) !!}
                        </div>
                        <div class="form-group">
                            <label for="region_id">Region</label>
                            <select name="region_id" id="region_id" class="form-control">
                                <option>--Region--</option>
                                @foreach($regions as $region)
                                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city_id">Ciudad</label>
                            <select name="city_id" id="city_id" class="form-control">
                                <option>--Ciudad--</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="club_id">Club</label>
                            <select name="club_id" id="club_id" class="form-control">
                                <option>--club--</option>
                                @foreach($clubes as $club)
                                    <option value="{{ $club->id }}">{{ $club->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="player_category_id">Categoria de Jugador</label>
                            <select name="player_category_id" id="player_category_id" class="form-control">
                                <option>--Categoria--</option>
                                @foreach($player_categories as $player_category)
                                    <option value="{{ $player_category->id }}">{{ $player_category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Contraseña: ') !!}
                            {!! Form::text('password',null,['class' => 'form-control', 'id' => 'password']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('avatar', 'Avatar: ') !!}
                            {!! Form::file('avatar',['class' => 'form-control', 'id' => 'avatar']) !!}
                        </div>
                        {!! Form::button('<i class="fa fa-floppy-o"></i> Guardar',['type' => 'submit', 'class' => 'btn btn-success']) !!}
                        <a href="{{ route('users.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
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
            $("#city_id").append('<option value="">--Ciudad--</option>');

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