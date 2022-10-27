<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Wedis | IT Project Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('./frontend/css/style.css') }}">
</head>

<body>
    <section class="h-100 w-100 bg-white" style="box-sizing: border-box; ">
        <div class="container-xxl mx-auto p-0  position-relative header-2-1" style="font-family: 'Poppins', sans-serif">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a href="#">
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
                                <a class="modal-title" id="targetModalLabel">
                                    <img style="margin-top: 0.5rem" src="{{ asset('./assets/images/Logo-Font.png') }}"
                                        alt="" />
                                </a>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Beranda</a>
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
                                <button class="btn btn-default btn-no-fill">
                                    Log In
                                </button>
                                <button class="btn btn-fill text-white">Try Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kontak</a>
                        </li>
                    </ul>
                    <div class="gap-3">
                        <button class="btn btn-default btn-no-fill">
                            Log In
                        </button>
                        <button class="btn btn-fill text-white">Try Now</button>
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
                        <p style="margin-top: -20px; font-size: 20px;" class="text-muted mb-5">penyedia layanan untuk
                            membantu menyelesaikan proyek</p>
                        <div
                            class="d-flex flex-sm-row flex-column align-items-center mx-lg-0 mx-auto justify-content-center gap-3">
                            <button class="btn d-inline-flex mb-md-0 btn-try text-white">
                                Konsultasi Gratis
                            </button>
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
                                Fast Business Management in 30 minutes
                            </h3>
                            <p class="card-caption">
                                Our tools for business analysis helps an organization
                                understand<br class="d-none d-lg-block" />
                                market or business development.
                            </p>
                        </div>
                        <div class="card-btn-space">
                            <button class="btn btn-card text-white">Buy Now</button>
                            <button class="btn btn-outline">Demo Version</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- START: PRODUCTS -->
    <section class="products position-relative overflow-hidden">
        <section class="right-circle">
            <div class="d-flex justify-content-end">
                <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Content/Content-workly/Right-Circle.png"
                    alt="circle" />
            </div>
        </section>

        <section class="porto">
            <div class="row d-flex align-items-center">
                <div class="col-md-10">
                    <h4 class="headline">
                        Outputs from Our Platform
                    </h4>
                </div>
                <div class="col-md-2 text-md-right">
                    <a href="#" class="link h-100 d-inline-block text-decoration-none">
                        See more
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="sub-headline">
                        Our platform specialize on helping our clients work process and communication. <br>
                        Below are the products produced using our platform.
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
        </section>
    </section>
    <!-- END: PRODUCTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
</body>

</html>
