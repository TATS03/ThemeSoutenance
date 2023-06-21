

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Hamster</title>
  <!-- General CSS Files --> 
  <link rel="stylesheet" href="{{asset('assets/css/app.min.css')}}">
  <link rel="stylesheet" href="assets/bundles/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/bundles/owlcarousel2/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/bundles/izitoast/css/iziToast.min.css">
  <link rel="stylesheet" href="assets/bundles/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="assets/bundles/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='{{asset('assets/img/favicon.ico')}}' /> 
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

  
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>
<body class="sidebar-gone light light-sidebar theme-white">
      

<!-- @include('partials/header') -->
<main>
           
        
      <!-- Main Content -->

    
      <div class="maim-content" style="min-height: 500x;" _msthidden="30">
        <section class="section">
          <div class="section-body">
          <div class="main-content" style="min-height: 500px;">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
           
            <div class="card card-primary">
              
            <form  action ="{{url('Professeur')}}" method="POST" class="needs-validation was-validated" novalidate="">
                    @csrf
                <div class="card-header">
                  <h4>Register prof </h4>
                </div>
                <div class="card-body">
                  
               

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Nom</label>
                    <div class="col-sm-9">
                      <input type="text"  name ="nom" class="form-control" required="nom Etudiants">
                      <div class="invalid-feedback">
                        Entrez votre nom !
                      </div>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="email" name="email" class="form-control" required="">
                      <div class="invalid-feedback">
                        Entrez votre Email ! 
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                      <label for="password" class="col-sm-4 col-form-label">Password</label>
                      <div class="col-sm-9">
                      <input id="password" type="password"  class="form-control pwstrength" data-indicator="pwindicator" name="password"  required="">
                      <div class="invalid-feedback">
                            Oh no! Password is invalid.
                          </div>
                    </div>
                    </div>

                    <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Facultes</label>
                  <div class="col-sm-9">
                          <select name="faculte" class="form-control">
                          <option>...</option>
                        <option>facultes des sciences</option>
                        <option>facultes des lettres </option>
                        
                      </select>
                     
                        
                       </div>  
                        </div>

                        <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Departement </label>
                  <div class="col-sm-9">
                          <select name="departement" class="form-control">
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
                      <button class="btn btn-primary">Submit</button>
                    </div>
                
                  </form>

                  
                </div>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="{{route('loginprof')}}" >Login</a>
              </div>
            </div>
          </div>
          
          <div class="col-12 col-sm-6 col-lg-3">
                <div class="card">
                  <div class="card-body text-center">
                    <div class="mb-2">Success Message</div>
                    <button class="btn btn-primary" id="toastr-2">Launch</button>
                  </div>
                </div>
              </div>
</form>
                
                     
      
                
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default" tabindex="2" style="overflow: hidden; outline: none; touch-action: none;">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked="">
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked="">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        <div id="ascrail2001" class="nicescroll-rails nicescroll-rails-vr" style="width: 8px; z-index: 999; cursor: default; position: absolute; top: 0px; left: -8px; height: 0px; touch-action: none; display: none;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; touch-action: none;"></div></div><div id="ascrail2001-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 8px; z-index: 999; top: -8px; left: 0px; position: absolute; cursor: default; display: none;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 6px; width: 0px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div></div></div>
      </div>

            </div>
            </div>
            </div>
     
            
            <!-- add content here -->
          </div>
        </section>
        <div class="settingSidebar" _msthidden="9">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default" tabindex="2" style="overflow: hidden; outline: none; touch-action: none;" _msthidden="9">
            <div class=" fade show active" _msthidden="9">
              <div class="setting-panel-header" _msttexthash="200239" _msthidden="1" _msthash="165">Setting Panel
              </div>
              <div class="p-15 border-bottom" _msthidden="3">
                <h6 class="font-medium m-b-10" _msttexthash="206258" _msthidden="1" _msthash="166">Select Layout</h6>
                <div class="selectgroup layout-color w-50" _msthidden="2">
                  <label class="selectgroup-item" _msthidden="1">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked="">
                    <span class="selectgroup-button" _msttexthash="59995" _msthidden="1" _msthash="167">Light</span>
                  </label>
                  <label class="selectgroup-item" _msthidden="1">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button" _msttexthash="43524" _msthidden="1" _msthash="168">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom" _msthidden="1">
                <h6 class="font-medium m-b-10" _msttexthash="199225" _msthidden="1" _msthash="169">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked="">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip" data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom" _msthidden="1">
                <h6 class="font-medium m-b-10" _msttexthash="152334" _msthidden="1" _msthash="170">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom" _msthidden="1">
                <div class="theme-setting-options" _msthidden="1">
                  <label class="m-b-0" _msthidden="1">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10" _msttexthash="172458" _msthidden="1" _msthash="171">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom" _msthidden="1">
                <div class="theme-setting-options" _msthidden="1">
                  <label class="m-b-0" _msthidden="1">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10" _msttexthash="198211" _msthidden="1" _msthash="172">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele" _msthidden="1">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme" _msthidden="1">
                  <i class="fas fa-undo"></i><font _mstmutation="1" _msttexthash="256165" _msthidden="1" _msthash="173"> Restore Default
                </font></a>
              </div>
            </div>
          </div>
        <div id="ascrail2001" class="nicescroll-rails nicescroll-rails-vr" style="width: 8px; z-index: 999; cursor: default; position: absolute; top: 0px; left: -8px; height: 0px; touch-action: none; display: none;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; touch-action: none;"></div></div><div id="ascrail2001-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 8px; z-index: 999; top: -8px; left: 0px; position: absolute; cursor: default; display: none;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 6px; width: 0px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div></div></div>
      </div>
     
  @include('partials/footer')


      

</body>
</html> 
         