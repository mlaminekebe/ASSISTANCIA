@extends('assistancia.template')
@section('contenu')
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">{{$nbrEncours}}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{-- <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                                        <P>EN COURS DE TRAITEMENT</P>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">{{$nbrAttente}}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{-- <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                                        <p>EN ATTENTE</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">{{$nbrTraitee}}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{-- <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                                        <p>DEMANDE TRAITEE</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
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
                        {{-- <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Area Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Bar Chart Example
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="col-lg-6">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-chart-pie me-1"></i>
                                    STATISTIQUE
                                </div>
                                <div class="card-body"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                                <div class="card-footer small text-muted">
                                    <?php
                                    echo 'DERNIERE MISE A JOURS - ';
                                        // date_default_timezone_set('Europe/Paris');
                                        $date = date('D-M-Y h:i:s');
                                        echo $date;
                                        ?>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                TOUTE LES ADMINISTRATEURS
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ordre</th>
                                            <th>nom</th>
                                            <th>email</th>
                                            <th>voirs details</th>
                                             {{--<th>Start date</th>
                                            <th>Salary</th> --}}

                                        </tr>
                                    </thead>
                                    <tfoot>

                                        <tr>
                                            <th>ordre</th>
                                            <th>nom</th>
                                            <th>email</th>
                                            <th>voirs details</th>
                                            {{--<th>Start date</th>
                                           <th>Salary</th> --}}
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                            $i=1;
                                        @endphp
                                        @foreach ($admins as $admin)

                                        <tr>
                                            <td>{{$i++}}</td>

                                            <td>{{$admin->name}}</td>
                                            <td>{{$admin->email}}</td>
                                             <td>
                                                <a href="information/{{$admin->id}}">
                                                    <button  class="btn btn-success">voir details</button>

                                                </a>
                                             </td>
                                            {{--<td>2011/04/25</td>
                                            <td>$320,800</td> --}}
                                        </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

@endsection
@section('scrip')
<script >
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ["en cours", "rejetee", "en attente", "traitee"],
        datasets: [{
        data: [ {{$nbrEncours}},{{$nbrRejetee}},{{$nbrAttente}}, {{$nbrTraitee}}],
        backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
        }],
    },
    });

</script>
@endsection
