@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column justify-content-between align-items-center h-100">
  <div class="">
    <h1 id='logo'>MOA</h1>
  </div>
    <div class="row justify-content-center w-100">
        <div class="col-md-8">
            <div class="border shadow bg-body rounded p-3 d-flex flex-column align-items-center">
                <div class="fs-1 fw-light text-center mb-2">{{ __('Crear un usuario') }}</div>

                <div class="d-flex flex-column align-items-center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!--Nombre-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>
                        <!--Apellidos-->
                        <div class="form-group row mt-3">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

                            <div class="col-md-8">
                                <input id="surname" type="text" class="form-control " name="surname" value="{{ old('surname') }}"   autofocus>
                            </div>
                        </div>
                        <!--Correo electrónico-->
                        <div class="form-group row mt-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>
                        <!--Fecha de nacimiento-->
                        <div class="form-group row mt-3">
                            <label for="birth" class="col-md-4 col-form-label text-md-right">{{ __('Fecha de nacimiento') }}</label>

                            <div class="col-md-8">
                                <input id="birth" type="date" class="form-control " name="birth"   autofocus>
                            </div>

                        </div>
                        <!--Contraseña-->
                        <div class="form-group row mt-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                        </div>
                        <!--Confirmación de contraseña-->
                        <div class="form-group row mt-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirma contraseña') }}</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-3">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" id="boton_moa" class="btn">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    <p>¿Tienes una cuenta? <a class="link" href="/">Entrar</a></p>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</div>
@endsection
