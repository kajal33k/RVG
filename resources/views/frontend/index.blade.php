@extends('components.main')
@section('content')
    {{-- Hero section  --}}
    <div class="relative">
        <!-- Video Section -->
        <video src="{{ asset('assets/img/videosfsd.mp4') }}" autoplay loop muted playsinline preload="auto"
            class="w-screen h-auto object-cover">
            Your browser does not support the video tag.
        </video>

        <!-- Overlay Content -->
        <div
            class="absolute inset-0 bg-black bg-opacity-60 flex flex-col justify-center items-center text-white text-center">
            <h1 class="lg:text-7xl md:text-5xl text-2xl font-bold md:mb-4">
                365 Days, 365 Posters
            </h1>
            <p class="text-lg md:text-2xl md:mb-6">
                Your brand, your story, our design
            </p>
            <div class="flex flex-wrap justify-center md:gap-4 gap-2">
                <button
                    class="bg-red-600 hover:bg-red-700 text-white font-medium md:py-3 md:px-12 p-2 rounded-lg shadow transition-all duration-300">
                    Get Started
                </button>
                <button
                    class="bg-transparent border border-white hover:bg-white hover:text-black text-white font-medium md:py-3 md:px-12 p-2 rounded-lg shadow transition-all duration-300">
                    Learn More
                </button>
            </div>
        </div>
    </div>



    <!-- Popup Modal -->
    <div id="popup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden mt-12">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden relative">
            <button onclick="hidePopup()" class="absolute top-2 right-2 text-red-700 hover:text-red-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <img id="popup-image" src="" alt="Popup Image"
                class="w-full h-full object-contain max-w-lg max-h-screen">
        </div>
    </div>

    <!-- Scripts -->
    <script>
        function showPopup(imageSrc) {
            const popup = document.getElementById('popup');
            const popupImage = document.getElementById('popup-image');
            popupImage.src = imageSrc;
            popup.classList.remove('hidden');
        }

        function hidePopup() {
            const popup = document.getElementById('popup');
            popup.classList.add('hidden');
        }
    </script>

    <!-- Slider Container -->
    <div class="slider-container mt-10 flex justify-center relative">

        <!-- Slide Images -->
        <div class="slides p-4">
            <img src="{{ asset('assets/img/1200 x 800 dpi.jpg') }}" class="slide rounded-xl w-full h-full object-cover"
                alt="Slide 1" onclick="showPopup(this.src)">
            <img src="{{ asset('assets/img/1200 x 800 dpi ( 2 ) poster.jpg') }}"
                class="slide rounded-xl w-full h-full object-cover" alt="Slide 2" onclick="showPopup(this.src)">
            <img src="{{ asset('assets/img/1200 x 800 dpi ( 3 ).jpg') }}"
                class="slide rounded-xl w-full h-full object-cover" alt="Slide 3" onclick="showPopup(this.src)">
            <img src="{{ asset('assets/img/1200x800dpi4.jpg') }}" class="slide rounded-xl w-full h-full object-cover"
                alt="Slide 4" onclick="showPopup(this.src)">
        </div>

        <!-- Dots -->
        <div class="dots absolute bottom-[-20px] left-1/2 transform -translate-x-1/2 flex space-x-2">
            <span class="dot w-4 h-4 bg-white rounded-full cursor-pointer" onclick="currentSlide(1)"></span>
            <span class="dot w-4 h-4 bg-white rounded-full cursor-pointer" onclick="currentSlide(2)"></span>
            <span class="dot w-4 h-4 bg-white rounded-full cursor-pointer" onclick="currentSlide(3)"></span>
            <span class="dot w-4 h-4 bg-white rounded-full cursor-pointer" onclick="currentSlide(4)"></span>
        </div>

    </div>

    <script>
        let slideIndex = 1;
        let autoSlideInterval;

        function showSlide(n) {
            let slides = document.querySelectorAll('.slide');
            let dots = document.querySelectorAll('.dot');

            if (n > slides.length) {
                slideIndex = 1;
            }
            if (n < 1) {
                slideIndex = slides.length;
            }

            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }

            for (let i = 0; i < dots.length; i++) {
                dots[i].classList.remove("bg-red-500");
                dots[i].classList.add("bg-white");
            }

            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].classList.remove("bg-white");
            dots[slideIndex - 1].classList.add("bg-red-500");
        }

        function currentSlide(n) {
            showSlide(slideIndex = n);
            resetAutoSlide();
        }

        function autoSlide() {
            slideIndex++;
            showSlide(slideIndex);
        }

        function startAutoSlide() {
            autoSlideInterval = setInterval(autoSlide, 3000); // Change slides every 3 seconds
        }

        function resetAutoSlide() {
            clearInterval(autoSlideInterval);
            startAutoSlide();
        }

        document.addEventListener('DOMContentLoaded', function() {
            showSlide(slideIndex);
            startAutoSlide(); // Start auto-slide when the page loads
        });
    </script>


    <!-- Automatic Sliding Container -->
    <div class="min-h-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="relative overflow-hidden" id="achievementSliderContainer">
                <div id="achievementSlider" class="flex transition-transform duration-500 ease-out space-x-8">
                    <!-- Achievement Card 1 -->
                    <div class="w-80 max-h-[400px] flex-shrink-0">
                        <div
                            class="bg-gray-900 rounded-xl p-6 shadow-lg transform hover:scale-105 transition-transform duration-300 h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-4xl text-white">stars</i>
                            </div>
                            <h2 class="text-3xl font-semibold text-white mb-4 text-center">8+ Years of Expertise</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Since 2017, delivering excellence across India with trust and dedication.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 2 -->
                    <div class="w-80 max-h-[400px] flex-shrink-0">
                        <div
                            class="bg-gray-900 rounded-xl p-6 shadow-lg transform hover:scale-105 transition-transform duration-300 h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-4xl text-white">people</i>
                            </div>
                            <h2 class="text-3xl font-semibold text-white mb-4 text-center">Trusted by Thousands</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Over 10,000 satisfied clients, ensuring top-notch service and support.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 3 -->
                    <div class="w-80 max-h-[400px] flex-shrink-0">
                        <div
                            class="bg-gray-900 rounded-xl p-6 shadow-lg transform hover:scale-105 transition-transform duration-300 h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-4xl text-white">check_circle</i>
                            </div>
                            <h2 class="text-3xl font-semibold text-white mb-4 text-center">Commitment to Quality</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                We ensure premium quality in every aspect without compromise.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 4 -->
                    <div class="w-80 max-h-[400px] flex-shrink-0">
                        <div
                            class="bg-gray-900 rounded-xl p-6 shadow-lg transform hover:scale-105 transition-transform duration-300 h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-4xl text-white">group</i>
                            </div>
                            <h2 class="text-2xl font-semibold text-white mb-4 text-center">Customer-Centric Approach</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Prioritizing client satisfaction with personalized services.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 5 -->
                    <div class="w-80 max-h-[400px] flex-shrink-0">
                        <div
                            class="bg-gray-900 rounded-xl p-6 shadow-lg transform hover:scale-105 transition-transform duration-300 h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-4xl text-white">trending_up</i>
                            </div>
                            <h2 class="text-3xl font-semibold text-white mb-4 text-center">Industry First</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Pioneering innovative solutions to set new benchmarks in the industry.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 6 -->
                    <div class="w-80 max-h-[400px] flex-shrink-0">
                        <div
                            class="bg-gray-900 rounded-xl p-6 shadow-lg transform hover:scale-105 transition-transform duration-300 h-full">
                            <div class="flex justify-center items-center mb-4">
                                <!-- Replaced with a valid icon name -->
                                <i class="material-icons text-4xl text-white">account_balance_wallet</i>
                            </div>
                            <h2 class="text-3xl font-semibold text-white mb-4 text-center">15-Day Money-Back</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Your satisfaction is our priority—get a full refund if you're not satisfied.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 7 -->
                    <div class="w-80 max-h-[400px] flex-shrink-0">
                        <div
                            class="bg-gray-900 rounded-xl p-6 shadow-lg transform hover:scale-105 transition-transform duration-300 h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-4xl text-white">thumb_up</i>
                            </div>
                            <h2 class="text-3xl font-semibold text-white mb-4 text-center">100% Satisfaction</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Ensuring excellence and satisfaction with every service we provide.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 8 -->
                    <div class="w-80 max-h-[400px] flex-shrink-0">
                        <div
                            class="bg-gray-900 rounded-xl p-6 shadow-lg transform hover:scale-105 transition-transform duration-300 h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-4xl text-white">lock</i>
                            </div>
                            <h2 class="text-3xl font-semibold text-white mb-4 text-center">Fast & Secure</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Guaranteed quick and safe solutions with complete data security.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 9 -->
                    <div class="w-80 max-h-[400px] flex-shrink-0">
                        <div
                            class="bg-gray-900 rounded-xl p-6 shadow-lg transform hover:scale-105 transition-transform duration-300 h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-4xl text-white">verified_user</i>
                            </div>
                            <h2 class="text-3xl font-semibold text-white mb-4 text-center">Certified Pros</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Our team consists of industry experts with certified skills and experience.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 10 -->
                    <div class="w-80 max-h-[400px] flex-shrink-0">
                        <div
                            class="bg-gray-900 rounded-xl p-6 shadow-lg transform hover:scale-105 transition-transform duration-300 h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-4xl text-white">store</i>
                            </div>
                            <h2 class="text-3xl font-semibold text-white mb-4 text-center">One-Stop Solution</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Everything you need, all under one roof for your convenience.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 11 -->
                    <div class="w-80 max-h-[400px] flex-shrink-0">
                        <div
                            class="bg-gray-900 rounded-xl p-6 shadow-lg transform hover:scale-105 transition-transform duration-300 h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-4xl text-white">visibility</i>
                            </div>
                            <h2 class="text-3xl font-semibold text-white mb-4 text-center">Transparency</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                No hidden charges, complete honesty in our dealings.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 12 -->
                    <div class="w-80 max-h-[400px] flex-shrink-0">
                        <div
                            class="bg-gray-900 rounded-xl p-6 shadow-lg transform hover:scale-105 transition-transform duration-300 h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-4xl text-white">phone_in_talk</i>
                            </div>
                            <h2 class="text-3xl font-semibold text-white mb-4 text-center">Free Consultation</h2>
                            <p class="text-gray-400 text-lg text-center text-wrap">
                                Get expert advice without any initial cost.
                            </p>
                        </div>
                    </div>

                    <!-- Achievement Card 13 -->
                    <div class="w-80 max-h-[400px] flex-shrink-0">
                        <div
                            class="bg-gray-900 rounded-xl p-6 shadow-lg transform hover:scale-105 transition-transform duration-300 h-full">
                            <div class="flex justify-center items-center mb-4">
                                <i class="material-icons text-4xl text-white">description</i>
                            </div>
                            <h2 class="text-3xl font-semibold text-white mb-4 text-center">Proven Track Record</h2>
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
        const slideWidth = 320 + 32; // 320px width + 32px (space-x-8)
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
            slider.style.transform = `translateX(${offset}px)`;

            setTimeout(() => {
                // Check if we've moved past the original set of slides
                if (Math.abs(offset) >= slideWidth * originalSlides.length) {
                    // Instantly reset to the beginning without animation
                    slider.style.transition = 'none';
                    offset = 0;
                    slider.style.transform = `translateX(${offset}px)`;
                }
                isTransitioning = false;
            }, 500);
        }

        // Start automatic sliding
        function startSliding() {
            sliderInterval = setInterval(slide, 3000);
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



    <!-- Industry Section -->

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
            <button onclick="showTab('cakes', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Cakes
            </button>
            <button onclick="showTab('cosmetics', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Cosmetics
            </button>
            <button onclick="showTab('electronics', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Electronics
            </button>
            <button onclick="showTab('pipes', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Pipes
            </button>
            <button onclick="showTab('plywood', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Plywood
            </button>
            <button onclick="showTab('school', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                School
            </button>
            <button onclick="showTab('clothing', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Clothing
            </button>
            <button onclick="showTab('kids-wear', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                kids Wear
            </button>
            <button onclick="showTab('lehenga', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Lehenga
            </button>
            <button onclick="showTab('saree', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Saree
            </button>
            <button onclick="showTab('marriage-hall', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Marriage Hall
            </button>
            <button onclick="showTab('salwar-suit', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Salwar Suit
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
            <button onclick="showTab('hospital', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Hospital
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

            <!-- Cakes Tab -->
            <div id="cakes" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        Cakes Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Empowering the Cakes industry with innovative solutions, exceptional quality, and creative
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
                    <div id="slider-cakes" class="slider-wrapper">
                        <!-- Image Slider -->
                        <img src="{{ asset('assets/img/category/cakes/1.jpg') }}" alt="cakes Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/cakes/2.jpg') }}" alt="cakes Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/cakes/3.jpg') }}" alt="cakes Slide 3"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('cakes', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('cakes', 'right')">→</button>
                </div>
            </div>

            <!-- Cosmetics Tab -->
            <div id="cosmetics" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        Cosmetics Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Empowering the cosmetics industry with innovative solutions, exceptional quality, and creative
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
                    <div id="slider-cosmetics" class="slider-wrapper">
                        <!-- Image Slider -->
                        <img src="{{ asset('assets/img/category/cosmetics/1.jpg') }}" alt="cosmetics Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/cosmetics/2.jpg') }}" alt="cosmetics Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/cosmetics/3.jpg') }}" alt="cosmetics Slide 3"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('cosmetics', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('cosmetics', 'right')">→</button>
                </div>
            </div>

            <!-- Electronics Tab -->
            <div id="electronics" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        Electronics Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Empowering the Electronics industry with innovative solutions, exceptional quality, and creative
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
                    <div id="slider-electronics" class="slider-wrapper">
                        <!-- Image Slider -->
                        <img src="{{ asset('assets/img/category/electronics/1.jpg') }}" alt="electronics Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/electronics/2.jpg') }}" alt="electronics Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/electronics/3.jpg') }}" alt="electronics Slide 3"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('electronics', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right"
                        onclick="moveSlider('electronics', 'right')">→</button>
                </div>
            </div>

            <!-- Pipes Tab -->
            <div id="pipes" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        Pipes Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Empowering the Pipes industry with innovative solutions, exceptional quality, and creative
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
                    <div id="slider-pipes" class="slider-wrapper">
                        <!-- Image Slider -->
                        <img src="{{ asset('assets/img/category/pipes/1.jpg') }}" alt="pipes Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/pipes/2.jpg') }}" alt="pipes Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/pipes/3.jpg') }}" alt="pipes Slide 3"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('pipes', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('pipes', 'right')">→</button>
                </div>
            </div>

            <!-- Plywood Tab -->
            <div id="plywood" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        Plywood Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Empowering the plywood industry with innovative solutions, exceptional quality, and creative
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
                    <div id="slider-plywood" class="slider-wrapper">
                        <!-- Image Slider -->
                        <img src="{{ asset('assets/img/category/plywood/1.jpg') }}" alt="plywood Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/plywood/2.jpg') }}" alt="plywood Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/plywood/3.jpg') }}" alt="plywood Slide 3"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('plywood', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('plywood', 'right')">→</button>
                </div>
            </div>

            <!-- School Tab -->
            <div id="school" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        School Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Empowering the school industry with innovative solutions, exceptional quality, and creative
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
                    <div id="slider-school" class="slider-wrapper">
                        <!-- Image Slider -->
                        <img src="{{ asset('assets/img/category/school/1.jpg') }}" alt="school Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/school/2.jpg') }}" alt="school Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/school/3.jpg') }}" alt="school Slide 3"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('school', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('school', 'right')">→</button>
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

            <!-- Kids wear Tab -->
            <div id="kids-wear" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        kids wear Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Empowering the kids wear industry with innovative solutions, exceptional quality, and creative
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
                    <div id="slider-kids-wear" class="slider-wrapper">
                        <!-- Image Slider -->
                        <img src="{{ asset('assets/img/category/kids-wear/1.jpg') }}" alt="kids-wear Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/kids-wear/2.jpg') }}" alt="kids-wear Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/kids-wear/3.jpg') }}" alt="kids-wear Slide 3"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('kids-wear', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('kids-wear', 'right')">→</button>
                </div>
            </div>

            <!-- Lehenga Tab -->
            <div id="lehenga" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2 class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800">
                        Lehenga Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        We provide innovative solutions and tools to enhance lehenga manufacturing, retail, and
                        distribution.
                    </p>
                </div>

                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-lehenga" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/lehenga/1.jpg') }}" alt="lehenga Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/lehenga/2.jpg') }}" alt="lehenga Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/lehenga/3.jpg') }}" alt="lehenga Slide 3"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('lehenga', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('lehenga', 'right')">→</button>
                </div>
            </div>

            <!-- Saree Tab -->
            <div id="saree" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2 class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800">
                        Saree Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        We provide innovative solutions and tools to enhance saree manufacturing, retail, and
                        distribution.
                    </p>
                </div>

                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-saree" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/saree/1.jpg') }}" alt="saree Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/saree/2.jpg') }}" alt="saree Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/saree/3.jpg') }}" alt="saree Slide 3"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('saree', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('saree', 'right')">→</button>
                </div>
            </div>

            <!-- Marriage hall Tab -->
            <div id="marriage-hall" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2 class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800">
                        Marriage hall Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        We provide innovative solutions and tools to enhance marriage-hall manufacturing, retail, and
                        distribution.
                    </p>
                </div>

                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-marriage-hall" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/marriage-hall/1.jpg') }}" alt="marriage-hall Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/marriage-hall/2.jpg') }}" alt="marriage-hall Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/marriage-hall/3.jpg') }}" alt="marriage-hall Slide 3"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left"
                        onclick="moveSlider('marriage-hall', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right"
                        onclick="moveSlider('marriage-hall', 'right')">→</button>
                </div>
            </div>

            <!-- Salwar Suit hall Tab -->
            <div id="salwar-suit" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2 class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800">
                        Salwar suit Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        We provide innovative solutions and tools to enhance salwar-suit manufacturing, retail, and
                        distribution.
                    </p>
                </div>

                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-salwar-suit" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/salwar-suit/1.jpg') }}" alt="salwar-suit Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/salwar-suit/2.jpg') }}" alt="salwar-suit Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/salwar-suit/3.jpg') }}" alt="salwar-suit Slide 3"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('salwar-suit', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right"
                        onclick="moveSlider('salwar-suit', 'right')">→</button>
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
                        <img src="{{ asset('assets/img/category/hardware/1.jpg') }}" alt="Hardware Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/hardware/2.jpg') }}" alt="Hardware Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/hardware/3.jpg') }}" alt="Hardware Slide 3"
                            class="slider-image">
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
                        <img src="{{ asset('assets/img/category/Solar/1.jpg') }}" alt="Solar Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/Solar/2.jpg') }}" alt="Solar Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/Solar/3.jpg') }}" alt="Solar Slide 3"
                            class="slider-image">
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
                        <img src="{{ asset('assets/img/category/parlour/1.jpg') }}" alt="Parlour Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/parlour/2.jpg') }}" alt="Parlour Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/parlour/3.jpg') }}" alt="Parlour Slide 3"
                            class="slider-image">
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
                        <img src="{{ asset('assets/img/category/Dental/1.jpg') }}" alt="Dentist Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/Dental/2.jpg') }}" alt="Dentist Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/Dental/3.jpg') }}" alt="Dentist Slide 3"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('dentist', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('dentist', 'right')">→</button>
                </div>
            </div>

            <!-- Hospital Tab -->
            <div id="hospital" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2 class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800">
                        Hospital Industry
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Comprehensive medical solutions with advanced healthcare technologies for hospitals and medical
                        practitioners.
                    </p>
                </div>

                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-hospital" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/Hospital/Hospital.jpg') }}" alt="hospital Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/Hospital/2.jpg') }}" alt="hospital Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/Hospital/3.jpg') }}" alt="hospital Slide 3"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('hospital', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('hospital', 'right')">→</button>
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

    <!-- Industry Section End-->


    {{-- slider --}}

    <style>
        .swiper-button-next,
        .swiper-button-prev {
            --swiper-theme-color: #dc2626;
            --swiper-navigation-size: 20px;
        }
    </style>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="swiper product-swiper">
            <div class="swiper-wrapper">
                <!-- Jewelry Slide -->
                <div class="swiper-slide">
                    <div class=" rounded-lg shadow-md p-6">
                        <h1 class="text-center text-3xl font-bold mb-8 text-red-600">Jewelry Collection</h1>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                            <div
                                class="group relative overflow-hidden rounded-lg cursor-pointer transform transition-transform duration-300 hover:scale-[1.02]">
                                <img src="{{ asset('assets/img/slide7.jpg') }}" onclick="showPopup(this.src)"
                                    alt="Jewelry 1" class="w-full h-64 object-cover" onclick="showPopup(this.src)">

                            </div>
                            <div
                                class="group relative overflow-hidden rounded-lg cursor-pointer transform transition-transform duration-300 hover:scale-[1.02]">
                                <img src="{{ asset('assets/img/slide7.jpg') }}" onclick="showPopup(this.src)"
                                    alt="Jewelry 2" class="w-full h-64 object-cover" onclick="showPopup(this.src)">

                            </div>
                            <div
                                class="group relative overflow-hidden rounded-lg cursor-pointer transform transition-transform duration-300 hover:scale-[1.02]">
                                <img src="{{ asset('assets/img/slide7.jpg') }}" onclick="showPopup(this.src)"
                                    alt="Jewelry 3" class="w-full h-64 object-cover" onclick="showPopup(this.src)">

                            </div>
                            <div
                                class="group relative overflow-hidden rounded-lg cursor-pointer transform transition-transform duration-300 hover:scale-[1.02]">
                                <img src="{{ asset('assets/img/slide7.jpg') }}" onclick="showPopup(this.src)"
                                    alt="Jewelry 4" class="w-full h-64 object-cover" onclick="showPopup(this.src)">

                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#"
                                class="inline-block px-8 py-3 text-lg font-semibold text-red-600 border-2 border-red-600 rounded-lg hover:bg-red-600 hover:text-white transition-colors duration-300">Shop
                                Now</a>
                        </div>
                    </div>
                </div>

                <!-- Tyre Slide -->
                <div class="swiper-slide">
                    <div class="rounded-lg shadow-md p-6">
                        <h1 class="text-center text-3xl font-bold mb-8 text-red-600">Tyre Collection</h1>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                            <div
                                class="group relative overflow-hidden rounded-lg cursor-pointer transform transition-transform duration-300 hover:scale-[1.02]">
                                <img src="{{ asset('assets/img/slide7.jpg') }}" onclick="showPopup(this.src)"
                                    alt="Jewelry 1" class="w-full h-64 object-cover" onclick="showPopup(this.src)">

                            </div>
                            <div
                                class="group relative overflow-hidden rounded-lg cursor-pointer transform transition-transform duration-300 hover:scale-[1.02]">
                                <img src="{{ asset('assets/img/slide7.jpg') }}" onclick="showPopup(this.src)"
                                    alt="Jewelry 2" class="w-full h-64 object-cover" onclick="showPopup(this.src)">

                            </div>
                            <div
                                class="group relative overflow-hidden rounded-lg cursor-pointer transform transition-transform duration-300 hover:scale-[1.02]">
                                <img src="{{ asset('assets/img/slide7.jpg') }}" onclick="showPopup(this.src)"
                                    alt="Jewelry 3" class="w-full h-64 object-cover" onclick="showPopup(this.src)">

                            </div>
                            <div
                                class="group relative overflow-hidden rounded-lg cursor-pointer transform transition-transform duration-300 hover:scale-[1.02]">
                                <img src="{{ asset('assets/img/slide7.jpg') }}" onclick="showPopup(this.src)"
                                    alt="Jewelry 4" class="w-full h-64 object-cover" onclick="showPopup(this.src)">

                            </div>
                        </div>

                        <div class="text-center">
                            <a href="#"
                                class="inline-block px-8 py-3 text-lg font-semibold text-red-600 border-2 border-red-600 rounded-lg hover:bg-red-600 hover:text-white transition-colors duration-300">Shop
                                Now</a>
                        </div>
                    </div>
                </div>

                <!-- Add more slides following the same pattern -->
            </div>
            <div class="swiper-button-next bg-white rounded-full shadow-lg p-6"></div>
            <div class="swiper-button-prev bg-white rounded-full shadow-lg p-6"></div>
        </div>
    </div>

    <!-- Image Modal -->
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-80 z-50 hidden" onclick="hidePopup()">
        <div class="absolute top-4 right-4">
            <button class="text-white text-4xl hover:text-gray-300" onclick="hidePopup()">&times;</button>
        </div>
        <img id="modalImage" src="" alt="Enlarged product image"
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 max-w-[90%] max-h-[90vh]">
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.min.js"></script>
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.product-swiper', {
            spaceBetween: 30,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            loop: true,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            }
        });

        // Modal functionality
        function showPopup(src) {
            const modal = document.getElementById('imageModal');
            const modalImg = document.getElementById('modalImage');
            modal.classList.remove('hidden');
            modalImg.src = src;
        }

        function hidePopup() {
            document.getElementById('imageModal').classList.add('hidden');
        }

        // Close modal on escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                hidePopup();
            }
        });
    </script>

    <!-- Modal for image preview -->
    {{-- <div class="modal" id="imageModal">
            <span class="modal-close">&times;</span>
            <img class="modal-content" id="modalImage" alt="Modal preview">
        </div>
     --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/swiper/9.0.0/swiper-bundle.min.js"></script>

    <script>
        // Initialize Swiper with enhanced options
        const swiper = new Swiper('.mySwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            grabCursor: true,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                dynamicBullets: true
            },
            keyboard: {
                enabled: true,
                onlyInViewport: true
            },
            a11y: {
                prevSlideMessage: 'Previous slide',
                nextSlideMessage: 'Next slide',
                firstSlideMessage: 'This is the first slide',
                lastSlideMessage: 'This is the last slide'
            }
        });

        // Modal functionality
        const modal = document.getElementById('imageModal');
        const modalImg = document.getElementById('modalImage');
        const closeBtn = document.querySelector('.modal-close');

        // Image click handler with loading optimization
        document.querySelectorAll('.product-image').forEach(img => {
            img.addEventListener('click', function() {
                modal.style.display = 'block';
                modalImg.src = this.src;
                modalImg.alt = this.alt;
                document.body.style.overflow = 'hidden';
            });
        });

        // Close modal handlers
        closeBtn.onclick = closeModal;
        modal.onclick = (e) => {
            if (e.target === modal) closeModal();
        };

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeModal();
        });

        function closeModal() {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        // Performance optimizations
        document.addEventListener('DOMContentLoaded', () => {
            // Preload next slide images
            const preloadNextSlide = () => {
                const nextSlide = swiper.slides[swiper.activeIndex + 1];
                if (nextSlide) {
                    const images = nextSlide.querySelectorAll('img[loading="lazy"]');
                    images.forEach(img => img.loading = 'eager');
                }
            };

            swiper.on('slideChange', preloadNextSlide);
        });
    </script>



    <div class="relative w-full overflow-hidden">
        <!-- Aspect ratio container -->
        <div class="relative pt-[56.132%]">
            <iframe src="https://gifer.com/embed/DXNR" class="absolute top-0 left-0 w-full h-full border-none"
                allowfullscreen>
            </iframe>
        </div>

        <!-- Overlay content -->
        <div
            class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 flex flex-col justify-center items-center text-white text-center ">
            <p class="text-xl sm:text-2xl md:text-3xl font-bold mb-4 sm:mb-5 leading-tight">
                Outstanding website design can help you make a lasting impression.
            </p>
            <p class="text-base sm:text-lg md:text-xl mb-4 sm:mb-5">
                We provide 365 post, at the 365 days
            </p>
            <button
                class="bg-red-600 text-white border-none py-2 px-4 sm:py-3 sm:px-6 text-sm sm:text-lg rounded-lg cursor-pointer hover:bg-red-700 transition duration-300">
                View More
            </button>
        </div>
    </div>



    <div class="relative w-full max-w-5xl mx-auto mt-8">
        <!-- Carousel Container -->
        <div class="overflow-hidden rounded-lg" id="carousel">
            <h1 class="text-3xl font-bold text-center text-red-600">Our Demo</h1>
            <div class="flex transition-transform duration-700 ease-in-out gap-4 mt-4" id="carousel-slides">

                <!-- Slide 1 -->
                <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 h-64">
                    <img src="{{ asset('assets/img/calling.jpg') }}" alt="Slide 1"
                        class="w-full h-full object-cover rounded-lg" onclick="showPopup(this.src)" />
                </div>
                <!-- Slide 2 -->
                <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 h-64">
                    <img src="{{ asset('assets/img/calling.jpg') }}" alt="Slide 2"
                        class="w-full h-full object-cover rounded-lg" onclick="showPopup(this.src)" />
                </div>
                <!-- Slide 3 -->
                <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 h-64">
                    <img src="{{ asset('assets/img/calling.jpg') }}" alt="Slide 3"
                        class="w-full h-full object-cover rounded-lg" onclick="showPopup(this.src)" />
                </div>
                <!-- Slide 4 -->
                <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 h-64">
                    <img src="{{ asset('assets/img/calling.jpg') }}" alt="Slide 4"
                        class="w-full h-full object-cover rounded-lg" onclick="showPopup(this.src)" />
                </div>
                <!-- Slide 5 -->
                <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 h-64">
                    <img src="{{ asset('assets/img/calling.jpg') }}" alt="Slide 5"
                        class="w-full h-full object-cover rounded-lg" onclick="showPopup(this.src)" />
                </div>
                <!-- Slide 6 -->
                <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 h-64">
                    <img src="{{ asset('assets/img/calling.jpg') }}" alt="Slide 6"
                        class="w-full h-full object-cover rounded-lg" onclick="showPopup(this.src)" />
                </div>
                <!-- Slide 7 -->
                <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 h-64">
                    <img src="{{ asset('assets/img/calling.jpg') }}" alt="Slide 7"
                        class="w-full h-full object-cover rounded-lg" onclick="showPopup(this.src)" />
                </div>
            </div>
        </div>

        <!-- Controls -->
        <button
            class="absolute top-1/2 left-4 transform -translate-y-1/2 p-2 bg-gray-800 text-white rounded-full hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-400"
            id="prev" aria-label="Previous Slide">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button
            class="absolute top-1/2 right-4 transform -translate-y-1/2 p-2 bg-gray-800 text-white rounded-full hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-400"
            id="next" aria-label="Next Slide">
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <!-- Indicators -->
        <div class="flex justify-center mt-4 space-x-2">
            <button class="w-3 h-3 rounded-full transition-all bg-gray-900" data-carousel-slide-to="0"
                aria-label="Slide 1"></button>
            <button class="w-3 h-3 rounded-full transition-all bg-gray-500" data-carousel-slide-to="1"
                aria-label="Slide 2"></button>
            <button class="w-3 h-3 rounded-full transition-all bg-gray-500" data-carousel-slide-to="2"
                aria-label="Slide 3"></button>
            <button class="w-3 h-3 rounded-full transition-all bg-gray-500" data-carousel-slide-to="3"
                aria-label="Slide 4"></button>
            <button class="w-3 h-3 rounded-full transition-all bg-gray-500" data-carousel-slide-to="4"
                aria-label="Slide 5"></button>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const slides = document.getElementById("carousel-slides");
            const prevButton = document.getElementById("prev");
            const nextButton = document.getElementById("next");
            const indicators = document.querySelectorAll("[data-carousel-slide-to]");

            let slideWidth = slides.children[0].offsetWidth;
            let currentIndex = 0;

            const updateCarousel = () => {
                // Dynamically calculate the number of slides to show based on screen size
                const containerWidth = document.getElementById("carousel").offsetWidth;
                const visibleSlides = containerWidth < 640 ? 1 : containerWidth < 1024 ? 2 :
                    3; // 1 on mobile, 2 on tablets, 3 on desktops
                slideWidth = slides.children[0].offsetWidth * visibleSlides; // Adjust slide width

                slides.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

                indicators.forEach((indicator, index) => {
                    indicator.classList.toggle("bg-gray-900", index === currentIndex);
                    indicator.classList.toggle("bg-gray-500", index !== currentIndex);
                });
            };

            prevButton.addEventListener("click", () => {
                currentIndex = (currentIndex - 1 + slides.children.length - 2) % (slides.children.length -
                    2); // Adjust for showing multiple slides
                updateCarousel();
            });

            nextButton.addEventListener("click", () => {
                currentIndex = (currentIndex + 1) % (slides.children.length -
                    2); // Adjust for showing multiple slides
                updateCarousel();
            });

            indicators.forEach((indicator, index) => {
                indicator.addEventListener("click", () => {
                    currentIndex = index;
                    updateCarousel();
                });
            });

            window.addEventListener("resize", () => {
                updateCarousel();
            });

            updateCarousel();
        });
    </script>





    <div class="max-w-7xl mx-auto pt-24">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-red-600 mb-6">Social Media Marketing Post</h1>
            <p class="text-white max-w-3xl mx-auto leading-relaxed">
                Business gets a chance to target, connect and reach the audience right at the time, posters help to target
                the potential audience and provide an easy way to demonstrate a trailer of your content, giving them a bite
                of your awesome brand.
            </p>
            <button class="mt-6 bg-red-600 text-white px-6 py-2 rounded-md hover:bg-red-700 transition-colors">
                View More
            </button>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6 p-4">
            <!-- Gallery Items -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('assets/img/card2.avif') }}" alt="World Food Day" class="w-full h-64 object-cover"
                    onclick="showPopup(this.src)" />
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('assets/img/card2.avif') }}" alt="Sumera Enterprises"
                    class="w-full h-64 object-cover" onclick="showPopup(this.src)" />
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('assets/img/card2.avif') }}" alt="Feel Good Foundation"
                    class="w-full h-64 object-cover" onclick="showPopup(this.src)" />
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('assets/img/card2.avif') }}" alt="R.K. Traders" class="w-full h-64 object-cover"
                    onclick="showPopup(this.src)" />
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('assets/img/card2.avif') }}" alt="Durga Puja" class="w-full h-64 object-cover"
                    onclick="showPopup(this.src)" />
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('assets/img/card2.avif') }}" alt="Karwa Chauth" class="w-full h-64 object-cover"
                    onclick="showPopup(this.src)" />
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('assets/img/card2.avif') }}" alt="Eid" class="w-full h-64 object-cover"
                    onclick="showPopup(this.src)" />
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('assets/img/card2.avif') }}" alt="Festival Post" class="w-full h-64 object-cover"
                    onclick="showPopup(this.src)" />
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('assets/img/card2.avif') }}" alt="Durga Puja Fabtex" class="w-full h-64 object-cover"
                    onclick="showPopup(this.src)" />
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('assets/img/card2.avif') }}" alt="Animal Day" class="w-full h-64 object-cover"
                    onclick="showPopup(this.src)" />
            </div>
        </div>
    </div>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",

            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>




    <!-- JavaScript for functionality -->
    <script>
        let slideIndex = 1;
        let slides = document.querySelectorAll('.slide');
        let dots = document.querySelectorAll('.dot');

        // Show the current slide and hide the rest
        function showSlide(index) {
            if (index > slides.length) slideIndex = 1;
            if (index < 1) slideIndex = slides.length;

            // Hide all slides
            slides.forEach(slide => slide.style.display = "none");

            // Reset dots to default color
            dots.forEach(dot => dot.classList.remove('active'));

            // Show the current slide
            slides[slideIndex - 1].style.display = "block";

            // Set the active dot
            dots[slideIndex - 1].classList.add('active');
        }

        // Move slides forward or backward
        function moveSlide(n) {
            showSlide(slideIndex += n);
        }

        // Move to a specific slide via dots
        function currentSlide(n) {
            showSlide(slideIndex = n);
        }

        // Initialize the slider
        showSlide(slideIndex);

        // Auto slide every 3 seconds
        setInterval(() => {
            moveSlide(1);
        }, 3000);
    </script>
@endsection
