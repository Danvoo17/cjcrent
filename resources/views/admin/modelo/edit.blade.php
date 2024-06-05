@extends('layouts.ogapp')

@section('template_title')
    {{ __('Update') }} Modelo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <a class="btn btn-primary btn-sm" href="{{ route('cargos.index') }}"> {{ __('Atras') }}</a>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('modelos.update', $modelo->id_modelo) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.modelo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
