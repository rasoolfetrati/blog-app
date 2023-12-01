<!DOCTYPE html>
<html lang="fa">

<!-- Mirrored from rtlpr.ir/RTL/Angle/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 Jul 2023 12:46:46 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App + jQuery">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <title>پنل ادمین مجله</title>
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="/vendor/_40fortawesome/fontawesome-free-webfonts/css/fa-brands.css">
    <link rel="stylesheet" href="/vendor/_40fortawesome/fontawesome-free-webfonts/css/fa-regular.css">
    <link rel="stylesheet" href="/vendor/_40fortawesome/fontawesome-free-webfonts/css/fa-solid.css">
    <link rel="stylesheet" href="/vendor/_40fortawesome/fontawesome-free-webfonts/css/fontawesome.css">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="/vendor/simple-line-icons/css/simple-line-icons.css">
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="/vendor/animate.css/animate.css">
    <!-- WHIRL (spinners)-->
    <link rel="stylesheet" href="/vendor/whirl/dist/whirl.css">
       <!-- SWEET ALERT-->
   <link rel="stylesheet" href="/vendor/sweetalert/dist/sweetalert.css">
    <!-- =============== PAGE VENDOR STYLES ===============-->
    <!-- WEATHER ICONS-->
    <link rel="stylesheet" href="/vendor/weather-icons/css/weather-icons.css">
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="/css/bootstrap-rtl.css" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="/css/app-rtl.css" id="maincss">

</head>

