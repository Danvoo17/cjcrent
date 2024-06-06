@extends('adminlte::page')

@section('preloader')
    <i class="fas fa-4x fa-spin fa-spinner text-secondary"></i>
    <h4 class="mt-4 text-dark">Cargando</h4>
@stop

@section('title', 'CJC - Admin')

@section('content_header')
    <h1>Factura</h1>
@stop

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Factura') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('facturas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Cod Factura</th>
										<th>Metodo Pago</th>
										<th>Fecha</th>
										<th>Descripcion</th>
										<th>Itbis</th>
										<th>Descuentos</th>
										<th>Monto Total</th>
										<th>Id Renta</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($facturas as $factura)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $factura->cod_factura }}</td>
											<td>{{ $factura->metodo_pago }}</td>
											<td>{{ $factura->fecha }}</td>
											<td>{{ $factura->descripcion }}</td>
											<td>{{ $factura->itbis }}</td>
											<td>{{ $factura->descuentos }}</td>
											<td>{{ $factura->monto_total }}</td>
											<td>{{ $factura->id_renta }}</td>

                                            <td>
                                                <form action="{{ route('facturas.destroy',$factura->cod_factura) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('facturas.show',$factura->cod_factura) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('facturas.edit',$factura->cod_factura) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $facturas->links() !!}
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