@extends('adminlte::page')
@section('title', 'Nuevo Producto')
@section('content_header')
    <h1>Productos</h1>
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
                    <h2>Nuevo Producto</h2>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'products.store','autocomplete' => 'off']) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre: ') !!}
                            {!! Form::text('name',null,['class' => 'form-control', 'id' => 'name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('code', 'Codigo: ') !!}
                            {!! Form::text('code',null,['class' => 'form-control', 'id' => 'code']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('price', 'Precio: ') !!}
                            {!! Form::text('price',null,['class' => 'form-control', 'id' => 'price']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('is_recurrent', 'Recurrente: ') !!}
                            <div class="radio">
                                <label>{!! Form::radio('is_recurrent',1) !!} Si</label>
                            </div>
                            <div class="radio">
                                <label>{!! Form::radio('is_recurrent',0,['checked' => 'checked']) !!} No</label>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('recurrent_type', 'Recurrencia: ') !!}
                            {!! Form::select('recurrent_type',[''=>'-','year' => 'Anual', 'month' => 'Mensual','week' => 'Semanal', 'day' => 'Diario'],null,['class' => 'form-control', 'id' => 'recurrent_type', 'disabled' => 'disabled']) !!}
                        </div>
                        {!! Form::button('<i class="fa fa-floppy-o"></i> Guardar',['type' => 'submit', 'class' => 'btn btn-success']) !!}
                        <a href="{{ route('products.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    $("input[type=radio]").click(function(){
        var is_recurrent = $(this).val();
        if(is_recurrent == 0){
            $("#recurrent_type").attr("disabled",true);
            $("#recurrent_type").val('');
        }else{
            $("#recurrent_type").attr("disabled",false);
            
        }
    });
</script>
@stop
