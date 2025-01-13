@extends('components.main')

@section('content')
    <style>
        .multi-slider-container {
            transform-style: preserve-3d;
            perspective: 2000px;
        }

        .slider {
            width: calc(25% - 1rem);
            transform-style: preserve-3d;
            transition: transform 0.3s ease;
        }

        .slider:hover {
            transform: translateZ(20px);
        }

        .image-container {
            transform-style: preserve-3d;
            transition: transform 0.5s ease;
        }

        .main-nav-button {
            transition: all 0.3s ease;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: white/90;
            padding: 1rem;
            border-radius: 9999px;
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1);
            z-index: 20;
        }

        .main-nav-button:hover {
            background: white;
        }
    </style>

    <div class="bg-gradient-to-b from-gray-50 to-gray-100 py-12">
        <div class="container mx-auto px-6">
            <h1 class="text-4xl font-bold text-center mb-12">Featured Collections</h1>
            
            <!-- Main container with navigation buttons -->
            <div class="relative">
                <button id="prevButton" class="main-nav-button left-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button id="nextButton" class="main-nav-button right-4">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>

                <!-- Main container for all sliders -->
                <div class="multi-slider-container flex gap-4">
                    <!-- First Slider -->
                    <div class="slider relative">
                        <div class="h-[400px] relative rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('assets/img/about.png') }}" class="image-container w-full h-full object-cover" alt="Image 1">
                        </div>
                    </div>

                    <!-- Second Slider -->
                    <div class="slider relative">
                        <div class="h-[400px] relative rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('assets/img/calling.jpg') }}" class="image-container w-full h-full object-cover" alt="Image 2">
                        </div>
                    </div>

                    <!-- Third Slider -->
                    <div class="slider relative">
                        <div class="h-[400px] relative rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('assets/img/banner.jpeg') }}" class="image-container w-full h-full object-cover" alt="Image 3">
                        </div>
                    </div>

                    <!-- Fourth Slider -->
                    <div class="slider relative">
                        <div class="h-[400px] relative rounded-xl overflow-hidden shadow-lg">
                            <img src="{{ asset('assets/img/attendence.jpg') }}" class="image-container w-full h-full object-cover" alt="Image 4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sliders = document.querySelectorAll('.slider');
            const prevButton = document.getElementById('prevButton');
            const nextButton = document.getElementById('nextButton');
            let currentImageIndex = 1;
            const totalImages = 4;

            function updateAllSliders(newIndex) {
                sliders.forEach((slider, index) => {
                    const img = slider.querySelector('img');
                    // Calculate image index for each slider
                    let imageIndex = ((newIndex + index - 1) % totalImages) + 1;
                    if (imageIndex < 1) imageIndex = totalImages;
                    img.src = `{{ asset('assets/img/slider${imageIndex}.jpg') }}`;
                });
            }

            prevButton.addEventListener('click', () => {
                currentImageIndex = currentImageIndex > 1 ? currentImageIndex - 1 : totalImages;
                updateAllSliders(currentImageIndex);
            });

            nextButton.addEventListener('click', () => {
                currentImageIndex = currentImageIndex < totalImages ? currentImageIndex + 1 : 1;
                updateAllSliders(currentImageIndex);
            });

            // Touch support
            let touchStartX = 0;
            const container = document.querySelector('.multi-slider-container');
            
            container.addEventListener('touchstart', (e) => {
                touchStartX = e.touches[0].clientX;
            }, { passive: true });

            container.addEventListener('touchend', (e) => {
                const touchEndX = e.changedTouches[0].clientX;
                const diff = touchStartX - touchEndX;

                if (Math.abs(diff) > 50) {
                    if (diff > 0) {
                        currentImageIndex = currentImageIndex < totalImages ? currentImageIndex + 1 : 1;
                    } else {
                        currentImageIndex = currentImageIndex > 1 ? currentImageIndex - 1 : totalImages;
                    }
                    updateAllSliders(currentImageIndex);
                }
            }, { passive: true });
        });
    </script>
@endsection