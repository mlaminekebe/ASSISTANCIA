@extends('layouts.app')

@section('content')
<div class="container">
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

        <!-- Jumbotron -->
        <div class="container py-4">
          <div class="row g-0 align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 shadow-lg">
              <div class="card cascading-right" style="
                  background:  hsla(0, 1%, 13%, 0.55);
                  backdrop-filter: blur(30px);
                  ">
                <div class="card-body p-5 shadow-5 text-center">
                  <h2 class="fw-bold mb-5 text-light">CONFIRMER VOTRE MOT DE PASSE AVANT DE CONTINUER</h2>
                    <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
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
      <!-- Jumbotron -->
    </section>
</div>
@endsection
