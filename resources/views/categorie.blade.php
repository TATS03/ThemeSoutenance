<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Categorie</title>
  
</head>
<body>

    <div class="container">
   
     <br>
        @if(Session::has('cat_created')) 
            <div class= "alert alert-succes" role="alert">
                {{Session::get('cat_created')}}
            </div>
        @endif
        <form action="{{ route('cat.submit') }}" method="POST">
            @csrf
            <br>
            <div class="form-group row">
                <label for="nom" class="form-label">Nom </label>
                <br> 
                <div class="col-sm-9">
                    <input type="text" id="nom" name="nom" required>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="lieu_depot" class="form-label" >Lieu de dépot </label>
                <br>
                <div class="col-sm-9">
                    <input type="text" id="lieu_depot" name="lieu_depot" required>
                </div>
                
            </div>
            <br>
            <div class="form-group row">
                <label for="heures_depot" class="form-label">Heure de dépot </label>
                <br>
                <div class="col-sm-9">
                    <input type="text" id="heures_depot" name="heures_depot" required>
                </div>
                
            </div>
            <br>
            <div class="form-group row">
                <label for="pieces_jointes" class="form-label">Pieces Jointes </label>
                <br>
                <div class="col-sm-9">
                    <input type="text" id="pieces_jointes" name="pieces_jointes" required>
                </div>
                
            </div>
            <br>
            <div class="form-group row">
                <label for="maquette" class="form-label">Maquette</label>
                <br>
                <div class="col-sm-9">
                    <input type="File" class="form-control"  id="maquette" name="maquette">
                </div>
                
            </div>
            <br>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary custom-button">Soumettre</button>
            </div>
           
            
        </form>
    </div>

</body>
</html>