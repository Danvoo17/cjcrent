<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_renta" class="form-label">{{ __('Id Renta') }}</label>
            <input type="text" name="id_renta" class="form-control @error('id_renta') is-invalid @enderror" value="{{ old('id_renta', $renta?->id_renta) }}" id="id_renta" placeholder="Id Renta">
            {!! $errors->first('id_renta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ub_recogida" class="form-label">{{ __('Ub Recogida') }}</label>
            <input type="text" name="ub_recogida" class="form-control @error('ub_recogida') is-invalid @enderror" value="{{ old('ub_recogida', $renta?->ub_recogida) }}" id="ub_recogida" placeholder="Ub Recogida">
            {!! $errors->first('ub_recogida', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ub_devuelta" class="form-label">{{ __('Ub Devuelta') }}</label>
            <input type="text" name="ub_devuelta" class="form-control @error('ub_devuelta') is-invalid @enderror" value="{{ old('ub_devuelta', $renta?->ub_devuelta) }}" id="ub_devuelta" placeholder="Ub Devuelta">
            {!! $errors->first('ub_devuelta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_recogida" class="form-label">{{ __('Fecha Recogida') }}</label>
            <input type="text" name="fecha_recogida" class="form-control @error('fecha_recogida') is-invalid @enderror" value="{{ old('fecha_recogida', $renta?->fecha_recogida) }}" id="fecha_recogida" placeholder="Fecha Recogida">
            {!! $errors->first('fecha_recogida', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hora_recogida" class="form-label">{{ __('Hora Recogida') }}</label>
            <input type="text" name="hora_recogida" class="form-control @error('hora_recogida') is-invalid @enderror" value="{{ old('hora_recogida', $renta?->hora_recogida) }}" id="hora_recogida" placeholder="Hora Recogida">
            {!! $errors->first('hora_recogida', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_devuelta" class="form-label">{{ __('Fecha Devuelta') }}</label>
            <input type="text" name="fecha_devuelta" class="form-control @error('fecha_devuelta') is-invalid @enderror" value="{{ old('fecha_devuelta', $renta?->fecha_devuelta) }}" id="fecha_devuelta" placeholder="Fecha Devuelta">
            {!! $errors->first('fecha_devuelta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="hora_devuelta" class="form-label">{{ __('Hora Devuelta') }}</label>
            <input type="text" name="hora_devuelta" class="form-control @error('hora_devuelta') is-invalid @enderror" value="{{ old('hora_devuelta', $renta?->hora_devuelta) }}" id="hora_devuelta" placeholder="Hora Devuelta">
            {!! $errors->first('hora_devuelta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="costo" class="form-label">{{ __('Costo') }}</label>
            <input type="text" name="costo" class="form-control @error('costo') is-invalid @enderror" value="{{ old('costo', $renta?->costo) }}" id="costo" placeholder="Costo">
            {!! $errors->first('costo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <input type="text" name="estado" class="form-control @error('estado') is-invalid @enderror" value="{{ old('estado', $renta?->estado) }}" id="estado" placeholder="Estado">
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_vehiculo" class="form-label">{{ __('Id Vehiculo') }}</label>
            <input type="text" name="id_vehiculo" class="form-control @error('id_vehiculo') is-invalid @enderror" value="{{ old('id_vehiculo', $renta?->id_vehiculo) }}" id="id_vehiculo" placeholder="Id Vehiculo">
            {!! $errors->first('id_vehiculo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_cliente" class="form-label">{{ __('Id Cliente') }}</label>
            <input type="text" name="id_cliente" class="form-control @error('id_cliente') is-invalid @enderror" value="{{ old('id_cliente', $renta?->id_cliente) }}" id="id_cliente" placeholder="Id Cliente">
            {!! $errors->first('id_cliente', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>