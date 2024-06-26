@extends('adminlte::page')

@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    <h4 class="mt-4 text-dark">Cargando</h4>
@stop

@section('title', 'CJC - Admin')

@section('content_header')
    <h1>Renta</h1>
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('rentas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear new') }}
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
                                        
										<th>Id</th>
										<th>Ub Recogida</th>
										<th>Ub Devuelta</th>
										<th>Fecha Recogida</th>
										<th>Hora Recogida</th>
										<th>Fecha Devuelta</th>
										<th>Hora Devuelta</th>
										<th>Costo</th>
										<th>Estado</th>
										<th>Id Vehiculo</th>
										<th>Id Cliente</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rentas as $renta)
                                        <tr>
                                            <td><strong>{{ ++$i }}</strong></td>
                                            
											<td>{{ $renta->id_renta }}</td>
											<td>{{ $renta->ub_recogida }}</td>
											<td>{{ $renta->ub_devuelta }}</td>
											<td>{{ $renta->fecha_recogida }}</td>
											<td>{{ $renta->hora_recogida }}</td>
											<td>{{ $renta->fecha_devuelta }}</td>
											<td>{{ $renta->hora_devuelta }}</td>
											<td>{{ $renta->costo }}</td>
											<td>{{ $renta->estado }}</td>
											<td>{{ $renta->id_vehiculo }}</td>
											<td>{{ $renta->id_cliente }}</td>

                                            <td>
                                                <form action="{{ route('rentas.destroy',$renta->id_renta) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('rentas.show',$renta->id_renta) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('rentas.edit',$renta->id_renta) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $rentas->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    
@stop