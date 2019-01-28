@extends('adminlte::page')
@section('title', 'Rankings')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12-lg">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Rankings</h2>
                </div>
                <div class="panel-body">
                    @include('flash::message')
                    {!! Form::open(['route' => 'rankings.store']) !!}
                        <div class="form-group">
                            <label for="championship_id">Campeonato: </label>
                            <select name="championship_id" id="championship_id" class="form-control activador">
                                <option>-</option>
                                @foreach($championships as $championship)
                                    <option value="{{ $championship->id }}">{{ $championship->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="player_category_id">Categoria: </label>
                            <select name="player_category_id" id="player_category_id" class="form-control activador">
                                <option>-</option>
                                @foreach($player_categories as $player_category)
                                    <option value="{{ $player_category->id }}">{{ $player_category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <h2>Jugadores</h2>
                        <hr />
                        <table class="table table-bordered table-striped">
                            <thead>
                                <th>Posicion</th>
                                <th>Jugador</th>
                                <th>Club</th>
                                <th>Puntos</th>
                            </thead>
                            <tbody id="load_player_data">
                                <tr>
                                    <td colspan="4"><center>Sin Datos</center></td>
                                </tr>
                            </tbody>
                        </table>
                        <button class="btn btn-success"><i class="fa fa-floppy-o"></i> Guardar</button>
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
        $("select.activador").change(function(){

            var championship_id = $("#championship_id").val();
            var player_category_id = $("#player_category_id").val();
            var url = "rankings/players-by-category/"+championship_id+"/"+player_category_id;

            if(championship_id !="-" && player_category_id != "-"){
                $("#load_player_data").append('<tr><td colspan="4"><center>Cargando...</center></td></tr>');
                $("#load_player_data").empty();
                $.get(url, function( response ){
                    var data = JSON.parse(response);
                    if(data.length > 0){
                        $.each(data, function(index, value){
                            $("#load_player_data").append("<tr><td><input type='hidden' name='users_ids[]' value='"+index+"' />"+value.id+"</td><td>"+value.name+"</td><td>"+value.club+"</td><td><input type='text' size='3' class='form-control' value='"+value.points+"' name='points[]' /></td></tr>");
                        }); 
                    }else{
                        $("#load_player_data").append('<tr><td colspan="4"><center>Sin Datos</center></td></tr>');
                    }
                    
                }); 

            }else{
                $("#load_player_data").empty();
                $("#load_player_data").append('<tr><td colspan="4"><center>Sin Datos</center></td></tr>');
            }
        });
    });
</script>
@endsection