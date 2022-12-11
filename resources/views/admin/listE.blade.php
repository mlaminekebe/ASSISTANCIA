@extends('layouts.app')

@section('content')


<div class="container">
    <a href="show"><button class="btn btn-secondary  shadow-lg"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder" viewBox="0 0 16 16">
        <path d="M.54 3.87.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31zM2.19 4a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4H2.19zm4.69-1.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707z"/>
      </svg> liste des traitements en cours</button></a>
    <h4>listes de tous les reclamations</h4>

    <p class="text-success">{{Session::get('message')}}</p>
    <table class="table">

        <thead>
          <tr class=" shadow-lg">
            <th scope="col">NUMERO</th>
            <th scope="col">objet</th>
            <th scope="col">details</th>
          </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($lists as $list)
            <tr class=" shadow-lg">
            <th scope="row">{{$i++}}</th>
            <td>{{$list->objet}}</td>

            <td>
                <a href="voir/{{$list->id}}" ><button type="button" class="btn btn-primary">VOIR DETAILS</button></a>
                {{-- <a href="consulter/{{$list->id}}"> <button type="button" class="btn btn-success">TRAITER LA RECLAMATION</button> </a> --}}
            </td>
            @endforeach
        </tbody>
      </table>

</div>

@endsection
