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
                <a href="" class="btn btn-primary"><button type="button" class="btn btn-primary">voir</button></a>
            </td>
            @endforeach


        </tbody>
      </table>

</div>
@endsection
