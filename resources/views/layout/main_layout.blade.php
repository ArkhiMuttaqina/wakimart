<!DOCTYPE html>
<html lang="zxx" class="js">

<head>

    {{-- <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers."> --}}
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('src_dashboard/') }}/images/favicon.png">
    <!-- Page Title  -->
    <!-- StyleSheets  -->

    <link rel="stylesheet" href="{{ asset('src_dashboard/') }}/assets/css/dashlite.css?ver=2.9.1">


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
                crossorigin="anonymous"></script>
    {{-- <link id="skin-default" rel="stylesheet" href="{{ asset('src_dashboard/') }}/assets/css/theme.css?ver=2.9.1"> --}}
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main@s -->
        <div class="nk-main ">
            <!-- sidebar@s -->
            @include('layout.sidebar')
            <!-- sidebar@e -->
            <!-- wrap@s -->
            <div class="nk-wrap ">
                <!-- main header@s -->
                @include('layout.header')
                <!-- main header@e -->
                <!-- content@s -->
                <div class="nk-content">
                @yield('konten')

                </div>
                <!-- content@e -->
                <!-- footer@s -->
               @include('layout.footer')
                <!-- footer@e -->
            </div>
            <!-- wrap@e -->
        </div>
        <!-- main@e -->
    </div>
    <!-- app-root@e -->

    <!-- JavaScript -->

    <script src="{{ asset('src_dashboard/') }}/assets/js/bundle.js?ver=2.9.1"></script>

    <script src="{{ asset('src_dashboard/') }}/assets/js/scripts.js?ver=2.9.1"></script>
    <script src="{{ asset('src_dashboard/') }}/assets/js/libs/datatable-btns.js?ver=2.9.1"></script>

</body>


</html>
