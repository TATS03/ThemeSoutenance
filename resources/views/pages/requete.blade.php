

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

                    
                   
                  <form action="{{url('Requetes')}}" method="POST" class="needs-validation was-validated" novalidate="">
                          @csrf
                    <div class="card-header">
                        <h4 _msttexthash="568646" _msthash="181">Requetes </h4>
                    </div>
                        <div class="card-body">
                          <div class="form-group">
                        
                            <label _msttexthash="117962" _msthash="182">Matricule</label>
                            <input type="text" class="form-control is-valid" value name = "matricule" required="">
                           ` <div class="valid-feedback" _msttexthash="164762" _msthash="183"> remplissez </div>
                          </div>`
                      
                       

                        <div class="form-group">
                          <label _msttexthash="117962" _msthash="182">Filiere</label>
                          <select class="form-control is-valid" name="filiere">
                          <option>...</option>
                            <option>Bios </option>
                            <option>Chimie</option>
                            <option>Ict4d</option>
                            <option>Info</option>
                            <option>Physique</option>
                            <option>Maths</option>
                          </select>
                          <div class="invalid-feedback" _msttexthash="164762" _msthash="183"> precisez ! </div>
                        </div>
                      
                      <div class="form-group">
                        <label _msttexthash="117962" _msthash="182">Matiere</label>
                        <input type="text" class="form-control is-valid" value=""  name = "matiere" required=" ">
                        <div class="valid-feedback" _msttexthash="164762" _msthash="183"> remplissez </div>
                       </div>

                        <div class="form-group">
                          <label _msttexthash="117962" _msthash="182">A Monsieur/A Madame </label>
                          <select class="form-control is-valid" name="nom">
                        <option>Thomas messie</option>
                        <option> Aboubacar </option>
                        <option>Option 3</option>
                      </select>
                          <div class="invalid-feedback" _msttexthash="164762" _msthash="183"> precisez ! </div>
                        </div>

                        <div class="form-group">
                          <label _msttexthash="117962" _msthash="182">Objet </label>
                          <select class="form-control" name="object">
                        <option>Demande de rectification de de matricule </option>
                        <option> Demande de rectification sur mon nom </option>
                        <option>Option 3</option>
                      </select>
                          <div class="invalid-feedback" _msttexthash="164762" _msthash="183"> precisez ! </div>
                        </div>


                        <div class="form-group mb-0">
                          <label _msttexthash="117962" _msthash="182">Message </label>
                             <div class="card author-box card-primary">
                      <div class="card-body">
                        <div class="box">
                        <div class="author-box-details">
                          <div class="author-box-name">
                                     <h2>Monsieur ,Madame</h2>
                          <p>  j ai l honneur de venir au pres de votre personaliter solliciter une audiance pour rectification de  mes donnnees personnel
                         sur la plus part  de vos documents .A cette effet  je suis victime d une erreur de note car ya un soucis avec mon  nom / matricule  durant la saisi de cette derniere   
                         
                        <p>
                          du coup je tiens a vous presenter :
                        <li>une photocopie de mon acte de naissance </li>
                        <li> ou </li>
                        <li>la photopie de ma carete d identiter </li>
                        <li> et </li>
                        <li>la photocopie de ma fiche d inscription a l universiter </li>
  
                        </p>
                          
                      </div>
                     
                    </div>
                  </div>
                </div>
                 </div>

                        <div class="invalid-feedback" _msttexthash="164762" _msthash="183"  name ="file" > put text ! </div>
                      </div>
                      <div class="form-group">
                      <label>file</label>
                      <input type="File" class="form-control">
                    </div>
                      
                    </div>
                    
                    <div class="card-footer text-right">

                      <button class="btn btn-primary" _msttexthash="98280" _msthash="189"  id="toastr-2" type="submit">Envoyer</button>
                     
                    </div>


                    
              
                
                    
                  
             


                  

                  </form>
               
             </div>
       
              </div>
                    
                    </div>
                    </div>
                    </div>
                    </div>




            <!-- add content here -->
          </div>

                  </form>
    
                      
        </section>
</main>
 @include('partials/footer')

</body>
</html>