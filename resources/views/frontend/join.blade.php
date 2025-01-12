@extends('components.main')

@section('content')
    <style>
        /* Enhanced 3D Backgrounds */
        .background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -2;
        }

        .background-layer {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .background-layer:nth-child(1) {
            background-image: linear-gradient(135deg, rgba(255,255,255,0.7), rgba(255,255,255,0.3)), url('/api/placeholder/1920/1080');
            opacity: 1;
        }

        .background-layer:nth-child(2) {
            background-image: linear-gradient(135deg, rgba(255,255,255,0.7), rgba(255,255,255,0.3)), url('/api/placeholder/1920/1080');
        }

        .background-layer:nth-child(3) {
            background-image: linear-gradient(135deg, rgba(255,255,255,0.7), rgba(255,255,255,0.3)), url('/api/placeholder/1920/1080');
        }

        /* Enhanced Main Container */
        .posts-page {
            position: relative;
            min-height: 100vh;
            padding: 4rem 0;
            color: gray;
            perspective: 1000px;
            background-color: white;
        }

        .container {
            position: relative;
            z-index: 1;
        }

        /* Enhanced Post Card with Left Text and Right Image */
        .post-card {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            transform-style: preserve-3d;
            transition: all 0.5s ease;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .post-card:hover {
            transform: translateY(-10px) rotateX(5deg) rotateY(5deg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .post-content {
            flex: 1;
            padding: 2rem;
            background: white;
            order: 1;
        }

        .post-image {
            flex: 1;
            position: relative;
            overflow: hidden;
            order: 2;
        }

        .post-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        /* Enhanced Title Animation */
        .page-title {
            font-size: 4rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 3rem;
            color: gray;
            animation: titlePulse 3s ease-in-out infinite;
        }

        @keyframes titlePulse {
            0%, 100% {
                transform: scale(1) rotateX(0);
                text-shadow: 0 0 20px rgba(0,0,0,0.5);
            }
            50% {
                transform: scale(1.05) rotateX(5deg);
                text-shadow: 0 0 40px rgba(0,0,0,0.8);
            }
        }

        /* Additional Styles for Image Slider */
        .post-image {
            position: relative;
            height: 100%;
        }

        .post-image .slider {
            display: flex;
            transition: transform 1s ease-in-out;
        }

        .post-image .slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .post-image .slider > img {
            flex-shrink: 0;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .page-title {
                font-size: 2rem; /* Smaller title font */
            }

            .post-card {
                flex-direction: column;
                align-items: center; /* Stack content and image vertically */
            }

            .post-content {
                padding: 1rem; /* Reduce padding on smaller screens */
            }

            .post-image {
                width: 100%;
                order: 1; /* Make image come first on small screens */
            }

            .post-image img {
                height: auto; /* Allow images to be responsive */
            }

            .container {
                padding-left: 1rem;
                padding-right: 1rem;
            }
        }

        @media (max-width: 480px) {
            .post-card {
                padding: 1rem;
            }

            .page-title {
                font-size: 1.5rem; /* Even smaller title font on very small screens */
            }

            .post-content {
                font-size: 1rem;
            }
        }
    </style>

    <!-- Enhanced Background Layers -->
    <div class="background-container">
        <div class="background-layer"></div>
        <div class="background-layer"></div>
        <div class="background-layer"></div>
    </div>

    <div class="posts-page">
        <div class="container mx-auto px-6 lg:px-16">
            <h1 class="page-title">Featured Post</h1>

            <!-- Single Post Card -->
            <div class="post-card">
                <div class="post-content">
                    <h2 class="text-2xl font-bold mb-4 text-gray-600">Latest Fashion Trends</h2>
                    <p class="text-gray-600 mb-4">Discover the hottest fashion trends for the upcoming season. From street style to haute couture.</p>
                    <p class="text-gray-600 mb-4">Fashion is ever-evolving, with new trends emerging every season. From the streets to the runway, styles are influenced by culture, technology, and even the environment. Stay updated and stay ahead of the trends to create your own unique look.</p>
                    <p class="text-gray-600 mb-4">In this post, we dive into the latest trends that are set to dominate the fashion industry. Whether you're looking to refresh your wardrobe or keep up with the trends, there's something for everyone.</p>
                    <a href="#" class="inline-block px-6 py-2 bg-gray-200 text-black rounded-full hover:bg-gray-300 transition-colors">Read More</a>
                </div>
                <div class="post-image">
                    <div class="slider">
                        <img src="{{ asset('assets/img/about.png') }}" alt="Post Image 1">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Post Image 2">
                        <img src="{{ asset('assets/img/calling.jpg') }}" alt="Post Image 3">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Enhanced Background Animation
        const backgrounds = document.querySelectorAll('.background-layer');
        let currentBg = 0;

        function changeBackground() {
            backgrounds[currentBg].style.opacity = '0';
            currentBg = (currentBg + 1) % backgrounds.length;
            backgrounds[currentBg].style.opacity = '1';
        }

        setInterval(changeBackground, 5000);

        // Image Slider
        let currentSlide = 0;
        const slider = document.querySelector('.post-image .slider');
        const images = document.querySelectorAll('.post-image .slider img');

        function slideImages() {
            currentSlide = (currentSlide + 1) % images.length;
            const offset = -currentSlide * 100; // Moving the slider
            slider.style.transform = `translateX(${offset}%)`;
        }

        setInterval(slideImages, 3000);
    </script>
@endsection
