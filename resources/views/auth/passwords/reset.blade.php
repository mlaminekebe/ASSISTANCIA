@extends('auth.template')
@section('titre')
REINTIALISATION VOTRE MOT DE PASSE
@endsection
@section('content')
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-outline mb-4">
                            <label for="email" class="col-form-label text-md-end text-white">{{ __('Email Address') }}</label>

                            <div >
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <label for="password" class="col-form-label text-md-end text-white">{{ __('Password') }}</label>

                            <div class="]">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <label for="password-confirm" class=" col-form-label text-md-end text-white">{{ __('Confirm Password') }}</label>

                            <div >
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>

@endsection
