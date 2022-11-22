@extends('assistancia.template')
@section('contenu')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tables</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                CETTE TABLE CONTIENT LA LISTE DE TOUS LES UTILISATEURS CONNECTEE DANS CETTE PLATEFORME ASSISTANCIA
                {{-- <a target="_blank" href="https://datatables.net/">official DataTables documentation</a> --}}
                .
            </div>
        </div>
        <div class="card mb-4 shadow-lg">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
               LISTE DE TOUS LES UTILISATEURS
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ordre</th>
                            <th>nom</th>
                            <th>email</th>
                            <th>definir admin</th>
                            {{--<th>Start date</th>
                            <th>Salary</th> --}}
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>odre</th>
                            <th>nom</th>
                            <th>email</th>
                            <th>definir admin</th>
                            {{-- <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th> --}}
                        </tr>
                    </tfoot>
                    <tbody>
                        @php
                            $i=1;
                        @endphp
                        @foreach ($users as $user)

                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="faireAdmis/{{$user->id}}">
                                    <button class="btn btn-success">RENDRE AMDIS</button>

                                </a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>


@endsection
