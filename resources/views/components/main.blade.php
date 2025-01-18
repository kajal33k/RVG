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

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- AOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Vite directive to include compiled CSS -->
    @vite('resources/css/app.css')

    <!-- Custom styles for background and colors -->
    <style>
        /* Container for the background iframe */
        .background-container {
            position: fixed;  /* Fixed position for background */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Keep behind content */
        }

        .background-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Main content styling */
        .content {
            position: relative;
            z-index: 1;
            padding: 2rem;
            /* Slight white background for better readability */
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        /* Color theme */
        .text-primary {
            color: #EF4444; /* Red */
        }

        .bg-primary {
            background-color: #EF4444; /* Red */
        }

        .bg-secondary {
            background-color: #F3F4F6; /* Light Gray */
        }

        .btn-primary {
            background-color: #EF4444; /* Red */
            color: white;
        }

        .btn-primary:hover {
            background-color: #DC2626; /* Darker Red on hover */
        }
    </style>
</head>

<body class="flex flex-col bg-transparent text-gray-900">

    <!-- Include the header component -->
    @include('components.header')

    <!-- Main content section -->
    <main class="flex-grow min-h-screen pt-16">

        <!-- Background iframe (fixed at the bottom) -->
        {{-- <div class="background-container">
            <iframe src="https://gifer.com/embed/75B1" frameborder="0" allowfullscreen></iframe>
        </div> --}}

        <div class="background-container">
           <img src="{{asset('assets/img/hd_image.png')}}" alt="" class="h-full w-full">
        </div>


        <!-- Main content -->
        <div class="content mx-auto ">
            @yield('content')
        </div>
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
