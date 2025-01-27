@extends('components.main')

@section('content')
    <style>
        .slider-container {
            perspective: 1000px;
            overflow: hidden;
            position: relative;
        }

        .slider-wrapper {
            display: flex;
            white-space: nowrap;
            transition: transform 0.7s cubic-bezier(0.445, 0.05, 0.55, 0.95);
            gap: 10px;
            /* Add spacing between slides */
        }

        .slider-image {
            flex-shrink: 0;
            width: 100%;
            /* Full width on mobile view */
            height: 400px;
            object-fit: cover;
            transition: transform 0.5s, filter 0.5s;
            filter: brightness(0.7);
            border-radius: 10px;
            /* Optional: Smooth edges */
        }

        /* Desktop view (3 images side by side) */
        @media (min-width: 1024px) {
            .slider-image {
                width: calc(33.33% - 10px);
                /* Account for spacing on larger screens */
            }
        }

        .slider-image:hover {
            transform: scale(1.05);
            filter: brightness(1);
        }

        .slider-arrow {
            background: rgba(0, 0, 0, 0.6);
            color: white;
            border: none;
            padding: 10px 15px;
            transition: all 0.3s ease;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            cursor: pointer;
        }

        .slider-arrow-left {
            left: 0;
        }

        .slider-arrow-right {
            right: 0;
        }

        .slider-arrow:hover {
            background: rgba(0, 0, 0, 0.8);
            transform: scale(1.1);
        }

        .tab-button {
            transition: all 0.3s ease;
        }

        .tab-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .tab-button.active {
            background-color: #e11d48;
            /* Active background color (red-600) */
            color: white;
            /* Ensure the text remains visible */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
            transform: translateY(0);
            /* Neutralize hover effect */
        }
    </style>

    <div class="container mx-auto px-4 py-20">
        <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-8 text-center">
            Industry We Served With Premium Solutions and Services 🚀
        </h1>
        <!-- Tabs Navigation -->
        <div class="flex flex-wrap justify-center gap-3 mb-8 bg-gray-100 p-4 rounded-xl shadow-md">
            <button onclick="showTab('jewellery', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Jewellery
            </button>
            <button onclick="showTab('clothing', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Clothing
            </button>
            <button onclick="showTab('hardware', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Hardware
            </button>
            <button onclick="showTab('solar', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Solar
            </button>
            <button onclick="showTab('parlour', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Parlour
            </button>
            <button onclick="showTab('dentist', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Dentist
            </button>
            <button onclick="showTab('doctor', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Doctor
            </button>
            <button onclick="showTab('restaurant', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Restaurant
            </button>
        </div>

        <!-- Tab Content -->
        <div id="tab-content" class="bg-white shadow-2xl rounded-3xl overflow-hidden">
            <!-- Jewellery Tab -->
            <div id="jewellery" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        Jewellery Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        We serve the jewellery industry with premium solutions, providing high-quality designs,
                        crafting tools, and innovative marketing strategies.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-600">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl">insights</span>
                            <span>Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl">build</span>
                            <span>Advanced Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-jewellery" class="slider-wrapper">
                        <!-- Image Slider -->
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Jewellery Slide 1" class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Jewellery Slide 2" class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Jewellery Slide 3" class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('jewellery', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('jewellery', 'right')">→</button>
                </div>
            </div>

            <!-- Clothing Tab -->
            <div id="clothing" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        Clothing Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Empowering the clothing industry with innovative solutions, exceptional quality, and creative
                        marketing.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-600">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-blue-500 text-3xl">design_services</span>
                            <span>Creative Design Services</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-green-500 text-3xl">insights</span>
                            <span>Market Insights and Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-purple-500 text-3xl">build</span>
                            <span>Innovative Production Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-clothing" class="slider-wrapper">
                        <!-- Image Slider -->
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Clothing Slide 1" class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Clothing Slide 2" class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Clothing Slide 3" class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('clothing', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('clothing', 'right')">→</button>
                </div>
            </div>
            
            <!-- Hardware Tab -->
            <div id="hardware" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2 class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800">
                        Hardware Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        We provide innovative solutions and tools to enhance hardware manufacturing, retail, and
                        distribution.
                    </p>
                </div>

                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-hardware" class="slider-wrapper">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Hardware Slide 1" class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Hardware Slide 2" class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Hardware Slide 3" class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('hardware', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('hardware', 'right')">→</button>
                </div>
            </div>

            <!-- Solar Tab -->
            <div id="solar" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2 class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800">
                        Solar Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        We offer advanced solar solutions, from residential to commercial systems, to power your
                        sustainability goals.
                    </p>
                </div>

                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-solar" class="slider-wrapper">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Solar Slide 1" class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Solar Slide 2" class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Solar Slide 3" class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('solar', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('solar', 'right')">→</button>
                </div>
            </div>

            <!-- Parlour Tab -->
            <div id="parlour" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2 class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800">
                        Parlour Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Providing parlour and beauty solutions for clients with top-of-the-line beauty products and
                        services.
                    </p>
                </div>

                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-parlour" class="slider-wrapper">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Parlour Slide 1" class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Parlour Slide 2" class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Parlour Slide 3" class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('parlour', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('parlour', 'right')">→</button>
                </div>
            </div>

            <!-- Dentist Tab -->
            <div id="dentist" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2 class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800">
                        Dentist Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Offering state-of-the-art dental solutions, ensuring top-quality care and patient satisfaction.
                    </p>
                </div>

                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-dentist" class="slider-wrapper">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Dentist Slide 1" class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Dentist Slide 2" class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Dentist Slide 3" class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('dentist', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('dentist', 'right')">→</button>
                </div>
            </div>

            <!-- Doctor Tab -->
            <div id="doctor" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2 class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800">
                        Doctor Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Comprehensive medical solutions with advanced healthcare technologies for doctors and medical
                        practitioners.
                    </p>
                </div>

                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-doctor" class="slider-wrapper">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Doctor Slide 1" class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Doctor Slide 2" class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Doctor Slide 3" class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('doctor', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('doctor', 'right')">→</button>
                </div>
            </div>

            <!-- Restaurant Tab -->
            <div id="restaurant" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2 class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800">
                        Restaurant Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Serving the restaurant industry with premium kitchen tools, innovative menu solutions, and customer
                        experience enhancement.
                    </p>
                </div>

                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-restaurant" class="slider-wrapper">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Restaurant Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Restaurant Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Restaurant Slide 3"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('restaurant', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('restaurant', 'right')">→</button>
                </div>
            </div>

        </div>
    </div>

    <script>
        function showTab(tabName, button) {
            document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.add('hidden'));
            document.querySelector(`#${tabName}`).classList.remove('hidden');

            // Remove active class from all buttons
            document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));

            // Add active class to the clicked button
            button.classList.add('active');

            // Initialize slider for selected tab
            initializeSlider(`slider-${tabName}`);
        }

        function initializeSlider(sliderId) {
            const sliderWrapper = document.querySelector(`#${sliderId}`);
            const slides = sliderWrapper.querySelectorAll('.slider-image');
            const totalSlides = slides.length;

            // Clone slides for seamless looping
            sliderWrapper.innerHTML += sliderWrapper.innerHTML;

            let currentSlide = 0;

            function moveToNextSlide() {
                currentSlide++;
                sliderWrapper.style.transition = 'transform 0.7s cubic-bezier(0.445, 0.05, 0.55, 0.95)';
                sliderWrapper.style.transform = `translateX(-${currentSlide * (100 / totalSlides)}%)`;

                if (currentSlide >= totalSlides) {
                    setTimeout(() => {
                        sliderWrapper.style.transition = 'none';
                        sliderWrapper.style.transform = 'translateX(0)';
                        currentSlide = 0;
                    }, 700); // Match transition duration
                }
            }

            setInterval(moveToNextSlide, 3000);
        }

        function moveSlider(tabName, direction) {
            const sliderWrapper = document.querySelector(`#slider-${tabName}`);
            const slides = sliderWrapper.querySelectorAll('.slider-image');
            const totalSlides = slides.length;

            let currentSlide = Math.round(Math.abs(parseInt(sliderWrapper.style.transform.replace('translateX(', '')
                .replace('%)', '')) / (100 / totalSlides))) || 0;

            if (direction === 'left') {
                currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            } else if (direction === 'right') {
                currentSlide = (currentSlide + 1) % totalSlides;
            }

            sliderWrapper.style.transition = 'transform 0.7s cubic-bezier(0.445, 0.05, 0.55, 0.95)';
            sliderWrapper.style.transform = `translateX(-${currentSlide * (100 / totalSlides)}%)`;
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Initialize first tab by default
            showTab('jewellery', document.querySelector('button'));
        });
    </script>
@endsection
