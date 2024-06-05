<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id_vehiculo" class="form-label">{{ __('Id Vehiculo') }}</label>
            <input type="text" name="id_vehiculo" class="form-control @error('id_vehiculo') is-invalid @enderror" value="{{ old('id_vehiculo', $vehiculo?->id_vehiculo) }}" id="id_vehiculo" placeholder="Id Vehiculo">
            {!! $errors->first('id_vehiculo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="matricula" class="form-label">{{ __('Matricula') }}</label>
            <input type="text" name="matricula" class="form-control @error('matricula') is-invalid @enderror" value="{{ old('matricula', $vehiculo?->matricula) }}" id="matricula" placeholder="Matricula">
            {!! $errors->first('matricula', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio" class="form-label">{{ __('Precio') }}</label>
            <input type="text" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $vehiculo?->precio) }}" id="precio" placeholder="Precio">
            {!! $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="año" class="form-label">{{ __('Año') }}</label>
            <input type="text" name="año" class="form-control @error('año') is-invalid @enderror" value="{{ old('año', $vehiculo?->año) }}" id="año" placeholder="Año">
            {!! $errors->first('año', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="color" class="form-label">{{ __('Color') }}</label>
            <input type="text" name="color" class="form-control @error('color') is-invalid @enderror" value="{{ old('color', $vehiculo?->color) }}" id="color" placeholder="Color">
            {!! $errors->first('color', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <select name="estado" class="form-control @error('estado') is-invalid @enderror" id="estado">
                <option value="" disabled selected>{{ __('Seleccione un estado') }}</option>
                <option value="disponible" {{ old('estado', $vehiculo?->estado) == 'disponible' ? 'selected' : '' }}>{{ __('disponible') }}</option>
                <option value="ocupado" {{ old('estado', $vehiculo?->estado) == 'ocupado' ? 'selected' : '' }}>{{ __('ocupado') }}</option>
            </select>
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pasajeros" class="form-label">{{ __('Pasajeros') }}</label>
            <input type="text" name="pasajeros" class="form-control @error('pasajeros') is-invalid @enderror" value="{{ old('pasajeros', $vehiculo?->pasajeros) }}" id="pasajeros" placeholder="Pasajeros">
            {!! $errors->first('pasajeros', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="puertas" class="form-label">{{ __('Puertas') }}</label>
            <input type="text" name="puertas" class="form-control @error('puertas') is-invalid @enderror" value="{{ old('puertas', $vehiculo?->puertas) }}" id="puertas" placeholder="Puertas">
            {!! $errors->first('puertas', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="maletas" class="form-label">{{ __('Maletas') }}</label>
            <input type="text" name="maletas" class="form-control @error('maletas') is-invalid @enderror" value="{{ old('maletas', $vehiculo?->maletas) }}" id="maletas" placeholder="Maletas">
            {!! $errors->first('maletas', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tipo" class="form-label">{{ __('Tipo') }}</label>
            <select name="tipo" class="form-control @error('tipo') is-invalid @enderror" id="tipo">
                <option value="" disabled selected>{{ __('Seleccione un tipo de vehiculo') }}</option>
                <option value="sedan" {{ old('tipo', $vehiculo?->tipo) == 'sedan' ? 'selected' : '' }}>{{ __('sedan') }}</option>
                <option value="SUV" {{ old('tipo', $vehiculo?->tipo) == 'SUV' ? 'selected' : '' }}>{{ __('SUV') }}</option>
                <option value="compacto" {{ old('tipo', $vehiculo?->tipo) == 'compacto' ? 'selected' : '' }}>{{ __('compacto') }}</option>
                <option value="hatchback" {{ old('tipo', $vehiculo?->tipo) == 'hatchback' ? 'selected' : '' }}>{{ __('hatchback') }}</option>
                <option value="coupe" {{ old('tipo', $vehiculo?->tipo) == 'coupe' ? 'selected' : '' }}>{{ __('coupe') }}</option>
                <option value="deportivo" {{ old('tipo', $vehiculo?->tipo) == 'deportivo' ? 'selected' : '' }}>{{ __('deportivo') }}</option>
                <option value="convertible" {{ old('tipo', $vehiculo?->tipo) == 'convertible' ? 'selected' : '' }}>{{ __('convertible') }}</option>
            </select>
            {!! $errors->first('tipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="traccion" class="form-label">{{ __('Traccion') }}</label>
            <select name="traccion" class="form-control @error('traccion') is-invalid @enderror" id="traccion">
                <option value="" disabled selected>{{ __('Seleccione una traccion') }}</option>
                <option value="AWD" {{ old('traccion', $vehiculo?->traccion) == 'AWD' ? 'selected' : '' }}>{{ __('AWD') }}</option>
                <option value="FWD" {{ old('traccion', $vehiculo?->traccion) == 'FWD' ? 'selected' : '' }}>{{ __('FWD') }}</option>
                <option value="RWD" {{ old('traccion', $vehiculo?->traccion) == 'RWD' ? 'selected' : '' }}>{{ __('RWD') }}</option>
                <option value="4X4" {{ old('traccion', $vehiculo?->traccion) == '4X4' ? 'selected' : '' }}>{{ __('4X4') }}</option>
                <option value="4WD" {{ old('traccion', $vehiculo?->traccion) == '4WD' ? 'selected' : '' }}>{{ __('4WD') }}</option>
            </select>
            {!! $errors->first('traccion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="transmision" class="form-label">{{ __('Transmision') }}</label>
            <select name="transmision" class="form-control @error('transmision') is-invalid @enderror" id="transmision">
                <option value="" disabled selected>{{ __('Seleccione un transmision') }}</option>
                <option value="A" {{ old('transmision', $vehiculo?->transmision) == 'A' ? 'selected' : '' }}>{{ __('A') }}</option>
                <option value="MT" {{ old('transmision', $vehiculo?->transmision) == 'MT' ? 'selected' : '' }}>{{ __('MT') }}</option>
                <option value="DCT" {{ old('transmision', $vehiculo?->transmision) == 'DCT' ? 'selected' : '' }}>{{ __('DCT') }}</option>
                <option value="CVT" {{ old('transmision', $vehiculo?->transmision) == 'CVT' ? 'selected' : '' }}>{{ __('CVT') }}</option>
                <option value="SMT" {{ old('transmision', $vehiculo?->transmision) == 'SMT' ? 'selected' : '' }}>{{ __('SMT') }}</option>
            </select>
            {!! $errors->first('transmision', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="motor" class="form-label">{{ __('Motor') }}</label>
            <input type="text" name="motor" class="form-control @error('motor') is-invalid @enderror" value="{{ old('motor', $vehiculo?->motor) }}" id="motor" placeholder="Motor">
            {!! $errors->first('motor', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="opciones" class="form-label">{{ __('Opciones') }}</label>
            <input type="text" name="opciones" class="form-control @error('opciones') is-invalid @enderror" value="{{ old('opciones', $vehiculo?->opciones) }}" id="opciones" placeholder="Opciones">
            {!! $errors->first('opciones', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="imagen" class="form-label">{{ __('Imagen') }}</label>
            <input type="text" name="imagen" class="form-control @error('imagen') is-invalid @enderror" value="{{ old('imagen', $vehiculo?->imagen) }}" id="imagen" placeholder="Imagen">
            {!! $errors->first('imagen', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_modelo" class="form-label">{{ __('Id Modelo') }}</label>
            <input type="text" name="id_modelo" class="form-control @error('id_modelo') is-invalid @enderror" value="{{ old('id_modelo', $vehiculo?->id_modelo) }}" id="id_modelo" placeholder="Id Modelo">
            {!! $errors->first('id_modelo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_seguro" class="form-label">{{ __('Id Seguro') }}</label>
            <input type="text" name="id_seguro" class="form-control @error('id_seguro') is-invalid @enderror" value="{{ old('id_seguro', $vehiculo?->id_seguro) }}" id="id_seguro" placeholder="Id Seguro">
            {!! $errors->first('id_seguro', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>