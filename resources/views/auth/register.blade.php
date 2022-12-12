@extends('auth.template')
@section('titre')
INSCRIPTION
@endsection
@section('content')
<div class="mt-1">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-outline mb-4">
            <div>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="PRENOM">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-outline mb-4">
            <div>
                <input placeholder="NOM" id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>

                @error('nom')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-outline mb-4">

            <div>
                <input placeholder="NUMERO" id="numero" type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}" required autocomplete="numero" autofocus>
                @error('numero')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-outline mb-4">
            <div>
                <input placeholder="EMAIL" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-outline mb-4">
            <div >
                <input placeholder="MOT DE PASSE" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-outline mb-4">
            <div >
                <input placeholder="CONFIRMER MOT DE PASSE" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="row mb-0">
            <div class="text-center">
                <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">INSCRIRE</button>
            </div>
        </div>
    </form>
</div>
</div>

@endsection
