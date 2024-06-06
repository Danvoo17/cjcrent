@extends('layouts.ogapp')

@section('template_title')
    {{ __('Create') }} Mantenimiento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Mantenimiento</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('mantenimiento.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('admin.mantenimiento.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
