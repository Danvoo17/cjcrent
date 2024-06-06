@extends('adminlte::page')

@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    <h4 class="mt-4 text-dark">Cargando</h4>
@stop

@section('title', 'CJC - Admin')

@section('content_header')
    <h1>Seguros</h1>
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Seguro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('seguros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Seguro</th>
										<th>Num Poliza</th>
										<th>Tipo</th>
										<th>Descripcion</th>
										<th>Fecha Inicio</th>
										<th>Fecha Fin</th>
										<th>Costo</th>
										<th>Id Aseg</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($seguros as $seguro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $seguro->id_seguro }}</td>
											<td>{{ $seguro->num_poliza }}</td>
											<td>{{ $seguro->tipo }}</td>
											<td>{{ $seguro->descripcion }}</td>
											<td>{{ $seguro->fecha_inicio }}</td>
											<td>{{ $seguro->fecha_fin }}</td>
											<td>{{ $seguro->costo }}</td>
											<td>{{ $seguro->id_aseg }}</td>

                                            <td>
                                                <form action="{{ route('seguros.destroy',$seguro->id_seguro) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('seguros.show',$seguro->id_seguro) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('seguros.edit',$seguro->id_seguro) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $seguros->links() !!}
            </div>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop