<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Point Of Sales Aplication">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
          content="sales dashboard, admin dashboard, bootstrap 4 admin template, html admin template, admin panel design, admin panel design, bootstrap 4 dashboard, admin panel template, html dashboard template, bootstrap admin panel, sales dashboard design, best sales dashboards, sales performance dashboard, html5 template, dashboard template">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{url('landingpages_assets/assets/img/navbar-logo.png')}}"/>

    <title>Aplikasi Pembayaran Uang Sekolah</title>

    <!---Fontawesome css-->
    <link href="{{url('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">

    <!---Ionicons css-->
    <link href="{{url('assets/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet">

    <!---Typicons css-->
    <link href="{{url('assets/plugins/typicons.font/typicons.css')}}" rel="stylesheet">

    <!---Feather css-->
    <link href="{{url('assets/plugins/feather/feather.css')}}" rel="stylesheet">

    <!---Falg-icons css-->
    <link href="{{url('assets/plugins/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">

    <!---Style css-->
    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/custom-style.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/skins.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/dark-style.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/custom-dark-style.css')}}" rel="stylesheet">

    <!---Fileupload css-->
    <link href="{{url('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet">
    <!---Fancy uploader css-->
    <link href="{{url('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet">
    <!---Select2 css-->
    <link href="{{url('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!--Sumoselect css-->
    <link href="{{url('assets/plugins/sumoselect/sumoselect.css')}}" rel="stylesheet">
    <!--Mutipleselect css-->
    <link rel="stylesheet" href="{{url('assets/plugins/multipleselect/multiple-select.css')}}">
    <!---Jquery.mCustomScrollbar css-->
    <link href="{{url('assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet">

    <!---Sidebar css-->
    <link href="{{url('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

    <!---Sidemenu css-->
    <link href="{{url('assets/plugins/sidemenu/sidemenu.css')}}" rel="stylesheet">

    <!---DataTables css-->
    <link href="{{url('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css')}}" rel="stylesheet">

    <!---Switcher css-->
    <link href="{{url('assets/switcher/css/switcher.css')}}" rel="stylesheet">
    <link href="{{url('assets/switcher/demo.css')}}" rel="stylesheet">
    <!-- plugin css -->
    <link media="all" type="text/css" rel="stylesheet" href="{{url('fonts/feather-font/css/iconfont.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{url('plugins/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!-- end plugin css -->


<!---Feather css-->
    <link href="{{url('plugins/feather/feather.css')}}" rel="stylesheet">

    <link media="all" type="text/css" rel="stylesheet"
          href="{{url('plugins/datatables-net/dataTables.bootstrap4.css')}}">
    <link media="all" type="text/css" rel="stylesheet"
          href="{{url('plugins/datatables-net-bs4/buttons.dataTables.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet"
          href="{{url('plugins/datatables-net-bs4/searchPanes.dataTables.css')}}">
    <link media="all" type="text/css" rel="stylesheet"
          href="{{url('plugins/datatables-net-bs4/select.dataTables.min.css')}}">

    <link media="all" type="text/css" rel="stylesheet" href="{{url('assets/fonts/feather-font/css/iconfont.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{url('assets/plugins/perfect-scrollbar/perfect-scrollbar.css')}}">
    <!-- end plugin css -->


    <!-- common css -->
    <link media="all" type="text/css" rel="stylesheet" href="{{url('css/app.css')}}">


    <!---Sweet-Alert css-->
    <link href="{{url('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet">
    <style>
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>

<!-- Start Switcher -->
{{----}}
<!-- End Switcher -->

<!-- Loader -->
<div id="global-loader">
    <img src="{{url('assets/img/loader.svg')}}" class="loader-img" alt="Loader">
</div>
<!-- End Loader -->

