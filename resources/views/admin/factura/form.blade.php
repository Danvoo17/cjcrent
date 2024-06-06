<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="cod_factura" class="form-label">{{ __('Cod Factura') }}</label>
            <input type="text" name="cod_factura" class="form-control @error('cod_factura') is-invalid @enderror" value="{{ old('cod_factura', $factura?->cod_factura) }}" id="cod_factura" placeholder="Cod Factura">
            {!! $errors->first('cod_factura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="metodo_pago" class="form-label">{{ __('Metodo Pago') }}</label>
            <input type="text" name="metodo_pago" class="form-control @error('metodo_pago') is-invalid @enderror" value="{{ old('metodo_pago', $factura?->metodo_pago) }}" id="metodo_pago" placeholder="Metodo Pago">
            {!! $errors->first('metodo_pago', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="datetime-local" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $factura?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $factura?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="itbis" class="form-label">{{ __('Itbis') }}</label>
            <input type="text" name="itbis" class="form-control @error('itbis') is-invalid @enderror" value="{{ old('itbis', $factura?->itbis) }}" id="itbis" placeholder="Itbis">
            {!! $errors->first('itbis', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="descuentos" class="form-label">{{ __('Descuentos') }}</label>
            <input type="text" name="descuentos" class="form-control @error('descuentos') is-invalid @enderror" value="{{ old('descuentos', $factura?->descuentos) }}" id="descuentos" placeholder="Descuentos">
            {!! $errors->first('descuentos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="monto_total" class="form-label">{{ __('Monto Total') }}</label>
            <input type="text" name="monto_total" class="form-control @error('monto_total') is-invalid @enderror" value="{{ old('monto_total', $factura?->monto_total) }}" id="monto_total" placeholder="Monto Total">
            {!! $errors->first('monto_total', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="id_renta" class="form-label">{{ __('Id Renta') }}</label>
            <input type="text" name="id_renta" class="form-control @error('id_renta') is-invalid @enderror" value="{{ old('id_renta', $factura?->id_renta) }}" id="id_renta" placeholder="Id Renta">
            {!! $errors->first('id_renta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>