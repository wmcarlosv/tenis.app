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
                            <th>Jugador</th>
                            <th>Metodo de Pago</th>
                            <th>Monto</th>
                            <th>Fecha de Pago</th>
                            <th>Estatus</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($payments as $payment)
                                <tr>
                                    <td>{{ $payment->id }}</td>
                                    <td>{{ $payment->product->name }}</td>
                                    <td>{{ $payment->user->email }}</td>
                                    <td>{{ $payment->payment_method->name }}</td>
                                    <td>{{ $payment->amount }}</td>
                                    <td>{{ date('d/m/Y',strtotime($payment->payment_date)) }}</td>
                                    <td>
                                        @if($payment->status == 1)
                                            <label class="label label-info">Esperando Aprovaci&oacute;n</label>
                                        @elseif($payment->status == 2)
                                            <label class="label label-success">Aprovado</label>
                                        @else
                                            <label class="label label-danger">Desaprobado</label>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('payments.show',['id' => $payment->id]) }}"><i class="fa fa-eye"></i> Ver</a>
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
