@extends('layouts/app')

@section('content')
<div class="container">
    <div class="card">
        <h5 class="card-header">{{$demande->objet}}</h5>
        <div class="card-body">
          <h4 class="card-title">{{$demande->description}}</h4>
        <button class="btn btn-success">TRAITE LA DEMANDE</button>
        </div>
      </div>
      <div class="text-center">
        {{-- <a href="/form/{{Auth::user()->id}}"><button class="btn btn-danger mt-5"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
          </svg>RETOUR</button></a> --}}




      </div>

</div>
@endsection
