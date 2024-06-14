    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="" class="logo d-flex align-items-center">
                <img src="/assets/img/favicon.png" alt="">
                <span class="d-none d-lg-block">
                    E-Gelodge
                </span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>


        <nav class="header-nav ms-auto">
     

                <!-- End actif Nav -->
                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                      
                                <img src="/assets/img/maison-isolee-terrain.jpg" alt="logo" srcset="" class="rounded-circle">
                            
                        <span class="d-none d-md-block dropdown-toggle ps-2">
                            Admin
                        </span>
                    </a>
                    <!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                           
                                <h6>Firstname</h6>
                                <span>Name</span>
                          
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                       
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                       
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Besoin d'aides?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Deconnexion</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->
            </ul>
        </nav>
        <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->