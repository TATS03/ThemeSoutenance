

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Hamster</title>
  <!-- General CSS Files --> 
  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
  <link rel="stylesheet" href="assets/bundles/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/bundles/owlcarousel2/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/bundles/izitoast/css/iziToast.min.css">
  <link rel="stylesheet" href="assets/bundles/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="assets/bundles/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  
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
      
<!-- 
@include('partials/header') -->
<main>

<body class="sidebar-gone light light-sidebar theme-white">
  <div class="loader" style="display: none;"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      
      
           
           
        
      <!-- Main Content -->

    

      <div class="maim-content" style="min-height: 500x;" _msthidden="30">
        <section class="section">
          <div class="section-body">
          <div class="main-content" style="min-height: 500px;">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
           
            <div class="card card-primary">
            <!-- liste_etd.store -->

            @if($errors)

              @foreach($errors ->all() as $error )
                <li>{{$error}}</li>
              @endforeach

            @endif
              
            <form  action ="{{url('Etudiant')}}" method="POST" class="needs-validation was-validated" novalidate="">
                    @csrf
                <div class="card-header">
                  <h4>Register</h4>
                </div>
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Matricule</label>
                    <div class="col-sm-9">
                      <input type="text" name= "matricule" class="form-control" value="">
                      <div class="invalid-feedback">
                       Entrez votre matricule !
                      </div>
                    </div>
                  </div>
               

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nom</label>
                    <div class="col-sm-9">
                      <input name ="nom" type="text" class="form-control" required="">
                      <div class="invalid-feedback">
                        Entrez votre nom !
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input name ="email" type="email" class="form-control" required="">
                      <div class="invalid-feedback">
                        Entrez votre Email ! 
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                      <label for="password" class="col-sm-4 col-form-label">Password</label>
                      <div class="col-sm-9">
                      <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password"  required="">
                      <div class="invalid-feedback">
                            Oh no! Password is invalid.
                          </div>
                    </div>
                    </div>

                  

                  <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Filiere</label>
                  <div class="col-sm-9">
                          <select  name ="filiere" class="form-control">
                          <option>...</option>
                        <option>Bios </option>
                        <option>Chimie</option>
                        <option>Ict4d</option>
                        <option>Info</option>
                        <option>Physique</option>
                        <option>Maths</option>
                      </select>
                     
                        
                       </div>  
                        </div>


                        <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Niveau</label>
                  <div class="col-sm-9">
                          <select name ="niveau" class="form-control" >
                                <option>...</option>
                              <option>L1 </option>
                              <option>L2</option>
                              <option>L3</option>
                              <option>M1</option>
                              <option>M2</option>
                       
                      </select>
                      </div>
                        </div>

     

                      <div class="card-footer text-right">

                      <button class="btn btn-primary" _msttexthash="98280" _msthash="189"  value="save" id="toastr-2" type="submit">Envoyer</button>

                      </div>
                  
           
                  

                
                  </form>

                  
                </div>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="{{route('login')}}" >Login</a>
              </div>
            </div>
          </div>
</form>
                
                     
 @include('partials/footer')


      

</body>
</html> 
                
        