<body>
    <div class="wrapper">
        <!-- top navbar-->
        <header class="topnavbar-wrapper">
            <!-- START Top Navbar-->
            <nav class="navbar topnavbar">
                <!-- START navbar header-->
                <div class="navbar-header">
                    <a class="navbar-brand" href="/#/">
                        <div class="brand-logo">
                            <img class="img-fluid" src="/img/logo.png" alt="App Logo">
                        </div>
                        <div class="brand-logo-collapsed">
                            <img class="img-fluid" src="/img/logo-single.png" alt="App Logo">
                        </div>
                    </a>
                </div>
                <!-- END navbar header-->
                <!-- START Left navbar-->
                <ul class="navbar-nav mr-auto flex-row">
                    <li class="nav-item">
                        <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                        <a class="nav-link d-none d-md-block d-lg-block d-xl-block" href="#"
                            data-trigger-resize="" data-toggle-state="aside-collapsed">
                            <em class="fas fa-bars"></em>
                        </a>
                        <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                        <a class="nav-link sidebar-toggle d-md-none" href="#" data-toggle-state="aside-toggled"
                            data-no-persist="true">
                            <em class="fas fa-bars"></em>
                        </a>
                    </li>
                    <!-- START User avatar toggle-->
                    <li class="nav-item d-none d-md-block">
                        <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                        <a class="nav-link" id="user-block-toggle" href="/#user-block" data-toggle="collapse">
                            <em class="icon-user"></em>
                        </a>
                    </li>
                    <!-- END User avatar toggle-->
                    <!-- START lock screen-->
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link" href="/lock.html" title="Lock screen">
                            <em class="icon-lock"></em>
                        </a>
                    </li>
                    <!-- END lock screen-->
                </ul>
                <!-- END Left navbar-->
                <!-- START Right Navbar-->
                <ul class="navbar-nav flex-row">
                    <!-- Search icon-->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-search-open="">
                            <em class="icon-magnifier"></em>
                        </a>
                    </li>
                    <!-- Fullscreen (only desktops)-->
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link" href="#" data-toggle-fullscreen="">
                            <em class="fas fa-expand"></em>
                        </a>
                    </li>
                    <!-- START Alert menu-->
                    <li class="nav-item dropdown dropdown-list">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                            data-toggle="dropdown">
                            <em class="icon-bell"></em>
                            <span class="badge badge-danger">11</span>
                        </a>
                        <!-- START Dropdown menu-->
                        <div class="dropdown-menu dropdown-menu-right animated flipInX">
                            <div class="dropdown-item">
                                <!-- START list group-->
                                <div class="list-group">
                                    <!-- list item-->
                                    <div class="list-group-item list-group-item-action">
                                        <div class="media">
                                            <div class="align-self-start mr-2">
                                                <em class="fab fa-twitter fa-2x text-info"></em>
                                            </div>
                                            <div class="media-body">
                                                <p class="m-0">دنبال کننده های جدید</p>
                                                <p class="m-0 text-muted text-sm">1 دنبال کننده جدید</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- list item-->
                                    <div class="list-group-item list-group-item-action">
                                        <div class="media">
                                            <div class="align-self-start mr-2">
                                                <em class="fas fa-envelope fa-2x text-warning"></em>
                                            </div>
                                            <div class="media-body">
                                                <p class="m-0">ایمیل های جدید</p>
                                                <p class="m-0 text-muted text-sm">شما 10 ایمیل جدید دارید</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- list item-->
                                    <div class="list-group-item list-group-item-action">
                                        <div class="media">
                                            <div class="align-self-start mr-2">
                                                <em class="fas fa-tasks fa-2x text-success"></em>
                                            </div>
                                            <div class="media-body">
                                                <p class="m-0">وظایف محول شده</p>
                                                <p class="m-0 text-muted text-sm">11 وظیفه محول شده جدید</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- last list item-->
                                    <div class="list-group-item list-group-item-action">
                                        <span class="d-flex align-items-center">
                                            <span class="text-sm">اعلامیه ها بیشتر</span>
                                            <span class="badge badge-danger ml-auto">14</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- END list group-->
                            </div>
                        </div>
                        <!-- END Dropdown menu-->
                    </li>
                    <!-- END Alert menu-->
                    <!-- START Offsidebar button-->
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle-state="offsidebar-open"
                            data-no-persist="true">
                            <em class="icon-notebook"></em>
                        </a>
                    </li>
                    <!-- END Offsidebar menu-->
                </ul>
                <!-- END Right Navbar-->
                <!-- START Search form-->
                <form class="navbar-form" role="search" action="https://rtlpr.ir/RTL/Angle/search.html">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="عبارت مورد نظر را تایپ نمایید ...">
                        <div class="fas fa-times navbar-form-close" data-search-dismiss=""></div>
                    </div>
                    <button class="d-none" type="submit">ارسال</button>
                </form>
                <!-- END Search form-->
            </nav>
            <!-- END Top Navbar-->
        </header>
        <!-- sidebar-->
        <aside class="aside-container">
            <!-- START Sidebar (left)-->
            <div class="aside-inner">
                <nav class="sidebar" data-sidebar-anyclick-close="">
                    <!-- START sidebar nav-->
                    <ul class="sidebar-nav">
                        <!-- START user info-->
                        <li class="has-user-block">
                            <div class="collapse" id="user-block">
                                <div class="item user-block">
                                    <!-- User picture-->
                                    <div class="user-block-picture">
                                        <div class="user-block-status">
                                            <img class="img-thumbnail rounded-circle" src="/img/user/02.jpg"
                                                alt="Avatar" width="60" height="60">
                                            <div class="circle bg-success circle-lg"></div>
                                        </div>
                                    </div>
                                    <!-- Name and Job-->
                                    <div class="user-block-info">
                                        <span class="user-block-name">سلام، رضا</span>
                                        <span class="user-block-role">طراح رابط کاربری</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- END user info-->
                        <li class="nav-heading ">
                            <span data-localize="sidebar.heading.HEADER">منوی اصلی</span>
                        </li>
                        <li class="active">
                            <a href="#dashboard" title="Dashboard" data-toggle="collapse" class="" aria-expanded="true">
                                <em class="icon-speedometer"></em>
                                <span data-localize="sidebar.nav.DASHBOARD">داشبورد</span>
                            </a>
                            <ul class="sidebar-nav sidebar-subnav collapse show" id="dashboard" style="">
                                <li class="sidebar-subnav-header">داشبورد</li>
                                <li class=" active">
                                    <a href="{{ route('IndexPost') }}" title="مدیریت پست ها">
                                        <span>مدیریت پست ها</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="{{ route('Categories.index') }}" title=">مدیریت تگ ها">
                                        <span>مدیریت تگ ها</span>
                                    </a>
                                </li>
                                <li class=" ">
                                    <a href="{{ route('show_comments') }}" title="مدیریت نظرات ">
                                        <span>مدیریت نظرات </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                      
                    </ul>
                    <!-- END sidebar nav-->
                </nav>
            </div>
            <!-- END Sidebar (left)-->
        </aside>
        <!-- offsidebar-->
        <aside class="offsidebar d-none">
            <!-- START Off Sidebar (right)-->
            <nav>
                <div role="tabpanel">
                    <!-- Nav tabs-->
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" href="/#app-settings" aria-controls="app-settings"
                                role="tab" data-toggle="tab">
                                <em class="icon-equalizer fa-lg"></em>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" href="/#app-chat" aria-controls="app-chat" role="tab"
                                data-toggle="tab">
                                <em class="icon-user fa-lg"></em>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- END Off Sidebar (right)-->
        </aside>
        <!-- Main section-->
        <section class="section-container">
            @yield('content')
        </section>
        <!-- Page footer-->
        <footer class="footer-container">
            <span>&copy; 2023 - Angle</span>
        </footer>
    </div>
    <!-- =============== VENDOR SCRIPTS ===============-->
    <!-- MODERNIZR-->
    <script src="/vendor/modernizr/modernizr.custom.js"></script>
    <!-- JQUERY-->
    <script src="/vendor/jquery/dist/jquery.js"></script>
    <!-- BOOTSTRAP-->
    <script src="/vendor/popper.js/dist/umd/popper.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.js"></script>
    <!-- STORAGE API-->
    <script src="/vendor/js-storage/js.storage.js"></script>
    <!-- JQUERY EASING-->
    <script src="/vendor/jquery.easing/jquery.easing.js"></script>
    <!-- ANIMO-->
    <script src="/vendor/animo/animo.js"></script>
    <!-- SCREENFULL-->
    <script src="/vendor/screenfull/dist/screenfull.js"></script>
    <!-- LOCALIZE-->
    <script src="/vendor/jquery-localize/dist/jquery.localize.js"></script>
    <!-- =============== PAGE VENDOR SCRIPTS ===============-->
    <!-- SLIMSCROLL-->
    <script src="/vendor/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- SPARKLINE-->
    <script src="/vendor/jquery-sparkline/jquery.sparkline.js"></script>
    <!-- FLOT CHART-->
    <script src="/vendor/flot/jquery.flot.js"></script>
    <script src="/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.js"></script>
    <script src="/vendor/flot/jquery.flot.resize.js"></script>
    <script src="/vendor/flot/jquery.flot.pie.js"></script>
    <script src="/vendor/flot/jquery.flot.time.js"></script>
    <script src="/vendor/flot/jquery.flot.categories.js"></script>
    <script src="/vendor/jquery.flot.spline/jquery.flot.spline.js"></script>
    <!-- EASY PIE CHART-->
    <script src="/vendor/easy-pie-chart/dist/jquery.easypiechart.js"></script>
    <!-- MOMENT JS-->
    <script src="/vendor/moment/min/moment-with-locales.js"></script>
    <!-- =============== APP SCRIPTS ===============-->
    <script src="/vendor/app.js"></script>
    @yield('scripts')
</body>
</html>
