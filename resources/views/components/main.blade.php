<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RealVictoryGroups</title>

    {{-- fonts --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- AOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <!-- Tailwind CSS via CDN (can be replaced with Vite if you're using a build process) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Vite directive to include compiled CSS, replace if necessary with your build system -->
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col  bg-gray-200 text-gray-900">

    <!-- Include the header component -->

    @include('components.header')

    <!-- Main content section -->

    <main class="flex-grow min-h-screen py-16">

        @yield('content')
    </main>

    <!-- Include the footer component -->
    @include('components.footer')

    <!-- AOS JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        // Initialize AOS
        AOS.init();
    </script>

</body>

</html>
