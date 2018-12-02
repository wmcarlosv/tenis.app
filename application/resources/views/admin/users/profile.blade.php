@extends('adminlte::page')
@section('title', 'Editar Perfil')
@section('content_header')
    <h1>Perfil</h1>
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
                    <h2>Editar Perfil</h2>
                </div>
                <div class="panel-body">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#personal_data">Datos Personales</a></li>
                      <li><a data-toggle="tab" href="#password">Contrase&ntilde;a</a></li>
                    </ul>

                    <div class="tab-content">
                      <div id="personal_data" class="tab-pane fade in active">
                        <h3>Datos Personales</h3>
                        {!! Form::open(['method' => 'PUT', 'route' => ['users.update',Auth::user()->id], 'files' => true]) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre: ') !!}
                            {!! Form::text('name',Auth::user()->name,['class' => 'form-control', 'id' => 'name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email: ') !!}
                            {!! Form::text('email',Auth::user()->email,['class' => 'form-control', 'id' => 'email']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('phone', 'Telefono: ') !!}
                            {!! Form::text('phone',Auth::user()->phone,['class' => 'form-control', 'id' => 'phone']) !!}
                        </div>
                            {!! Form::label('region_id', 'Region: ') !!}
                            {!! Form::select('region_id',$regions,Auth::user()->city->region_id,['class' => 'form-control', 'id' => 'region_id']) !!}
                        <div class="form-group">
                            {!! Form::label('city_id', 'Ciudad: ') !!}
                            {!! Form::select('city_id',$cities,Auth::user()->city_id,['class' => 'form-control', 'id' => 'city_id']) !!}
                        </div>
                            {!! Form::label('address', 'Dirección: ') !!}
                            {!! Form::textarea('address',Auth::user()->address,['class' => 'form-control', 'id' => 'address']) !!}
                        <div class="form-group">
                            {!! Form::label('club_id', 'Club: ') !!}
                            {!! Form::select('club_id',$clubes,Auth::user()->club_id,['class' => 'form-control', 'id' => 'club_id']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('avatar', 'Foto Perfil: ') !!}
                            @if(Auth::user()->avatar)
                                <div id="avatar-content">
                                    <img src="{{ asset('application/storage/app/'.Auth::user()->avatar) }}" class="img-thumbnail" width="200" height="250">
                                    <button class="btn btn-danger" type="button" id="delete-image-profile">Eliminar Imagen de Perfil</button>
                                </div>
                                {!! Form::file('avatar',['class' => 'form-control', 'id' => 'avatar', 'style' => 'display:none;']) !!}
                            @else
                                {!! Form::file('avatar',['class' => 'form-control', 'id' => 'avatar']) !!}
                            @endif
                        </div>
                        <div class="form-group">
                            {!! Form::label('player_category_id', 'Categoria: ') !!}
                            {!! Form::select('player_category_id',$player_categories,Auth::user()->player_category_id,['class' => 'form-control', 'id' => 'player_category_id']) !!}
                        </div>
                        {!! Form::hidden('from_page','user_profile') !!}
                        {!! Form::button('<i class="fa fa-floppy-o"></i> Guardar',['type' => 'submit', 'class' => 'btn btn-success']) !!}
                        <a href="{{ route('home') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
                    {!! Form::close() !!}
                      </div>
                      <div id="password" class="tab-pane fade">
                        <h3>Cambiar Contrase&ntilde;a</h3>
                        {!! Form::open(['method' => 'PUT', 'route' => ['users.change_password',Auth::user()->id], 'id' => 'change_password_form']) !!}
                            <div class="form-group">
                                {!! Form::label('password', 'Nueva Contraseña: ') !!}
                                {!! Form::password('password',['class' => 'form-control', 'id' => 'password']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('password_confirmation', 'Repite Contraseña: ') !!}
                                {!! Form::password('password_confirmation',['class' => 'form-control', 'id' => 'password_confirmation']) !!}
                            </div>
                            {!! Form::button('<i class="fa fa-floppy-o"></i> Guardar',['type' => 'submit', 'class' => 'btn btn-success', 'id' => 'change_password']) !!}
                            <a href="{{ route('home') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
                        {!! Form::close() !!}
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    $("#delete-image-profile").click(function(){
        if(confirm("Estas seguro de eliminar la Imagen de Perfil")){
            var url = "{{ url('admin/users/delete_profile_image/'.Auth::user()->id) }}";

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
</script>
@stop
