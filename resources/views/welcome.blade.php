<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wedis | IT Project Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('./frontend/css/style.css') }}">
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

            <div>
                <div class="mx-auto d-flex flex-lg-row flex-column hero">
                    <!-- Left Column -->
                    <div
                        class="left-column d-flex flex-lg-grow-1 flex-column align-items-lg-start text-lg-start align-items-center text-center">
                        <p class="text-caption">#wedisco</p>
                        <h1 class="title-text-big">
                            Wedis
                        </h1>
                        <p style="margin-top: -20px; font-size: 20px;" align="left" class="text-muted mb-5">
                            penyedia
                            layanan untuk
                            membantu menyelesaikan proyek IT</p>
                        <div
                            class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
                            <a href="whatsapp://send?text=Halo saya mau konsultasi bersama Wedis&phone=+6287878508854" class="btn d-inline-flex mb-md-0 btn-try text-white">
                                Konsultasi Gratis
                            </a>
                        </div>
                    </div>
                    <!-- Right Column -->
                    <div class="right-column text-center d-flex justify-content-center pe-0">
                        <img id="img-fluid" class="h-auto mw-100"
                            src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-1.png"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box">
        <div class="content-2-2 container-xxl mx-auto p-0  position-relative"
            style="font-family: 'Poppins', sans-serif">
            <div class="text-center title-text">
                <h1 class="text-title">Kenapa Wedis ?</h1>
                <p class="text-caption" style="margin-left: 3rem; margin-right: 3rem">
                    Solusi permasalahan IT Anda dan bergerak di bidang jasa dan desain IT
                </p>
            </div>

            <div class="grid-padding text-center">
                <div class="row">
                    <div class="col-lg-4 column">
                        <div class="icon">
                            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-8.png"
                                alt="" />
                        </div>
                        <h3 class="icon-title">Teknologi</h3>
                        <p class="icon-caption">
                            Kami mengembangkan Android,
                            aplikasi web,dan e-commerce.
                        </p>
                    </div>
                    <div class="col-lg-4 column">
                        <div class="icon">
                            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-9.png"
                                alt="" />
                        </div>
                        <h3 class="icon-title">Strategi</h3>
                        <p class="icon-caption">
                            Kami membantu Anda memahami pelanggan dan membuat
                            cetak biru untuk memecahkan masalah
                        </p>
                    </div>
                    <div class="col-lg-4 column">
                        <div class="icon">
                            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-10.png"
                                alt="" />
                        </div>
                        <h3 class="icon-title">Komunikasi</h3>
                        <p class="icon-caption">
                            Kami memberikan pelayanan dengan Komunikasi
                            yang interaktif melalui segala sosial media kami.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card-block">
                <div class="card">
                    <div class="d-flex flex-lg-row flex-column align-items-center">
                        <div class="me-lg-3">
                            <img src="http://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content2/Content-2-1%20(1).png"
                                alt="" />
                        </div>
                        <div class="flex-grow-1 text-lg-start text-center card-text">
                            <h3 class="card-title">
                                Konsultasikan bisnis atau proyek anda sekarang
                            </h3>
                            <p class="card-caption">
                                Kami bantu untuk analisis bisnis membantu organisasi memahami pengembangan pasar atau
                                bisnis.
                            </p>
                        </div>
                        <div class="card-btn-space">
                            <button class="btn btn-card text-white">Konsultasi</button>
                            <button class="btn btn-outline">Portfolio</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- START: PRODUCTS -->
    <section class="products position-relative overflow-hidden">
        <section class="porto">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-md-10">
                        <h4 class="headline">
                            Portfolio Kami
                        </h4>
                    </div>
                    <div class="col-md-2 text-md-right">
                        <a href="#" class="link h-100 d-inline-block text-decoration-none">
                            Selengkapnya
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="sub-headline">
                            Ini adalah beberapa portfolio yang kami miliki.
                        </p>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center gap-4 porto-img">
                    <div>
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-1.png"
                            class="img-fluid" />
                    </div>
                    <div class="d-flex flex-column gap-3">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-2.png"
                            class="img-fluid">
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-3.png"
                            class="img-fluid mt-auto" />
                    </div>
                    <div>
                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/porto-4.png"
                            class="img-fluid" />
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- END: PRODUCTS -->

    <footer class="page-footer font-small blue">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
            crossorigin="anonymous" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet"
            type="text/css" />

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
    </template>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>