<!-- Page -->
<div class="page" id="pos-app">
    <!-- Sidemenu -->
    <div class="main-sidebar main-sidebar-sticky side-menu">
        <div class="sidemenu-logo">
            <img src="{{url('landingpages_assets/assets/img/navbar-logo2.png')}}" class="header-brand-img desktop-logo" alt="logo">
            <img src="{{url('landingpages_assets/assets/img/navbar-logo.png')}}" class="header-brand-img icon-logo" alt="logo">
            <img src="{{url('landingpages_assets/assets/img/navbar-logo.png')}}" class="header-brand-img desktop-logo theme-logo"
                 alt="logo">
            <img src="{{url('landingpages_assets/assets/img/navbar-logo.png')}}" class="header-brand-img icon-logo theme-logo"
                 alt="logo">
        </div>
        <div class="main-sidebar-body">
            <ul class="nav">
                @if(Auth::user()->status=='Sekolah')
                <li class="nav-label">Main</li>
                <li class="nav-item show">
                    <a class="nav-link" href="{{url('home')}}"><i class="fe fe-airplay"></i><span
                            class="sidemenu-label">Dashboard</span></a>
                </li>
                    <li class="nav-item show">
                        <a class="nav-link" href="{{url('saldo')}}"><i class="fa fa-address-card"></i><span
                                class="sidemenu-label">Akun Saya</span></a>
                    </li>
                <li class="nav-label">Siswa</li>
                    <li class="nav-item show">
                        <a class="nav-link" href="{{url('tahun_ajaran')}}"><i class="fe fe-calendar"></i><span
                                class="sidemenu-label">Tahun Ajar</span></a>
                    </li>
                <li class="nav-item show">
                    <a class="nav-link" href="{{url('data_jurusan')}}"><i class="fe fe-briefcase"></i><span
                            class="sidemenu-label">Data Jurusan</span></a>
                </li>
                <li class="nav-item show">
                    <a class="nav-link" href="{{url('data_kelas')}}"><i class="fe fe-home"></i><span
                            class="sidemenu-label">Data Kelas</span></a>
                </li>
                <li class="nav-item show">
                    <a class="nav-link" href="{{url('data_orangtua')}}"><i class="fe fe-user"></i><span
                            class="sidemenu-label">Data Orang Tua</span></a>
                </li>
                <li class="nav-item show">
                    <a class="nav-link" href="{{url('data_siswa')}}"><i class="fe fe-users"></i><span
                            class="sidemenu-label">Data Siswa</span></a>
                </li>

                <li class="nav-label">Pembayaran</li>
                <li class="nav-item">
                    <a class="nav-link with-sub" href="#"><i class="fa fa-recycle"></i><span
                            class="sidemenu-label">Pembayaran Rutin</span></a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="{{url('pembayaran_rutin')}}">Pembayaran Rutin</a>
                        </li>
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="{{url('tagihan_rutin')}}">Tagihan Rutin</a>
                        </li>
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="{{url('pembayaran_siswa_rutin')}}">Pembayaran Siswa</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link with-sub" href="#"><i class="fa fa-credit-card"></i><span
                            class="sidemenu-label">Sekali Bayar</span></a>
                    <ul class="nav-sub">
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="{{url('pembayaran_sekali')}}">Pembayaran Sekali</a>
                        </li>
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="{{url('tagihan_sekali')}}">Tagihan Sekali</a>
                        </li>
                        <li class="nav-sub-item">
                            <a class="nav-sub-link" href="{{url('pembayaran_siswa_sekali')}}">Pembayaran Siswa</a>
                        </li>
                    </ul>
                </li>

