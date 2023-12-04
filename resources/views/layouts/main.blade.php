<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Lay Zar Pwint Family Co.,Ltd（Overseas Employment Agency） - @yield('title')
    </title>
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <meta name="keywords" content="Lay Zar Pwint Family Co.,Ltd" />
    <meta name="author" content="Lay Zar Pwint Family Co.,Ltd" />
    <meta name="robots" content="Lay Zar Pwint Family Co.,Ltd" />
    <meta name="description" content="Lay Zar Pwint Family Co.,Ltd" />
    <link rel="shortcut icon" href="{{ asset('data/company/logo.jpg') }}" />
    <meta property="og:image" content="{{ asset('data/company/logo.jpg') }}" />

</head>

<body>

    <div class="page-wrapper">

        @include('layouts.menu')


        @yield('content')

        @include('layouts.footer')
    </div>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/validate.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/custom-script.js') }}"></script>
</body>

</html>
