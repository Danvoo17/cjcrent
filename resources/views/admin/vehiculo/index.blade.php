@extends('layouts.ogapp')

@section('template_title')
    Vehiculo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Vehiculo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('vehiculos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Vehiculo</th>
										<th>Matricula</th>
										<th>Precio</th>
										<th>Año</th>
										<th>Color</th>
										<th>Estado</th>
										<th>Pasajeros</th>
										<th>Puertas</th>
										<th>Maletas</th>
										<th>Tipo</th>
										<th>Traccion</th>
										<th>Transmision</th>
										<th>Motor</th>
										<th>Opciones</th>
										<th>Imagen</th>
										<th>Id Modelo</th>
										<th>Id Seguro</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($vehiculos as $vehiculo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $vehiculo->id_vehiculo }}</td>
											<td>{{ $vehiculo->matricula }}</td>
											<td>{{ $vehiculo->precio }}</td>
											<td>{{ $vehiculo->año }}</td>
											<td>{{ $vehiculo->color }}</td>
											<td>{{ $vehiculo->estado }}</td>
											<td>{{ $vehiculo->pasajeros }}</td>
											<td>{{ $vehiculo->puertas }}</td>
											<td>{{ $vehiculo->maletas }}</td>
											<td>{{ $vehiculo->tipo }}</td>
											<td>{{ $vehiculo->traccion }}</td>
											<td>{{ $vehiculo->transmision }}</td>
											<td>{{ $vehiculo->motor }}</td>
											<td>{{ $vehiculo->opciones }}</td>
											<td>{{ $vehiculo->imagen }}</td>
											<td>{{ $vehiculo->id_modelo }}</td>
											<td>{{ $vehiculo->id_seguro }}</td>

                                            <td>
                                                <form action="{{ route('vehiculos.destroy',$vehiculo->id_vehiculo) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('vehiculos.show',$vehiculo->id_vehiculo) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('vehiculos.edit',$vehiculo->id_vehiculo) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $vehiculos->links() !!}
            </div>
        </div>
    </div>
@endsection
