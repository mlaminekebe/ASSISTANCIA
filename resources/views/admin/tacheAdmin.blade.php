@extends('layouts.app')
@section('content')
<div class="container">
    {{-- @if (Session('success_message'))
        <div class="alert alert-success">
            {{session('success_message')}}
        </div>
    @endif --}}

    <div class="row">

        <div class="col-xl-4 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">{{$nbrAttente}}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    {{-- <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                    <p>EN ATTENTE</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">{{$nbrTraitee}}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    {{-- <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                    <p>DEMANDE TRAITEE</p>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">{{$nbrRejetee}}</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    {{-- <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                    <P>DEMANDE REJETEE</P>
                </div>
            </div>
        </div>
    </div>
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
                @elseif($list->traitement==2)
                <button class="btn btn-secondary" disabled>fini</button><span class="badge text-bg-success">traitee</span>
                @elseif($list->traitement==3)
                <button class="btn btn-secondary" disabled>fini</button><span class="badge text-bg-danger">rejeter</span>

                @endif

            </td>
            @endforeach

        </tbody>
      </table>

</div>
@endsection
