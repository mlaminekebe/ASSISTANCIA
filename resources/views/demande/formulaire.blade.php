@extends('layouts.app')

@section('content')
<div class="container">

    <h4>mes demandes</h4>
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
       FAIRE UNE RECLAMATION
      </button>

    <table class="table">

        <thead>
          <tr>
            <th scope="col">NUMERO</th>
            <th scope="col">objet</th>
            <th scope="col">TRAITEMENT</th>
            <th scope="col">details</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($demandes as $demande)
            <tr class="shadow-lg p-3 mb-5 bg-body rounded">
            <th scope="row">{{$i++}}</th>
            <td>{{$demande->objet}}</td>
            <td>

                @if ($demande->traitement==0)
                <span class="badge bg-warning">en attente</span>
                @elseif ($demande->traitement==1)
                <span class="badge bg-primary">en cours de traitement</span>
                @elseif ($demande->traitement==3)
                <span class="badge bg-success">traitee</span>
                @elseif($demande->traitement==4)
                <span class="badge bg-danger">refuser</span>
                @endif

            </td>
            <td>
                <a href="{{ route('demande.show',compact('demande')) }}" class="btn btn-primary"><button type="button" class="btn btn-primary">voir</button></a>

            </td>
            {{-- <br> --}}
            </tr>
            
            @endforeach


        </tbody>
      </table>

</div>



<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ route('demande.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail" class="form-label">objet</label>
                  <input type="text" class="form-control" name="objet" id="exampleInputEmail" >
                  <div id="emailHelp" class="form-text">essayer d'etre le plus explicite possible</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">votre reclmation</label>
                  <input type="text" class="form-control" name="description" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">essayer d'etre le plus explicite possible</div>
                </div>

                <button type="submit" class="btn btn-primary">envoyer</button>
              </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fermer</button>

        </div>
      </div>
    </div>
  </div>

@endsection
