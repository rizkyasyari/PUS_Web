<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PUS App</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="landingpages_assets/assets/img/navbar-logo.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="landingpages_assets/css/styles.css" rel="stylesheet" />

    <!-- Styles -->
    {{--        <style>--}}
    {{--            html, body {--}}
    {{--                background-color: #fff;--}}
    {{--                color: #636b6f;--}}
    {{--                font-family: 'Nunito', sans-serif;--}}
    {{--                font-weight: 200;--}}
    {{--                height: 100vh;--}}
    {{--                margin: 0;--}}
    {{--            }--}}

    {{--            .full-height {--}}
    {{--                height: 100vh;--}}
    {{--            }--}}

    {{--            .flex-center {--}}
    {{--                align-items: center;--}}
    {{--                display: flex;--}}
    {{--                justify-content: center;--}}
    {{--            }--}}

    {{--            .position-ref {--}}
    {{--                position: relative;--}}
    {{--            }--}}

    {{--            .top-right {--}}
    {{--                position: absolute;--}}
    {{--                right: 10px;--}}
    {{--                top: 18px;--}}
    {{--            }--}}

    {{--            .content {--}}
    {{--                text-align: center;--}}
    {{--            }--}}

    {{--            .title {--}}
    {{--                font-size: 84px;--}}
    {{--            }--}}

    {{--            .links > a {--}}
    {{--                color: #636b6f;--}}
    {{--                padding: 0 25px;--}}
    {{--                font-size: 13px;--}}
    {{--                font-weight: 600;--}}
    {{--                letter-spacing: .1rem;--}}
    {{--                text-decoration: none;--}}
    {{--                text-transform: uppercase;--}}
    {{--            }--}}

    {{--            .m-b-md {--}}
    {{--                margin-bottom: 30px;--}}
    {{--            }--}}
    {{--        </style>--}}
</head>
{{--    <body>--}}
{{--        <div class="flex-center position-ref full-height">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="content">--}}
{{--                <div class="title m-b-md">--}}
{{--                    Laravel--}}
{{--                </div>--}}

{{--                <div class="links">--}}
{{--                    <a href="https://laravel.com/docs">Docs</a>--}}
{{--                    <a href="https://laracasts.com">Laracasts</a>--}}
{{--                    <a href="https://laravel-news.com">News</a>--}}
{{--                    <a href="https://blog.laravel.com">Blog</a>--}}
{{--                    <a href="https://nova.laravel.com">Nova</a>--}}
{{--                    <a href="https://forge.laravel.com">Forge</a>--}}
{{--                    <a href="https://vapor.laravel.com">Vapor</a>--}}
{{--                    <a href="https://github.com/laravel/laravel">GitHub</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </body>--}}

<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="landingpages_assets/assets/img/navbar-logo.png" alt="" /></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Fitur</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                {{--                    @if (Route::has('login'))--}}
                {{--                        <div class="top-right links">--}}
                {{--                            @auth--}}
                {{--                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Home</a></li>--}}
                {{--                            @else--}}
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Login</a></li>

                {{--                                @if (Route::has('register'))--}}
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Register</a></li>
                {{--                                @endif--}}
                {{--                            @endauth--}}
                {{--                        </div>--}}
                {{--                    @endif--}}
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Selamat Datang Di PUSApp</div>
        <div class="masthead-heading text-uppercase">Aplikasi Pembayaran Uang Sekolah</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">PELAJARI LEBIH LANJUT</a>
    </div>
</header>
<!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
            <h3 class="section-subheading text-muted">Kami menyediakan layanan penuh kepada pelanggan.</h3>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                <h4 class="my-3">Pembayaran</h4>
                <p class="text-muted">Mempermudah orang tua dalam proses pembayaran uang sekolah yang dapat dilakukan kaopanpun dan dimanapun.</p>
            </div>
            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                <h4 class="my-3">Desain Responsif</h4>
                <p class="text-muted">Menyediakan aplikasi yang responsive yang dapat di akses melalui website dan mobile.</p>
            </div>
            <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                <h4 class="my-3">Keamanan</h4>
                <p class="text-muted">Memberikan rasa aman dan nyaman kepada pihak sekolah dan orang tua dalam proses transaksi pembayaran uang sekolah.</p>
            </div>
        </div>
    </div>
</section>
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Fitur</h2>
            <h3 class="section-subheading text-muted">Kami menyediakan fitur yang lengkap.</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="landingpages_assets/assets/img/portfolio/pendaftaran.png" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Pendaftaran Online</div>
                        <div class="portfolio-caption-subheading text-muted">Mendaftarkan Sekolah Dimana Saja Dan Kapan Saja</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="landingpages_assets/assets/img/portfolio/tagihan.png" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Rincian Tagihan</div>
                        <div class="portfolio-caption-subheading text-muted">Orang Tua Dapat Melihat Detail Tagihan</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="landingpages_assets/assets/img/portfolio/riwayat.png" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Riwayat Pembayaran</div>
                        <div class="portfolio-caption-subheading text-muted">Orang Tua Dapat Melihat Detail Riwayat Pembayaran</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="landingpages_assets/assets/img/portfolio/pembayaran.png" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Pembayaran</div>
                        <div class="portfolio-caption-subheading text-muted">Orang Tua Dapat Melakukan Pembayaran Langsung di Aplikasi Dengan Banyak Metode Pembayaran</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="landingpages_assets/assets/img/portfolio/notif.png" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Notifikasi</div>
                        <div class="portfolio-caption-subheading text-muted">Aplikasi Akan Memberikan Notifikasi Sebagai Pengingat</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="landingpages_assets/assets/img/portfolio/chat.png" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Chat</div>
                        <div class="portfolio-caption-subheading text-muted">Orang Tua Dan Bendahara Dapat Berkomunikasi Langsung Menggunakan Fitur Chat </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About-->
{{--    <section class="page-section" id="about">--}}
{{--        <div class="container">--}}
{{--            <div class="text-center">--}}
{{--                <h2 class="section-heading text-uppercase">About</h2>--}}
{{--                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>--}}
{{--            </div>--}}
{{--            <ul class="timeline">--}}
{{--                <li>--}}
{{--                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>--}}
{{--                    <div class="timeline-panel">--}}
{{--                        <div class="timeline-heading">--}}
{{--                            <h4>2009-2011</h4>--}}
{{--                            <h4 class="subheading">Our Humble Beginnings</h4>--}}
{{--                        </div>--}}
{{--                        <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="timeline-inverted">--}}
{{--                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.jpg" alt="" /></div>--}}
{{--                    <div class="timeline-panel">--}}
{{--                        <div class="timeline-heading">--}}
{{--                            <h4>March 2011</h4>--}}
{{--                            <h4 class="subheading">An Agency is Born</h4>--}}
{{--                        </div>--}}
{{--                        <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.jpg" alt="" /></div>--}}
{{--                    <div class="timeline-panel">--}}
{{--                        <div class="timeline-heading">--}}
{{--                            <h4>December 2012</h4>--}}
{{--                            <h4 class="subheading">Transition to Full Service</h4>--}}
{{--                        </div>--}}
{{--                        <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="timeline-inverted">--}}
{{--                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="" /></div>--}}
{{--                    <div class="timeline-panel">--}}
{{--                        <div class="timeline-heading">--}}
{{--                            <h4>July 2014</h4>--}}
{{--                            <h4 class="subheading">Phase Two Expansion</h4>--}}
{{--                        </div>--}}
{{--                        <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="timeline-inverted">--}}
{{--                    <div class="timeline-image">--}}
{{--                        <h4>--}}
{{--                            Be Part--}}
{{--                            <br />--}}
{{--                            Of Our--}}
{{--                            <br />--}}
{{--                            Story!--}}
{{--                        </h4>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </section>--}}
<!-- Team-->
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Developer yang sudah berpengalaman.</h3>
        </div>
        <div class="row center">
            <div class="col-lg-4">
                <div class="team-member">
{{--                    <img class="mx-auto rounded-circle" src="landingpages_assets/assets/img/team/1.jpg" alt="" />--}}
{{--                    <h4>Kay Garland</h4>--}}
{{--                    <p class="text-muted">Lead Designer</p>--}}
{{--                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>--}}
{{--                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>--}}
{{--                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>--}}
                </div>
            </div>
            <div class="col-lg-4 align-self-center">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="landingpages_assets/assets/img/team/2.jpg" alt="" />
                    <h4>Muhammad Rizky Asyari</h4>
                    <p class="text-muted">Lead Developer</p>
                    <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/rizky_asyari" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://web.facebook.com/RizkyAsyari7" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/muhammad-rizky-asyari/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
{{--            <div class="col-lg-4">--}}
{{--                <div class="team-member">--}}
{{--                    <img class="mx-auto rounded-circle" src="landingpages_assets/assets/img/team/3.jpg" alt="" />--}}
{{--                    <h4>Diana Petersen</h4>--}}
{{--                    <p class="text-muted">Lead Developer</p>--}}
{{--                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>--}}
{{--                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>--}}
{{--                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Software Engineer and Android Enthusiasts.</p></div>
        </div>
    </div>
</section>
<!-- Clients-->
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="landingpages_assets/assets/img/logos/midtrans.png" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="landingpages_assets/assets/img/logos/designmodo.jpg" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="landingpages_assets/assets/img/logos/themeforest.jpg" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="landingpages_assets/assets/img/logos/creative-market.jpg" alt="" /></a>
            </div>
        </div>
    </div>
</div>
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Hubungi Kami Jika Anda Punya Pertanyaan.</h3>
        </div>
        <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
            </div>
        </form>
    </div>
</section>
<!-- Footer-->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">Copyright © PUSApp 2020</div>
            <div class="col-lg-4 my-3 my-lg-0">
{{--                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>--}}
{{--                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>--}}
{{--                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>--}}
            </div>
            <div class="col-lg-4 text-lg-right">
                <a class="mr-3" href="#!">Privacy Policy</a>
                <a href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>
<!-- Portfolio Modals-->
<!-- Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="landingpages_assets/assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Fitur</h2>
                            <p class="item-intro text-muted">Pendaftaran Online</p>
                            <img class="img-fluid d-block mx-auto" src="landingpages_assets/assets/img/portfolio/pendaftaran.png" alt="" />
                            <p>Sekolah yang ingin menggunakan aplikasi bisa langsung mendaftarkan sekolahnya ke aplikasi pembayaran uang sekolah dengan mengisi form yang sudah disediakan oleh aplikasi</p>
                            <ul class="list-inline">
{{--                                <li>Date: January 2020</li>--}}
{{--                                <li>Client: Threads</li>--}}
{{--                                <li>Category: Illustration</li>--}}
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times mr-1"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="landingpages_assets/assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Fitur</h2>
                            <p class="item-intro text-muted">Daftar Tagihan</p>
                            <img class="img-fluid d-block mx-auto" src="landingpages_assets/assets/img/portfolio/tagihan.png" alt="" />
                            <p>Orang tua dapat melihat detail tagihan rutin dan tagihan operasional anak dari awal masuk sekolah sampai tamat.</p>
                            <ul class="list-inline">
{{--                                <li>Date: January 2020</li>--}}
{{--                                <li>Client: Explore</li>--}}
{{--                                <li>Category: Graphic Design</li>--}}
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times mr-1"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 3-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="landingpages_assets/assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Fitur</h2>
                            <p class="item-intro text-muted">Riwayat Pembayaran</p>
                            <img class="img-fluid d-block mx-auto" src="landingpages_assets/assets/img/portfolio/riwayat.png" alt="" />
                            <p>Orang tua dapat melihat detail riwayat pembayaran apa saja yang telah dibayarkan kepada pihak sekolah.</p>
                            <ul class="list-inline">
{{--                                <li>Date: January 2020</li>--}}
{{--                                <li>Client: Finish</li>--}}
{{--                                <li>Category: Identity</li>--}}
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times mr-1"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 4-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="landingpages_assets/assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Fitur</h2>
                            <p class="item-intro text-muted">Pembayaran</p>
                            <img class="img-fluid d-block mx-auto" src="landingpages_assets/assets/img/portfolio/pembayaran.png" alt="" />
                            <p>Orang tua dapat melakukan pembayaran langsung di aplikasi dengan banyak metode pembayaran yang bisa dilakukan yaitu Card Payment, Bank Transfer, Cardless Credit, Direct Debit, E-Wallet, dan tersedia juga metode pembayaran ke Alfamart.</p>
                            <ul class="list-inline">
{{--                                <li>Date: January 2020</li>--}}
{{--                                <li>Client: Lines</li>--}}
{{--                                <li>Category: Branding</li>--}}
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times mr-1"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 5-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="landingpages_assets/assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Fitur</h2>
                            <p class="item-intro text-muted">Notifikasi</p>
                            <img class="img-fluid d-block mx-auto" src="landingpages_assets/assets/img/portfolio/notif.png" alt="" />
                            <p>Jika waktu pembayaran akan tiba, aplikasi akan memberikan notifikasi sebagai pengingat orang tua untuk segera melaksanakan pembayaran.</p>
                            <ul class="list-inline">
{{--                                <li>Date: January 2020</li>--}}
{{--                                <li>Client: Southwest</li>--}}
{{--                                <li>Category: Website Design</li>--}}
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times mr-1"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 6-->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="landingpages_assets/assets/img/close-icon.svg" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Fitur</h2>
                            <p class="item-intro text-muted">Chat</p>
                            <img class="img-fluid d-block mx-auto" src="landingpages_assets/assets/img/portfolio/chat.png" alt="" />
                            <p>Jika ada terjadi kendala dalam proses pembayaran, orang tua dan bendahara dapat berkomunikasi langsung menggunakan fitur chat yang telah disediakan di dalam aplikasi. Fitur ini juga sebagai media pengaduan jika terjadi kendala dalam pembayaran.</p>
                            <ul class="list-inline">
{{--                                <li>Date: January 2020</li>--}}
{{--                                <li>Client: Window</li>--}}
{{--                                <li>Category: Photography</li>--}}
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times mr-1"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="landingpages_assets/assets/mail/jqBootstrapValidation.js"></script>
<script src="landingpages_assets/assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="landingpages_assets/js/scripts.js"></script>
</body>
</html>
