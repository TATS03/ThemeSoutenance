<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mes requetes</title>
</head>


<!-- @include('partials/header') -->
<body class="sidebar-gone light light-sidebar theme-white">


<main>

      <!-- Main Content -->
      <div class="main-content" style="min-height: 856px;" _msthidden="9">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-sm-12 col-lg-9">
                <div class="card author-box card-primary">
                  <div class="card-body">
                      <h4 >Listes De mes Requetes</h4>
                      <div class="card-body">
                                  <table class="table table-striped table-md" >
                                    <div class="col-12 col-sm-12 col-lg-9">
                                        <th class="text-center pt-3 sorting_disabled" rowspan="1" colspan="1" aria-label=" &amp;nbsp;" style="width: 79.3125px;">  <!-- pour activer le criture en gras  -->
                                           <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">
                                          <table class="table-hover dataTable no-footer table table-striped  dataTables_filter " id="save-stage" style="width: 100%;" role="grid" aria-describedby="save-stage_info">
                                              <thead>
                                                <tr role="row">
                                                  <th _msttexthash="80873" _msthash="197">Prof</th>
                                                  <th _msttexthash="31395" _msthash="195">Objet</th>
                                                  <th _msttexthash="80873" _msthash="197">Etat</th>
                                                  <th _msttexthash="80873" _msthash="197">Action</th>
                                                </tr>
                                              </thead>
                                              <tbody>
                                                @foreach($mesRequetes as $tables)
                                                  <tr>
                                                    <th _msttexthash="80873" _msthash="197">{{$tables->nom}}</th>
                                                    <th _msttexthash="80873" _msthash="197">{{$tables->object}}</th>
                                                    <th _msttexthash="80873" _msthash="197">
                                                        @if($tables->etat == 0)
                                                            <i class="fa fa-spinner fa-spin" aria-hidden="true"></i>
                                                        @elseif($tables->etat == 1)
                                                            <i class="fa fa-check" aria-hidden="true"></i>
                                                        @elseif($tables->etat == 2)
                                                            <i class="fa fa-ban" aria-hidden="true"></i>
                                                        @endif
                                                    </th>
                                                    <td style="display: flex;justify-content:space-around">
                                                        <form action="{{ route('deleteReq',$tables->id)}}" method="POST">
                                                            @CSRF
                                                            <button class="badge badge-danger" _msttexthash="88465" _msthash="213">Supprimer</button>
                                                        </form>
                                                        <a href="{{route('viewSingleReq',$tables->id)}}" class="badge badge-success" _msttexthash="88465" _msthash="213">Voir</a>
                                                    </td>
                                                  </tr>
                                                @endforeach
                                              </tbody>
                                        </div>
                                    </div>
                                  </table>
                              </table>
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
</main>
@include('partials/footer')

</body>
</html>
