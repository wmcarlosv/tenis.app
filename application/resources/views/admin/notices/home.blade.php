@extends('adminlte::page')
@section('title', 'Noticias')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12-lg">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Noticias</h2>
                </div>
                <div class="panel-body">
                    @include('flash::message')
                    <a href="{{ route('notices.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Nueva Noticia</a>
                    <br />
                    <br />
                    <table class="table table-bordered table-striped data-table">
                        <thead>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Usuario Creador</th>
                            <th>Categoria</th>
                            <th>Estatus</th>
                            <th>Fecha Publicaci&oacute;n</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($notices as $notice)
                                <tr>
                                    <td>{{ $notice->id }}</td>
                                    <td>{{ $notice->title }}</td>
                                    <td>{{ $notice->user->name }}</td>
                                    <td>{{ $notice->notice_category->name }}</td>
                                    <td>{{ $notice->status }}</td>
                                    <td>{{ $notice->publisher_date }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('notices.edit',['id' => $notice->id]) }}"><i class="fa fa-pencil"></i> Editar</a>
                                        {!! Form::open(['method' => 'DELETE','style' => 'display:inline','route' => ['notices.destroy', $notice->id]]) !!}
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
