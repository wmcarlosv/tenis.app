@extends('adminlte::page')
@section('title', 'Editar Usuario')
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
                    <h2>Editar Usuario</h2>
                </div>
                <div class="panel-body">
                    {!! Form::open(['method' => 'PUT', 'route' => ['users.update_admin',$user->id], 'files' => true]) !!}
                       <div class="form-group">
                            {!! Form::label('name', 'Nombre: ') !!}
                            {!! Form::text('name',$user->name,['class' => 'form-control', 'id' => 'name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email: ') !!}
                            {!! Form::text('email',$user->email,['class' => 'form-control', 'id' => 'email']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('role', 'Rol: ') !!}
                            {!! Form::select('role',['' => '-','administrator' => 'Administrador','club_manager' => 'administrador de Club','player' => 'Jugador'],$user->role,['class' => 'form-control', 'id' => 'role']) !!}
                        </div>
                        <div class="form-group">
                            <label for="region_id">Region</label>
                            <select name="region_id" id="region_id" class="form-control">
                                <option>--Region--</option>
                                @foreach($regions as $region)
                                    @if($region->id == $user->city->region_id)
                                        <option value="{{ $region->id }}" selected="selected">{{ $region->name }}</option>
                                    @else
                                        <option value="{{ $region->id }}">{{ $region->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="city_id">Ciudad</label>
                            <select name="city_id" id="city_id" class="form-control">
                                <option>--Ciudad--</option>
                                @foreach($cities as $city)
                                    @if($city->id == $user->city->id)
                                        <option value="{{ $city->id }}" selected="selected">{{ $city->name }}</option>
                                    @else
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="club_id">Club</label>
                            <select name="club_id" id="club_id" class="form-control">
                                <option>--club--</option>
                                @foreach($clubes as $club)
                                    @if($club->id == $user->club_id)
                                        <option value="{{ $club->id }}" selected="selected">{{ $club->name }}</option>
                                    @else
                                        <option value="{{ $club->id }}">{{ $club->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="player_category_id">Categoria de Jugador</label>
                            <select name="player_category_id" id="player_category_id" class="form-control">
                                <option>--Categoria--</option>
                                @foreach($player_categories as $player_category)
                                    @if($player_category->id == $user->player_category_id)
                                        <option value="{{ $player_category->id }}" selected="selected">{{ $player_category->name }}</option>
                                    @else
                                        <option value="{{ $player_category->id }}">{{ $player_category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            {!! Form::label('avatar', 'Avatar: ') !!}
                            @if($user->avatar)
                                <div id="avatar-content">
                                    <img src="{{ asset('application/storage/app/'.$user->avatar) }}" width="200" height="200" class="img-thumbnail">
                                    <button class="btn btn-danger" id="eliminar_avatar" type="button"><i class="fa fa-times"></i> Eliminar Avatar</button>
                                </div>
                                {!! Form::file('avatar',['class' => 'form-control', 'id' => 'avatar' , 'style' => 'display:none;']) !!}
                            @else
                                {!! Form::file('avatar',['class' => 'form-control', 'id' => 'avatar']) !!}
                            @endif
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
        $("#eliminar_avatar").click(function(){
            if(confirm("Estas seguro de eliminar la Imagen de Perfil")){
                var url = "{{ url('admin/users/delete_profile_image/'.$user->id) }}";

                $.get(url, function( response ){
                    var data = JSON.parse(response);
                    if(data.borrado == "yes"){
                        $("#avatar-content").remove();
                        $("#avatar").show();
                        alert("Imagen de Perfil Eliminada con Exito!!");
                    }
                });
            }
        });
    });
</script>
@stop