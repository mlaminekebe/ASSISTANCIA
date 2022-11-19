@extends('layouts.app')
@section('content')
<div class="container">
    <h4>mes taches</h4>
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
                @if ($list->traitement==1)
                <a href="valider/{{$list->id}}"> <button class="btn btn-success">VALIDER</button></a>
                <a href="rejeter/{{$list->id}}"> <button class="btn btn-danger">REJETER</button></a>
                @else
                <button class="btn btn-warning" disabled>fini</button>
                @endif

            </td>
            @endforeach

        </tbody>
      </table>

</div>
@endsection
