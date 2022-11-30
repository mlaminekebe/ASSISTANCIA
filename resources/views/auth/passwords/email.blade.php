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
                  <h2 class="fw-bold mb-5 text-light">PAGE D'AUTHENTIFICATION</h2>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-outline mb-4">
                            <label for="email" class="col-form-label text-md-end text-light">{{ __('VOTRE ADRESSE EMAIL') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
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
