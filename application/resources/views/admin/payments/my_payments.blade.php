@extends('adminlte::page')
@section('title', 'Pagos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12-lg">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Pagos</h2>
                </div>
                <div class="panel-body">
                    @include('flash::message')
                    <table class="table table-bordered table-striped data-table">
                        <thead>
                            <th>ID</th>
                            <th>Producto</th>
                            <th>Metodo de Pago</th>
                            <th>Referencia</th>
                            <th>Adjunto</th>
                            <th>Monto</th>
                            <th>Fecha de Pago</th>
                            <th>Estatus</th>
                        </thead>
                        <tbody>
                            @foreach($payments as $payment)
                                <tr>
                                    <td>{{ $payment->id }}</td>
                                    <td>{{ $payment->product->name }}</td>
                                    <td>{{ $payment->payment_method->name }}</td>
                                    <td>{{ $payment->reference_number }}</td>
                                    <td><a href="{{ asset('application/storage/app/'.$payment->attachment) }}" target="_blank" class="btn btn-success"><i class="fa fa-paperclip"></i> Ver Adjunto</a></td>
                                    <td>{{ $payment->amount }}$ Chilenos</td>
                                    <td>{{ date('d/m/Y H:m:s',strtotime($payment->payment_date)) }}</td>
                                    <td>
                                        @if($payment->status == 1)
                                            <label class="label label-info">Esperando Aprovaci&oacute;n</label>
                                        @elseif($payment->status == 2)
                                            <label class="label label-success">Aprovado</label>
                                        @else
                                            <label class="label label-danger">Desaprobado</label>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