{{--                <li class="nav-label">Laporan</li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link with-sub" href="#"><i class="fa fa-file"></i><span--}}
{{--                            class="sidemenu-label">Laporan Bulanan</span></a>--}}
{{--                    <ul class="nav-sub">--}}
{{--                        <li class="nav-sub-item">--}}
{{--                            <a class="nav-sub-link" href="{{url('laporan')}}">Laporan Tagihan</a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-sub-item">--}}
{{--                            <a class="nav-sub-link" href="{{url(('laporan_pemasukan') )}}">Laporan Pemasukan</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item show">--}}
{{--                    <a class="nav-link" href="{{url('laporan_rekap')}}"><i class="fe fe-folder"></i><span--}}
{{--                            class="sidemenu-label">Rekap Laporan</span></a>--}}
{{--                </li>--}}
{{--                    <li class="nav-label">Ekstra</li>--}}
{{--                    <li class="nav-item show">--}}
{{--                        <a class="nav-link" href="{{url('chat')}}"><i class="fe fe-message-circle"></i><span--}}
{{--                                class="sidemenu-label">Chat</span></a>--}}
{{--                    </li>--}}
                @elseif(Auth::user()->status=='Administrator')
                    <li class="nav-label">Main</li>
                    <li class="nav-item show">
                        <a class="nav-link" href="{{url('home')}}"><i class="fe fe-airplay"></i><span
                                class="sidemenu-label">Dashboard</span></a>
                    </li>
                    <li class="nav-item show">
                        <a class="nav-link" href="{{url('pengguna')}}"><i class="fe fe-users"></i><span
                                class="sidemenu-label">Kelola Pengguna</span></a>
                    </li>
                    <li class="nav-item show">
                        <a class="nav-link" href="{{url('penarikan')}}"><i class="fe fe-users"></i><span
                                class="sidemenu-label">Kelola Penarikan</span></a>
                    </li>
                    <li class="nav-item show">
                        <a class="nav-link" href="{{url('')}}"><i class="fe fe-dollar-sign"></i><span
                                class="sidemenu-label">Cashout</span></a>
                    </li>
            </ul>@endif
        </div>
    </div>
    <!-- End Sidemenu -->
    <!-- Main Content-->
    <div class="main-content side-content pt-0">
        <!-- Main Header-->
        <div class="main-header side-header sticky">
            <div class="container-fluid">
                <div class="main-header-left">
                    <a class="main-logo d-lg-none" href="{{url('index.html')}}">
                        <img src="{{url('assets/img/brand/logo.png')}}" class="header-brand-img desktop-logo"
                             alt="logo">
                        <img src="{{url('assets/img/brand/icon.png')}}" class="header-brand-img icon-logo" alt="logo">
                        <img src="{{url('assets/img/brand/logo-light.png')}}"
                             class="header-brand-img desktop-logo theme-logo" alt="logo">
                        <img src="{{url('assets/img/brand/icon-light.png')}}"
                             class="header-brand-img icon-logo theme-logo" alt="logo">
                    </a>
                    <a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
                </div>
                <div class="main-header-right">

                    <div class="dropdown d-md-flex">
                        <a class="nav-link icon full-screen-link">
                            <i class="fe fe-maximize fullscreen-button"></i>
                        </a>
                    </div>

                    <div class="dropdown main-profile-menu">
                        <a class="main-img-user" href="#"><img alt="avatar"
                                                               src="{{ url('img/users/admin.png')}}"></a>
                        <div class="dropdown-menu">
                            <div class="header-navheading">
                                <div class="figure mb-3">
                                    <img src="{{ url('img/users/admin.png')}}" style="width: 50%">
                                </div>
                                <div class="info text-center">
                                    <p class="name font-weight-bold mb-0">{{Auth::user()->name}}</p>
                                    <p class="email text-muted mb-3">{{Auth::user()->email}}</p>
                                </div>
                            </div>
{{--                            <li class="nav-item">--}}
{{--                                <a href="{{ url('saldo')}}" class="nav-link">--}}
{{--                                    <i class="fe fe-user"></i>--}}
{{--                                    <span style="margin-left: 10px">Profile</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                            <a href="{{ route('logout') }}" class="nav-link dropdown-item"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fe fe-power"></i>Sign Out
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <!-- End Main Header-->
        @yield('content')
    </div>
    <!-- End Main Content-->
    <!-- Sidebar -->

    <!-- End Sidebar -->
    <!-- Main Footer-->
    <div class="main-footer text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span>Copyright © 2020 <a href="#">KyasDev</a>. Designed by <a href="#">Muhammad Rizky Asyari</a> All rights reserved.</span>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer-->
</div>
<!-- End Page -->
<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

<!-- Jquery js-->
<script src="{{url('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{url('assets/plugins/jquery-mask-money/dist/jquery.maskMoney.min.js')}}"></script>
<script src="{{url('assets/js/app.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

{{--<!-- Ionicons js-->--}}
{{--<script src="{{url('assets/plugins/ionicons/ionicons.js')}}"></script>--}}
<script src="{{url('plugins/feather-icons/feather.min.js')}}"></script>

<!-- Rating js-->
<script src="{{url('assets/plugins/rating/jquery.rating-stars.js')}}"></script>

<!-- Flot Chart js-->
<script src="{{url('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{url('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{url('assets/js/chart.flot.sampledata.js')}}"></script>
<!-- Chart.Bundle js-->
<script src="{{url('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Peity js-->
<script src="{{url('assets/plugins/peity/jquery.peity.min.js')}}"></script>
<!-- Jquery-Ui js-->
<script src="{{url('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Select2 js-->
<script src="{{url('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--MutipleSelect js-->
<script src="{{url('assets/plugins/multipleselect/multiple-select.js')}}"></script>
<script src="{{url('assets/plugins/multipleselect/multi-select.js')}}"></script>
<!-- Jquery.mCustomScrollbar js-->
<script src="{{url('assets/plugins/jquery.mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- index -->
{{--<script src="{{url('assets/js/index.js')}}"></script>--}}

<!-- Perfect-scrollbar js-->
<script src="{{url('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>


<!-- Sidemenu js-->
<script src="{{url('assets/plugins/sidemenu/sidemenu.js')}}"></script>

<!-- Sidebar js-->
<script src="{{url('assets/plugins/sidebar/sidebar.js')}}"></script>

<!-- Sticky js-->
<script src="{{url('assets/js/sticky.js')}}"></script>

<!-- Switcher js-->
<script src="{{url('assets/switcher/js/switcher.js')}}"></script>

<!-- Custom js-->
<script src="{{url('assets/js/custom.js')}}"></script>

<!--Sumoselect js-->
<script src="{{url('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>
<!-- Form-elements js-->
{{--<script src="{{url('assets/js/advanced-form-elements.js')}}"></script>--}}
<script src="{{url('assets/js/select2.js')}}"></script>

<!--Fileuploads js-->
<script src="{{url('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{url('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
<!-- common js -->
<script src="{{url('js/template.js')}}"></script>
<!-- end common js -->
<script src="{{url('assets/plugins/datatables-net-bs4/dataTables.buttons.min.js')}}"></script>
<script src="{{url('assets/plugins/datatables-net-bs4/dataTables.searchPanes.min.js')}}"></script>
<script src="{{url('assets/plugins/datatables-net-bs4/dataTables.select.min.js')}}"></script>

<!-- end plugin js -->
<script src="{{url('js/dashboard.js')}}"></script>
<script src="{{url('js/datepicker.js')}}"></script>
<script src="{{url('js/select2.js')}}"></script>>
<!-- Data Table js -->
<script src="{{url('js/data-table.js')}}"></script>
<script src="{{url('assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{url('assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('assets/js/table-data.js')}}"></script>
<script src="{{url('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{url('assets/plugins/datatable/fileexport/dataTables.buttons.min.js')}}"></script>
<script src="{{url('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js')}}"></script>
<script src="{{url('assets/plugins/datatable/fileexport/jszip.min.js')}}"></script>
<script src="{{url('assets/plugins/datatable/fileexport/pdfmake.min.js')}}"></script>
<script src="{{url('assets/plugins/datatable/fileexport/vfs_fonts.js')}}"></script>
<script src="{{url('assets/plugins/datatable/fileexport/buttons.html5.min.js')}}"></script>
<script src="{{url('assets/plugins/datatable/fileexport/buttons.print.min.js')}}"></script>
<script src="{{url('assets/plugins/datatable/fileexport/buttons.colVis.min.js')}}"></script>

<!-- Sweet-Alert js-->
<script src="{{url('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{url('assets/plugins/sweet-alert/dark-jquery.sweet-alert.js')}}"></script>
{{--<script type="text/javascript">--}}
{{--    $(document).ready(function () {--}}
{{--        $('input[type=number]').on('mousewheel', function (e) {--}}
{{--            $(e.target).blur();--}}
{{--        });--}}
{{--        $(".rupiah-input").maskMoney({--}}
{{--            prefix: 'Rp ',--}}
{{--            allowNegative: true,--}}
{{--            thousands: '.',--}}
{{--            decimal: ',',--}}
{{--            affixesStay: false--}}
{{--        });--}}
{{--    });--}}
{{--</script>--}}

<script>
    var root = window.origin + '/spus/public/'

    $('.edit-jurusan').click(function () {
        var id = $(this).val();
        var getUrl = root + 'api/jurusan/' + id;

        $.ajax({
            url: getUrl,
            type: 'ajax',
            method: 'get',
            datatype: 'json',
            success: function (response) {
                var hasil = JSON.parse(response);
                console.log(hasil.hasil);

                $('#n-jurusan').val(hasil.hasil.nama_jurusan);
                $('#id-jurusan').val(hasil.hasil.id_jurusan);
            },
            error: function (response) {
                console.log(response.status + 'error');
            }
        })

    })

    $('.bayar-tagihan').click(function () {
        var id = $(this).val();
        $('#id-pembayaran').val(id);

    })
// <<<<<<< HEAD
// =======
//     $('.tahun_ajaran').click(function () {
//         var id = $(this).val();
//         $('#id-tahun-ajar').val(id);
//
//     })
// >>>>>>> jihad

</script>

<script>
    var root = window.origin + '/spus/public/'

    $('.edit-kelas').click(function () {
        var id = $(this).val();
        var getUrl = root + 'api/kelas/' + id;

        $.ajax({
            url: getUrl,
            type: 'ajax',
            method: 'get',
            datatype: 'json',
            success: function (response) {
                var hasil = JSON.parse(response);
                console.log(hasil.hasil);

                $('#n-kelas').val(hasil.hasil.nama_kelas);
                $('#id-kelas').val(hasil.hasil.id_kelas);
            },
            error: function (response) {
                console.log(response.status + 'error');
            }
        })

    })
</script>

<script type="text/javascript">
    if (window.location.href === 'http://localhost/spus/public/home') {
        var str = document.getElementById('typewriter').innerHTML,
            i = 0,
            isTag,
            text;

        (function type() {
            text = str.slice(0, ++i);
            if (text === str) return;

            document.getElementById('typewriter').innerHTML = text;

            var char = text.slice(-1);
            if (char === '<') isTag = true;
            if (char === '>') isTag = false;

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
                document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
                t = setTimeout(function () {
                    startTime()
                }, 500);
            }

            startTime();
        })();
    }


</script>
</body>

<!-- Mirrored from laravel.spruko.com/dashlead/Leftmenu-Icon-Light/index by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Nov 2020 08:02:35 GMT -->
</html>

