@extends('adminlte::page')
@section('title', 'Editar Campeonato')
@section('content_header')
    <h1>Campeonatos</h1>
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
                    <h2>Editar Campeonato</h2>
                </div>
                <div class="panel-body">
                    {!! Form::open(['method' => 'PUT', 'route' => 
                    ['championships.update',$championship->id]]) !!}
                        <ul class="nav nav-tabs">
                          <li class="active"><a data-toggle="tab" href="#championship">Campeonatos</a></li>
                          <li><a data-toggle="tab" href="#players">Jugadores</a></li>
                          <li><a data-toggle="tab" href="#games">Juegos</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="championship" class="tab-pane fade in active">
                                <div class="form-group">
                                    {!! Form::label('title', 'Titulo: ') !!}
                                    {!! Form::text('title',$championship->title,['class' => 'form-control', 'id' => 'title']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('description', 'Descripción: ') !!}
                                    {!! Form::textarea('description',$championship->description,['class' => 'form-control', 'id' => 'description']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('cover', 'Cover: ') !!}
                                    @if($championship->cover)
                                        <div id="cover-container">
                                            <img src="{{ asset('application/storage/app/'.$championship->cover) }}" class="img-thumbnail" width="150" height="200" />
                                            {!! Form::button('<i class="fa fa-times"></i> Borrar Cover',['type' => 'button', 'id' => 'delete-cover', 'class' => 'btn btn-danger']) !!}
                                        </div>
                                        {!! Form::file('cover',['class' => 'form-control', 'id' => 'cover', 'style' => 'display:none;']) !!}
                                    @else
                                    {!! Form::file('cover',['class' => 'form-control', 'id' => 'cover']) !!}
                                    @endif
                                </div>
                                <div class="form-group">
                                    {!! Form::label('datefrom', 'Fecha Inicio: ') !!}
                                    {!! Form::text('datefrom',date('Y/m/d',strtotime($championship->datefrom)),['class' => 'form-control date-picker', 'id' => 'datefrom', 'readOnly' => 'readOnly']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('dateto', 'Fecha Hasta: ') !!}
                                    {!! Form::text('dateto',date('Y/m/d',strtotime($championship->dateto)),['class' => 'form-control date-picker', 'id' => 'dateto', 'readOnly' => 'readOnly']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('point_to_winner_game', 'Puntos para Ganador: ') !!}
                                    {!! Form::text('point_to_winner_game',$championship->point_to_winner_game,['class' => 'form-control', 'id' => 'point_to_winner_game']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('total_points', 'Total Puntos: ') !!}
                                    {!! Form::text('total_points',$championship->total_points,['class' => 'form-control', 'id' => 'total_points']) !!}
                                </div>
                            </div>
                            <div id="players" class="tab-pane fade in active">
                            </div>
                            <div id="games" class="tab-pane fade in active">
                            </div>
                        </div>
                        {!! Form::button('<i class="fa fa-floppy-o"></i> Guardar',['type' => 'submit', 'class' => 'btn btn-success']) !!}
                        <a href="{{ route('championships.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@stop
@section('js')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".date-picker").datepicker({
            dateFormat : 'yy/mm/dd',
            changeYear : true,
            changeMonth : true
        });

        $("#delete-cover").click(function(){
            if(confirm("Estas seguro de eliminar este Cover?")){
                var url = "{{ route('championships.show',['id' => $championship->id]) }}";
                $.get(url, function( response ){

                    var data = JSON.parse(response);
                    if(data.borrado == 'si'){
                        alert('Cover Eliminado con Exito!!');
                        $("#cover-container").remove();
                        $("#cover").show();
                    }
                });
            }
        });

    });
</script>
@stop