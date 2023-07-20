<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Hamster</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/owlcarousel2/dist/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/owlcarousel2/dist/assets/owl.theme.default.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/izitoast/css/iziToast.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/jqvmap/dist/jqvmap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/summernote/summernote-bs4.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bundles/bootstrap-social/bootstrap-social.css')}}">
    <link rel="stylesheet" href="{{asset('assets/bundles/prism/prism.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href="{{asset('assets/img/favicon.ico')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">


  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
  <!-- Custom style CSS -->

  <link rel='shortcut icon' type='image/x-icon' href="{{asset('assets/img/favicon.ico')}}" />
</head>

<style>
    .button-button{
        border-radius: 10px;
        border: none;
        margin: 0px 10px;
    }
</style>

<!--Delete all above ?-->
<div class="loader" style="display: none;"></div>


  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-justify"><line x1="21" y1="10" x2="3" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="3" y2="18"></line></svg></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg>
              </a></li>
            <li >

            <div>

                @if(auth()->user())
                  <h3 style="text-align:center; padding-top:6px;">  Welcome   {{auth()->user()->nom}}</h3>
                @endif
                </div>

            </li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle pullDown"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
              <span class="badge headerBadge1" _msttexthash="4914" _msthash="2">
                6 </span> </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown" _msthidden="27">


              <div class="dropdown-footer text-center pullDown" _msthidden="1">
                <a href="#" _msthidden="1"><font _mstmutation="1" _msttexthash="90428" _msthidden="1" _msthash="29">View All </font><i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle " _msthidden="13"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
            </a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right pullDown" _msthidden="13">
              <div class="dropdown-header" _msthidden="2"><font _mstmutation="1" _msttexthash="234351" _msthidden="1" _msthash="30">
                Notifications
                </font><div class="float-right" _msthidden="1">
                  <a href="#" _msttexthash="209768" _msthidden="1" _msthash="31">Mark All As Read</a>
                </div>
              </div>

              <div class="dropdown-footer text-center" _msthidden="1">
                <a href="#" _msthidden="1"><font _mstmutation="1" _msttexthash="90428" _msthidden="1" _msthash="42">View All </font><i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="{{route('login')}}" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/user.png" class="user-img-radious-style" _mstalt="60073" _msthash="43"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown" _msthidden="5">
              <div class="dropdown-title" _msttexthash="278577" _msthidden="1" _msthash="44">Hello</div>
                @if (auth()->check())
                    <form action="{{route('logout')}}" method="POST">
                        @CSRF
                        <button type="submit" class="btn-danger button-button">logout</button>
                    </form>
                @else
                        <a href="{{route('login')}}" class="button-button">Login</a>
                @endif
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2" tabindex="1" style="overflow: hidden; outline: none; touch-action: none;">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="#"> <img alt="image" src="assets/img/logo.png" class="header-logo" _mstalt="60073" _msthash="49"> <span class="logo-name" _msttexthash="59319" _msthash="50">Hamster</span>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header" _msttexthash="133900" _msthash="51">Principal</li>
            <li class="dropdown">
              <a href="{{route('new')}}"  class="nav-link"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-monitor"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg><span _msttexthash="226772" _msthash="52">Tableau de bord</span></a>
            </li>

            @if(auth()->user() != null)

              @if(auth()->user()->perso === 'Etudiant')
                <li class="menu-header" _msttexthash="0000000" _msthash="65">Interface Requetes</li>
                <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg><span _msttexthash="45175" _msthash="140">Etudiants</span></a>
                  <ul class="dropdown-menu" _msthidden="5">
                    <li _msthidden="1"><a class="nav-link" href="{{route('requete')}}" _msttexthash="176163" _msthidden="1" _msthash="55">creer Requetes</a></li>
                    <li _msthidden="1"><a href="{{route('listeETD')}}"  _msttexthash="234026" _msthidden="1" _msthash="144">Listes Etudiants</a></li>
                    <li _msthidden="1"><a href="{{route('listeReqsEtu',auth()->user()->id)}}"  _msttexthash="234026" _msthidden="1" _msthash="144">Mes Requete(S)</a></li>
                  </ul>
                </li>
                @endif

              @if(auth()->user()->perso ==='Professeur')
              <li class="menu-header" _msttexthash="2931006" _msthash="65"> Interface utilisateur</li>
              <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg><span _msttexthash="45175" _msthash="140">Professeurs</span></a>
                <ul class="dropdown-menu" _msthidden="5">
                  <li _msthidden="1"><a href="{{ route('listePROF') }}" _msttexthash="133354" _msthidden="1" _msthash="145">Listes Professeur</a></li>
                  <li _msthidden="1"><a class="nav-link" href="{{ route('listeREQ') }}" _msttexthash="176163" _msthidden="1" _msthash="55">Listes Requetes</a></li>
                  <li _msthidden="1"><a href="{{ route('listeETD') }}" _msttexthash="234026" _msthidden="1" _msthash="144">Listes Etudiants</a></li>
                </ul>
              </li>
              @endif

           @endif

            <li class="menu-header" _msttexthash="2939006" _msthash="65">Éléments  de statistiques </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg><span _msttexthash="95901" _msthash="53">Differents diagrames</span></a>
              <ul class="dropdown-menu" _msthidden="2">
                <li _msthidden="1"><a class="nav-link" href="#" _msttexthash="202826" _msthidden="1" _msthash="54">bar chart</a></li>
                <li _msthidden="1"><a class="nav-link" href="#" _msttexthash="176163" _msthidden="1" _msthash="55">pie chart</a></li>
                <li _msthidden="1"><a class="nav-link" href="#" _msttexthash="176163" _msthidden="1" _msthash="55">Donut chart</a></li>
              </ul>
            </li>

          </ul>
        </aside>
      </div>
