@extends('components.main')

@section('content')
    <style>
        /* Slider and Animation Styles */
        @keyframes float {
            0%, 100% { transform: translateY(0) translateZ(20px); }
            50% { transform: translateY(-15px) translateZ(30px); }
        }

        .slider-container {
            transform-style: preserve-3d;
            perspective: 2000px;
        }

        .slide {
            transform-style: preserve-3d;
            transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
            opacity: 0;
            position: absolute;
            width: 100%;
        }

        .slide.active {
            opacity: 1;
            transform: translateX(0) rotateY(0) translateZ(0);
        }

        .slide.prev {
            opacity: 0.7;
            transform: translateX(-100%) rotateY(30deg) translateZ(-200px);
        }

        .slide.next {
            opacity: 0.7;
            transform: translateX(100%) rotateY(-30deg) translateZ(-200px);
        }

        .slide-image {
            transform-style: preserve-3d;
            transition: all 0.6s ease;
            box-shadow: 
                20px 20px 60px rgba(0,0,0,0.3),
                -20px -20px 60px rgba(255,255,255,0.3);
        }

        .slide-content {
            transform: translateZ(50px);
            transition: all 0.6s ease;
        }

        .nav-button {
            transition: all 0.3s ease;
            transform-style: preserve-3d;
            z-index: 10;
        }

        .nav-button:hover {
            transform: translateY(-5px) translateZ(20px);
            box-shadow: 
                0 10px 20px rgba(0,0,0,0.2),
                0 6px 6px rgba(0,0,0,0.1);
        }

        .nav-button:active {
            transform: translateY(0) translateZ(10px);
        }

        .thumbnail {
            transition: all 0.4s ease;
            transform-style: preserve-3d;
        }

        .thumbnail:hover {
            transform: scale(1.1) translateZ(20px);
        }

        .thumbnail.active {
            border: 3px solid #ef4444;
            transform: scale(1.1) translateZ(30px);
        }

        @keyframes spotlight {
            0%, 100% { opacity: 0; }
            50% { opacity: 0.3; }
        }

        .slide::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(
                to right,
                transparent,
                rgba(255,255,255,0.3),
                transparent
            );
            transform: skewX(-25deg);
            animation: spotlight 3s infinite;
        }
    </style>

    <div class="bg-gradient-to-b from-gray-50 to-gray-100 py-20">
        <!-- Hero Section -->
        <div class="container mx-auto px-6 lg:px-16 text-center mb-16">
            <h1 class="text-5xl font-bold text-black mb-6">Our Blog</h1>
            <p class="text-xl text-gray-700">Explore our latest articles and insights</p>
        </div>

        <!-- Main Slider -->
        <div class="container mx-auto px-6 lg:px-16 relative">
            <div class="slider-container h-[600px] relative overflow-hidden">
                <!-- Slides -->
                <div class="slide active">
                    <div class="relative rounded-3xl overflow-hidden">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" class="slide-image w-full h-[600px] object-cover rounded-3xl" alt="Slide 1">
                        <div class="slide-content absolute bottom-0 left-0 right-0 p-10 bg-gradient-to-t from-black/80 to-transparent">
                            <h2 class="text-3xl font-bold text-white mb-4">Latest Blog Post</h2>
                            <p class="text-lg text-gray-200">Discover the insights from our latest article</p>
                        </div>
                    </div>
                </div>

                <div class="slide next">
                    <div class="relative rounded-3xl overflow-hidden">
                        <img src="{{ asset('assets/img/banner.jpeg') }}" class="slide-image w-full h-[600px] object-cover rounded-3xl" alt="Slide 2">
                        <div class="slide-content absolute bottom-0 left-0 right-0 p-10 bg-gradient-to-t from-black/80 to-transparent">
                            <h2 class="text-3xl font-bold text-white mb-4">Tech Trends in 2025</h2>
                            <p class="text-lg text-gray-200">Stay ahead with the latest tech developments</p>
                        </div>
                    </div>
                </div>

                <div class="slide prev">
                    <div class="relative rounded-3xl overflow-hidden">
                        <img src="{{ asset('assets/img/about.png') }}" class="slide-image w-full h-[600px] object-cover rounded-3xl" alt="Slide 3">
                        <div class="slide-content absolute bottom-0 left-0 right-0 p-10 bg-gradient-to-t from-black/80 to-transparent">
                            <h2 class="text-3xl font-bold text-white mb-4">Health Tips for 2025</h2>
                            <p class="text-lg text-gray-200">Learn about the best practices for a healthy lifestyle</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button id="prevBtn" class="nav-button absolute left-4 top-1/2 -translate-y-1/2 bg-white/90 text-black p-4 rounded-full shadow-xl">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button id="nextBtn" class="nav-button absolute right-4 top-1/2 -translate-y-1/2 bg-white/90 text-black p-4 rounded-full shadow-xl">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

        <!-- Thumbnails -->
        <div class="container mx-auto px-6 lg:px-16 mt-12">
            <div class="flex justify-center gap-6">
                <div class="thumbnail active w-24 h-24 rounded-xl overflow-hidden cursor-pointer">
                    <img src="{{ asset('assets/img/attendence.jpg') }}" class="w-full h-full object-cover" alt="Thumbnail 1">
                </div>
                <div class="thumbnail w-24 h-24 rounded-xl overflow-hidden cursor-pointer">
                    <img src="{{ asset('assets/img/banner.jpeg') }}" class="w-full h-full object-cover" alt="Thumbnail 2">
                </div>
                <div class="thumbnail w-24 h-24 rounded-xl overflow-hidden cursor-pointer">
                    <img src="{{ asset('assets/img/about.png') }}" class="w-full h-full object-cover" alt="Thumbnail 3">
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            const thumbnails = document.querySelectorAll('.thumbnail');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            let currentSlide = 0;
            let isAnimating = false;

            function updateSlides() {
                if (isAnimating) return;
                isAnimating = true;

                slides.forEach((slide, index) => {
                    slide.className = 'slide';
                    if (index === currentSlide) {
                        slide.classList.add('active');
                    } else if (index === (currentSlide + 1) % slides.length) {
                        slide.classList.add('next');
                    } else {
                        slide.classList.add('prev');
                    }
                });

                thumbnails.forEach((thumb, index) => {
                    thumb.classList.toggle('active', index === currentSlide);
                });

                // Reset animation lock after transition
                setTimeout(() => {
                    isAnimating = false;
                }, 800);
            }

            function nextSlide() {
                if (isAnimating) return;
                currentSlide = (currentSlide + 1) % slides.length;
                updateSlides();
            }

            function prevSlide() {
                if (isAnimating) return;
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                updateSlides();
            }

            // Event Listeners
            prevBtn.addEventListener('click', prevSlide);
            nextBtn.addEventListener('click', nextSlide);

            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') prevSlide();
                if (e.key === 'ArrowRight') nextSlide();
            });

            // Thumbnail navigation
            thumbnails.forEach((thumb, index) => {
                thumb.addEventListener('click', () => {
                    if (isAnimating || currentSlide === index) return;
                    currentSlide = index;
                    updateSlides();
                });
            });

            // Touch/Swipe support
            let touchStartX = 0;
            const slider = document.querySelector('.slider-container');

            slider.addEventListener('touchstart', (e) => {
                touchStartX = e.touches[0].clientX;
            }, { passive: true });

            slider.addEventListener('touchend', (e) => {
                const touchEndX = e.changedTouches[0].clientX;
                const diff = touchStartX - touchEndX;

                if (Math.abs(diff) > 50) { // Minimum swipe distance
                    if (diff > 0) {
                        nextSlide();
                    } else {
                        prevSlide();
                    }
                }
            }, { passive: true });

            // Auto-play with pause on hover
            let autoplayInterval;
            
            function startAutoplay() {
                autoplayInterval = setInterval(nextSlide, 5000);
            }

            function stopAutoplay() {
                clearInterval(autoplayInterval);
            }

            slider.addEventListener('mouseenter', stopAutoplay);
            slider.addEventListener('mouseleave', startAutoplay);

            startAutoplay();
        });
    </script>
@endsection
