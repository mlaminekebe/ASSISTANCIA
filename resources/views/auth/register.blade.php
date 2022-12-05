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
                  background: hsla(0, 1%, 13%, 0.55);
                  backdrop-filter: blur(30px);
                  ">
                <div class="card-body p-5 shadow-5 text-center">
                  <h2 class="fw-bold mb-5 text-white">PAGE D'INSCRIPTION</h2>
                  <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-outline mb-4">
                        <label for="name" class=" col-form-label text-md-end text-white">{{ __('PRENOM') }}</label>

                        <div>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="name" class=" col-form-label text-md-end text-white">{{ __('NOM') }}</label>

                        <div>
                            <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                            @error('nom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="name" class=" col-form-label text-md-end text-white">{{ __('TELEPHONE') }}</label>

                        <div>
                            <input id="numero" type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}" required autocomplete="numero" autofocus>

                            @error('numero')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="email" class="col-form-label text-md-end text-white">{{ __('Email Address') }}</label>

                        <div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-outline mb-4">
                        <label for="password" class="col-form-label text-md-end text-white">{{ __('Password') }}</label>

                        <div >
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

                    <div class="row mb-0">
                        <div class="form-outline mb-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('inscrire') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 shadow-lg">
        <img src="{{asset('assets/img/bg-masthead.jpg')}}" class="w-100 rounded-4 shadow-4" style="height: 500px;"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
</div>
@endsection
