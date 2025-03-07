{{-- @extends('components.main')

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
            document.querySelector(#${tabName}).classList.remove('hidden');

            // Remove active class from all buttons
            document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));

            // Add active class to the clicked button
            button.classList.add('active');

            // Initialize slider for selected tab
            initializeSlider(slider-${tabName});
        }

        function initializeSlider(sliderId) {
            const sliderWrapper = document.querySelector(#${sliderId});
            const slides = sliderWrapper.querySelectorAll('.slider-image');
            const totalSlides = slides.length;

            // Clone slides for seamless looping
            sliderWrapper.innerHTML += sliderWrapper.innerHTML;

            let currentSlide = 0;

            function moveToNextSlide() {
                currentSlide++;
                sliderWrapper.style.transition = 'transform 0.7s cubic-bezier(0.445, 0.05, 0.55, 0.95)';
                sliderWrapper.style.transform = translateX(-${currentSlide * (100 / totalSlides)}%);

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
            const sliderWrapper = document.querySelector(#slider-${tabName});
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
            sliderWrapper.style.transform = translateX(-${currentSlide * (100 / totalSlides)}%);
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Initialize first tab by default
            showTab('jewellery', document.querySelector('button'));
        });
    </script>
@endsection --}}



{{-- @extends('components.main')

@section('content') --}}
    <!-- Infinite Slider Container -->
    <div class="min-h-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="relative overflow-hidden" id="achievementSliderContainer">
                <div id="achievementSlider" class="flex transition-transform duration-500 ease-out">
                    <!-- Achievement Card 1 -->
                    <div class="w-[400px] max-h-[500px] flex-shrink-0 mx-4 sm:w-[300px] md:w-[350px] lg:w-[400px]">
                        <div class="bg-gray-900 rounded-xl p-6 shadow-lg h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-5xl text-white">stars</i>
                            </div>
                            <h2 class="text-4xl font-semibold text-white mb-4 text-center">8+ Years of Expertise</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Since 2017, delivering excellence across India with trust and dedication.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 2 -->
                    <div class="w-[400px] max-h-[500px] flex-shrink-0 mx-4 sm:w-[300px] md:w-[350px] lg:w-[400px]">
                        <div class="bg-gray-900 rounded-xl p-6 shadow-lg h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-5xl text-white">people</i>
                            </div>
                            <h2 class="text-4xl font-semibold text-white mb-4 text-center">Trusted by Thousands</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Over 10,000 satisfied clients, ensuring top-notch service and support.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 3 -->
                    <div class="w-[400px] max-h-[500px] flex-shrink-0 mx-4 sm:w-[300px] md:w-[350px] lg:w-[400px]">
                        <div class="bg-gray-900 rounded-xl p-6 shadow-lg h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-5xl text-white">check_circle</i>
                            </div>
                            <h2 class="text-4xl font-semibold text-white mb-4 text-center">Commitment to Quality</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                We ensure premium quality in every aspect without compromise.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 4 -->
                    <div class="w-[400px] max-h-[500px] flex-shrink-0 mx-4 sm:w-[300px] md:w-[350px] lg:w-[400px]">
                        <div class="bg-gray-900 rounded-xl p-6 shadow-lg h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-5xl text-white">group</i>
                            </div>
                            <h2 class="text-3xl font-semibold text-white mb-4 text-center">Customer-Centric Approach</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Prioritizing client satisfaction with personalized services.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 5 -->
                    <div class="w-[400px] max-h-[500px] flex-shrink-0 mx-4 sm:w-[300px] md:w-[350px] lg:w-[400px]">
                        <div class="bg-gray-900 rounded-xl p-6 shadow-lg h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-5xl text-white">trending_up</i>
                            </div>
                            <h2 class="text-4xl font-semibold text-white mb-4 text-center">Industry First</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Pioneering innovative solutions to set new benchmarks in the industry.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 6 -->
                    <div class="w-[400px] max-h-[500px] flex-shrink-0 mx-4 sm:w-[300px] md:w-[350px] lg:w-[400px]">
                        <div class="bg-gray-900 rounded-xl p-6 shadow-lg h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-5xl text-white">account_balance_wallet</i>
                            </div>
                            <h2 class="text-4xl font-semibold text-white mb-4 text-center">15-Day Money-Back</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Your satisfaction is our priority—get a full refund if you're not satisfied.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 7 -->
                    <div class="w-[400px] max-h-[500px] flex-shrink-0 mx-4 sm:w-[300px] md:w-[350px] lg:w-[400px]">
                        <div class="bg-gray-900 rounded-xl p-6 shadow-lg h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-5xl text-white">thumb_up</i>
                            </div>
                            <h2 class="text-4xl font-semibold text-white mb-4 text-center">100% Satisfaction</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Ensuring excellence and satisfaction with every service we provide.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 8 -->
                    <div class="w-[400px] max-h-[500px] flex-shrink-0 mx-4 sm:w-[300px] md:w-[350px] lg:w-[400px]">
                        <div class="bg-gray-900 rounded-xl p-6 shadow-lg h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-5xl text-white">lock</i>
                            </div>
                            <h2 class="text-4xl font-semibold text-white mb-4 text-center">Fast & Secure</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Guaranteed quick and safe solutions with complete data security.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 9 -->
                    <div class="w-[400px] max-h-[500px] flex-shrink-0 mx-4 sm:w-[300px] md:w-[350px] lg:w-[400px]">
                        <div class="bg-gray-900 rounded-xl p-6 shadow-lg h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-5xl text-white">verified_user</i>
                            </div>
                            <h2 class="text-4xl font-semibold text-white mb-4 text-center">Certified Pros</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Our team consists of industry experts with certified skills and experience.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 10 -->
                    <div class="w-[400px] max-h-[500px] flex-shrink-0 mx-4 sm:w-[300px] md:w-[350px] lg:w-[400px]">
                        <div class="bg-gray-900 rounded-xl p-6 shadow-lg h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-5xl text-white">store</i>
                            </div>
                            <h2 class="text-4xl font-semibold text-white mb-4 text-center">One-Stop Solution</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Everything you need, all under one roof for your convenience.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 11 -->
                    <div class="w-[400px] max-h-[500px] flex-shrink-0 mx-4 sm:w-[300px] md:w-[350px] lg:w-[400px]">
                        <div class="bg-gray-900 rounded-xl p-6 shadow-lg h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-5xl text-white">visibility</i>
                            </div>
                            <h2 class="text-4xl font-semibold text-white mb-4 text-center">Transparency</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                No hidden charges, complete honesty in our dealings.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 12 -->
                    <div class="w-[400px] max-h-[500px] flex-shrink-0 mx-4 sm:w-[300px] md:w-[350px] lg:w-[400px]">
                        <div class="bg-gray-900 rounded-xl p-6 shadow-lg h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-5xl text-white">phone_in_talk</i>
                            </div>
                            <h2 class="text-4xl font-semibold text-white mb-4 text-center">Free Consultation</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Get expert advice without any initial cost.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 13 -->
                    <div class="w-[400px] max-h-[500px] flex-shrink-0 mx-4 sm:w-[300px] md:w-[350px] lg:w-[400px]">
                        <div class="bg-gray-900 rounded-xl p-6 shadow-lg h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-5xl text-white">description</i>
                            </div>
                            <h2 class="text-4xl font-semibold text-white mb-4 text-center">Proven Track Record</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Years of experience with a strong portfolio of successful projects.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const slider = document.getElementById('achievementSlider');
        const sliderContainer = document.getElementById('achievementSliderContainer');
        const slideWidth = 400 + 2 * 16; // Width of each slide plus left and right margin (16px)
        const originalSlides = Array.from(slider.children);

        // Clone and append original slides to create an infinite loop
        originalSlides.forEach(slide => {
            const clonedSlide = slide.cloneNode(true);
            slider.appendChild(clonedSlide);
        });

        let offset = 0;
        let isTransitioning = false;
        let sliderInterval;

        // Function to handle automatic sliding
        function slide() {
            if (isTransitioning) return;

            isTransitioning = true;
            offset -= slideWidth;
            slider.style.transition = 'transform 0.5s ease-out';
            slider.style.transform = translateX(${offset}px);

            setTimeout(() => {
                // Check if we've moved past the original set of slides
                if (Math.abs(offset) >= slideWidth * originalSlides.length) {
                    // Instantly reset to the beginning without animation
                    slider.style.transition = 'none';
                    offset = 0;
                    slider.style.transform = translateX(${offset}px);
                }
                isTransitioning = false;
            }, 500);
        }

        // Start automatic sliding
        function startSliding() {
            sliderInterval = setInterval(slide, 5000);
        }

        // Stop sliding when mouse enters the slider
        function stopSliding() {
            clearInterval(sliderInterval);
        }

        // Start sliding when page loads
        document.addEventListener('DOMContentLoaded', function() {
            startSliding();

            // Pause sliding when mouse enters
            sliderContainer.addEventListener('mouseenter', stopSliding);

            // Resume sliding when mouse leaves
            sliderContainer.addEventListener('mouseleave', startSliding);
        });
    </script>
{{-- @endsection  --}}


