

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body class="sidebar-gone light light-sidebar theme-white">

<?php

    echo($errors);
?>


@include('partials/header')
<main>
    <div class="main-content" _msthidden="9">
    <section class="section">
        <div class="section-body">
            <div class="main-content" style="min-height: 856px;">
                <section class="section">
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-6">
                                <div class="card card-primary">
                                <form  action ="{{route('listeETD')}}" method="POST" >
                                    @csrf
                                    <div class="card-header">
                                        <h4>Login</h4>
                                    </div>
                                    <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"> Email</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control"  name="email" required autofocus >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="password" class="col-sm-4 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                    <input id="password" type="password" class="form-control"  name="password" required>
                                    @if($errors->any())
                                        <div class="text-danger-all">
                                            <p class="error">Wrong Credentials !</p>
                                        </div>
                                    @endif
                                    </div>
                                    </div>
                                    <button class="btn btn-primary">Submit</button>

                                </form>
                                </div>
                            </div>
                            <!-- pour le register des prof -->
                            <div class="mb-4 text-muted text-center">
                            <h4>Register Professeur</h4>
                                <p>New Teacher? <a href="{{route('signprof')}}" >Register</a></p>
                            </div>
                            <!-- pour le rgister des etudiant -->
                            <div class="mb-4 text-muted text-center">
                                <h4>Register Etudiant</h4>
                                <p>New Student? <a href="{{route('sign')}}" >Register</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    </div>
    <!-- add content here -->
    </div>
    </section>
    </div>
</main>

@include('partials/footer')




</body>
</html>
