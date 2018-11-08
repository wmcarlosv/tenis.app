@extends('adminlte::page')
@section('title', 'Categorias de Noticias')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12-lg">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Categorias de Noticias</h2>
                </div>
                <div class="panel-body">
                    @include('flash::message')
                    <a href="{{ route('notice_categories.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Nueva Categoria de Noticias</a>
                    <br />
                    <br />
                    <table class="table table-bordered table-striped data-table">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Categoria Padre</th>
                            <th>Slug</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($notice_categories as $notice_category)
                                <tr>
                                    <td>{{ $notice_category->id }}</td>
                                    <td>{{ $notice_category->name }}</td>
                                    <td>{{ $notice_category->NoticeCategory['name'] }}</td>
                                    <td>{{ $notice_category->slug }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('notice_categories.edit',['id' => $notice_category->id]) }}"><i class="fa fa-pencil"></i> Editar</a>
                                        {!! Form::open(['method' => 'DELETE','style' => 'display:inline','route' => ['notice_categories.destroy', $notice_category->id]]) !!}
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
