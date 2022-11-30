@extends('layouts.app')

@section('content')
<div class="container">
    <h2>vous etes charger de traiter cette reclamation</h2>
    <div class="card">
        <h5 class="card-header">{{$demande->objet}}</h5>
        <div class="card-body">
          <h4 class="card-title">{{$demande->description}}</h4>
          @if ($demande->traitement==0)
          {{-- <a href="{{ ('consulter', compact('demande')) }}"> <button class="btn btn-primary">TRAITE LA DEMANDE</button></a> --}}

                <button class="btn btn-warning">EN ATTENTE DE TRAITEMENT</button>
             <a href="{{url('consulter/'.$demande->id)}}"> <button type="button" class="btn btn-success">TRAITER LA RECLAMATION</button> </a>

          @elseif ($demande->traitement==1)
          <button class="btn btn-success">en cours de traitement</button></a>
          @elseif ($demande->traitement==2 || $demande->traitement==2)
          <button class="btn btn-success">deja traitee</button></a>

          @endif

        </div>
      </div>
      <div class="text-center">
        {{-- <a href="/form/{{Auth::user()->id}}"><button class="btn btn-danger mt-5"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
          </svg>RETOUR</button></a> --}}

      </div>


</div>



@endsection
