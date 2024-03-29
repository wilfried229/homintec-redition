<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title> Rédition</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- les bibliothèques pour jQuery Mobile -->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
   @include('partials.css')
@yield('css')
</head>

<body class="theme-red">
    <!-- Page Loader -->

    <!-- #END# Search Bar -->
    <!-- Top Bar -->
        @include('partials.nav')
    <!-- #Top Bar -->
  @include('partials.sidebar')

        @yield('content')


    @include('partials.js')
    @yield('js')
</body>

</html>
