    <div class="form-group mb-2 mb20">
        <label for="id" class="form-label">{{ __('Id cliente') }}</label>
        <input type="text" name="id" class="form-control @error('id') is-invalid @enderror" value="{{ old('id', $user?->id) }}" id="id" placeholder="Nombre" required>
        {!! $errors->first('id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>
    
    <div class="form-group mb-2 mb20">
        <label for="name" class="form-label">{{ __('Nombre') }}</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user?->name) }}" id="name" placeholder="Nombre" required>
        {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>

    <!-- Email Address -->
    <div class="form-group mb-2 mb20">
        <label for="email" class="form-label">{{ __('Email') }}</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user?->email) }}" id="email" placeholder="Email" required>
        {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>

    <!-- Password -->
    <div class="form-group mb-2 mb20">
        <label for="password" class="form-label">{{ __('Contraseña') }}</label>
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Contraseña" required>
        {!! $errors->first('password', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>

    <!-- Confirm Password -->
    <div class="form-group mb-2 mb20">
        <label for="password_confirmation" class="form-label">{{ __('Confirmar Contraseña') }}</label>
        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Confirmar Contraseña" required>
        {!! $errors->first('password_confirmation', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>

    <!-- Role -->
    <div class="form-group mb-2 mb20">
        <label for="rol" class="form-label">{{ __('Rol') }}</label>
        <select name="rol" class="form-control @error('rol') is-invalid @enderror" id="rol" required>
            <option value="" disabled selected>{{ __('Seleccione un rol') }}</option>
            <option value="admin" {{ old('rol', $user?->rol) == 'admin' ? 'selected' : '' }}>{{ __('admin') }}</option>
            <option value="user" {{ old('rol', $user?->rol) == 'user' ? 'selected' : '' }}>{{ __('user') }}</option>
        </select>
        {!! $errors->first('rol', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
    </div>

    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>