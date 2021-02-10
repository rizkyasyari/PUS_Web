<!DOCTYPE html>
<html>

<!-- Mirrored from www.nobleui.com/laravel/template/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Mar 2020 13:28:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Aplikasi Pembayaran Uang Sekolah</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="_token" content="P8Y7YrIUH6LSkPBag5pjb6bCyyqhdrNqDsAQHdMW">

    <link rel="icon" type="image/x-icon" href="landingpages_assets/assets/img/navbar-logo.png" />

    <!-- plugin css -->
    <link media="all" type="text/css" rel="stylesheet" href="{{url('fonts/feather-font/css/iconfont.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{url('plugins/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!-- end plugin css -->

    <!---Feather css-->
    <link href="{{url('plugins/feather/feather.css')}}" rel="stylesheet">

    <link media="all" type="text/css" rel="stylesheet" href="{{url('plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{url('plugins/select2/select2.min.css')}}">

    <!-- common css -->
    <link media="all" type="text/css" rel="stylesheet" href="{{url('css/app.css')}}">
    <!-- end common css -->

    <link media="all" type="text/css" rel="stylesheet" href="{{url('plugins/datatables-net/dataTables.bootstrap4.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{url('plugins/datatables-net-bs4/buttons.dataTables.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{url('plugins/datatables-net-bs4/searchPanes.dataTables.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{url('plugins/datatables-net-bs4/select.dataTables.min.css')}}">

{{--    <!---Fontawesome css-->--}}
{{--    <link href="{{url('plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">--}}

{{--    <!---Ionicons css-->--}}
{{--    <link href="{{url('plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet">--}}

{{--    <!---Typicons css-->--}}
{{--    <link href="{{url('plugins/typicons.font/typicons.css')}}" rel="stylesheet">--}}

{{--    <!---Feather css-->--}}
{{--    <link href="{{url('plugins/feather/feather.css')}}" rel="stylesheet">--}}

{{--    <!---Falg-icons css-->--}}
{{--    <link href="{{url('plugins/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">--}}

{{--    <!---Style css-->--}}
{{--    <link href="{{url('css/style.css')}}" rel="stylesheet">--}}
{{--    <link href="{{url('css/custom-style.css')}}" rel="stylesheet">--}}
{{--    <link href="{{url('css/skins.css')}}" rel="stylesheet">--}}
{{--    <link href="{{url('css/dark-style.css')}}" rel="stylesheet">--}}
{{--    <link href="{{url('css/custom-dark-style.css')}}" rel="stylesheet">--}}


{{--    <!---Fileupload css-->--}}
{{--    <link href="{{url('plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet">--}}
{{--    <!---Fancy uploader css-->--}}
{{--    <link href="{{url('plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet">--}}
{{--    <!---Select2 css-->--}}
{{--    <link href="{{url('plugins/select2/css/select2.min.css')}}" rel="stylesheet">--}}
{{--    <!--Sumoselect css-->--}}
{{--    <link href="{{url('plugins/sumoselect/sumoselect.css')}}" rel="stylesheet">--}}
{{--    <!--Mutipleselect css-->--}}
{{--    <link rel="stylesheet" href="{{url('plugins/multipleselect/multiple-select.css')}}">--}}
{{--    <!---Jquery.mCustomScrollbar css-->--}}
{{--    <link href="{{url('plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet">--}}

{{--    <!---Sidebar css-->--}}
{{--    <link href="{{url('plugins/sidebar/sidebar.css')}}" rel="stylesheet">--}}

{{--    <!---Sidemenu css-->--}}
{{--    <link href="{{url('plugins/sidemenu/sidemenu.css')}}" rel="stylesheet">--}}

{{--    <!---DataTables css-->--}}
{{--    <link href="{{url('plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">--}}
{{--    <link href="{{url('plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet">--}}
{{--    <link href="{{url('plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet">--}}

