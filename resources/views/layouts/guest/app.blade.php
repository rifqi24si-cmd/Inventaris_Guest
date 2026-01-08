<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <title>Inventaris</title>

    @include('layouts.guest.css')

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->
    <a href="https://wa.me/628117774714?text=Halo%20Rifqi,%20saya%20ingin%20bertanya%20tentang%20sistem%20manajemen%20aset."
        class="floating-wa" target="_blank">
        <div class="wa-text">Hubungi Saya</div>
        <i class="fab fa-whatsapp"></i>
    </a>
    @include('layouts.guest.navbar')

    @yield('content')

    @include('layouts.guest.footer')
    @include('layouts.guest.js')
</body>

</html>