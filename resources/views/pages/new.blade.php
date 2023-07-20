
<!DOCTYPE html>
<html lang="en">

<body class="sidebar-gone light light-sidebar theme-white">
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
<div class="loader" style="display: none;"></div>
@include('partials/header')
<main>
    <div class="row ">
        <div class="col-5 mx-auto" >
            <div class="card">
                <div class="card-header">
                    <h2>WELCOME</h2>
                </div>
                <div class="card-body">
                    <div class="owl-carousel owl-theme slider" id="slider1">
                        <div><img alt="image" src="{{asset('assets/img/blog/i7.png')}}"></div>
                        <div><img alt="image" src="{{asset('assets/img/blog/i6.png')}}"></div>
                        <div><img alt="image" src="{{asset('assets/img/blog/i8.png')}}"></div>
                        <div><img alt="image" src="{{asset('assets/img/blog/i9.png')}}"></div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Main Content -->
        <div class="main-content" style="min-height: 856px;" _msthidden="8">
            <section class="section">
                <div class="section-body">
                    <div class="col-12 col-sm-12 col-lg-9">
                        <div class="card author-box card-primary">
                            <div class="card-body">
                            <div class="author-box-left">
                                    <img alt="image" src="assets/img/users/user-1.png" class="rounded-circle author-box-picture">

                            </div>


                            <div class="author-box-details">
                                <div class="author-box-name">
                                    <a href="#">Utilisateurs </a>
                                </div>
                                    <div class="author-box-job"> Vous devez vous authentifier pour commencer</div>
                                    <a href="{{route('login')}}"
                                        class="btn btn-primary mt-3 follow"
                                        data-follow-action="alert('follow clicked');"
                                        data-unfollow-action="alert('unfollow clicked');">
                                        Creer un Compte / Login</a>
                                <div class="author-box-description">
                                    <p>Pour utiliser ce site Web, vous devez être authentifié. Créez un compte ou connectez-vous en cliquant sur le bouton</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</main>

@include('partials/footer')

</body>
</html>
