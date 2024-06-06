@extends('adminlte::page')

@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    <h4 class="mt-4 text-dark">Cargando</h4>
@stop

@section('title', 'CJC - Admin')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">

                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('empleados.index') }}"> {{ __('Atras') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Id Emp:</strong>
                            {{ $empleado->id_emp }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $empleado->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Apellido:</strong>
                            {{ $empleado->apellido }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Telefono:</strong>
                            {{ $empleado->telefono }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Cedula:</strong>
                            {{ $empleado->cedula }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Email:</strong>
                            {{ $empleado->email }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Direccion:</strong>
                            {{ $empleado->direccion }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Saldo:</strong>
                            {{ $empleado->saldo }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id Cargo:</strong>
                            {{ $empleado->id_cargo }}
                            ({{ $empleado->cargo->nombre }})
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Id User:</strong>
                            {{ $empleado->id_user }}
                            ({{ $empleado->user->name }})
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Creado:</strong>
                            {{ $empleado->created_at }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Actualizado:</strong>
                            {{ $empleado->updated_at }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop