<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'SIPPIDUM')</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet"
        href="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-icons/bootstrap-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" type="image/x-icon" />

    @stack('link')
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo" srcset="" /></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>


                        <li class="sidebar-item">
                            <a href="/jaksa" class="sidebar-link">
                                <i class="bi bi-grid-fill"></i>
                                <span>Jaksa</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="/penyidik" class="sidebar-link">
                                <i class="bi bi-grid-fill"></i>
                                <span>Penyidik</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>

        <div id="main" class="layout-navbar">
            <div class="container">

                <header class="mb-3">
                    <nav class="navbar navbar-expand navbar-light">
                        <div class="container-fluid">
                            <a href="#" class="burger-btn d-block">
                                <i class="bi bi-justify fs-3"></i>
                            </a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                    <li class="nav-item dropdown me-1">
                                        <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="bi bi-envelope bi-sub fs-4 text-gray-600"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <h6 class="dropdown-header">Mail</h6>
                                            </li>
                                            <li><a class="dropdown-item" href="#">No new mail</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown me-3">
                                        <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <i class="bi bi-bell bi-sub fs-4 text-gray-600"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="dropdownMenuButton">
                                            <li>
                                                <h6 class="dropdown-header">Notifications</h6>
                                            </li>
                                            <li><a class="dropdown-item">No notification available</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="user-menu d-flex">
                                            <div class="user-name text-end me-3">
                                                <h6 class="mb-0 text-gray-600">John Ducky</h6>
                                                <p class="mb-0 text-sm text-gray-600">Administrator</p>
                                            </div>
                                            <div class="user-img d-flex align-items-center">
                                                <div class="avatar avatar-md">
                                                    <img
                                                        src="{{ asset('images/faces/1.jpg') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Hello, John!</h6>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i>
                                                My
                                                Profile</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                                Settings</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"><i class="icon-mid bi bi-wallet me-2"></i>
                                                Wallet</a>
                                        </li>
                                        <li>
                                            <hr class="dropdown-divider" />
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#"><i
                                                    class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </header>

                @yield('main')

                <section id="footer">
                    <div class="container">
                      <hr />
                      <div class="footer">
                        <div class="row justify-content-center">
                          <div class="col-lg-4">Template by <a href="https://zuramai.github.io/mazer/" target="_blank" rel="noopener noreferrer">Ahmad Saugi</a></div>
                          <div class="col-lg-4 text-center"><p>©2021. Built by Devin Winando</p></div>
                          <div class="col-lg-4">
                            <div class="icon d-lg-flex justify-content-end">
                              <a href="https://github.com/DevinWinando" target="_blank" rel="noopener noreferrer" class="pe-3 text-dark"><i class="fab fa-github fa-1x"></i></a>
                              <a href="https://www.linkedin.com/in/devin-winando-6a4427208/" target="_blank" rel="noopener noreferrer" class="pe-3 text-dark"><i class="fab fa-linkedin fa-1x"></i></a>
                              <a href="https://www.facebook.com/profile.php?id=100004774064921" target="_blank" rel="noopener noreferrer" class="pe-3 text-dark"><i class="fab fa-facebook fa-1x"></i></a>
                              <a href="https://www.instagram.com/devin.winando/" target="_blank" rel="noopener noreferrer" class="pe-3 text-dark"><i class="fab fa-instagram fa-1x"></i></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
            </div>

        </div>
    </div>

    <script src="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    @stack('script')
    
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
