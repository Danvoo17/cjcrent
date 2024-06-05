@extends('layouts.ogapp')

@section('template_title')
    Aseguradora
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Aseguradora') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('aseguradoras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Aseg</th>
										<th>Nombre</th>
										<th>Telefono</th>
										<th>Email</th>
										<th>Direccion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($aseguradoras as $aseguradora)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $aseguradora->id_aseg }}</td>
											<td>{{ $aseguradora->nombre }}</td>
											<td>{{ $aseguradora->telefono }}</td>
											<td>{{ $aseguradora->email }}</td>
											<td>{{ $aseguradora->direccion }}</td>

                                            <td>
                                                <form action="{{ route('aseguradoras.destroy',$aseguradora->id_aseg) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('aseguradoras.show',$aseguradora->id_aseg) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('aseguradoras.edit',$aseguradora->id_aseg) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $aseguradoras->links() !!}
            </div>
        </div>
    </div>
@endsection
