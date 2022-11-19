@extends('layouts.app')

@section('content')


<div class="container">
    <a href="show"><button class="btn btn-secondary">liste des traitements en cours</button></a>
    <h4>listes de tous les reclamations</h4>
    <table class="table">

        <thead>
          <tr>
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
            <tr>
            <th scope="row">{{$i++}}</th>
            <td>{{$list->objet}}</td>

            <td>
                <a href="consulter/{{$list->id}}" class="btn btn-primary"><button type="button" class="btn btn-primary">CLIQUEZ POUR TRAITER LA DEMANDE</button></a>

            </td>
            @endforeach
        </tbody>
      </table>

</div>

@endsection
