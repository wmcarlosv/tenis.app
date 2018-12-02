@extends('adminlte::page')
@section('title', 'Ver Pago')
@section('content_header')
    <h1>Pagos</h1>
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
                    <h2>Ver Pago</h2>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <td>Jugador: </td>
                                <td>{{ $payment->user->email }}</td>
                            </tr>
                            <tr>
                                <td>Producto: </td>
                                <td>{{ $payment->product->name }}</td>
                            </tr>
                            <tr>
                                <td>Metodo de Pago: </td>
                                <td>{{ $payment->payment_method->name }}</td>
                            </tr>
                            <tr>
                                <td>Fecha de Pago: </td>
                                <td>{{ date('d/m/Y',strtotime($payment->payment_date)) }}</td>
                            </tr>
                            <tr>
                                <td>Numero de Referencia: </td>
                                <td>{{ $payment->reference_number }}</td>
                            </tr>
                            <tr>
                                <td>Archivo Adjunto: </td>
                                <td>
                                    <a target="_blank" class="btn btn-info" href="{{ asset('application/storage/app/'.$payment->attachment) }}"><i class="fa fa-paperclip"></i> Ver Adjunto</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Estatus: </td>
                                <td>
                                    @if($payment->status == 1)
                                        <label class="label label-info">Esperando Aprovaci&oacute;n</label>
                                    @elseif($payment->status == 2)
                                        <label class="label label-success">Aprovado</label>
                                    @else
                                        <label class="label label-danger">Desaprovado</label>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Monto: </td>
                                <td>{{ $payment->amount }}$ Chilenos</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    @if($payment->status == 1)
                                        <a href="{{ route('payments.aproved_payment',['id' => $payment->id]) }}" class="btn btn-success aprovate-payment"><i class="fa fa-thumbs-o-up"></i> Aprovar Pago</a>
                                        <a href="{{ route('payments.deaproved_payment',['id' => $payment->id]) }}" class="btn btn-danger deaprovate-payment"><i class="fa fa-thumbs-o-down"></i> Desaprovar Pago</a>
                                    @endif
                                    <a href="{{ route('payments.index') }}" class="btn btn-info"><i class="fa fa-arrow-left"></i> Volver</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready(function(){

        $("a.aprovate-payment").click(function(){
            if(!confirm("Estas seguro de Aprobar este Pago?")){
                return false;
            }
        });

        $("a.deaprovate-payment").click(function(){
            if(!confirm("Estas seguro de desaprobar este Pago?")){
                return false;
            }
        });

    });
</script>
@stop