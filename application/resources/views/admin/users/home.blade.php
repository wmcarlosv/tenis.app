@extends('adminlte::page')
@section('title', 'Usuarios')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12-lg">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Usuarios</h2>
                </div>
                <div class="panel-body">
                    @include('flash::message')
                    <a href="{{ route('users.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Nuevo user</a>
                    <br />
                    <br />
                    <table class="table table-bordered table-striped data-table">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Region</th>
                            <th>Ciudad</th>
                            <th>Equipo</th>
                            <th>Categoria</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>{{ $user->city->region->name }}</td>
                                    <td>{{ $user->city->name }}</td>
                                    <td>
                                        @if(isset($user->club->name) and !empty($user->club->name))
                                            {{ $user->club->name }}
                                        @else
                                            Sin Equipo
                                        @endif
                                    </td>
                                    <td>{{ $user->player_category->name }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('users.show',['id' => $user->id]) }}"><i class="fa fa-eye"></i> Ver Usuario</a>

                                        <!--{!! Form::open(['method' => 'DELETE','style' => 'display:inline','route' => ['users.destroy', $user->id]]) !!}
                                            {!! Form::button('<i class="fa fa-times"></i> Eliminar',['type' => 'submit', 'class' => 'btn btn-danger delete-button']) !!}
                                        {!! Form::close() !!}-->
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
