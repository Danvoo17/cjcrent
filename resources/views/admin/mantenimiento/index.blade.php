@extends('layouts.ogapp')

@section('template_title')
    Mantenimiento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Mantenimiento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('mantenimiento.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Mantenimiento</th>
										<th>Tipo</th>
										<th>Descripcion</th>
										<th>Fecha</th>
										<th>Costo</th>
										<th>Id Vehiculo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mantenimientos as $mantenimiento)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $mantenimiento->id_mantenimiento }}</td>
											<td>{{ $mantenimiento->tipo }}</td>
											<td>{{ $mantenimiento->descripcion }}</td>
											<td>{{ $mantenimiento->fecha }}</td>
											<td>{{ $mantenimiento->costo }}</td>
											<td>{{ $mantenimiento->id_vehiculo }}</td>

                                            <td>
                                                <form action="{{ route('mantenimiento.destroy',$mantenimiento->id_mantenimiento) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('mantenimiento.show',$mantenimiento->id_mantenimiento) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('mantenimiento.edit',$mantenimiento->id_mantenimiento) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $mantenimientos->links() !!}
            </div>
        </div>
    </div>
@endsection
