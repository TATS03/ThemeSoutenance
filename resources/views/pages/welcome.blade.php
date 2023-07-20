

<!DOCTYPE html>
<html lang="en">




<body class="sidebar-gone light light-sidebar theme-white">


@include('partials/header')
<main>

  <div class="main-content" style="padding-left: 30;padding-right: 0;">
          <!-- <section class="section"> -->

              <div class="row  ">
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
                      <div class="clearfix"></div>

                      <a href="{{route('login')}}" class="btn btn-primary mt-3 follow"  data-follow-action="alert('follow clicked');" data-unfollow-action="alert('unfollow clicked');">cliquez</a>
                    </div>


                    <div class="author-box-details">
                      <div class="author-box-name">
                        <a href="#">Utilisateurs </a>
                      </div>
                      <div class="author-box-job"> Universiter de yaounde 1 </div>
                      <div class="author-box-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                          consequat.</p>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
                      <div class="row">
                        <div class="col-lg col-md-4 col-sm-4 col-xs-4">
                          <div class="list-inline text-center">
                            <div class="list-inline-item p-r-30"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-circle col-green"><circle cx="12" cy="12" r="10"></circle><polyline points="16 12 12 8 8 12"></polyline><line x1="12" y1="16" x2="12" y2="8"></line></svg>
                              <h5 class="m-b-0">6200</h5>
                              <p class="text-muted font-14 m-b-0">Rquetes soumis</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg col-md-4 col-sm-4 col-xs-4">
                          <div class="list-inline text-center">
                            <div class="list-inline-item p-r-30"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-circle col-orange"><circle cx="12" cy="12" r="10"></circle><polyline points="8 12 12 16 16 12"></polyline><line x1="12" y1="8" x2="12" y2="16"></line></svg>
                              <h5 class="m-b-0">1150</h5>
                              <p class="text-muted font-14 m-b-0">Requetes traiter </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg col-md-4 col-sm-4 col-xs-4">
                          <div class="list-inline text-center">
                            <div class="list-inline-item p-r-30"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right-circle col-red"><circle cx="12" cy="12" r="10"></circle><polyline points="16 12 12 8 8 12"></polyline><line x1="12" y1="16" x2="12" y2="8"></line></svg>
                              <h5 class="mb-0 m-b-0">5050</h5>
                              <p class="text-muted font-14 m-b-0"> Requetes inachever</p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="resize-triggers"><div class="expand-trigger"><div style="width: 300px; height: 100px;"></div></div><div class="contract-trigger"></div></div></div>
                                       <div class="col-lg-3">
                                         <div class="row mt-5">
                                           <div class="col-7 col-xl-7 mb-3">moyene soumis </div>
                                           <div class="col-5 col-xl-5 mb-3">
                                             <span class="text-big">92%</span>
                                             <sup class="col-red">+10%</sup>
                                           </div>
                                           <div class="col-7 col-xl-7 mb-3">moyenne traiter</div>
                                           <div class="col-5 col-xl-5 mb-3">
                                             <span class="text-big">28%</span>
                                             <sup class="text-danger">9%</sup>
                                           </div>
                                           <div class="col-7 col-xl-7 mb-3">moyenne inachever </div>
                                           <div class="col-5 col-xl-5 mb-3">
                                             <span class="text-big">64%</span>
                                             <sup class="col-red">+16%</sup>
                                           </div>

                                         </div>
                                       </div>
                                     </div>
                                  </div>
                            </div>

                        </div>



              <div class="col-12 col-sm-12 col-lg-9">
              <div class="card author-box card-primary">

                <div class="card-body p-0">
                  <div class="table-responsive">

                                    <div class="card-header">
                                      <h4>suggestions</h4>
                                      <form class="card-header-form">
                                        <input type="text" name="search" class="form-control" placeholder="Search">
                                      </form>
                                    </div>
                                    <div class="card-body">


                                       <div class="support-ticket media pb-1 mb-3">
                                        <img src="assets/img/users/user-1.png" class="user-img mr-2" alt="">
                                        <div class="media-body ml-3">

                                          <div class="badge badge-pill badge-success mb-1 float-right">admis</div>
                                          <span class="font-weight-bold">#17G4567</span>

                                          <p class="my-1">requetes conforme et valide </p>
                                          <small class="text-muted">push by <span class="font-weight-bold font-13"> Mr Aboubakar</span>
                                            &nbsp;&nbsp; - 1 day ago</small>
                                        </div>
                                      </div>

                                      <div class="support-ticket media pb-1 mb-3">
                                        <img src="assets/img/users/user-1.png" class="user-img mr-2" alt="">
                                        <div class="media-body ml-3">

                                          <div class="badge badge-pill badge-danger mb-1 float-right">echec</div>
                                          <span class="font-weight-bold">#17G4567</span>

                                          <p class="my-1">requetes  non conforme et invalide </p>
                                          <small class="text-muted">push by <span class="font-weight-bold font-13"> Mr Aboubakar</span>
                                            &nbsp;&nbsp; - 2 day ago</small>
                                        </div>
                                      </div>

                                       <div class="support-ticket media pb-1 mb-3">
                                        <img src="assets/img/users/user-1.png" class="user-img mr-2" alt="">
                                        <div class="media-body ml-3">

                                          <div class="badge badge-pill badge-warning mb-1 float-right">en cours</div>
                                          <span class="font-weight-bold">#17G4567</span>

                                          <p class="my-1">en attente </p>
                                          <small class="text-muted">push by <span class="font-weight-bold font-13"> Mr Aboubakar</span>
                                            &nbsp;&nbsp; - 1 day ago</small>
                                        </div>
                                      </div>

                                    </div>




        </section>



 </main>

  @include('partials/footer')




</body>
</html>
