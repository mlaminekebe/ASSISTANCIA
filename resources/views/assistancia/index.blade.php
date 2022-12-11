@extends('assistancia.template')
@section('contenu')
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6 ">
                                <div class="card bg-primary text-white mb-4 shadow-lg  ">
                                    <div class="card-body">{{$nbrEncours}}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{-- <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                                        <P>EN COURS DE TRAITEMENT</P>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4 shadow-lg">
                                    <div class="card-body">{{$nbrAttente}}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{-- <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                                        <p>EN ATTENTE</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4 shadow-lg">
                                    <div class="card-body">{{$nbrTraitee}}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{-- <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                                        <p>DEMANDE TRAITEE</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4 shadow-lg">
                                    <div class="card-body">{{$nbrRejetee}}</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{-- <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div> --}}
                                        <P>DEMANDE REJETEE</P>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3>visulalisation des donnees</h3>
                        <div class="row ">
                            <div class="col-lg-6 ">
                                <div class="card mb-4 shadow-lg">
                                    <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        DIAGRAMME CIRCULAIRE
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

                                <div class="col-lg-6">
                                    <div class="card mb-4 shadow-lg">
                                        <div class="card-header">
                                            <i class="fas fa-chart-bar me-1"></i>
                                            DIAGRAMME EN BAR
                                        </div>
                                        <div class="card-body"><canvas id="myBarChart" width="100%" height="50"></canvas></div>
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
                        </div>
                        <div class="card mb-4 ">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                TOUTE LES ADMINISTRATEURS
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ordre</th>
                                            <th>prenom</th>
                                            <th>nom</th>
                                            <th>numero</th>
                                            <th>email</th>
                                            <th>total</th>
                                            <th>DEMANDE TRAITEE DANS LE MOIS</th>
                                             {{--<th>Start date</th>
                                            <th>Salary</th> --}}

                                        </tr>
                                    </thead>
                                    <tfoot>

                                        <tr>
                                            <th>ordre</th>
                                            <th>prenom</th>
                                            <th>nom</th>
                                            <th>numero</th>
                                            <th>email</th>
                                            <th>total</th>
                                            <th>DEMANDE TRAITEE DANS LE MOIS</th>
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
                                            <td>{{$admin->nom}}</td>
                                            <td>{{$admin->numero}}</td>
                                            <td>{{$admin->email}}</td>
                                            <td>
                                                <h5><span class="badge bg-warning">{{DB::table('demandes')->where('traitement', 1)->where('user_admin_id',$admin->id)->count()}}</span>
                                                    <span class="badge bg-success">{{DB::table('demandes')->where('traitement', 2)->where('user_admin_id',$admin->id)->count()}}</span>
                                                    <span class="badge bg-danger">{{DB::table('demandes')->where('traitement', 3)->where('user_admin_id',$admin->id)->count()}}</span>
                                                </h5>
                                            </td>
                                             <td>
                                                <h5><span class="badge bg-success">{{DB::table('demandes')->where('updated_at', '>=', Carbon\Carbon::now()->startOfMonth())->where('user_admin_id', $admin->id)->count()}}</span></h5>


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
                @php
                   $max=0
                @endphp
                 @php
                 if($max<=$nbrAttente)
                     $max=$nbrAttente

                 @endphp
                @php
                    if($max<=$nbrTraitee)
                        $max=$nbrTraitee

                @endphp

                @php
                    if($max<=$nbrRejetee)
                        $max=$nbrRejetee

                @endphp
                @php
                    if($max<=$nbrEncours)
                        $max=$nbrEncours

                @endphp

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

<script>
    var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["encours", "rejetee", "en attente", "traitee "],
    datasets: [{
      label: "nombre",
      backgroundColor: "rgba(2,117,216,1)",
      borderColor: "rgba(2,117,216,1)",
      data: [{{$nbrEncours}},{{$nbrRejetee}},{{$nbrAttente}}, {{$nbrTraitee}}],
      backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],

    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'month'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 10
        }
      }],
      yAxes: [{
        ticks: {
          min: 0,
          max: {{$max}},
          maxTicksLimit:{{$max}}
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    }
  }
});

</script>
@endsection
