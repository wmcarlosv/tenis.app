@extends('adminlte::page')
@section('title', 'Campeonatos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12-lg">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Campeonatos</h2>
                </div>
                <div class="panel-body">
                    @include('flash::message')
                    <a href="{{ route('championships.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo Campeonato</a>
                    <br />
                    <br />
                    <table class="table table-bordered table-striped data-table">
                        <thead>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Descripci&oacute;n</th>
                            <th>Cover</th>
                            <th>Fecha desde</th>
                            <th>Fecha Hasta</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($championships as $championship)
                                <tr>
                                    <td>{{ $championship->id }}</td>
                                    <td>{{ $championship->title }}</td>
                                    <td>{{ $championship->description }}</td>
                                    <td>{{ $championship->cover }}</td>
                                    <td>{{ $championship->datefrom }}</td>
                                    <td>{{ $championship->dateto }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('championships.edit',['id' => $championship->id]) }}"><i class="fa fa-pencil"></i> Editar</a>
                                        {!! Form::open(['method' => 'DELETE','style' => 'display:inline','route' => ['championships.destroy', $championship->id]]) !!}
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
