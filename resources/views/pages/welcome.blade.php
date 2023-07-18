

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

              <div class="col-12 col-sm-12 col-lg-9">
              <div class="card author-box card-primary">
        
                <div class="card-header">
                  <h4>Revenue chart</h4>
                  <div class="card-header-action">
                    <div class="dropdown">
                      <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle" aria-expanded="false">Options</a>
                      <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 26px, 0px); top: 0px; left: 0px; will-change: transform;">
                        <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                        <a href="#" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i>
                          Delete</a>
                      </div>
                    </div>
                    <a href="#" class="btn btn-primary">View All</a>
                  </div>
                </div>




                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-9">
                      <div id="chart1" style="min-height: 244px;"><div id="apexchartsyokbrfi9g" class="apexcharts-canvas apexchartsyokbrfi9g" style="width: 621px; height: 230px;"><svg id="SvgjsSvg4321" width="621" height="230" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="621" height="230"><div class="apexcharts-legend right position-top" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: 15px; top: -20px;"><div class="apexcharts-legend-series" rel="1" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(120, 107, 237); color: rgb(120, 107, 237); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-family: Helvetica, Arial, sans-serif;">High - 2019</span></div><div class="apexcharts-legend-series" rel="2" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(153, 155, 156); color: rgb(153, 155, 156); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Low - 2019</span></div></div><style type="text/css">
                        



                                    .apexcharts-legend {
                                      display: flex;
                                      overflow: auto;
                                      padding: 0 10px;
                                    }

                                    .apexcharts-legend.position-bottom, .apexcharts-legend.position-top {
                                      flex-wrap: wrap
                                    }
                                    .apexcharts-legend.position-right, .apexcharts-legend.position-left {
                                      flex-direction: column;
                                      bottom: 0;
                                    }

                                    .apexcharts-legend.position-bottom.left, .apexcharts-legend.position-top.left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {
                                      justify-content: flex-start;
                                    }

                                    .apexcharts-legend.position-bottom.center, .apexcharts-legend.position-top.center {
                                      justify-content: center;  
                                    }

                                    .apexcharts-legend.position-bottom.right, .apexcharts-legend.position-top.right {
                                      justify-content: flex-end;
                                    }

                                    .apexcharts-legend-series {
                                      cursor: pointer;
                                    }

                                    .apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series{
                                      display: flex;
                                      align-items: center;
                                    }

                                    .apexcharts-legend-text {
                                      position: relative;
                                      font-size: 14px;
                                    }

                                    .apexcharts-legend-text *, .apexcharts-legend-marker * {
                                      pointer-events: none;
                                    }

                                    .apexcharts-legend-marker {
                                      position: relative;
                                      display: inline-block;
                                      cursor: pointer;
                                      margin-right: 3px;
                                    }
                                    
                                    .apexcharts-legend.right .apexcharts-legend-series, .apexcharts-legend.left .apexcharts-legend-series{
                                      display: inline-block;
                                    }

                                    .apexcharts-legend-series.no-click {
                                      cursor: auto;
                                    }

                                    .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
                                      display: none !important;
                                    }

                                    .inactive-legend {
                                      opacity: 0.45;
                                    }</style></foreignObject><g id="SvgjsG4323" class="apexcharts-inner apexcharts-graphical" transform="translate(65.25, 30)"><defs id="SvgjsDefs4322"><clipPath id="gridRectMaskyokbrfi9g"><rect id="SvgjsRect4328" width="550.75" height="162.348" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskyokbrfi9g"><rect id="SvgjsRect4329" width="565.75" height="177.348" x="-10" y="-10" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><rect id="SvgjsRect4327" width="1" height="157.348" x="436.09999999999997" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG4396" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG4397" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText4398" font-family="Helvetica, Arial, sans-serif" x="0" y="186.348" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan4399" style="font-family: Helvetica, Arial, sans-serif;">Jan</tspan><title>Jan</title></text><text id="SvgjsText4400" font-family="Helvetica, Arial, sans-serif" x="109.15000000000002" y="186.348" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan4401" style="font-family: Helvetica, Arial, sans-serif;">Feb</tspan><title>Feb</title></text><text id="SvgjsText4402" font-family="Helvetica, Arial, sans-serif" x="218.3" y="186.348" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan4403" style="font-family: Helvetica, Arial, sans-serif;">Mar</tspan><title>Mar</title></text><text id="SvgjsText4404" font-family="Helvetica, Arial, sans-serif" x="327.45" y="186.348" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan4405" style="font-family: Helvetica, Arial, sans-serif;">Apr</tspan><title>Apr</title></text><text id="SvgjsText4406" font-family="Helvetica, Arial, sans-serif" x="436.59999999999997" y="186.348" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan4407" style="font-family: Helvetica, Arial, sans-serif;">May</tspan><title>May</title></text><text id="SvgjsText4408" font-family="Helvetica, Arial, sans-serif" x="545.7499999999999" y="186.348" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan4409" style="font-family: Helvetica, Arial, sans-serif;">Jun</tspan><title>Jun</title></text></g><line id="SvgjsLine4410" x1="0" y1="158.348" x2="545.75" y2="158.348" stroke="#78909c" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG4422" class="apexcharts-grid"><line id="SvgjsLine4423" x1="109.15" y1="158.348" x2="109.15" y2="164.348" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine4424" x1="218.3" y1="158.348" x2="218.3" y2="164.348" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine4425" x1="327.45000000000005" y1="158.348" x2="327.45000000000005" y2="164.348" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine4426" x1="436.6" y1="158.348" x2="436.6" y2="164.348" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine4427" x1="0" y1="0" x2="545.75" y2="0" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine4428" x1="0" y1="26.224666666666668" x2="545.75" y2="26.224666666666668" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine4429" x1="0" y1="52.449333333333335" x2="545.75" y2="52.449333333333335" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine4430" x1="0" y1="78.674" x2="545.75" y2="78.674" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine4431" x1="0" y1="104.89866666666667" x2="545.75" y2="104.89866666666667" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine4432" x1="0" y1="131.12333333333333" x2="545.75" y2="131.12333333333333" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine4433" x1="0" y1="157.348" x2="545.75" y2="157.348" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line><rect id="SvgjsRect4434" width="545.75" height="26.224666666666668" x="0" y="0" rx="0" ry="0" fill="#f3f3f3" opacity="0" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-gridRow"></rect><rect id="SvgjsRect4435" width="545.75" height="26.224666666666668" x="0" y="26.224666666666668" rx="0" ry="0" fill="transparent" opacity="0" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-gridRow"></rect><rect id="SvgjsRect4436" width="545.75" height="26.224666666666668" x="0" y="52.449333333333335" rx="0" ry="0" fill="#f3f3f3" opacity="0" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-gridRow"></rect><rect id="SvgjsRect4437" width="545.75" height="26.224666666666668" x="0" y="78.674" rx="0" ry="0" fill="transparent" opacity="0" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-gridRow"></rect><rect id="SvgjsRect4438" width="545.75" height="26.224666666666668" x="0" y="104.89866666666667" rx="0" ry="0" fill="#f3f3f3" opacity="0" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-gridRow"></rect><rect id="SvgjsRect4439" width="545.75" height="26.224666666666668" x="0" y="131.12333333333333" rx="0" ry="0" fill="transparent" opacity="0" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-gridRow"></rect><line id="SvgjsLine4441" x1="0" y1="157.348" x2="545.75" y2="157.348" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine4440" x1="0" y1="1" x2="0" y2="157.348" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG4331" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG4364" class="apexcharts-series Low---2019" data:longestSeries="true" rel="2" data:realIndex="1"><path id="apexcharts-line-1" d="M 0 148.35668571428573C 38.20249999999999 148.35668571428573 70.94749999999999 130.37405714285714 109.14999999999999 130.37405714285714C 147.3525 130.37405714285714 180.0975 44.956571428571436 218.29999999999998 44.956571428571436C 256.5025 44.956571428571436 289.2475 98.90445714285714 327.45 98.90445714285714C 365.6525 98.90445714285714 398.3975 67.43485714285714 436.59999999999997 67.43485714285714C 474.80249999999995 67.43485714285714 507.5475 121.38274285714286 545.75 121.38274285714286" fill="none" fill-opacity="1" stroke="rgba(153,155,156,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="1" clip-path="url(#gridRectMaskyokbrfi9g)" pathTo="M 0 148.35668571428573C 38.20249999999999 148.35668571428573 70.94749999999999 130.37405714285714 109.14999999999999 130.37405714285714C 147.3525 130.37405714285714 180.0975 44.956571428571436 218.29999999999998 44.956571428571436C 256.5025 44.956571428571436 289.2475 98.90445714285714 327.45 98.90445714285714C 365.6525 98.90445714285714 398.3975 67.43485714285714 436.59999999999997 67.43485714285714C 474.80249999999995 67.43485714285714 507.5475 121.38274285714286 545.75 121.38274285714286" pathFrom="M -1 179.82628571428572L -1 179.82628571428572L 109.14999999999999 179.82628571428572L 218.29999999999998 179.82628571428572L 327.45 179.82628571428572L 436.59999999999997 179.82628571428572L 545.75 179.82628571428572"></path><g id="SvgjsG4365" class="apexcharts-series-markers-wrap"><g id="SvgjsG4367" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><circle id="SvgjsCircle4368" r="6" cx="0" cy="148.35668571428573" class="apexcharts-marker no-pointer-events wvv80sdti" stroke="#ffffff" fill="#999b9c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="6"></circle><circle id="SvgjsCircle4369" r="6" cx="109.14999999999999" cy="130.37405714285714" class="apexcharts-marker no-pointer-events w5ty94jx9f" stroke="#ffffff" fill="#999b9c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="6"></circle></g><g id="SvgjsG4375" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><circle id="SvgjsCircle4376" r="6" cx="218.29999999999998" cy="44.956571428571436" class="apexcharts-marker no-pointer-events wpy8x108u" stroke="#ffffff" fill="#999b9c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="1" default-marker-size="6"></circle></g><g id="SvgjsG4380" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><circle id="SvgjsCircle4381" r="6" cx="327.45" cy="98.90445714285714" class="apexcharts-marker no-pointer-events w5b0hmetd" stroke="#ffffff" fill="#999b9c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="1" default-marker-size="6"></circle></g><g id="SvgjsG4385" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><circle id="SvgjsCircle4386" r="6" cx="436.59999999999997" cy="67.43485714285714" class="apexcharts-marker no-pointer-events wjf6ja5nb" stroke="#ffffff" fill="#999b9c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="1" default-marker-size="6"></circle></g><g id="SvgjsG4390" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><circle id="SvgjsCircle4391" r="6" cx="545.75" cy="121.38274285714286" class="apexcharts-marker no-pointer-events wnzblf1ga" stroke="#ffffff" fill="#999b9c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="1" default-marker-size="6"></circle></g></g><g id="SvgjsG4366" class="apexcharts-datalabels"><g id="SvgjsG4370" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><text id="SvgjsText4372" font-family="Helvetica, Arial, sans-serif" x="0" y="137.35668571428573" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#999b9c" class="apexcharts-datalabel" cx="0" cy="137.35668571428573" style="font-family: Helvetica, Arial, sans-serif;">7</text><text id="SvgjsText4374" font-family="Helvetica, Arial, sans-serif" x="109.14999999999999" y="119.37405714285714" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#999b9c" class="apexcharts-datalabel" cx="109.14999999999999" cy="119.37405714285714" style="font-family: Helvetica, Arial, sans-serif;">11</text></g><g id="SvgjsG4377" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><text id="SvgjsText4379" font-family="Helvetica, Arial, sans-serif" x="218.29999999999998" y="33.956571428571436" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#999b9c" class="apexcharts-datalabel" cx="218.29999999999998" cy="33.956571428571436" style="font-family: Helvetica, Arial, sans-serif;">30</text></g><g id="SvgjsG4382" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><text id="SvgjsText4384" font-family="Helvetica, Arial, sans-serif" x="327.45" y="87.90445714285714" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#999b9c" class="apexcharts-datalabel" cx="327.45" cy="87.90445714285714" style="font-family: Helvetica, Arial, sans-serif;">18</text></g><g id="SvgjsG4387" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><text id="SvgjsText4389" font-family="Helvetica, Arial, sans-serif" x="436.59999999999997" y="56.43485714285714" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#999b9c" class="apexcharts-datalabel" cx="436.59999999999997" cy="56.43485714285714" style="font-family: Helvetica, Arial, sans-serif;">25</text></g><g id="SvgjsG4392" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><text id="SvgjsText4394" font-family="Helvetica, Arial, sans-serif" x="545.75" y="110.38274285714286" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#999b9c" class="apexcharts-datalabel" cx="545.75" cy="110.38274285714286" style="font-family: Helvetica, Arial, sans-serif;">13</text></g></g></g><g id="SvgjsG4332" class="apexcharts-series High---2019" data:longestSeries="true" rel="1" data:realIndex="0"><path id="apexcharts-line-0" d="M 0 157.348C 38.20249999999999 157.348 70.94749999999999 112.39142857142858 109.14999999999999 112.39142857142858C 147.3525 112.39142857142858 180.0975 116.88708571428572 218.29999999999998 116.88708571428572C 256.5025 116.88708571428572 289.2475 17.982628571428563 327.45 17.982628571428563C 365.6525 17.982628571428563 398.3975 35.965257142857155 436.59999999999997 35.965257142857155C 474.80249999999995 35.965257142857155 507.5475 35.965257142857155 545.75 35.965257142857155" fill="none" fill-opacity="1" stroke="rgba(120,107,237,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskyokbrfi9g)" pathTo="M 0 157.348C 38.20249999999999 157.348 70.94749999999999 112.39142857142858 109.14999999999999 112.39142857142858C 147.3525 112.39142857142858 180.0975 116.88708571428572 218.29999999999998 116.88708571428572C 256.5025 116.88708571428572 289.2475 17.982628571428563 327.45 17.982628571428563C 365.6525 17.982628571428563 398.3975 35.965257142857155 436.59999999999997 35.965257142857155C 474.80249999999995 35.965257142857155 507.5475 35.965257142857155 545.75 35.965257142857155" pathFrom="M -1 179.82628571428572L -1 179.82628571428572L 109.14999999999999 179.82628571428572L 218.29999999999998 179.82628571428572L 327.45 179.82628571428572L 436.59999999999997 179.82628571428572L 545.75 179.82628571428572"></path><g id="SvgjsG4333" class="apexcharts-series-markers-wrap"><g id="SvgjsG4335" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><circle id="SvgjsCircle4336" r="6" cx="0" cy="157.348" class="apexcharts-marker no-pointer-events wmayx5xd3" stroke="#ffffff" fill="#786bed" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="6"></circle><circle id="SvgjsCircle4337" r="6" cx="109.14999999999999" cy="112.39142857142858" class="apexcharts-marker no-pointer-events wphxy8w2t" stroke="#ffffff" fill="#786bed" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="6"></circle></g><g id="SvgjsG4343" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><circle id="SvgjsCircle4344" r="6" cx="218.29999999999998" cy="116.88708571428572" class="apexcharts-marker no-pointer-events wpjmt72hp" stroke="#ffffff" fill="#786bed" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="6"></circle></g><g id="SvgjsG4348" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><circle id="SvgjsCircle4349" r="6" cx="327.45" cy="17.982628571428563" class="apexcharts-marker no-pointer-events w579ubied" stroke="#ffffff" fill="#786bed" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="6"></circle></g><g id="SvgjsG4353" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><circle id="SvgjsCircle4354" r="6" cx="436.59999999999997" cy="35.965257142857155" class="apexcharts-marker no-pointer-events wm0fczww" stroke="#ffffff" fill="#786bed" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="6"></circle></g><g id="SvgjsG4358" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><circle id="SvgjsCircle4359" r="6" cx="545.75" cy="35.965257142857155" class="apexcharts-marker no-pointer-events wasn78313" stroke="#ffffff" fill="#786bed" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="6"></circle></g></g><g id="SvgjsG4334" class="apexcharts-datalabels"><g id="SvgjsG4338" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><text id="SvgjsText4340" font-family="Helvetica, Arial, sans-serif" x="0" y="146.348" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#786bed" class="apexcharts-datalabel" cx="0" cy="146.348" style="font-family: Helvetica, Arial, sans-serif;">5</text><text id="SvgjsText4342" font-family="Helvetica, Arial, sans-serif" x="109.14999999999999" y="101.39142857142858" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#786bed" class="apexcharts-datalabel" cx="109.14999999999999" cy="101.39142857142858" style="font-family: Helvetica, Arial, sans-serif;">15</text></g><g id="SvgjsG4345" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><text id="SvgjsText4347" font-family="Helvetica, Arial, sans-serif" x="218.29999999999998" y="105.88708571428572" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#786bed" class="apexcharts-datalabel" cx="218.29999999999998" cy="105.88708571428572" style="font-family: Helvetica, Arial, sans-serif;">14</text></g><g id="SvgjsG4350" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><text id="SvgjsText4352" font-family="Helvetica, Arial, sans-serif" x="327.45" y="6.982628571428563" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#786bed" class="apexcharts-datalabel" cx="327.45" cy="6.982628571428563" style="font-family: Helvetica, Arial, sans-serif;">36</text></g><g id="SvgjsG4355" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><text id="SvgjsText4357" font-family="Helvetica, Arial, sans-serif" x="436.59999999999997" y="24.965257142857155" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#786bed" class="apexcharts-datalabel" cx="436.59999999999997" cy="24.965257142857155" style="font-family: Helvetica, Arial, sans-serif;">32</text></g><g id="SvgjsG4360" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskyokbrfi9g)"><text id="SvgjsText4362" font-family="Helvetica, Arial, sans-serif" x="545.75" y="24.965257142857155" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#786bed" class="apexcharts-datalabel" cx="545.75" cy="24.965257142857155" style="font-family: Helvetica, Arial, sans-serif;">32</text></g></g></g></g><line id="SvgjsLine4442" x1="0" y1="0" x2="545.75" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine4443" x1="0" y1="0" x2="545.75" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG4444" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG4445" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG4446" class="apexcharts-point-annotations"></g></g><g id="SvgjsG4411" class="apexcharts-yaxis" rel="0" transform="translate(23.25, 0)"><g id="SvgjsG4412" class="apexcharts-yaxis-texts-g"><text id="SvgjsText4413" font-family="Helvetica, Arial, sans-serif" x="20" y="31.6" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">40</text><text id="SvgjsText4414" font-family="Helvetica, Arial, sans-serif" x="20" y="57.924666666666674" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">34</text><text id="SvgjsText4415" font-family="Helvetica, Arial, sans-serif" x="20" y="84.24933333333334" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">28</text><text id="SvgjsText4416" font-family="Helvetica, Arial, sans-serif" x="20" y="110.57400000000001" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">22</text><text id="SvgjsText4417" font-family="Helvetica, Arial, sans-serif" x="20" y="136.89866666666668" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">17</text><text id="SvgjsText4418" font-family="Helvetica, Arial, sans-serif" x="20" y="163.22333333333336" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">11</text><text id="SvgjsText4419" font-family="Helvetica, Arial, sans-serif" x="20" y="189.54800000000003" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">5</text></g><g id="SvgjsG4420" class="apexcharts-yaxis-title"><text id="SvgjsText4421" font-family="Helvetica, Arial, sans-serif" x="9.92138671875" y="108.674" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#373d3f" class="apexcharts-yaxis-title-text apexcharts-yaxis-title" style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-90 -8.11767578125 104.67400360107422)">Income</text></g></g></svg><div class="apexcharts-tooltip light" style="left: 360.172px; top: 39.5px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">May</div><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(120, 107, 237);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">High - 2019: </span><span class="apexcharts-tooltip-text-value">32</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group active" style="display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(153, 155, 156);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label">Low - 2019: </span><span class="apexcharts-tooltip-text-value">25</span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom" style="left: 477.123px; top: 189.348px;"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 26.4531px;">May</div></div></div></div>
                                       


                                     
       
                           
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