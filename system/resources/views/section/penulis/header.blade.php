<header id="topnav">
    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="{{ url("public/$penulis->poto") }}" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name d-none d-xl-inline-block ml-2">
                            {{ $penulis->nama }}<i class="mdi mdi-chevron-down"></i> 
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome ! {{ $penulis->nama }}</h6>
                        </div>

                        <a href="{{ url("penulis-profil/$penulis->id") }}" class="dropdown-item notify-item">
                            <i class="mdi mdi-account-outline"></i>
                            <span>Profile</span>
                        </a>

                        

                        <div class="dropdown-divider"></div>

                        <a href="{{ ('logout') }}" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>

                

            </ul>

            <div class="logo-box">
                <a href="index.html" class="logo text-center">
                    <span class="logo-lg">
                            <img src="{{ url('public/penulis') }}/4.png" alt="" height="26">
                    </span>
                    <span class="logo-sm">
                    <img src="{{ url('public/penulis') }}/4.png" alt="" height="22">
                    </span>
                </a>
            </div>

            <div id="navigation">
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="{{ url('penulis') }}">
                            <i class="ti-home"></i>Dashboard
                        </a>
                    </li>

                    <li class="has-submenu">
                        <a href="{{ url('blog') }}">
                            <i class="ti-files"></i>Blog
                        </a>
                    </li>

                   
                </ul>

                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</header>