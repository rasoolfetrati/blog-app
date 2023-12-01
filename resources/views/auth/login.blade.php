<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App + jQuery">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Angle - Bootstrap Admin Template</title>
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="vendor/_40fortawesome/fontawesome-free-webfonts/css/fa-brands.css">
    <link rel="stylesheet" href="vendor/_40fortawesome/fontawesome-free-webfonts/css/fa-regular.css">
    <link rel="stylesheet" href="vendor/_40fortawesome/fontawesome-free-webfonts/css/fa-solid.css">
    <link rel="stylesheet" href="vendor/_40fortawesome/fontawesome-free-webfonts/css/fontawesome.css">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="css/bootstrap-rtl.css" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="css/app-rtl.css" id="maincss">
</head>

<body>
    <div class="wrapper">
        <div class="block-center mt-4 wd-xl">
            <!-- START card-->
            <div class="card card-flat">
                <div class="card-header text-center bg-dark">
                    <a href="#">
                        <img class="block-center rounded" src="img/logo.png" alt="Image">
                    </a>
                </div>
                <div class="card-body">
                    <p class="text-center py-2">برای ادامه ورود کنید</p>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    <form class="mb-3" id="loginForm" method="POST" action="{{ route('login_store') }}" novalidate>
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <div class="input-group with-focus">
                                <input class="form-control border-right-0" id="exampleInputEmail1" name="email"
                                    type="email" placeholder="ایمل خود را وارد نمایید" autocomplete="off" required>
                                <div class="input-group-append">
                                    <span class="input-group-text text-muted bg-transparent border-left-0">
                                        <em class="fa fa-envelope"></em>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group with-focus">
                                <input class="form-control border-right-0" id="exampleInputPassword1" name="password"
                                    type="password" placeholder="رمز عبور" required>
                                <div class="input-group-append">
                                    <span class="input-group-text text-muted bg-transparent border-left-0">
                                        <em class="fa fa-lock"></em>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="checkbox c-checkbox float-left mt-0">
                                <label>
                                    <input type="checkbox" name="remember" id="remember_me">
                                    <span class="fa fa-check"></span> مرا بخاطر بسپار</label>
                            </div>
                            <div class="float-right">
                                <a class="text-muted" href="{{ route('password.request') }}">فراموشی رمز عبور</a>
                            </div>
                        </div>
                        <button class="btn btn-block btn-primary mt-3" type="submit">ورود</button>
                    </form>
                    <p class="pt-3 text-center">ثبت نام کنید</p>
                    <a class="btn btn-block btn-secondary" href="{{ route('register') }}">ثبت نام کنید</a>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== VENDOR SCRIPTS ===============-->
    <!-- MODERNIZR-->
    <script src="vendor/modernizr/modernizr.custom.js"></script>
    <!-- JQUERY-->
    <script src="vendor/jquery/dist/jquery.js"></script>
    <!-- BOOTSTRAP-->
    <script src="vendor/bootstrap/dist/js/bootstrap.js"></script>
    <!-- STORAGE API-->
    <script src="vendor/js-storage/js.storage.js"></script>
    <!-- PARSLEY-->
    <script src="vendor/parsleyjs/dist/parsley.js"></script>
    <!-- =============== APP SCRIPTS ===============-->
    <script src="js/app.js"></script>
</body>

</html>
