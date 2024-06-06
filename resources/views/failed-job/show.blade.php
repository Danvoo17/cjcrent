@extends('layouts.app')

@section('template_title')
    {{ $failedJob->name ?? __('Show') . " " . __('Failed Job') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Failed Job</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('failed-jobs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Uuid:</strong>
                            {{ $failedJob->uuid }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Connection:</strong>
                            {{ $failedJob->connection }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Queue:</strong>
                            {{ $failedJob->queue }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Payload:</strong>
                            {{ $failedJob->payload }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Exception:</strong>
                            {{ $failedJob->exception }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Failed At:</strong>
                            {{ $failedJob->failed_at }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
