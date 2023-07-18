

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
                                <h4 _msttexthash="232882" _msthash="194">Listes Requetes</h4>00000000000000000000000000

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

                                <div id="requeteModal" class="modal fade bd-example-modal-lg" tabindex="-1"
                                    role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            
                                                <h4 class="modal-title">Requetes</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                
                                                        <label _msttexthash="117962" _msthash="182">Matricule</label>
                                                        <input type="text" class="form-control is-valid"
                                                            value="{{$tables->matricule}}" name="matricule" required=""
                                                            disabled>
                                                       
                                                    </div>
                                                    <div class="form-group">
                                                        <label _msttexthash="117962" _msthash="182">Filiere</label>
                                                        <input type="text" disable class="form-control is-valid"
                                                            value="{{$tables->filiere}}" name="filiere" required=""
                                                            disabled>
                                                       
                                                    </div>
                                                    <div class="form-group">
                                                        <label _msttexthash="117962" _msthash="182">Matiere</label>
                                                        <input type="text" class="form-control is-valid"
                                                            value="{{$tables->matiere}}" name="matiere" required=""
                                                            disabled>
                                                       
                                                    </div>
                                                    <div class="form-group">
                                                        <label _msttexthash="117962" _msthash="182">Objet</label>
                                                        <select class="form-control is-valid" name="object" disabled>
                                                            <option>Demande de rectification de matricule</option>
                                                            <option> Demande de rectification sur mon nom</option>
                                                            <option>Option 3</option>
                                                        </select>
                                                        
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="card">
                                                            <p>
                                                                <p>{{$tables->file}}</p>
                                                                <img
                                                                    src="{{asset("uploads/requetes/{$tables->matricule}-{$tables->nom}/pic/$tables->file")}}"
                                                                    alt="">
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="card-footer">
                                                        <form
                                                            action="{{route('requeteupdate',['id'=>$tables->id])}}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="form-group">
                                                                <label _msttexthash="117962" _msthash="182">A
                                                                    Monsieur/A Madame </label>
                                                                <select class="form-control is-valid" name="newName">
                                                                    @foreach($allTeachers as $prof)
                                                                    <option>{{$prof->nom}}</option>
                                                                    @endforeach
                                                                </select>
                                                                <div class="invalid-feedback" _msttexthash="164762"
                                                                    _msthash="183">precisez!</div>
                                                            </div>
                                                            <button class="btn btn-warning" _msttexthash="98280"
                                                                _msthash="189" type="submit">Rediriger</button>
                                                        </form>

                                                       
                                                            <form
                                                                action="{{route('requetevalider',['id'=>$tables->id])}}"                                                                                                                                                                   r
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <button class="btn btn-primary" _msttexthash="98280"
                                                                    _msthash="189" type="submit">Valider cette
                                                                    requete</button>
                                                            </form>
                                                            <form
                                                                action="{{route('requeterejeter',['id'=>$tables->id])}}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <button class="btn btn-danger" _msttexthash="98280"
                                                                    _msthash="189" type="submit">Rejeter cette
                                                                    requete</button>
                                                            </form>
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




