@extends('layouts.ogapp')

@section('template_title')
    Modelo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Modelo') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('modelos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Modelo</th>
										<th>Nombre</th>
										<th>Trim</th>
										<th>Id Marca</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($modelos as $modelo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $modelo->id_modelo }}</td>
											<td>{{ $modelo->nombre }}</td>
											<td>{{ $modelo->trim }}</td>
											<td>{{ $modelo->id_marca }}</td>

                                            <td>
                                                <form action="{{ route('modelos.destroy',$modelo->id_modelo) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('modelos.show',$modelo->id_modelo) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('modelos.edit',$modelo->id_modelo) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $modelos->links() !!}
            </div>
        </div>
    </div>
@endsection
