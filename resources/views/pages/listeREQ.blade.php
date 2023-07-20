

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Hamster</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/izitoast/css/iziToast.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/bootstrap-social/bootstrap-social.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/prism/prism.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/dropzonejs/dropzone.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href="{{asset('assets/img/favicon.ico')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">


  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
  <!-- Custom style CSS -->

  <link rel='shortcut icon' type='image/x-icon' href="{{asset('assets/img/favicon.ico')}}" />
</head>



<body class="sidebar-gone light light-sidebar theme-white modal-open" style="padding-right: 5px;">


@include('partials/header')

    <main>

    <!-- Main Content -->
    <div style="width: 100%; height: 500px; overflow: auto;">
    <div class="main-content"  style="min-height:856 px;" _msthidden="9">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-9">
                        <div class="card author-box card-primary">
                            <div class="card-body">
                                <h4 _msttexthash="232882" _msthash="194">Listes Requetes</h4>

                                <div class="card-body">
                                    <div class="user-item">
                                        <div class="user-details">
                                            <div class="user-cta">
                                                <table class="table table-striped table-md">
                                                    <thead>
                                                        <tr role="row">
                                                            <th>#</th>
                                                            <th _msttexthash="31395" _msthash="195">Matricule</th>
                                                            <th _msttexthash="80873" _msthash="197">Nom Prof</th>
                                                            <th _msttexthash="80873" _msthash="197">Filiere</th>
                                                            <th _msttexthash="80873" _msthash="197">Matiere</th>
                                                            <th _msttexthash="80873" _msthash="197">objet</th>
                                                            <th _msttexthash="76466" _msthash="198">File</th>
                                                            <th _msttexthash="76466" _msthash="198">Statut</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($requetes as $tables)
                                                        <tr>
                                                            <td _msttexthash="4459" _msthash="199">{{$tables->id}}</td>
                                                            <td _msttexthash="74035" _msthash="201">{{$tables->matricule}}</td>
                                                            <td _msttexthash="319917" _msthash="200">{{$tables->nom}}</td>
                                                            <td _msttexthash="80873" _msthash="197">{{$tables->filiere}}</td>
                                                            <td _msttexthash="80873" _msthash="197">{{$tables->matiere}}</td>
                                                            <td _msttexthash="74035" _msthash="201">{{$tables->object}}</td>
                                                            <td _msttexthash="74035" _msthash="201">{{$tables->file}}</td>
                                                            <td>
                                                                <div class="card-body">
                                                                    <button type="button" class="btn btn-warning"
                                                                        data-toggle="modal"
                                                                        data-target="#requeteModal">View</button>
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




