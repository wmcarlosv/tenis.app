@extends('adminlte::page')
@section('title', 'Detalle de Usuario')
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
                    <h2>Detalle de Usuario</h2>
                </div>
                <div class="panel-body">
                    {!! Form::open() !!}
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
                            {!! Form::text('role',$user->role,['class' => 'form-control', 'id' => 'role']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('region_id', 'Region: ') !!}
                            {!! Form::text('region_id',$user->city->region->name,['class' => 'form-control', 'id' => 'region_id']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('city_id', 'Ciudad: ') !!}
                            {!! Form::text('city_id',$user->city->name,['class' => 'form-control', 'id' => 'city_id']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('club_id', 'Club: ') !!}
                            @if(isset($user->club->name) and !empty($user->club->name))
                                {!! Form::text('club_id',$user->club->name,['class' => 'form-control', 'id' => 'club_id']) !!}
                            @else
                                {!! Form::text('club_id',"Sin Equipo",['class' => 'form-control', 'id' => 'club_id']) !!}
                            @endif
                        </div>
                        <a href="#" id="sitio" class="btn btn-info">Subscribir a Sitio</a>
                        <a href="#" id="campeonato" class="btn btn-success">Subscribir a Campeonato</a>
                        <a href="{{ route('users.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Subscribir Jugador a Campeonato</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
                <label for="championship_id">Campeonato:</label>
                <select class="form-control" name="championship_id" id="championship_id">
                    <option>-</option>
                    @foreach($championships as $chp)
                        <option value="{{ $chp->id }}">{{ $chp->title }}</option>
                    @endforeach
                </select>
            </div>
          </div>
          <div class="modal-footer">
            <a href="#" id="subscribir" class="btn btn-success">Subscribir</a>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          </div>
        </div>

      </div>
    </div>

</div>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function(){

        $("#sitio").click(function(){
            if(confirm("Estas seguro de Subscribir a este Jugador al Campeonato?")){
                $.get("{{ route('users.player_to_site',['id' => $user->id]) }}", function(response){
                    var data = JSON.parse(response);
                    if(data.registro == 'yes'){
                        alert("Jugador Subscrito al Sitio con Exito");
                        location.href="{{ route('users.index') }}";
                    }else if(data.registro == "existe"){
                       alert("El jugador ya esta Subscrito al Sitio!!"); 
                    }
                });
            }
        });

        $("#campeonato").click(function(){
            $("#myModal").modal("show");
        });

        $("#subscribir").click(function(){
            var user_id = "{{ $user->id }}";
            var player_category_id = "{{ $user->player_category_id }}";
            var championship_id = $("#championship_id").val();
            if(confirm("Estas seguro de Subscribir a este jugador al Campeonato?")){
                var url = "player_to_chmp/"+user_id+"/"+championship_id+"/"+player_category_id;
                $.get(url, function(response){
                    var data = JSON.parse(response);
                    if(data.registro == 'yes'){
                        alert("Jugador Subscrito al Campeonato con Exito");
                        location.href="{{ route('users.index') }}";
                    }else if(data.registro == "existe"){
                       alert("El jugador ya se encentra subscrito a este campeonato!!"); 
                    }
                })
            }
        });
    });
</script>
@endsection