{{-- @extends('components.main')

@section('content')
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <style>
        /* Custom styles for navigation buttons */
        .swiper-button-next,
        .swiper-button-prev {
            color: black;
        }
    </style>

    <div class="flex items-center justify-center min-h-screen bg-gray-100 overflow-hidden">
        <!-- Slider main container -->
        <div class="swiper-container w-full max-w-[800px] h-[300px] sm:h-[400px]">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div
                    class="swiper-slide flex justify-center items-center text-lg sm:text-2xl font-mono tracking-wide bg-red-400">
                    Slide 1
                </div>
                <div
                    class="swiper-slide flex justify-center items-center text-lg sm:text-2xl font-mono tracking-wide bg-teal-500">
                    Slide 2
                </div>
                <div
                    class="swiper-slide flex justify-center items-center text-lg sm:text-2xl font-mono tracking-wide bg-sky-300">
                    Slide 3
                </div>
                <div
                    class="swiper-slide flex justify-center items-center text-lg sm:text-2xl font-mono tracking-wide bg-red-300">
                    Slide 4
                </div>
                <div
                    class="swiper-slide flex justify-center items-center text-lg sm:text-2xl font-mono tracking-wide bg-yellow-200">
                    Slide 5
                </div>
            </div>

            <!-- Navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Swiper Initialization -->
    <script>
        const mySwiper = new Swiper('.swiper-container', {
            loop: true, // Enable looping
            slidesPerView: 1, // Default for mobile view
            spaceBetween: 20, // Space between slides
            centeredSlides: true, // Center the active slide
            effect: 'coverflow', // Apply the coverflow effect
            coverflowEffect: {
                rotate: 0, // No rotation for the slides
                stretch: 0, // No stretch
                depth: 300, // Perspective depth
                modifier: 1, // Effect modifier
            },
            breakpoints: {
                640: { // Tablet and above
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
            },
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
@endsection --}}
