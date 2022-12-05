@extends('layouts.app')
@section('content')

<div class="container" >
    <h3>objet de la demande :{{$demandes->objet}}</h3>
<h2>MOTIF DE REFUS</h2>

    <form action="{{url('sendMailRefus/'.$demandes->id)}}" method="POST" class="shadow-lg p-3 mb-5 bg-body rounded">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">motif de refus</label>
          <textarea type="text" class="form-control" name="motif" id="exampleInputEmail1" aria-describedby="emailHelp" required></textarea>

        </div>
       

        <button type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
            <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576 6.636 10.07Zm6.787-8.201L1.591 6.602l4.339 2.76 7.494-7.493Z"/>
          </svg> envoyer</button>
      </form>
</div>

@endsection
