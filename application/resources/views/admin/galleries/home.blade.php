@extends('adminlte::page')
@section('title', 'Galeria')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12-lg">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Galeria</h2>
                </div>
                <div class="panel-body">
                    @include('flash::message')
                    <a href="{{ route('galleries.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Nueva Foto</a>
                    <br />
                    <br />
                    <table class="table table-bordered table-striped data-table">
                        <thead>
                            <th>ID</th>
                            <th>Titulo</th>
                            <th>Descripci&oacute;n</th>
                            <th>Foto</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($galleries as $gallery)
                                <tr>
                                    <td>{{ $gallery->id }}</td>
                                    <td>{{ $gallery->title }}</td>
                                    <td>{{ $gallery->description }}</td>
                                    <td>
                                        @if($gallery->photo)
                                            <img src="{{ asset('application/storage/app/'.$gallery->photo) }}" class="img-thumbnail" width="200" height="250">
                                        @else
                                            <center>Sin Foto</center>
                                        @endif
                                    </td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('galleries.edit',['id' => $gallery->id]) }}"><i class="fa fa-pencil"></i> Editar</a>
                                        {!! Form::open(['method' => 'DELETE','style' => 'display:inline','route' => ['galleries.destroy', $gallery->id]]) !!}
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
