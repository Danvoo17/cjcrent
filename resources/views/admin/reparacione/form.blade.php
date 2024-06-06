<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_reparacion" class="form-label">{{ __('Id Reparacion') }}</label>
            <input type="text" name="id_reparacion" class="form-control @error('id_reparacion') is-invalid @enderror" value="{{ old('id_reparacion', $reparacione?->id_reparacion) }}" id="id_reparacion" placeholder="Id Reparacion">
            {!! $errors->first('id_reparacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $reparacione?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $reparacione?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="costo" class="form-label">{{ __('Costo') }}</label>
            <input type="text" name="costo" class="form-control @error('costo') is-invalid @enderror" value="{{ old('costo', $reparacione?->costo) }}" id="costo" placeholder="Costo">
            {!! $errors->first('costo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_vehiculo" class="form-label">{{ __('Id Vehiculo') }}</label>
            <input type="text" name="id_vehiculo" class="form-control @error('id_vehiculo') is-invalid @enderror" value="{{ old('id_vehiculo', $reparacione?->id_vehiculo) }}" id="id_vehiculo" placeholder="Id Vehiculo">
            {!! $errors->first('id_vehiculo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_emp" class="form-label">{{ __('Id Emp') }}</label>
            <input type="text" name="id_emp" class="form-control @error('id_emp') is-invalid @enderror" value="{{ old('id_emp', $reparacione?->id_emp) }}" id="id_emp" placeholder="Id Emp">
            {!! $errors->first('id_emp', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>