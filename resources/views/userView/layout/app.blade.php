<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wedis | @yield('title.user')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('./frontend/css/style.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="{{ asset('./assets/images/logo-putih.png') }}" type="image/x-icon">
</head>

<body>
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box; ">
        <div class="container-xxl mx-auto p-0  position-relative header-2-1" style="font-family: 'Poppins', sans-serif">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="{{ url('/') }}">
                    <img style="margin-right: 0.75rem; width: 100px;" src="{{ asset('./assets/images/Logo-Font.png') }}"
                        alt="" />
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal"
                    data-bs-target="#targetModal-item">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
                    aria-labelledby="targetModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content bg-white border-0">
                            <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                                <a href="{{ url('/') }}" class="modal-title" id="targetModalLabel">
                                    <img style="margin-top: 0.5rem" src="{{ asset('./assets/images/Logo-Font.png') }}"
                                        alt="" />
                                </a>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Portfolio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Kontak</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                                @if (Auth::check())
                                    <div class="dropdown">
                                        <button class="dropdown-toggle" style="border: none; border-radius: 20px;"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="https://api.zoomit.co.id/assets/img/profile-customer/default.png"
                                                alt="Photo Profile" width="30px">
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="{{ url('/home') }}">Profile</a></li>
                                            <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Logout</a>
                                            </li>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </ul>
                                    </div>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-fill text-white">Masuk</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                    </ul>
                    <div class="gap-3">
                        @if (Auth::check())
                            <div class="dropdown">
                                <button class="dropdown-toggle" style="border: none; border-radius: 20px;"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="https://api.zoomit.co.id/assets/img/profile-customer/default.png"
                                        alt="Photo Profile" width="30px">
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ url('/home') }}">Profile</a></li>
                                    <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout</a>
                                    </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </ul>
                            </div>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-fill text-white">Masuk</a>
                        @endif
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <div class="container">
        @yield('user.content')
    </div>

    <footer class="page-footer font-small blue">

        <div class="container text-md-left">
            <div class="row">
                <div class="col-md-6 mt-md-0 mt-3 address">
                    <div class="logo font-red-hat-display">
                        <a class="modal-title" id="targetModalLabel">
                            <img style="margin-top: 0.5rem" src="{{ asset('./assets/images/logo-putih.png') }}"
                                width="120px" />
                        </a>
                    </div>
                    <div class="social-media">
                        <a href="https://www.facebook.com/wedisdotco" target="blank">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/dark/bi_facebook.svg"
                                alt="facebook" class="img-fluid mr-4" />
                        </a>
                        <a href="https://www.facebook.com/wedisdotco" target="blank">
                            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content10/dark/bi_instagram.svg"
                                alt="instagram" class="img-fluid mr-4" />
                        </a>
                    </div>
                    <div class="copyright font-red-hat-display">
                        2022 All rights reserved.
                    </div>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3" style="background-color: #2c3e57;" />
                <div class="row col-md-6 nav-footer">
                    <div class="col-md-6 mb-md-0 mb-3">
                        <p>Fitur</p>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Portfolio</a>
                            </li>
                            <li>
                                <a href="#!">Artikel</a>
                            </li>
                            <li>
                                <a href="#!">Tentang Kami</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 mb-md-0 mb-3">
                        <p>Kontak</p>
                        <ul class="list-unstyled">
                            <li>
                                <span class="text-white">
                                    <img src="{{ asset('./assets/images/logo-wa.png') }}" alt="wa"
                                        class="img-fluid " width="50px" />
                                    : +62 878-7850-8854</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    @stack('scripts')
</body>

</html>
