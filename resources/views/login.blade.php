<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="{{ asset('src_login/') }}/fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{ asset('src_login/') }}/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('src_login/') }}/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('src_login/') }}/css/style.css">

    <title>Masuk | We ERP</title>
</head>

<body>
    <div class="d-lg-flex half">

        <div class="bg order-1 order-md-2" style="background-image: url('{{ asset('src_login/') }}/images/bg_1.jpg');">
        </div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">

                        <div class="row">
                            <div class="col">
                                <img src="{{ asset('images/') }}/wakiERP.png" class="img-fluid"
                                    style="width: 50%;">
                            </div>
                        </div>
                        <p class="mb-4">Selamat datang <b>diwAKIERP</b>, Aplikasi ini dibuat oleh <b>Arkhi
                                Muttaqina</b> untuk memenuhi penugasan
                            dari WakiMart. </p>
                        <form action="{{ url('') }}/postlogin" enctype="multipart/form-data" method="post">
                               @if (\Session::has('login_alert'))
                            <div class="alert alert-danger d-flex align-items-center" role="alert">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                    class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16" style="margin-right:5px;">
                                    <path
                                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                                <div>
                                  {{ Session::get('login_alert') }}
                                </div>
                            </div>
                            @endif
                             {{ csrf_field() }}
                            <div class="form-group first">
                                <label for="email">email</label>
                                <input type="text" class="form-control" placeholder="email kamu" name="email" id="email">
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Password Kamu" id="thepassword" name="thepassword">
                            </div>
                             <div class="custom-control custom-checkbox">
                                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                        id="show" onclick="val_pwsh()">

                                    <label style="margin-top:10px;" class="custom-control-label" for="show">Tampilkan
                                        Password</label>
                                </div>


                            <input type="submit" value="Log In" class="btn btn-block btn-primary">

                        </form>
                        <div class="text-center" style="margin-top:50px">
                            <h6>Create with <i class="icon ion-heart" style="color: #F31C00;"></i>
                                From<img src="{{ asset('src_login/') }}/images/logo-comp.png" class="img-fluid"
                                    style="width: 20%; margin-left:5px;"> </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="{{ asset('src_login/') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('src_login/') }}/js/popper.min.js"></script>
    <script src="{{ asset('src_login/') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('src_login/') }}/js/main.js"></script>

       <script type="text/javascript">
        function val_pwsh() {
            var x = document.getElementById("thepassword");
            if (x.type == "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>
