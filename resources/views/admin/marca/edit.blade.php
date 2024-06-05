@extends('layouts.ogapp')

@section('template_title')
    {{ __('Update') }} Marca
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Marca</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('marcas.update', $marca->id_marca) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.marca.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
