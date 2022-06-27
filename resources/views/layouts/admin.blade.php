<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard - MAN 2 Batola</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('img/logo.png') }}" rel="icon">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
</head>

<body style="background-color: #f1f2f7;">
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-home"></i>Dashboard </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.galeri.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.galeri.index') }}"><i class="menu-icon fa fa-image"></i>Galeri </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.ekskul.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.ekskul.index') }}"><i class="menu-icon fa fa-futbol-o"></i>Ekskul
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.mapel.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.mapel.index') }}"><i class="menu-icon fa fa-sitemap"></i>Mata
                            Pelajaran </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.guru.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.guru.index') }}"><i class="menu-icon fa fa-users"></i>Guru & Staff
                        </a>
                    </li>
                    <li class="{{ request()->routeIs('admin.psb.*') ? 'active' : '' }}">
                        <a href="{{ route('admin.psb.index') }}"><i class="menu-icon fa fa-graduation-cap"></i>PSB
                        </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <div class="d-flex align-items-center pt-2">
                        <a class="" href="{{ route('dashboard') }}"><img
                                src="{{ asset('img/logo.png') }}" alt="Logo" style="height: 30px;"></a>
                        <h6 class="ml-3">MAN 2 BATOLA</h6>
                    </div>
                    {{-- <a class="navbar-brand hidden" href="{{ route('dashboard') }}"><img
                            src="{{ asset('img/logo.png') }}" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> --}}
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">

                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{ asset('img/avatar.jpeg') }}"
                                alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();"><i
                                    class="fa fa-power-off"></i>Logout</a>
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                @yield('content')
            </div>
            <!-- .animated -->
        </div>
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('admin/assets/js/main.js') }}"></script>
</body>

</html>
