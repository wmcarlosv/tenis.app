@extends('adminlte::page')
@section('title', 'Nuevo Personal')
@section('content_header')
    <h1>Personal</h1>
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
                    <h2>Nuevo Personal</h2>
                </div>
                <div class="panel-body">
                    {!! Form::open(['route' => 'staffs.store','autocomplete' => 'off']) !!}
                        @if(Auth::user()->role == 'club_manager')
                            {!! Form::hidden('club_id',Auth::user()->club_id) !!} 
                        @else
                            <div class="form-group">
                                {!! Form::label('club_id', 'Club: ') !!}
                                {!! Form::select('club_id',$clubes,null,['class' => 'form-control', 'id' => 'club_id']) !!}
                            </div>
                        @endif

                        <div class="form-group">
                            {!! Form::label('charge', 'Cargo: ') !!}
                            {!! Form::text('charge',null,['class' => 'form-control', 'id' => 'charge']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('show_order', 'Orden: ') !!}
                            {!! Form::text('show_order',null,['class' => 'form-control', 'id' => 'show_order']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('name', 'Nombre: ') !!}
                            {!! Form::text('name',null,['class' => 'form-control', 'id' => 'name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Email: ') !!}
                            {!! Form::text('email',null,['class' => 'form-control', 'id' => 'email']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('phone', 'Telefono: ') !!}
                            {!! Form::text('phone',null,['class' => 'form-control', 'id' => 'phone']) !!}
                        </div>
                        {!! Form::button('<i class="fa fa-floppy-o"></i> Guardar',['type' => 'submit', 'class' => 'btn btn-success']) !!}
                        <a href="{{ route('staffs.index') }}" class="btn btn-danger"><i class="fa fa-times"></i> Cancelar</a>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
