@extends('adminlte::page')
@section('title', 'Editar Producto')
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
                    <h2>Editar Producto</h2>
                </div>
                <div class="panel-body">
                    {!! Form::open(['method' => 'PUT', 'route' => ['products.update',$product->id]]) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre: ') !!}
                            {!! Form::text('name',$product->name,['class' => 'form-control', 'id' => 'name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('code', 'Codigo: ') !!}
                            {!! Form::text('code',$product->code,['class' => 'form-control', 'id' => 'code']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('price', 'Precio: ') !!}
                            {!! Form::text('price',$product->price,['class' => 'form-control', 'id' => 'price']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('is_recurrent', 'Recurrente: ') !!}
                            <div class="radio">
                                <label>{!! Form::radio('is_recurrent',1,null,['id' => 'ir_si']) !!} Si</label>
                            </div>
                            <div class="radio">
                                <label>{!! Form::radio('is_recurrent',0,null,['checked' => 'checked','id' => 'ir_no']) !!} No</label>
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('recurrent_type', 'Recurrencia: ') !!}
                            {!! Form::select('recurrent_type',[''=>'-','year' => 'Anual', 'month' => 'Mensual','week' => 'Semanal', 'day' => 'Diario'],$product->recurrent_type,['class' => 'form-control', 'id' => 'recurrent_type', 'disabled' => 'disabled']) !!}
                        </div>
                        {!! Form::button('<i class="fa fa-floppy-o"></i> Guardar',['type' => 'submit', 'class' => 'btn btn-success']) !!}
                        <a href="{{ route('products.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function(){
        @if($product->is_recurrent == 1)
            $("#ir_si").attr("checked",true);
            $("#recurrent_type").attr("disabled",false);
        @endif

        $("input[type=radio]").click(function(){
            var is_recurrent = $(this).val();
            if(is_recurrent == 0){
                $("#recurrent_type").attr("disabled",true);
                $("#recurrent_type").val('');
            }else{
                $("#recurrent_type").attr("disabled",false);
            }
        });
    });
</script>
@stop
