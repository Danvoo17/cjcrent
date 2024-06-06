@extends('layouts.ogapp')

@section('template_title')
    {{ __('Update') }} Renta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Renta</span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('rentas.update', $renta->id_renta) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('admin.renta.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
