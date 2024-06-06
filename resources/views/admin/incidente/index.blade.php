@extends('layouts.ogapp')

@section('template_title')
    Incidente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Incidente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('incidentes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Incidente</th>
										<th>Descripcion</th>
										<th>Fecha</th>
										<th>Hora</th>
										<th>Id Vehiculo</th>
										<th>Id Cliente</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($incidentes as $incidente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $incidente->id_incidente }}</td>
											<td>{{ $incidente->descripcion }}</td>
											<td>{{ $incidente->fecha }}</td>
											<td>{{ $incidente->hora }}</td>
											<td>{{ $incidente->id_vehiculo }}</td>
											<td>{{ $incidente->id_cliente }}</td>

                                            <td>
                                                <form action="{{ route('incidentes.destroy',$incidente->id_incidente) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('incidentes.show',$incidente->id_incidente) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('incidentes.edit',$incidente->id_incidente) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $incidentes->links() !!}
            </div>
        </div>
    </div>
@endsection
