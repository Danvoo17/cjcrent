@extends('layouts.ogapp')

@section('template_title')
    {{ __('Update') }} Mantenimiento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Mantenimiento</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('mantenimiento.update', $mantenimiento->id_mantenimiento) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.mantenimiento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
