<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="uuid" class="form-label">{{ __('Uuid') }}</label>
            <input type="text" name="uuid" class="form-control @error('uuid') is-invalid @enderror" value="{{ old('uuid', $failedJob?->uuid) }}" id="uuid" placeholder="Uuid">
            {!! $errors->first('uuid', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="connection" class="form-label">{{ __('Connection') }}</label>
            <input type="text" name="connection" class="form-control @error('connection') is-invalid @enderror" value="{{ old('connection', $failedJob?->connection) }}" id="connection" placeholder="Connection">
            {!! $errors->first('connection', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="queue" class="form-label">{{ __('Queue') }}</label>
            <input type="text" name="queue" class="form-control @error('queue') is-invalid @enderror" value="{{ old('queue', $failedJob?->queue) }}" id="queue" placeholder="Queue">
            {!! $errors->first('queue', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="payload" class="form-label">{{ __('Payload') }}</label>
            <input type="text" name="payload" class="form-control @error('payload') is-invalid @enderror" value="{{ old('payload', $failedJob?->payload) }}" id="payload" placeholder="Payload">
            {!! $errors->first('payload', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="exception" class="form-label">{{ __('Exception') }}</label>
            <input type="text" name="exception" class="form-control @error('exception') is-invalid @enderror" value="{{ old('exception', $failedJob?->exception) }}" id="exception" placeholder="Exception">
            {!! $errors->first('exception', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="failed_at" class="form-label">{{ __('Failed At') }}</label>
            <input type="text" name="failed_at" class="form-control @error('failed_at') is-invalid @enderror" value="{{ old('failed_at', $failedJob?->failed_at) }}" id="failed_at" placeholder="Failed At">
            {!! $errors->first('failed_at', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>