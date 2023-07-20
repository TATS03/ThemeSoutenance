

<!DOCTYPE html>
<html lang="en">
<head>
<title>Creer Requete</title>
</head>



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
                                <form method="">
                                    <p>Rediriger cette requete a Mr/Mme,</p>
                                    <select class="form-control" name="nom" required>
                                        @foreach($teachers as $prof)
                                        <option>{{ $prof->nom }}</option>
                                        @endforeach
                                    </select>
                                        <br>
                                        <button class="btn btn-primary" _msttexthash="98280" _msthash="189"
                                            type="submit">Sauvegarder</button>
                                </form>
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
