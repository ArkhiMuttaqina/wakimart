<!DOCTYPE html>
<html lang="id" class="js">

<head>

    <meta charset="utf-8">

    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>@yield('title') | Error @yield('code')</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/') }}/css/dashlite.css?ver=2.9.1">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/') }}/css/theme.css?ver=2.9.1">
</head>

<body class="nk-body bg-white npc-general pg-error">
    <div class="nk-app-root">
        <!-- main@s -->
        <div class="nk-main ">
            <!-- wrap@s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content@s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle wide-xs mx-auto">
                        <div class="nk-block-content nk-error-ld text-center">
                            <h1 class="nk-error-head">@yield('code')</h1>
                            <h3 class="nk-error-title">@yield('title')</h3>
                            <h6 class="nk-error-text">[ @yield('reallycode') ]</h6>
                            <p class="nk-error-text">@yield('message')</p>
                            <a href="{{ app('router')->has('home') ? route('home') : url('/') }}" class="btn btn-lg btn-primary mt-2">Kembali</a>
                        </div>
                    </div><!-- .nk-block -->
                </div>
                <!-- wrap@e -->
            </div>
            <!-- content@e -->
        </div>
        <!-- main@e -->
    </div>
    <!-- app-root@e -->
    <!-- JavaScript -->
    <script src="{{ asset('assets/') }}/js/bundle.js?ver=2.9.1"></script>
    <script src="{{ asset('assets/') }}/js/scripts.js?ver=2.9.1"></script>
    <!-- select region modal -->


</html>
