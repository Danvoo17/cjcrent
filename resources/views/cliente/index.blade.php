@extends('layouts.ogapp')

@section('template_title')
    Cliente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <span id="card_title">
                                {{ __('Cliente') }}
                            </span>
                            <div class="float-right">
                                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Id Cliente</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Fecha Nac</th>
                                        <th>Telefono</th>
                                        <th>Cedula</th>
                                        <th>Licencia</th>
                                        <th>Id User</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($clientes as $cliente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $cliente->id_cliente }}</td>
                                            <td>{{ $cliente->nombre }}</td>
                                            <td>{{ $cliente->apellido }}</td>
                                            <td>{{ $cliente->fecha_nac }}</td>
                                            <td>{{ $cliente->telefono }}</td>
                                            <td>{{ $cliente->cedula }}</td>
                                            <td>{{ $cliente->licencia }}</td>
                                            <td>{{ $cliente->id_user }}</td>
                                            <td>
                                                <form action="{{ route('clientes.destroy', $cliente->id_cliente) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary" href="{{ route('clientes.show', $cliente->id_cliente) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('clientes.edit', $cliente->id_cliente) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@endsection