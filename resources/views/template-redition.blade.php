
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Reddition</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    @include('partials.css')
    @yield('css')

</head>

<body class="theme-red">
    <!-- Page Loader -->

    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->IDE
    <!-- Top Bar -->

    @include('partials.nav')

    <!-- #Top Bar -->


    @include('partials.sidebar')

    <section class="content">
        <div class="container-fluid">

            @yield('header')

            <!-- Basic Examples -->


            <!-- Exportable Table -->
           @yield('content')
            <!-- #END# Exportable Table -->
        </div>
    </section>


    @include('partials.js')

    @yield('js')
</body>

</html>
