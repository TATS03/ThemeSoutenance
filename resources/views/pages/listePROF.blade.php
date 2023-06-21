



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
  <link rel="stylesheet" href="assets/bundles/izitoast/css/iziToast.min.css">
  <link rel="stylesheet" href="assets/bundles/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="assets/bundles/flag-icon-css/css/flag-icon.min.css">
  
  
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='{{asset('assets/img/favicon.ico')}}' /> 
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

  
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>
<body class="sidebar-gone light light-sidebar theme-white">
      

@include('partials/header')
<main>
  
      <!-- Main Content -->
      <div class="main-content" style="min-height: 856px;" _msthidden="9">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-sm-12 col-lg-9">
                <div class="card author-box card-primary">
                  <div class="card-body">

                      <h4 _msttexthash="232882" _msthash="194">Listes Professeurs   </h4>
                              
                      <div class="card-body">
                    

                          
                                  <table class="table table-striped table-md" >
                                    <div class="col-12 col-sm-12 col-lg-9">

                                                      
                                        <th class="text-center pt-3 sorting_disabled" rowspan="1" colspan="1" aria-label=" &amp;nbsp;" style="width: 79.3125px;">  <!-- pour activer le criture en gras  -->

                                      
                                           <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;">


                                          <table class="table-hover dataTable no-footer table table-striped  dataTables_filter " id="save-stage" style="width: 100%;" role="grid" aria-describedby="save-stage_info">
                                          
                                          
                                        
                
                                              <thead>
                                                <tr role="row">
                                                
                                                 

                                                      <th>#</th>
                                                      <th _msttexthash="31395" _msthash="195">Nom</th>
                                                      <th _msttexthash="80873" _msthash="197">E-mail</th>
                                                      <th _msttexthash="80873" _msthash="197">Mot de Passe </th>
                                                      <th _msttexthash="80873" _msthash="197">Faculte</th>
                                                      <th _msttexthash="80873" _msthash="197">Departement</th>
                                          
                                                </tr>
                                              </thead>


                                              <tbody>
                                                @foreach($professeurs as $tables)

                                                  <tr>
                                                    <td _msttexthash="4459" _msthash="197">{{$tables->id}}</td>
                                                    <td _msttexthash="319917" _msthash="197">{{$tables->nom}}</td>
                                                    <th _msttexthash="80873" _msthash="197">{{$tables->email}}</th>
                                                    <th _msttexthash="80873" _msthash="197">************</th>
                                                    <th _msttexthash="80873" _msthash="197">{{$tables->faculte}}</th>
                                                    <th _msttexthash="80873" _msthash="197">{{$tables->departement}}</th>
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