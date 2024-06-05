@extends('layouts.ogapp')

@section('template_title')
    {{ __('Update') }} Factura
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Factura</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('facturas.update', $factura->cod_factura) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.factura.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
