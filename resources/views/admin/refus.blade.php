@extends('layouts.app')
@section('content')

<div class="container" >
    <h3>objet de la demande :{{$demandes->objet}}</h3>
<h2>MOTIF DE REFUS</h2>

    <form action="{{url('sendMailRefus')}}" method="POST" class="shadow-lg p-3 mb-5 bg-body rounded">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"></label>
            <input type="HIDDEN" class="form-control" name="id" id="exampleInputEmail1" aria-describedby="emailHelp" required value="{{$demandes->id}}">

          </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">motif de refus</label>
          <textarea type="text" class="form-control" name="motif" id="exampleInputEmail1" aria-describedby="emailHelp" required></textarea>

        </div>
        {{-- <input type="HIDDEN" value="valeur_que_tu_veux_transmettre"> --}}

        <button type="submit" class="btn btn-primary">envoyer</button>
      </form>
</div>

@endsection
