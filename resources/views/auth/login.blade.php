@extends('auth.template')
@section('titre')
CONNEXION
@endsection
@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf

        <div class="form-outline mb-1">
            <label for="email" class=" col-form-label text-md-end text-white">{{ __('email') }}</label>

            <div >
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-outline mb-1">
            <label for="password" class="col-form-label text-md-end text-white">{{ __('mot de passe') }}</label>

            <div >
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-check form-switch d-flex align-items-center mb-1">
            <input class="form-check-input" type="checkbox" id="rememberMe">
            <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
        </div>
        <div class="text-center">
            <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">CONNECTER</button>
        </div>

        <p class="mt-4 text-sm text-center">
            @if (Route::has('password.request'))
                    {{--  --}}
                    mot de passe oublie
            <a href="{{ route('password.request') }}" class="text-primary text-gradient font-weight-bold">reinitialiser</a>
                @endif

        </p>
</form>
@endsection












{{-- @extends('layouts.app')

@section('content')
<div class="container ">

<section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }

      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>


    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0 shadow-lg">
          <div class="card cascading-right" style="
              background:  hsla(0, 1%, 13%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5 text-white">PAGE D'AUTHENTIFICATION</h2>
              <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-outline mb-4">
                    <label for="email" class=" col-form-label text-md-end text-white">{{ __('email') }}</label>

                    <div >
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>



                <div class="form-outline mb-4">
                    <label for="password" class="col-form-label text-md-end text-white">{{ __('mot de passe') }}</label>

                    <div >
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label text-white" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="row mb-0">
                    <div >
                        <button type="submit" class="btn btn-dark">
                            {{ __('connecter') }}
                        </button>
                    </div>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link " href="{{ route('password.request') }}">
                                {{ __('mot de passe oublier') }}
                            </a>
                        @endif
                    </div>

              </form>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 shadow-lg">
          <img src="{{asset('assets/img/bg-masthead.jpg')}}" class="w-100 rounded-4 shadow-4"
            alt="" />
        </div>
      </div>
    </div>
  </section>
</div>
@endsection --}}
