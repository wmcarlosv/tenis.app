@extends('adminlte::page')
@section('title', 'Personal')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12-lg">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Personal</h2>
                </div>
                <div class="panel-body">
                    @include('flash::message')
                    <a href="{{ route('staffs.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo Personal</a>
                    <br />
                    <br />
                    <table class="table table-bordered table-striped data-table">
                        <thead>
                            <th>ID</th>
                            <th>Cargo</th>
                            <th>Orden</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Telefono</th>
                            @if(Auth::user()->role == 'administrator')
                                <th>Club</th>
                            @endif
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($staffs as $staff)
                                <tr>
                                    <td>{{ $staff->id }}</td>
                                    <td>{{ $staff->charge }}</td>
                                    <td>{{ $staff->show_order }}</td>
                                    <td>{{ $staff->name }}</td>
                                    <td>{{ $staff->email }}</td>
                                    <td>{{ $staff->phone }}</td>
                                    @if(Auth::user()->role == 'administrator')
                                        <td>{{ $staff->club->name }}</td>
                                    @endif
                                    <td>
                                        <a class="btn btn-info" href="{{ route('staffs.edit',['id' => $staff->id]) }}"><i class="fa fa-pencil"></i> Editar</a>
                                        {!! Form::open(['method' => 'DELETE','style' => 'display:inline','route' => ['staffs.destroy', $staff->id]]) !!}
                                            {!! Form::button('<i class="fa fa-times"></i> Eliminar',['type' => 'submit', 'class' => 'btn btn-danger delete-button']) !!}
                                        {!! Form::close() !!}
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
