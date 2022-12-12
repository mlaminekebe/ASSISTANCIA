@extends('admin.template')
@section('cont1')
active bg-gradient-info

@endsection
@section('nom')
les reclamations
@endsection
@section('content')
<div class="card my-4">
    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
      <div class="bg-gradient-info shadow-primary border-radius-lg pt-4 pb-3">
        <h6 class="text-white text-capitalize ps-3">LISTE DES NOUVELLES RECLAMATIONS</h6>
      </div>
    </div>
    <div class="card-body px-0 pb-2">
      <div class="table-responsive p-0">
        <table class="table">
          <thead>
            <tr >
                <th >ORDRE</th>
                <th >PRENOM & NOM</th>
                <th >OBJET</th>
                <th></th>
                <th>DATE</th>
              </tr>
          </thead>
          <tbody>
                        @php
                        $i=1;
                    @endphp
                    @foreach ($lists as $list)

                        <tr>
                            <th scope="row">{{$i++}}</th>

                        <td>
                            <p class="text font-weight-bold mb-0">{{$list->user->name}}</p>
                            <p class="text mb-0">{{$list->user->nom}}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            {{$list->objet}}
                        </td>
                        <td class="align-middle text-center">
                            <td>{{$list->created_at}}</td>
                        </td>
                        <td class="align-middle">
                            <a href="voir/{{$list->id}}" ><button type="button" class="btn btn-primary">VOIR DETAILS</button></a>

                        </td>
                        </tr>
                        @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
