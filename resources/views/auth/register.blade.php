@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nombre mascota') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nick"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nick mascota') }}</label>

                                <div class="col-md-6">
                                    <input id="nick" type="nick"
                                        class="form-control @error('nick') is-invalid @enderror" name="nick"
                                        value="{{ old('nick') }}" required autocomplete="nick">

                                    @error('nick')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--Div for edad-->
                            <div class="row mb-3">
                                <label for="edad"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Edad') }}</label>

                                <div class="col-md-6">
                                    <input id="edad" type="edad"
                                        class="form-control @error('edad') is-invalid @enderror" name="edad"
                                        value="{{ old('edad') }}" required autocomplete="edad">

                                    @error('edad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!--nombre humano-->
                            <div class="row mb-3">
                                <label for="name_humano"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nombre humano') }}</label>

                                <div class="col-md-6">
                                    <input id="name_humano" type="name_humano"
                                        class="form-control @error('name_humano') is-invalid @enderror" name="name_humano"
                                        value="{{ old('name_humano') }}" required autocomplete="name_humano">

                                    @error('name_humano')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--phone-->
                            <div class="row mb-3">
                                <label for="phone"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Telefono') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="phone"
                                        class="form-control @error('phone') is-invalid @enderror" name="phone"
                                        value="{{ old('phone') }}" required autocomplete="phone">

                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--race select options (Boxer, Bulldog, Labrador or Caniche)-->
                            <div class="row mb-3">
                                <label for="race"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Raza perro') }}</label>

                                <div class="col-md-6">
                                    <select id="race" type="race"
                                        class="form-control @error('race') is-invalid @enderror" name="race"
                                        value="{{ old('race') }}" required autocomplete="race">
                                        <option value="Boxer">Boxer</option>
                                        <option value="Bulldog">Bulldog</option>
                                        <option value="Labrador">Labrador</option>
                                        <option value="Caniche">Caniche</option>
                                    </select>

                                    @error('race')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--generos select options (Macho o Hembra)-->
                            <div class="row mb-3">
                                <label for="sex"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Raza perro') }}</label>

                                <div class="col-md-6">
                                    <select id="sex" type="sex"
                                        class="form-control @error('sex') is-invalid @enderror" name="sex"
                                        value="{{ old('sex') }}" required autocomplete="sex">
                                        <option value="Macho">Macho</option>
                                        <option value="Hembra">Hembra</option>
                                    </select>

                                    @error('sex')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('profile_picture') ? ' has-error' : '' }}">
                                <label for="profile_picture" class="col-md-4 control-label">Profile Picture</label>
                                <input id="profile_picture" type="file" class="form-control" name="profile_picture">

                                @if ($errors->has('profile_picture'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profile_picture') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
