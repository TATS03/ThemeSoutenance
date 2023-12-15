<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        .container {
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
<div class="col-12 col-md-6 col-lg-6">
    <div class="card card-primary">
    @if(Session::has('login_succes')) 
        <div class= "alert alert-succes" role="alert">
            {{Session::get('login_succes')}}
        </div>
    @endif
    <form  action ="{{route('e.logsubmit')}}" method="POST" class="needs-validation was-validated" novalidate="">
            @csrf
        <div class="card-header">
            <h4>Login</h4>
        </div>
        <div class="card-body">
            
            <div class="form-group row">
            <label class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" required="">
                <div class="invalid-feedback">
                
                </div>
            </div>
            </div>
            
            <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
            <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password"  required="">
            <div class="invalid-feedback">
                
                </div>

        </div>

        <br>
        <div>
            <input type="submit" value="Se Connecter">
        </div>


    
        </form>

        
    </div>
    </div>
</body>
</html>