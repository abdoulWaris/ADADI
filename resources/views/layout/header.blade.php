<header class="topbar">
            <nav class="navbar top-navbar navbar-expand-lg navbar-dark" >
                <a href="#">
                <img src="{{asset ('assets/images/accueil.jpeg')}}" style="height: 55px;" class="light-logo" alt="homepage" />
                </a>
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-lg-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Logo -->
                    <!-- -------------------------------------------------------------- -->
                    <a class="navbar-brand" href="{{route('home')}}">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon 
                            <img src="../assets/images/logo.png" alt="homepage" class="dark-logo" />-->
                            <!-- Light Logo icon -->
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text 
                             <img src="../assets/images/logo.png" alt="homepage" class="dark-logo" />-->
                             <!-- Light Logo text 
                             <img src="../assets/images/logo.png" class="light-logo" alt="homepage" />-->
                        </span>
                    </a>
                    <!-- -------------------------------------------------------------- -->
                    <!-- End Logo -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- -------------------------------------------------------------- -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- -------------------------------------------------------------- -->
                    <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- -------------------------------------------------------------- -->
                <!-- End Logo -->
                <!-- -------------------------------------------------------------- -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- -------------------------------------------------------------- -->
                    <!-- toggle and nav items -->
                    <!-- -------------------------------------------------------------- -->
                    <ul class="navbar-nav me-auto">
                        <!-- This is  -->
                        <!-- <li class="nav-item"> <a
                                class="nav-link sidebartoggler d-none d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li> -->
                    </ul>
                    <!-- -------------------------------------------------------------- -->
                    <!-- Right side toggle and nav items -->
                    <!-- -------------------------------------------------------------- -->
                    <ul class="navbar-nav justify-content-end">
                        <!-- -------------------------------------------------------------- -->
                        <!-- Search -->
                        <!-- -------------------------------------------------------------- -->
                        <li class="nav-item d-none d-md-block search-box"> <a
                                class="nav-link d-none d-md-block waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter">
                                <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                        <!-- -------------------------------------------------------------- -->
                        <!-- Comment -->
                        <!-- -------------------------------------------------------------- -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark"  href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end mailbox dropdown-menu-animate-up">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="border-bottom rounded-top py-3 px-4">
                                            <div class="mb-0 font-weight-medium fs-4">Notifications</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center notifications position-relative"
                                            style="height:230px;">
                                            <!-- Message --><!--
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-light-danger text-danger btn-circle">
                                                    <i data-feather="link" class="feather-sm fill-white"></i>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">Luanch Admin</h5> <span
                                                        class="fs-2 text-nowrap d-block time text-truncate fw-normal text-muted mt-1">Just see
                                                        the my new admin!</span> <span
                                                        class="fs-2 text-nowrap d-block subtext text-muted">9:30 AM</span>
                                                </div>
                                            </a>
                                            
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-light-success text-success btn-circle">
                                                    <i data-feather="calendar" class="feather-sm fill-white"></i>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">Event today</h5> <span
                                                        class="fs-2 text-nowrap d-block time text-truncate fw-normal text-muted mt-1">Just a
                                                        reminder that you have event</span> <span
                                                        class="fs-2 text-nowrap d-block subtext text-muted">9:10 AM</span>
                                                </div>
                                            </a>
                                            
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-light-info text-info btn-circle">
                                                    <i data-feather="settings" class="feather-sm fill-white"></i>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">Settings</h5> <span
                                                        class="fs-2 text-nowrap d-block time text-truncate fw-normal text-muted mt-1">You can
                                                        customize this template as you want</span> <span
                                                        class="fs-2 text-nowrap d-block subtext text-muted">9:08 AM</span>
                                                </div>
                                            </a>
                                            
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <span class="btn btn-light-primary text-primary btn-circle">
                                                    <i data-feather="users" class="feather-sm fill-white"></i>
                                                </span>
                                                <div class="w-75 d-inline-block v-middle ps-3">
                                                    <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">Pavan kumar</h5> <span
                                                        class="fs-2 text-nowrap d-block time text-truncate fw-normal text-muted mt-1">Just see
                                                        the my admin!</span> <span
                                                        class="fs-2 text-nowrap d-block subtext text-muted">9:02 AM</span>
                                                </div>
                                            </a>-->
                                        </div>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li>
                        <!-- -------------------------------------------------------------- -->
                        <!-- End Comment -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- -------------------------------------------------------------- -->
                        <!-- Messages -->
                        <!-- -------------------------------------------------------------- -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="2"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                    class="mdi mdi-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-end dropdown-menu-animate-up"
                                aria-labelledby="2">
                                <ul class="list-style-none">
                                    <li>
                                        <div class="border-bottom rounded-top py-3 px-4">
                                            <div class="mb-0 font-weight-medium fs-4">Nouveaux messages</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="message-center message-body position-relative"
                                            style="height:230px;">
                                            
                                        </div>
                                    </li>
                                    <li>
                                       
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">     
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" 
                                aria-haspopup="true" aria-expanded="false">   
                                <img src="{{ asset ('assets/images/users/1.jpg')}}" alt="user" width="30" class="profile-pic rounded-circle" />     
                                                   </a>                   
                                        <div class="dropdown-menu dropdown-menu-end user-dd animated flipInY">              
                                        <div class="d-flex no-block align-items-center p-3 bg-info text-white mb-2">  
                                        <div class=""><img src="{{asset('assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="60"></div>  
                                                        <div class="ms-2">                           
                                                            <h4 class="mb-0 text-white">{{ Auth::user()->name }}</h4>
                                                            <p class=" mb-0">{{ Auth::user()->email }}          
                                                                </div>                                
                                                                   </div>                                
                                                                                                                                                           
                                                                        <a class="dropdown-item" href="{{route('profile.edit')}}"><i data-feather="user"                                        
                                                                        class="feather-sm text-danger me-1 ms-1"></i> Voir mon profile</a>                                
                                                                        <div class="dropdown-divider"></div>                                
                                                                        <div class="pl-4 p-2">									
                                                                        <a href="{{route('logout')}}" class="btn d-block w-100 btn-info rounded-pill">
                                                                        <i data-feather="log-out" class="feather-sm text-success me-1 ms-1"></i>Déconnexion</a>								
                                                                    </div>                            
                                                                </div>                        
                                                            </li>
                    </ul>
                </div>
            </nav>
        </header>