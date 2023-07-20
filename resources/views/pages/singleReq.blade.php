

<!DOCTYPE html>
<html lang="en">
<head>
<title>Voir Une requete</title>
</head>

<?php

$fileNames = explode(",",$requeteChoisis->file);

?>

<body class="sidebar-gone light light-sidebar theme-white">


@include('partials/header')

<main>

    <!-- Main Content -->
    <div class="main-content" style="min-height: 856px;" _msthidden="9">
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
                                @if($requeteChoisis->etat == 0)
                                <form action="{{route('requeteupdate',['id'=>$requeteChoisis->id])}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <p>Rediriger cette requete de Mr/Mme <b>{{$requeteChoisis->nom}}</b> a Mr/Mme,</p>
                                    <select class="form-control" name="newName" required>
                                        @foreach($teachers as $prof)
                                        <option>{{ $prof->nom }}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <button class="btn btn-primary" _msttexthash="98280" _msthash="189"
                                    type="submit">Rediriger</button>
                                </form>
                                @endif
                                <br>
                            <div>
                                <h5>Suget : <b> {{$requeteChoisis->object}} </b> </h5>
                                <br>
                                <h5>Message Par L'etudiat :</h5>
                                <p>
                                    {{$requeteChoisis->message}}
                                </p>

                                <h5>Les differents Pieces joints</h5>
                                @foreach($fileNames as $file)
                                <div style="margin-bottom: 50px;">
                                    <?php
                                    $extension = explode(".",$file)[1];
                                    // echo $extension;
                                    ?>
                                    @if($extension == "pdf")
                                    <embed src="{{ asset("uploads/requetes/{$requeteChoisis->matricule}-{$requeteChoisis->nom}/files/$file") }}" type="application/pdf" width="100%" height="800px" >
                                    @elseif($extension == "jpg" || $extension == "png" || $extension == "jpeg")
                                    <img style="width:100%;" src="{{asset("uploads/requetes/{$requeteChoisis->matricule}-{$requeteChoisis->nom}/files/$file")}}" alt="">
                                    @endif
                                </div>
                                @endforeach
                            </div>

                            <div>
                                <p>Etat De la requete :
                                    <span> <b>
                                        @if($requeteChoisis->etat == 0)
                                            En attente
                                        @elseif($requeteChoisis->etat == 1)
                                            Requete Valide
                                        @elseif($requeteChoisis->etat == 2)
                                            Requete Rejeter
                                        @endif
                                        </b></span>
                                </p>
                            </div>
                            @if(auth()->user()->perso ==='Professeur' && $requeteChoisis->etat == 0)
                            <div style="display:flex;justify-content:space-around;">
                                <form action="{{route('requetevalider',['id'=>$requeteChoisis->id])}}" method="POST">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-primary" _msttexthash="98280"
                                    _msthash="189" type="submit">Valider cette
                                    requete</button>
                                </form>
                                <form action="{{route('requeterejeter',['id'=>$requeteChoisis->id])}}" method="POST">
                                @csrf
                                @method('PUT')
                                <button class="btn btn-danger" _msttexthash="98280"
                                    _msthash="189" type="submit">Rejeter cette
                                    requete</button>
                                </form>
                            </div>
                            @endif
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<!-- Votre modal -->
<div id="successModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <p id="successMessage"></p>
    </div>
</div>

<!-- JavaScript -->


@include('partials/footer')

</body>
</html>
