<header class="header-main">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-6">
                <div class="main_logo" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="1000" >
                  <a href="{{route('UI_index')}}"><img src="{{ asset('public/frontend/assets/images/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 d-flex justify-content-end align-items-center">
                <a href="{{ route('UI_contactUs') }}" class="btn btn-primary" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="1000">Get In Touch</a>
                    <div class="navbar navbar-dark">
                      <div class="container d-flex justify-content-end p-0">


                        <a class="nav-button" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="1000" >
                          <div class="nav-progress"></div>
                          <span id="nav-icon3" class="nav-button-wrap">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                          </span>
                        </a>

                      </div>
                    </div> <!--navbar end-->

                    <div class="fixed-top dineuron-menu mega-menu">
                      <div class="flex-center">
                        <div class="container">
                          <div class="row">

                            <div class="col-md-8">
                              <div class="p-5">
                                <ul class="nav flex-column">
                                    <li class="nav-item delay-1"><a class="nav-link" href="{{ route('UI_index') }}">HOME</a></li>
                                    <li class="nav-item delay-2"><a class="nav-link" href="{{ route('UI_aboutUs') }}">ABOUT US</a></li>
                                    <li class="nav-item delay-7"><a class="nav-link" href="{{ route('UI_career') }}">CAREER</a></li>
                                    {{-- <li class="nav-item delay-7"><a class="nav-link" href="Career_detail.html">CAREER DETAIL</a></li> --}}
                                    <li class="nav-item delay-8"><a class="nav-link" href="{{ route('UI_contactUs') }}">CONTACT US</a></li>
                                    <li class="nav-item delay-8"><a class="nav-link" href="{{ route('UI_portfolio') }}">PORTFOLIO</a></li>
                                    {{-- <li class="nav-item delay-8"><a class="nav-link" href="Portfolio_detail.html">PORTFOLIO DETAIL</a></li> --}}
                                    <li class="nav-item delay-8"><a class="nav-link" href="{{ route('UI_service') }}">SERVICES</a></li>
                                    {{-- <li class="nav-item delay-8"><a class="nav-link" href="Services_detail.html">SERVICES DETAIL</a></li> --}}
                                  </ul>
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="mega-menu-details">
                                <div class="p-5">
                                <h6 class="h6">Contact</h6>
                                <nav class="mega-menu-sub-nav">
                                    <ul>
                                        <li><a href="tel:+19176072400">+1 917 607 2400</a></li>
                                        <li><a href="mailto:info@digitalogies.com">info@digitalogies.com</a></li>
                                    </ul>
                                </nav>

                                <h6 class="h6">Social</h6>
                                <nav class="mega-menu-sub-nav">
                                    <ul>
                                        <li><a href="https://www.linkedin.com/company/digitalogies/" target="_blank">LinkedIn</a></li>
                                        <li><a href="https://www.instagram.com/digitalogies/" target="_blank">Instagram</a></li>
                                        <li><a href="https://www.facebook.com/digitalogies">Facebook</a></li>
                                    </ul>
                                </nav>
                              </div>
                            </div>
                            </div>

                          </div>
                        </div>
                      </div>
                    </div> <!--dineuron-menu end-->
            </div>
        </div>
    </div>
</header>




