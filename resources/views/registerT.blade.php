<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <style>
        /* Exemple de styles personnalisés pour les champs de formulaire */
        input[type="text"], input[type="file"] {
            width: 95%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #CCCCCC; /* Couleur de bordure des champs */
            margin-bottom: 10px;
        }


        /* Pour ajuster la taille du bouton Soumettre */
        .btn-primary {
            background-color: #3792CB; /* Couleur de fond du bouton de soumission */
            color: #FFFFFF; /* Couleur du texte du bouton de soumission */
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
        }

        /* Pour ajuster la largeur maximale du formulaire */
        .section-body {
            max-width: 800px;
            margin: 0 auto;
            background-color: #FFFFFF; /* Couleur de fond du formulaire */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2); /* Ombre légère */
        }

        .custom-button {
            background-color: blue;
            color: white;
        }
        body {
            background-color: #F2F5F8; /* Couleur de fond du corps */
        }

        .btn-primary:hover {
            background-color: #1E6FA8; /* Couleur de fond au survol du bouton de soumission */
        }
 
    </style>
</head>
<body>
<div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
           
                    <div class="card card-primary">
                      @if(Session::has('etudiant_created')) 
                        <div class= "alert alert-succes" role="alert">
                          {{Session::get('etudiant_created')}}
                        </div>
                      @endif
                    <form  action ="{{route('submit')}}" method="POST">
                            @csrf
                            
                        <div class="card-header">
                          <h4>Enregistrer un étudiant </h4>
                        </div>
                        <div class="card-body">
                          
                      

                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Nom</label>
                            <div class="col-sm-9">
                              <input type="text"  name ="nom" class="form-control" required="nom ">
                              
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Prenom</label>
                            <div class="col-sm-9">
                              <input type="text"  name ="prenom" class="form-control" required="prenom">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Matricule</label>
                            <div class="col-sm-9">
                              <input type="text"  name ="matricule" class="form-control" required="matricule">
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
                            <label class="col-sm-4 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="email" name="email" class="form-control" required="">
                              
                            </div>
                          </div>
                          
                          <div class="form-group row">
                              <label for="password" class="col-sm-4 col-form-label">Password</label>
                              <div class="col-sm-9">
                              <input id="password" type="password"  class="form-control pwstrength" data-indicator="pwindicator" name="password"  required="">
                              
                            </div>
                            </div>
                                <br>
                            <div>
                              <input type="submit" value="Enregistrer">
                            </div>

                           
                        
                          </form> 
                        </div>
                      </div>
                    
                    </div>
                  </div>
                  
                 
        </form>
</body>
</html>