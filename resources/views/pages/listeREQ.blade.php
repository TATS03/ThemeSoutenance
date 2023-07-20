

<!DOCTYPE html>
<html lang="en">
<head>
<title>Requetes</title>
</head>

<body class="sidebar-gone light light-sidebar theme-white" style="padding-right: 5px;">

@include('partials/header')
    <main>
    <!-- Main Content -->
    <div style="width: 100%;overflow: auto;">
    <div class="main-content"  style="min-height:856px;" _msthidden="9">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
    @endif
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-9">
                        <div class="card author-box card-primary">
                            <div class="card-body">
                                <h4 class="text-info">Listes Requetes en Attente</h4>

                                <div class="card-body">
                                    <div class="user-item">
                                        <div class="user-details">
                                            <div class="user-cta">
                                                <table class="table table-striped table-md">
                                                    <thead>
                                                        <tr role="row">
                                                            <th _msttexthash="31395" _msthash="195">Matricule</th>
                                                            <th _msttexthash="80873" _msthash="197">Nom Prof</th>
                                                            <th _msttexthash="80873" _msthash="197">Filiere</th>
                                                            <th _msttexthash="80873" _msthash="197">Matiere</th>
                                                            <th _msttexthash="80873" _msthash="197">objet</th>
                                                            <th _msttexthash="76466" _msthash="198">Statut</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($requetesAttente as $tables)
                                                        <tr>
                                                            <td _msttexthash="74035" _msthash="201">{{$tables->matricule}}</td>
                                                            <td _msttexthash="319917" _msthash="200">{{$tables->nom}}</td>
                                                            <td _msttexthash="80873" _msthash="197">{{$tables->filiere}}</td>
                                                            <td _msttexthash="80873" _msthash="197">{{$tables->matiere}}</td>
                                                            <td _msttexthash="74035" _msthash="201">{{$tables->object}}</td>
                                                            <td>
                                                                <div class="card-body">
                                                                    <a type="button" href="{{route('viewSingleReq',$tables->id)}}" class="btn btn-success">Voir</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card author-box card-primary">
                            <div class="card-body">
                                <h4 class="text-success">Listes Requetes Deja valide</h4>

                                <div class="card-body">
                                    <div class="user-item">
                                        <div class="user-details">
                                            <div class="user-cta">
                                                <table class="table table-striped table-md">
                                                    <thead>
                                                        <tr role="row">
                                                            <th _msttexthash="31395" _msthash="195">Matricule</th>
                                                            <th _msttexthash="80873" _msthash="197">Nom Prof</th>
                                                            <th _msttexthash="80873" _msthash="197">Filiere</th>
                                                            <th _msttexthash="80873" _msthash="197">Matiere</th>
                                                            <th _msttexthash="80873" _msthash="197">objet</th>
                                                            <th _msttexthash="76466" _msthash="198">Statut</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($requetesValide as $tables)
                                                        <tr>
                                                            <td _msttexthash="74035" _msthash="201">{{$tables->matricule}}</td>
                                                            <td _msttexthash="319917" _msthash="200">{{$tables->nom}}</td>
                                                            <td _msttexthash="80873" _msthash="197">{{$tables->filiere}}</td>
                                                            <td _msttexthash="80873" _msthash="197">{{$tables->matiere}}</td>
                                                            <td _msttexthash="74035" _msthash="201">{{$tables->object}}</td>
                                                            <td>
                                                                <div class="card-body">
                                                                    <a type="button" href="{{route('viewSingleReq',$tables->id)}}" class="btn btn-success">Voir</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card author-box card-primary">
                            <div class="card-body">
                                <h4 class="text-danger">Listes Requetes Rejete</h4>

                                <div class="card-body">
                                    <div class="user-item">
                                        <div class="user-details">
                                            <div class="user-cta">
                                                <table class="table table-striped table-md">
                                                    <thead>
                                                        <tr role="row">
                                                            <th _msttexthash="31395" _msthash="195">Matricule</th>
                                                            <th _msttexthash="80873" _msthash="197">Nom Prof</th>
                                                            <th _msttexthash="80873" _msthash="197">Filiere</th>
                                                            <th _msttexthash="80873" _msthash="197">Matiere</th>
                                                            <th _msttexthash="80873" _msthash="197">objet</th>
                                                            <th _msttexthash="76466" _msthash="198">Statut</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($requetesRejete as $tables)
                                                        <tr>
                                                            <td _msttexthash="74035" _msthash="201">{{$tables->matricule}}</td>
                                                            <td _msttexthash="319917" _msthash="200">{{$tables->nom}}</td>
                                                            <td _msttexthash="80873" _msthash="197">{{$tables->filiere}}</td>
                                                            <td _msttexthash="80873" _msthash="197">{{$tables->matiere}}</td>
                                                            <td _msttexthash="74035" _msthash="201">{{$tables->object}}</td>
                                                            <td>
                                                                <div class="card-body">
                                                                    <a type="button" href="{{route('viewSingleReq',$tables->id)}}" class="btn btn-success">Voir</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>

</main>

@include('partials/footer')

</body>
</html>




