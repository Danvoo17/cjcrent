@extends('adminlte::page')

@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    <h4 class="mt-4 text-dark">Cargando</h4>
@stop

@section('title', 'CJC - Admin')

@section('content_header')
    <h1>Reparaciones</h1>
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
                                <a href="{{ route('reparaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
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
										<th>Descripcion</th>
										<th>Fecha</th>
										<th>Costo</th>
										<th>Id Vehiculo</th>
										<th>Id Emp</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reparaciones as $reparacione)
                                        <tr>
                                            <td><strong>{{ ++$i }}</strong></td>
                                            
											<td>{{ $reparacione->id_reparacion }}</td>
											<td>{{ $reparacione->descripcion }}</td>
											<td>{{ $reparacione->fecha }}</td>
											<td>{{ $reparacione->costo }}</td>
											<td>{{ $reparacione->id_vehiculo }}</td>
											<td>{{ $reparacione->id_emp }}</td>

                                            <td>
                                                <form action="{{ route('reparaciones.destroy',$reparacione->id_reparacion) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('reparaciones.show',$reparacione->id_reparacion) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('reparaciones.edit',$reparacione->id_reparacion) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Ediar') }}</a>
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
                {!! $reparaciones->links() !!}
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