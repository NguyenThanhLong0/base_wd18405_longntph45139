<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salessa Shop - Home</title>
    @include('layouts.partials.css')
</head>

<body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
        @include('layouts.partials.nav')
    </header>
    <!--================ End Header Menu Area =================-->

    <main class="site-main">

        @include('layouts.partials.banner')


        @yield('content')



    </main>


    @include('layouts.partials.footer')


    @include('layouts.partials.js')

</body>

</html>