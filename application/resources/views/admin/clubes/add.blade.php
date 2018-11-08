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
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre: ') !!}
                            {!! Form::text('name',null,['class' => 'form-control', 'id' => 'name']) !!}
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