{{--    <!---Switcher css-->--}}
{{--    <link href="{{url('switcher/css/switcher.css')}}" rel="stylesheet">--}}
{{--    <link href="{{url('switcher/demo.css')}}" rel="stylesheet">--}}
{{--    <!-- Global site tag (gtag.js) - Google Analytics start -->--}}
{{--    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146586338-1"></script>--}}
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-146586338-1');
    </script>
    <!-- Google Analytics end -->

</head>
{{--<body data-base-url="https://www.nobleui.com/laravel/template/light">--}}

<script src="{{ url('js/spinner.js')}}"></script>

<div class="main-wrapper" id="app">
    <nav class="sidebar">
        <div class="sidebar-header">
            <a href="#" class="sidebar-brand">
                PUS<span>App</span>
            </a>
            <div class="sidebar-toggler not-active">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="sidebar-body">
            <ul class="nav">
                <li class="nav-item nav-category">Main</li>
                <li class="nav-item active">
                    <a href="{{ url('home') }}" class="nav-link">
                        <i class="link-icon" data-feather="airplay"></i>
                        <span class="link-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('saldo') }}" class="nav-link">
                        <i class="link-icon" data-feather="dollar-sign"></i>
                        <span class="link-title">Saldo</span>
                    </a>
                </li>
                <li class="nav-item nav-category">Siswa</li>
                <li class="nav-item ">
{{--                    <a class="nav-link" data-toggle="collapse" href="#email" role="button" aria-expanded="false" aria-controls="email">--}}
{{--                        <i class="link-icon" data-feather="mail"></i>--}}
{{--                        <span class="link-title">Email</span>--}}
{{--                        <i class="link-arrow" data-feather="chevron-down"></i>--}}
{{--                    </a>--}}
{{--                    <div class="collapse " id="email">--}}
{{--                        <ul class="nav sub-menu">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="email/inbox.html" class="nav-link ">Inbox</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="email/read.html" class="nav-link ">Read</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="email/compose.html" class="nav-link ">Compose</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
                <li class="nav-item ">
                    <a href="{{ url('data_jurusan') }}" class="nav-link">
                        <i class="link-icon" data-feather="briefcase"></i>
                        <span class="link-title">Data Jurusan</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('data_kelas') }}" class="nav-link">
                        <i class="link-icon" data-feather="home"></i>
                        <span class="link-title">Data Kelas</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('data_orangtua') }}" class="nav-link">
                        <i class="link-icon" data-feather="user"></i>
                        <span class="link-title">Data Orang Tua</span>
                    </a>
                </li><li class="nav-item ">
                    <a href="{{ url('data_siswa') }}" class="nav-link">
                        <i class="link-icon" data-feather="users"></i>
                        <span class="link-title">Data Siswa</span>
                    </a>
                </li>
                <li class="nav-item nav-category">Data Pembayaran</li>
                <li class="nav-item ">
                    <a href="#pembayaran_rutin" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pembayaran_rutin">
                        <i class="link-icon" data-feather="repeat"></i>
                        <span class="link-title">Pembayaran Rutin</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse " id="pembayaran_rutin">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{ url('pembayaran_rutin') }}" class="nav-link ">Data Pembayaran</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('pembayaran_siswa_rutin') }}" class="nav-link ">Pembayaran Siswa</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a href="#sekali_bayar" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sekali_bayar">
                        <i class="link-icon" data-feather="credit-card"></i>
                        <span class="link-title">Sekali Bayar</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse " id="sekali_bayar">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{ url('pembayaran_sekali') }}" class="nav-link ">Data Pembayaran</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('pembayaran_siswa_sekali') }}" class="nav-link ">Pembayaran Siswa</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item nav-category">Laporan</li>

                <li class="nav-item ">
                    <a href="#laporan" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="laporan">
                        <i class="link-icon" data-feather="file-text"></i>
                        <span class="link-title">Laporan Bulanan</span>
                        <i class="link-arrow" data-feather="chevron-down"></i>
                    </a>
                    <div class="collapse " id="laporan">
                        <ul class="nav sub-menu">
                            <li class="nav-item">
                                <a href="{{ url('laporan') }}" class="nav-link ">Laporan Tagihan</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('laporan_pemasukan') }}" class="nav-link ">Laporan Pemasukan</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item ">
                    <a href="{{ url('laporan_rekap') }}" class="nav-link">
                        <i class="link-icon" data-feather="folder"></i>
                        <span class="link-title">Rekap Laporan</span>
                    </a>
                </li>
{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" data-toggle="collapse" href="#general" role="button" aria-expanded="false" aria-controls="general">--}}
{{--                        <i class="link-icon" data-feather="book"></i>--}}
{{--                        <span class="link-title">Special Pages</span>--}}
{{--                        <i class="link-arrow" data-feather="chevron-down"></i>--}}
{{--                    </a>--}}
{{--                    <div class="collapse " id="general">--}}
{{--                        <ul class="nav sub-menu">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="general/blank-page.html" class="nav-link ">Blank page</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="general/faq.html" class="nav-link ">Faq</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="general/invoice.html" class="nav-link ">Invoice</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="general/profile.html" class="nav-link ">Profile</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="general/pricing.html" class="nav-link ">Pricing</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="general/timeline.html" class="nav-link ">Timeline</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" data-toggle="collapse" href="#auth" role="button" aria-expanded="false" aria-controls="auth">--}}
{{--                        <i class="link-icon" data-feather="unlock"></i>--}}
{{--                        <span class="link-title">Authentication</span>--}}
{{--                        <i class="link-arrow" data-feather="chevron-down"></i>--}}
{{--                    </a>--}}
{{--                    <div class="collapse " id="auth">--}}
{{--                        <ul class="nav sub-menu">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="auth/login.html" class="nav-link ">Login</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="auth/register.html" class="nav-link ">Register</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item ">--}}
{{--                    <a class="nav-link" data-toggle="collapse" href="#error" role="button" aria-expanded="false" aria-controls="error">--}}
{{--                        <i class="link-icon" data-feather="cloud-off"></i>--}}
{{--                        <span class="link-title">Error</span>--}}
{{--                        <i class="link-arrow" data-feather="chevron-down"></i>--}}
{{--                    </a>--}}
{{--                    <div class="collapse " id="error">--}}
{{--                        <ul class="nav sub-menu">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="error/404.html" class="nav-link ">404</a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="error/500.html" class="nav-link ">500</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li class="nav-item nav-category">Docs</li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="https://www.nobleui.com/laravel/documentation/docs.html" target="_blank" class="nav-link">--}}
{{--                        <i class="link-icon" data-feather="hash"></i>--}}
{{--                        <span class="link-title">Documentation</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item nav-category">Ekstra</li>
                <li class="nav-item ">
                    <a href="chat" class="nav-link">
                        <i class="link-icon" data-feather="message-square"></i>
                        <span class="link-title">Chat</span>
                    </a>
                </li>
{{--                <li class="nav-item ">--}}
{{--                    <a href="tambah_akun" class="nav-link">--}}
{{--                        <i class="link-icon" data-feather="user-plus"></i>--}}
{{--                        <span class="link-title">Tambah Akun</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </div>
    </nav>
{{--    <nav class="settings-sidebar">--}}
{{--        <div class="sidebar-body">--}}
{{--            <a href="#" class="settings-sidebar-toggler">--}}
{{--                <i data-feather="settings"></i>--}}
{{--            </a>--}}
{{--            <h6 class="text-muted">Sidebar:</h6>--}}
{{--            <div class="form-group border-bottom">--}}
{{--                <div class="form-check form-check-inline">--}}
{{--                    <label class="form-check-label">--}}
{{--                        <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>--}}
{{--                        Light--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="form-check form-check-inline">--}}
{{--                    <label class="form-check-label">--}}
{{--                        <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">--}}
{{--                        Dark--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="theme-wrapper">--}}
{{--                <h6 class="text-muted mb-2">Light Version:</h6>--}}
{{--                <a class="theme-item active" href="index.html">--}}
{{--                    <img src="images/screenshots/light.jpg" alt="light version">--}}
{{--                </a>--}}
{{--                <h6 class="text-muted mb-2">Dark Version:</h6>--}}
{{--                <a class="theme-item" href="https://www.nobleui.com/laravel/template/dark">--}}
{{--                    <img src="images/screenshots/dark.jpg" alt="light version">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>    --}}
    <div class="page-wrapper">
        <nav class="navbar">
            <a href="#" class="sidebar-toggler">
                <i data-feather="menu"></i>
            </a>
            <div class="navbar-content">
{{--                <form class="search-form">--}}
{{--                    <div class="input-group">--}}
{{--                        <div class="input-group-prepend">--}}
{{--                            <div class="input-group-text">--}}
{{--                                <i data-feather="search"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">--}}
{{--                    </div>--}}
{{--                </form>--}}
                <ul class="navbar-nav">

{{--                    <li class="nav-item dropdown nav-messages">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            <i data-feather="mail"></i>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="messageDropdown">--}}
{{--                            <div class="dropdown-header d-flex align-items-center justify-content-between">--}}
{{--                                <p class="mb-0 font-weight-medium">New Messages</p>--}}
{{--                                <a href="{{ url('javascript:;')}}" class="text-muted">Clear all</a>--}}
{{--                            </div>--}}
{{--                            <div class="dropdown-body">--}}
{{--                                <a href="{{ url('javascript:;')}}" class="dropdown-item">--}}
{{--                                    <div class="figure">--}}
{{--                                        <img src="{{ url('images/faces/face2.jpg')}}" alt="userr">--}}
{{--                                    </div>--}}
{{--                                    <div class="content">--}}
{{--                                        <div class="d-flex justify-content-between align-items-center">--}}
{{--                                            <p>Leonardo Payne</p>--}}
{{--                                            <p class="sub-text text-muted">2 min ago</p>--}}
{{--                                        </div>--}}
{{--                                        <p class="sub-text text-muted">Project status</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <div class="dropdown-footer d-flex align-items-center justify-content-center">--}}
{{--                                <a href="{{ url('javascript:;')}}">View all</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </li>--}}
                    <li class="nav-item dropdown nav-profile">
                        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ url('images/faces/face1.jpg')}}" alt="profile">
                        </a>
                        <div class="dropdown-menu" aria-labelledby="profileDropdown">
                            <div class="dropdown-header d-flex flex-column align-items-center">
                                <div class="figure mb-3">
                                    <img src="{{ url('images/faces/face1.jpg')}}" alt="">
                                </div>
                                <div class="info text-center">
                                    <p class="name font-weight-bold mb-0">Amiah Burton</p>
                                    <p class="email text-muted mb-3">amiahburton@gmail.com</p>
                                </div>
                            </div>
                            <div class="dropdown-body">
                                <ul class="profile-nav p-0 pt-3">
                                    <li class="nav-item">
                                        <a href="{{ url('general/profile.html')}}" class="nav-link">
                                            <i data-feather="user"></i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ url('javascript:;')}}" class="nav-link">
                                            <i data-feather="edit"></i>
                                            <span>Edit Profile</span>
                                        </a>
                                    </li>
{{--                                    <li class="nav-item">--}}
{{--                                        <a href="{{ url('javascript:;')}}" class="nav-link">--}}
{{--                                            <i data-feather="repeat"></i>--}}
{{--                                            <span>Switch User</span>--}}
{{--                                        </a>--}}
{{--                                    </li>--}}
                                    <li class="nav-item">
                                        <a href="{{ route('logout') }}" class="nav-link"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
{{--                                            {{ __('Logout') }}--}}
                                            <i data-feather="log-out"></i>
                                            <span>Log Out</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        @yield("content")
{{--        <div class="page-content">--}}
{{--            <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">--}}
{{--                <div>--}}
{{--                    <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>--}}
{{--                </div>--}}
{{--                <div class="d-flex align-items-center flex-wrap text-nowrap">--}}
{{--                    <div class="input-group date datepicker dashboard-date mr-2 mb-2 mb-md-0 d-md-none d-xl-flex" id="dashboardDate">--}}
{{--                        <span class="input-group-addon bg-transparent"><i data-feather="calendar" class=" text-primary"></i></span>--}}
{{--                        <input type="text" class="form-control">--}}
{{--                    </div>--}}
{{--                    <button type="button" class="btn btn-outline-info btn-icon-text mr-2 d-none d-md-block">--}}
{{--                        <i class="btn-icon-prepend" data-feather="download"></i>--}}
{{--                        Import--}}
{{--                    </button>--}}
{{--                    <button type="button" class="btn btn-outline-primary btn-icon-text mr-2 mb-2 mb-md-0">--}}
{{--                        <i class="btn-icon-prepend" data-feather="printer"></i>--}}
{{--                        Print--}}
{{--                    </button>--}}
{{--                    <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">--}}
{{--                        <i class="btn-icon-prepend" data-feather="download-cloud"></i>--}}
{{--                        Download Report--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col-12 col-xl-12 stretch-card">--}}
{{--                    <div class="row flex-grow">--}}
{{--                        <div class="col-md-4 grid-margin stretch-card">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="d-flex justify-content-between align-items-baseline">--}}
{{--                                        <h6 class="card-title mb-0">New Customers</h6>--}}
{{--                                        <div class="dropdown mb-2">--}}
{{--                                            <button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                            </button>--}}
{{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-6 col-md-12 col-xl-5">--}}
{{--                                            <h3 class="mb-2">3,897</h3>--}}
{{--                                            <div class="d-flex align-items-baseline">--}}
{{--                                                <p class="text-success">--}}
{{--                                                    <span>+3.3%</span>--}}
{{--                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-6 col-md-12 col-xl-7">--}}
{{--                                            <div id="apexChart1" class="mt-md-3 mt-xl-0"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 grid-margin stretch-card">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="d-flex justify-content-between align-items-baseline">--}}
{{--                                        <h6 class="card-title mb-0">New Orders</h6>--}}
{{--                                        <div class="dropdown mb-2">--}}
{{--                                            <button class="btn p-0" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                            </button>--}}
{{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-6 col-md-12 col-xl-5">--}}
{{--                                            <h3 class="mb-2">35,084</h3>--}}
{{--                                            <div class="d-flex align-items-baseline">--}}
{{--                                                <p class="text-danger">--}}
{{--                                                    <span>-2.8%</span>--}}
{{--                                                    <i data-feather="arrow-down" class="icon-sm mb-1"></i>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-6 col-md-12 col-xl-7">--}}
{{--                                            <div id="apexChart2" class="mt-md-3 mt-xl-0"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-4 grid-margin stretch-card">--}}
{{--                            <div class="card">--}}
{{--                                <div class="card-body">--}}
{{--                                    <div class="d-flex justify-content-between align-items-baseline">--}}
{{--                                        <h6 class="card-title mb-0">Growth</h6>--}}
{{--                                        <div class="dropdown mb-2">--}}
{{--                                            <button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                                <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                            </button>--}}
{{--                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>--}}
{{--                                                <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-6 col-md-12 col-xl-5">--}}
{{--                                            <h3 class="mb-2">89.87%</h3>--}}
{{--                                            <div class="d-flex align-items-baseline">--}}
{{--                                                <p class="text-success">--}}
{{--                                                    <span>+2.8%</span>--}}
{{--                                                    <i data-feather="arrow-up" class="icon-sm mb-1"></i>--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-6 col-md-12 col-xl-7">--}}
{{--                                            <div id="apexChart3" class="mt-md-3 mt-xl-0"></div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- row -->--}}

{{--            <div class="row">--}}
{{--                <div class="col-12 col-xl-12 grid-margin stretch-card">--}}
{{--                    <div class="card overflow-hidden">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex justify-content-between align-items-baseline mb-4 mb-md-3">--}}
{{--                                <h6 class="card-title mb-0">Revenue</h6>--}}
{{--                                <div class="dropdown">--}}
{{--                                    <button class="btn p-0" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row align-items-start mb-2">--}}
{{--                                <div class="col-md-7">--}}
{{--                                    <p class="text-muted tx-13 mb-3 mb-md-0">Revenue is the income that a business has from its normal business activities, usually from the sale of goods and services to customers.</p>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-5 d-flex justify-content-md-end">--}}
{{--                                    <div class="btn-group mb-3 mb-md-0" role="group" aria-label="Basic example">--}}
{{--                                        <button type="button" class="btn btn-outline-primary">Today</button>--}}
{{--                                        <button type="button" class="btn btn-outline-primary d-none d-md-block">Week</button>--}}
{{--                                        <button type="button" class="btn btn-primary">Month</button>--}}
{{--                                        <button type="button" class="btn btn-outline-primary">Year</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="flot-wrapper">--}}
{{--                                <div id="flotChart1" class="flot-chart"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- row -->--}}

{{--            <div class="row">--}}
{{--                <div class="col-lg-7 col-xl-8 grid-margin stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex justify-content-between align-items-baseline mb-2">--}}
{{--                                <h6 class="card-title mb-0">Monthly sales</h6>--}}
{{--                                <div class="dropdown mb-2">--}}
{{--                                    <button class="btn p-0" type="button" id="dropdownMenuButton4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton4">--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p class="text-muted mb-4">Sales are activities related to selling or the number of goods or services sold in a given time period.</p>--}}
{{--                            <div class="monthly-sales-chart-wrapper">--}}
{{--                                <canvas id="monthly-sales-chart"></canvas>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-5 col-xl-4 grid-margin stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex justify-content-between align-items-baseline mb-2">--}}
{{--                                <h6 class="card-title mb-0">Cloud storage</h6>--}}
{{--                                <div class="dropdown mb-2">--}}
{{--                                    <button class="btn p-0" type="button" id="dropdownMenuButton5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton5">--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div id="progressbar1" class="mx-auto"></div>--}}
{{--                            <div class="row mt-4 mb-3">--}}
{{--                                <div class="col-6 d-flex justify-content-end">--}}
{{--                                    <div>--}}
{{--                                        <label class="d-flex align-items-center justify-content-end tx-10 text-uppercase font-weight-medium">Total storage <span class="p-1 ml-1 rounded-circle bg-primary-muted"></span></label>--}}
{{--                                        <h5 class="font-weight-bold mb-0 text-right">8TB</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-6">--}}
{{--                                    <div>--}}
{{--                                        <label class="d-flex align-items-center tx-10 text-uppercase font-weight-medium"><span class="p-1 mr-1 rounded-circle bg-primary"></span> Used storage</label>--}}
{{--                                        <h5 class="font-weight-bold mb-0">6TB</h5>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <button class="btn btn-primary btn-block">Upgrade storage</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- row -->--}}

{{--            <div class="row">--}}
{{--                <div class="col-lg-5 col-xl-4 grid-margin grid-margin-xl-0 stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex justify-content-between align-items-baseline mb-2">--}}
{{--                                <h6 class="card-title mb-0">Inbox</h6>--}}
{{--                                <div class="dropdown mb-2">--}}
{{--                                    <button class="btn p-0" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="d-flex flex-column">--}}
{{--                                <a href="#" class="d-flex align-items-center border-bottom pb-3">--}}
{{--                                    <div class="mr-3">--}}
{{--                                        <img src="images/faces/face2.jpg" class="rounded-circle wd-35" alt="user">--}}
{{--                                    </div>--}}
{{--                                    <div class="w-100">--}}
{{--                                        <div class="d-flex justify-content-between">--}}
{{--                                            <h6 class="text-body mb-2">Leonardo Payne</h6>--}}
{{--                                            <p class="text-muted tx-12">12.30 PM</p>--}}
{{--                                        </div>--}}
{{--                                        <p class="text-muted tx-13">Hey! there I'm available...</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="d-flex align-items-center border-bottom py-3">--}}
{{--                                    <div class="mr-3">--}}
{{--                                        <img src="images/faces/face3.jpg" class="rounded-circle wd-35" alt="user">--}}
{{--                                    </div>--}}
{{--                                    <div class="w-100">--}}
{{--                                        <div class="d-flex justify-content-between">--}}
{{--                                            <h6 class="text-body mb-2">Carl Henson</h6>--}}
{{--                                            <p class="text-muted tx-12">02.14 AM</p>--}}
{{--                                        </div>--}}
{{--                                        <p class="text-muted tx-13">I've finished it! See you so..</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="d-flex align-items-center border-bottom py-3">--}}
{{--                                    <div class="mr-3">--}}
{{--                                        <img src="images/faces/face4.jpg" class="rounded-circle wd-35" alt="user">--}}
{{--                                    </div>--}}
{{--                                    <div class="w-100">--}}
{{--                                        <div class="d-flex justify-content-between">--}}
{{--                                            <h6 class="text-body mb-2">Jensen Combs</h6>--}}
{{--                                            <p class="text-muted tx-12">08.22 PM</p>--}}
{{--                                        </div>--}}
{{--                                        <p class="text-muted tx-13">This template is awesome!</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="d-flex align-items-center border-bottom py-3">--}}
{{--                                    <div class="mr-3">--}}
{{--                                        <img src="images/faces/face5.jpg" class="rounded-circle wd-35" alt="user">--}}
{{--                                    </div>--}}
{{--                                    <div class="w-100">--}}
{{--                                        <div class="d-flex justify-content-between">--}}
{{--                                            <h6 class="text-body mb-2">Amiah Burton</h6>--}}
{{--                                            <p class="text-muted tx-12">05.49 AM</p>--}}
{{--                                        </div>--}}
{{--                                        <p class="text-muted tx-13">Nice to meet you</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                                <a href="#" class="d-flex align-items-center border-bottom py-3">--}}
{{--                                    <div class="mr-3">--}}
{{--                                        <img src="images/faces/face6.jpg" class="rounded-circle wd-35" alt="user">--}}
{{--                                    </div>--}}
{{--                                    <div class="w-100">--}}
{{--                                        <div class="d-flex justify-content-between">--}}
{{--                                            <h6 class="text-body mb-2">Yaretzi Mayo</h6>--}}
{{--                                            <p class="text-muted tx-12">01.19 AM</p>--}}
{{--                                        </div>--}}
{{--                                        <p class="text-muted tx-13">Hey! there I'm available...</p>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-7 col-xl-8 stretch-card">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex justify-content-between align-items-baseline mb-2">--}}
{{--                                <h6 class="card-title mb-0">Projects</h6>--}}
{{--                                <div class="dropdown mb-2">--}}
{{--                                    <button class="btn p-0" type="button" id="dropdownMenuButton7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                        <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>--}}
{{--                                    </button>--}}
{{--                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Edit</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Delete</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="printer" class="icon-sm mr-2"></i> <span class="">Print</span></a>--}}
{{--                                        <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="download" class="icon-sm mr-2"></i> <span class="">Download</span></a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="table-responsive">--}}
{{--                                <table class="table table-hover mb-0">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th class="pt-0">#</th>--}}
{{--                                        <th class="pt-0">Project Name</th>--}}
{{--                                        <th class="pt-0">Start Date</th>--}}
{{--                                        <th class="pt-0">Due Date</th>--}}
{{--                                        <th class="pt-0">Status</th>--}}
{{--                                        <th class="pt-0">Assign</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td>1</td>--}}
{{--                                        <td>NobleUI jQuery</td>--}}
{{--                                        <td>01/01/2019</td>--}}
{{--                                        <td>26/04/2019</td>--}}
{{--                                        <td><span class="badge badge-danger">Released</span></td>--}}
{{--                                        <td>Leonardo Payne</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>2</td>--}}
{{--                                        <td>NobleUI Angular</td>--}}
{{--                                        <td>01/01/2019</td>--}}
{{--                                        <td>26/04/2019</td>--}}
{{--                                        <td><span class="badge badge-success">Review</span></td>--}}
{{--                                        <td>Carl Henson</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>3</td>--}}
{{--                                        <td>NobleUI ReactJs</td>--}}
{{--                                        <td>01/05/2019</td>--}}
{{--                                        <td>10/09/2019</td>--}}
{{--                                        <td><span class="badge badge-info-muted">Pending</span></td>--}}
{{--                                        <td>Jensen Combs</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>4</td>--}}
{{--                                        <td>NobleUI VueJs</td>--}}
{{--                                        <td>01/01/2019</td>--}}
{{--                                        <td>31/11/2019</td>--}}
{{--                                        <td><span class="badge badge-warning">Work in Progress</span>--}}
{{--                                        </td>--}}
{{--                                        <td>Amiah Burton</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>5</td>--}}
{{--                                        <td>NobleUI Laravel</td>--}}
{{--                                        <td>01/01/2019</td>--}}
{{--                                        <td>31/12/2019</td>--}}
{{--                                        <td><span class="badge badge-danger-muted text-white">Coming soon</span></td>--}}
{{--                                        <td>Yaretzi Mayo</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td>6</td>--}}
{{--                                        <td>NobleUI NodeJs</td>--}}
{{--                                        <td>01/01/2019</td>--}}
{{--                                        <td>31/12/2019</td>--}}
{{--                                        <td><span class="badge badge-primary">Coming soon</span></td>--}}
{{--                                        <td>Carl Henson</td>--}}
{{--                                    </tr>--}}
{{--                                    <tr>--}}
{{--                                        <td class="border-bottom">3</td>--}}
{{--                                        <td class="border-bottom">NobleUI EmberJs</td>--}}
{{--                                        <td class="border-bottom">01/05/2019</td>--}}
{{--                                        <td class="border-bottom">10/11/2019</td>--}}
{{--                                        <td class="border-bottom"><span class="badge badge-info-muted">Pending</span></td>--}}
{{--                                        <td class="border-bottom">Jensen Combs</td>--}}
{{--                                    </tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div> <!-- row -->--}}
{{--        </div>--}}
        <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
            <p class="text-muted text-center text-md-left">Copyright © 2020 <a href="https://www.nobleui.com/" target="_blank">KYAS.Dev</a> All rights reserved</p>
            <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
        </footer>
    </div>
</div>

<!-- base js -->
<script src="{{url('js/app.js')}}"></script>
<script src="{{url('plugins/feather-icons/feather.min.js')}}"></script>
<script src="{{url('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<!-- end base js -->

<!-- plugin js -->
<script src="{{url('plugins/chartjs/Chart.min.js')}}"></script>
<script src="{{url('plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{url('plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{url('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{url('plugins/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{url('plugins/progressbar-js/progressbar.min.js')}}"></script>
<script src="{{url('plugins/datatables-net/jquery.dataTables.js')}}"></script>
<script src="{{url('plugins/datatables-net-bs4/dataTables.bootstrap4.js')}}"></script>
<script src="{{url('plugins/select2/select2.min.js')}}"></script>
<!-- end plugin js -->

<!-- common js -->
<script src="{{url('js/template.js')}}"></script>
<!-- end common js -->
<script src="{{url('plugins/datatables-net-bs4/dataTables.buttons.min.js')}}"></script>
<script src="{{url('plugins/datatables-net-bs4/dataTables.searchPanes.min.js')}}"></script>
<script src="{{url('plugins/datatables-net-bs4/dataTables.select.min.js')}}"></script>


<script src="{{url('js/dashboard.js')}}"></script>
<script src="{{url('js/datepicker.js')}}"></script>
<script src="{{url('js/select2.js')}}"></script>
<script src="{{url('js/data-table.js')}}"></script>
{{--<script src="js/data-table.js"></script>--}}
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}
{{--<script type="text/javascript">--}}
{{--    var timestamp = '<?=time();?>';--}}
{{--    function updateTime(){--}}
{{--        $('#time').html(Date(timestamp));--}}
{{--        timestamp++;--}}
{{--    }--}}
{{--    $(function(){--}}
{{--        setInterval(updateTime, 1000);--}}
{{--    });--}}
{{--</script>--}}
<!-- Jquery js-->
{{--<script src="{{url('plugins/jquery/jquery.min.js')}}"></script>--}}
{{--<script src="{{url('plugins/jquery-mask-money/dist/jquery.maskMoney.min.js')}}"></script>--}}


{{--<!-- Bootstrap js-->--}}
{{--<script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>--}}

{{--<!-- Ionicons js-->--}}
{{--<script src="{{url('assets/plugins/ionicons/ionicons.js')}}"></script>--}}

{{--<!-- Rating js-->--}}
{{--<script src="{{url('plugins/rating/jquery.rating-stars.js')}}"></script>--}}

{{--<!-- Flot Chart js-->--}}
{{--<script src="{{url('plugins/jquery.flot/jquery.flot.js')}}"></script>--}}
{{--<script src="{{url('plugins/jquery.flot/jquery.flot.resize.js')}}"></script>--}}
{{--<script src="{{url('js/chart.flot.sampledata.js')}}"></script>--}}
{{--<!-- Chart.Bundle js-->--}}
{{--<script src="{{url('plugins/chart.js/Chart.bundle.min.js')}}"></script>--}}
{{--<!-- Peity js-->--}}
{{--<script src="{{url('plugins/peity/jquery.peity.min.js')}}"></script>--}}
{{--<!-- Jquery-Ui js-->--}}
{{--<script src="{{url('plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>--}}
{{--<!-- Select2 js-->--}}
{{--<script src="{{url('plugins/select2/js/select2.min.js')}}"></script>--}}
{{--<!--MutipleSelect js-->--}}
{{--<script src="{{url('plugins/multipleselect/multiple-select.js')}}"></script>--}}
{{--<script src="{{url('plugins/multipleselect/multi-select.js')}}"></script>--}}
{{--<!-- Jquery.mCustomScrollbar js-->--}}
{{--<script src="{{url('plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>--}}
{{--<!-- index -->--}}
{{--<script src="{{url('assets/js/index.js')}}"></script>--}}

{{--<!-- Perfect-scrollbar js-->--}}
{{--<script src="{{url('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>--}}

{{--<!-- Sidemenu js-->--}}
{{--<script src="{{url('plugins/sidemenu/sidemenu.js')}}"></script>--}}

{{--<!-- Sidebar js-->--}}
{{--<script src="{{url('plugins/sidebar/sidebar.js')}}"></script>--}}

{{--<!-- Sticky js-->--}}
{{--<script src="{{url('js/sticky.js')}}"></script>--}}

{{--<!-- Switcher js-->--}}
{{--<script src="{{url('switcher/js/switcher.js')}}"></script>--}}

{{--<!-- Custom js-->--}}
{{--<script src="{{url('js/custom.js')}}"></script>--}}

{{--<!--Sumoselect js-->--}}
{{--<script src="{{url('plugins/sumoselect/jquery.sumoselect.js')}}"></script>--}}
{{--<!-- Form-elements js-->--}}
{{--<script src="{{url('assets/js/advanced-form-elements.js')}}"></script>--}}
{{--<script src="{{url('js/select2.js')}}"></script>--}}

{{--<!--Fileuploads js-->--}}
{{--<script src="{{url('plugins/fileuploads/js/fileupload.js')}}"></script>--}}
{{--<script src="{{url('plugins/fileuploads/js/file-upload.js')}}"></script>--}}


{{--<!-- Data Table js -->--}}
{{--<script src="{{url('plugins/datatable/jquery.dataTables.min.js')}}"></script>--}}
{{--<script src="{{url('plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>--}}
<script src="{{url('js/table-data.js')}}"></script>
{{--<script src="{{url('plugins/datatable/dataTables.responsive.min.js')}}"></script>--}}
{{--<script src="{{url('plugins/datatable/fileexport/dataTables.buttons.min.js')}}"></script>--}}
{{--<script src="{{url('plugins/datatable/fileexport/buttons.bootstrap4.min.js')}}"></script>--}}
{{--<script src="{{url('plugins/datatable/fileexport/jszip.min.js')}}"></script>--}}
{{--<script src="{{url('plugins/datatable/fileexport/pdfmake.min.js')}}"></script>--}}
{{--<script src="{{url('plugins/datatable/fileexport/vfs_fonts.js')}}"></script>--}}
{{--<script src="{{url('plugins/datatable/fileexport/buttons.html5.min.js')}}"></script>--}}
{{--<script src="{{url('plugins/datatable/fileexport/buttons.print.min.js')}}"></script>--}}
{{--<script src="{{url('plugins/datatable/fileexport/buttons.colVis.min.js')}}"></script>--}}

<!-- Sweet-Alert js-->
<script src="{{url('plugins/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{url('plugins/sweet-alert/dark-jquery.sweet-alert.js')}}"></script>

<script>
    var root = window.origin + '/spus/public/'

    $('.edit-jurusan').click(function () {
        var id = $(this).val();
        var getUrl = root + 'api/jurusan/' + id;

        $.ajax({
            url : getUrl,
            type : 'ajax',
            method : 'get',
            datatype : 'json',
            success: function (response){
                var hasil = JSON.parse(response);
                console.log(hasil.hasil);

                $('#n-jurusan').val(hasil.hasil.nama_jurusan);
                $('#id-jurusan').val(hasil.hasil.id_jurusan);
            },
            error:function (response){
                console.log(response.status + 'error');
            }
        })

    })
</script>

<script>
    var root = window.origin + '/spus/public/'

    $('.edit-kelas').click(function () {
        var id = $(this).val();
        var getUrl = root + 'api/kelas/' + id;

        $.ajax({
            url : getUrl,
            type : 'ajax',
            method : 'get',
            datatype : 'json',
            success: function (response){
                var hasil = JSON.parse(response);
                console.log(hasil.hasil);

                $('#n-kelas').val(hasil.hasil.nama_kelas);
                $('#id-kelas').val(hasil.hasil.id_kelas);
            },
            error:function (response){
                console.log(response.status + 'error');
            }
        })

    })
</script>

<script type="text/javascript">
    if (window.location.href === 'http://localhost/spus/public/home'){
        var str = document.getElementById('typewriter').innerHTML,
            i = 0,
            isTag,
            text;

        (function type() {
            text = str.slice(0, ++i);
            if (text === str) return;

            document.getElementById('typewriter').innerHTML = text;

            var char = text.slice(-1);
            if( char === '<' ) isTag = true;
            if( char === '>' ) isTag = false;

            if (isTag) return type();
            setTimeout(type, 110);
        }());

        (function () {
            function checkTime(i) {
                return (i < 10) ? "0" + i : i;
            }

            function startTime() {
                var today = new Date(),
                    // d = checkTime(today.getDay()),
                    // M = checkTime(today.getMonth()),
                    // Y = checkTime(today.getFullYear()),
                    h = checkTime(today.getHours()),
                    m = checkTime(today.getMinutes()),
                    s = checkTime(today.getSeconds());
                document.getElementById('time').innerHTML = h + ":" + m + ":" + s ;
                t = setTimeout(function () {
                    startTime()
                }, 500);
            }
            startTime();
        })();
    }


</script>


<script type="text/javascript">

</script>



<!-- Mirrored from www.nobleui.com/laravel/template/light/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 18 Mar 2020 13:30:30 GMT -->
</html>
