
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <link rel="icon" type="image/x-icon" href="favicon.ico">
   <title>صفحه لاگین</title>
   <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="/vendor/_40fortawesome/fontawesome-free-webfonts/css/fa-brands.css">
   <link rel="stylesheet" href="/vendor/_40fortawesome/fontawesome-free-webfonts/css/fa-regular.css">
   <link rel="stylesheet" href="/vendor/_40fortawesome/fontawesome-free-webfonts/css/fa-solid.css">
   <link rel="stylesheet" href="/vendor/_40fortawesome/fontawesome-free-webfonts/css/fontawesome.css">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="/vendor/simple-line-icons/css/simple-line-icons.css">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="/css/bootstrap-rtl.css" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="/css/app-rtl.css" id="maincss">
</head>

<body>
    <div class="wrapper">
        <div class="block-center mt-4 wd-xl">
            <!-- START card-->
            <div class="card card-flat">
                <div class="card-header text-center bg-dark">
                    <a href="#">
                        <img class="block-center" src="/img/logo.png" alt="Image">
                    </a>
                </div>
                <div class="card-body">
                    <p class="text-center py-2">ثبت نام</p>
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    <form class="mb-3" id="registerForm" novalidate method="POST" action="{{ route('register_store') }}">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label class="text-muted" for="signupInputName1">نام و نام خانوادگی</label>
                            <div class="input-group with-focus">
                                <input class="form-control border-right-0" id="signupInputName1" name="name" type="text" placeholder="نام کامل خود را وارد نمایید" autocomplete="off" required>
                                <div class="input-group-append">
                                    <span class="input-group-text text-muted bg-transparent border-left-0">
                                        <em class="fa fa-envelope"></em>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="signupInputEmail1">آدرس ایمیل</label>
                            <div class="input-group with-focus">
                                <input class="form-control border-right-0" id="signupInputEmail1" name="email" type="email" placeholder="ایمیل خود را وارد نمایید" autocomplete="off" required>
                                <div class="input-group-append">
                                    <span class="input-group-text text-muted bg-transparent border-left-0">
                                        <em class="fa fa-envelope"></em>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="signupInputPassword1">رمز عبور</label>
                            <div class="input-group with-focus">
                                <input class="form-control border-right-0" id="signupInputPassword1" name="password" type="password" placeholder="رمز عبور" autocomplete="off" required>
                                <div class="input-group-append">
                                    <span class="input-group-text text-muted bg-transparent border-left-0">
                                        <em class="fa fa-lock"></em>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-muted" for="password_confirmation">تکرار رمز عبور</label>
                            <div class="input-group with-focus">
                                <input class="form-control border-right-0" id="password_confirmation" name="password_confirmation" type="password" placeholder="تکرار رمز عبور" autocomplete="off" required data-parsley-equalto="#signupInputPassword1">
                                <div class="input-group-append">
                                    <span class="input-group-text text-muted bg-transparent border-left-0">
                                        <em class="fa fa-lock"></em>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-block btn-primary mt-3" type="submit">ایجاد حساب کاربری</button>
                    </form>
                    <p class="pt-3 text-center">قبلا ثبت نام کرده اید?</p>
                    <a class="btn btn-block btn-secondary" href="/LoginPage">لاگین</a>
                </div>
            </div>
        </div>
    </div>
    <!-- =============== VENDOR SCRIPTS ===============-->
    <!-- MODERNIZR-->
    <script src="/vendor/modernizr/modernizr.custom.js"></script>
    <!-- JQUERY-->
    <script src="/vendor/jquery/dist/jquery.js"></script>
    <!-- BOOTSTRAP-->
    <script src="/vendor/bootstrap/dist/js/bootstrap.js"></script>
    <!-- STORAGE API-->
    <script src="/vendor/js-storage/js.storage.js"></script>
    <!-- PARSLEY-->
    <script src="/vendor/parsleyjs/dist/parsley.js"></script>
    <!-- =============== APP SCRIPTS ===============-->
    <script src="/js/app.js"></script>
</body>
</html>