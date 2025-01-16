@extends('components.main')

@section('content')
    <style>
        /* Global Styles */
        h1.about-title {
            text-align: center;
            margin-bottom: 3rem;
            color: gray;
            font-size: 3rem;
            font-weight: bold;
            animation: titlePulse 3s ease-in-out infinite;
        }

        h2 {
            font-size: 2rem;
            font-weight: bold;
            color: gray;
            margin-bottom: 1rem;
        }

        p {
            color: #666;
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Animations */
        @keyframes titlePulse {

            0%,
            100% {
                transform: scale(1) rotateX(0);
                text-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            }

            50% {
                transform: scale(1.05) rotateX(5deg);
                text-shadow: 0 0 40px rgba(0, 0, 0, 0.8);
            }
        }

        @keyframes cardHover {
            0% {
                transform: rotateY(0deg);
            }

            100% {
                transform: rotateY(15deg);
            }
        }

        .card-animation:hover {
            animation: cardHover 0.5s ease forwards;
        }

        /* Animation for enhanced hover effect */
        .team-card:hover,
        .mission-card:hover,
        .post-card:hover {
            transform: rotateY(5deg) scale(1.1);
            transition: transform 0.3s ease-in-out;
        }
    </style>

    <div class="bg-gray-100 py-16 mt-10">
        <!-- Hero Section -->
        <div class="container mx-auto px-6 lg:px-16 text-center">
            <h1 class="about-title">About Us</h1>
            <p class="text-lg text-gray-700">We are dedicated to making a difference. Learn more about our mission, vision,
                and values.</p>
        </div>

        <!-- Featured Post Section -->
        <div class="posts-page">
            <div class="container mx-auto px-6 lg:px-16">
                <h2 class="text-2xl font-bold text-center mb-6 text-gray-600">Featured Post</h2>
                <div
                    class="flex flex-col lg:flex-row gap-8 bg-white rounded-xl shadow-xl p-8 mb-8 hover:shadow-2xl hover:transform hover:rotate-3 hover:scale-105 hover:cursor-pointer transition-all card-animation">
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">The Future of Fashion</h3>
                        <p class="text-gray-600 mb-4">Discover the latest trends for the season and how fashion is evolving
                            with sustainability at its core.</p>
                        <p class="text-gray-600 mb-4">Fashion is more than just clothes; it’s a reflection of the culture,
                            technology, and environment we live in. Stay ahead with the most stylish and sustainable trends
                            that are taking over the industry.</p>
                        <a href="#"
                            class="inline-block px-6 py-2 bg-red-600 text-white rounded-full hover:bg-red-700 transition-colors">Read
                            More</a>
                    </div>
                    <div class="flex-1 mt-8 lg:mt-0">
                        <!-- Image Slider -->
                        <div class="relative overflow-hidden rounded-xl">
                            <div class="image-slider flex transition-transform duration-1000 ease-in-out" id="imageSlider">
                                <img src="{{ asset('assets/img/about.png') }}" alt="Post Image 1"
                                    class="w-full h-full rounded-xl object-cover flex-shrink-0">
                                <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Post Image 2"
                                    class="w-full h-full rounded-xl object-cover flex-shrink-0">
                                <img src="{{ asset('assets/img/calling.jpg') }}" alt="Post Image 3"
                                    class="w-full h-full rounded-xl object-cover flex-shrink-0">
                            </div>
                            <!-- Navigation Dots -->
                            <div class="absolute bottom-0 left-0 right-0 flex justify-center gap-2 pb-4">
                                <span class="dot w-3 h-3 rounded-full bg-gray-600 cursor-pointer"></span>
                                <span class="dot w-3 h-3 rounded-full bg-gray-600 cursor-pointer"></span>
                                <span class="dot w-3 h-3 rounded-full bg-gray-600 cursor-pointer"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mission, Vision, and Values Section -->
        <div class="container mx-auto px-6 lg:px-16 mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Mission Card -->
            <div
                class="mission-card bg-white rounded-lg p-8 shadow-xl hover:shadow-2xl transition-all transform hover:rotate-2 hover:scale-105">
                <h2 class="text-2xl font-bold text-black mb-4">Our Mission</h2>
                <p>We are committed to delivering innovative solutions that enhance the lives of our clients and contribute
                    to the betterment of society.</p>
            </div>

            <!-- Vision Card -->
            <div
                class="mission-card bg-white rounded-lg p-8 shadow-xl hover:shadow-2xl transition-all transform hover:rotate-2 hover:scale-105">
                <h2 class="text-2xl font-bold text-black mb-4">Our Vision</h2>
                <p>To be a global leader in providing groundbreaking solutions that challenge the status quo and drive
                    positive change in the world.</p>
            </div>

            <!-- Values Card -->
            <div
                class="mission-card bg-white rounded-lg p-8 shadow-xl hover:shadow-2xl transition-all transform hover:rotate-2 hover:scale-105">
                <h2 class="text-2xl font-bold text-black mb-4">Our Values</h2>
                <p>We value integrity, collaboration, and excellence, ensuring we uphold the highest standards in all that
                    we do.</p>
            </div>
        </div>

        <!-- Team Section -->
        <div class="container mx-auto px-6 lg:px-16 mt-16">
            <h2 class="text-3xl font-bold text-center text-black mb-12">Meet Our Leadership Team</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Cards -->
                <div
                    class="team-card bg-white rounded-lg p-8 shadow-xl hover:shadow-2xl transition-all transform hover:rotate-2 hover:scale-105">
                    <img src="{{ asset('assets/img/about.png') }}" alt="Team Member 1"
                        class="rounded-full w-32 h-32 mx-auto mb-4 object-cover">
                    <div class="team-info text-center">
                        <h3 class="text-xl font-bold text-gray-800">John Doe</h3>
                        <p class="text-gray-600">Chief Executive Officer</p>
                    </div>
                </div>

                <div
                    class="team-card bg-white rounded-lg p-8 shadow-xl hover:shadow-2xl transition-all transform hover:rotate-2 hover:scale-105">
                    <img src="{{ asset('assets/img/about.png') }}" alt="Team Member 2"
                        class="rounded-full w-32 h-32 mx-auto mb-4 object-cover">
                    <div class="team-info text-center">
                        <h3 class="text-xl font-bold text-gray-800">Jane Smith</h3>
                        <p class="text-gray-600">Chief Technology Officer</p>
                    </div>
                </div>

                <div
                    class="team-card bg-white rounded-lg p-8 shadow-xl hover:shadow-2xl transition-all transform hover:rotate-2 hover:scale-105">
                    <img src="{{ asset('assets/img/about.png') }}" alt="Team Member 3"
                        class="rounded-full w-32 h-32 mx-auto mb-4 object-cover">
                    <div class="team-info text-center">
                        <h3 class="text-xl font-bold text-gray-800">Emily Johnson</h3>
                        <p class="text-gray-600">Chief Financial Officer</p>
                    </div>
                </div>

                <div
                    class="team-card bg-white rounded-lg p-8 shadow-xl hover:shadow-2xl transition-all transform hover:rotate-2 hover:scale-105">
                    <img src="{{ asset('assets/img/about.png') }}" alt="Team Member 4"
                        class="rounded-full w-32 h-32 mx-auto mb-4 object-cover">
                    <div class="team-info text-center">
                        <h3 class="text-xl font-bold text-gray-800">Chris Evans</h3>
                        <p class="text-gray-600">Chief Operating Officer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Image Slider Functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll('#imageSlider img');
        const dots = document.querySelectorAll('.dot');

        function showSlide(index) {
            // Hide all slides
            slides.forEach((slide, i) => {
                slide.style.transform = `translateX(-${index * 100}%)`;
            });

            // Update dot styles
            dots.forEach((dot, i) => {
                dot.classList.remove('bg-gray-600');
                dot.classList.add('bg-gray-300');
                if (i === index) {
                    dot.classList.remove('bg-gray-300');
                    dot.classList.add('bg-gray-600');
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        setInterval(nextSlide, 3000); // Change slide every 3 seconds

        // Initialize the first slide
        showSlide(currentSlide);

        // Dot click functionality
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentSlide = index;
                showSlide(currentSlide);
            });
        });
    </script>
@endsection
