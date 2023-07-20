<!DOCTYPE html>
<html lang="en">
<head>
</head>
    <body class="sidebar-gone light light-sidebar theme-white">
    <!-- @include('partials/header') -->
        <div class="maim-content" style="min-height: 500x;" _msthidden="30">
            <section class="section">
                <div class="section-body">
                    <div class="main-content" style="min-height: 500px;">
                        <section class="section">
                            <div class="section-body">
                                <div class="row">
                                    <div class="col-12 col-md-6 col-lg-6">
                                        <div class="card card-primary">
                                            <form  action ="{{route('createProf')}}" method="POST">
                                            @csrf
                                            <div class="card-header">
                                                <h4>Register prof </h4>
                                            </div>
                                            <div class="card-body">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Nom</label>
                                                <div class="col-sm-9">
                                                    <input type="text"  name ="nom" class="form-control" required>
                                                <div class="invalid-feedback">
                                                    Entrez votre nom !
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Email</label>
                                                    <div class="col-sm-9">
                                                    <input type="email" name="email" class="form-control" required>
                                                    <div class="invalid-feedback">
                                                        Entrez votre Email !
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="password" class="col-sm-4 col-form-label">Password</label>
                                                <div class="col-sm-9">
                                                    <input id="password" type="password"  class="form-control pwstrength" data-indicator="pwindicator" name="password"  required>
                                                <div class="invalid-feedback">
                                                    Oh no! Password is invalid.
                                                </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Facultes</label>
                                                <div class="col-sm-9">
                                                    <select name="faculte" class="form-control" required>
                                                        <option>...</option>
                                                        <option>facultes des sciences</option>
                                                        <option>facultes des lettres </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-form-label">Departement </label>
                                                <div class="col-sm-9">
                                                    <select name="departement" class="form-control" required>
                                                        <option>...</option>
                                                        <option>Bios </option>
                                                        <option>Chimie</option>
                                                        <option>Informatique</option>
                                                        <option>Physique</option>
                                                        <option>Maths</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="card-footer text-right">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                            </form>
                                        </div>
                                        </div>
                                    <div class="mb-4 text-muted text-center">
                                    Already Registered? <a href="{{route('loginprof')}}" >Login</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
        </div>
    @include('partials/footer')
    </body>
</html>
