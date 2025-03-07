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


     <!-- Unique Popup Modal -->
     <div id="unique-popup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden mt-12">
         <div class="bg-white rounded-lg shadow-lg overflow-hidden relative">
             <button onclick="hideUniquePopup()" class="absolute top-2 right-2 text-red-700 hover:text-red-600">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                     stroke="currentColor" class="w-6 h-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                 </svg>
             </button>
             <img id="unique-popup-image" src="" alt="Popup Image"
                 class="w-full h-full object-contain max-w-lg max-h-screen">
         </div>
     </div>

     <!-- Unique Scripts -->
     <script>
         function showUniquePopup(imageSrc) {
             const popup = document.getElementById('unique-popup');
             const popupImage = document.getElementById('unique-popup-image');
             popupImage.src = imageSrc;
             popup.classList.remove('hidden');
         }

         function hideUniquePopup() {
             const popup = document.getElementById('unique-popup');
             popup.classList.add('hidden');
         }
     </script>

     <!-- Unique Slider Container -->
     <div class="unique-slider-container mt-10 flex justify-center relative">
         <!-- Unique Slide Images -->
         <div class="unique-slides p-4">
             <img src="{{ asset('assets/img/1200 x 800 dpi.jpg') }}"
                 class="unique-slide rounded-xl w-full h-full object-cover hidden" alt="Slide 1"
                 onclick="showUniquePopup(this.src)">
             <img src="{{ asset('assets/img/1200 x 800 dpi ( 2 ) poster.jpg') }}"
                 class="unique-slide rounded-xl w-full h-full object-cover hidden" alt="Slide 2"
                 onclick="showUniquePopup(this.src)">
             <img src="{{ asset('assets/img/1200 x 800 dpi ( 3 ).jpg') }}"
                 class="unique-slide rounded-xl w-full h-full object-cover hidden" alt="Slide 3"
                 onclick="showUniquePopup(this.src)">
             <img src="{{ asset('assets/img/1200x800dpi4.jpg') }}"
                 class="unique-slide rounded-xl w-full h-full object-cover hidden" alt="Slide 4"
                 onclick="showUniquePopup(this.src)">
         </div>

         <!-- Unique Dots (Dynamically generated) -->
         <div id="unique-dots-container"
             class="unique-dots absolute bottom-[-20px] left-1/2 transform -translate-x-1/2 flex space-x-2">
         </div>
     </div>

     <script>
         let uniqueSlideIndex = 1;
         let uniqueAutoSlideInterval;

         function generateDots() {
             let slides = document.querySelectorAll('.unique-slide');
             let dotsContainer = document.getElementById('unique-dots-container');
             dotsContainer.innerHTML = ''; // Clear existing dots

             slides.forEach((_, index) => {
                 let dot = document.createElement('span');
                 dot.classList.add('unique-dot', 'w-4', 'h-4', 'bg-white', 'rounded-full', 'cursor-pointer');
                 dot.setAttribute('onclick', `uniqueCurrentSlide(${index + 1})`);
                 dotsContainer.appendChild(dot);
             });
         }

         function showUniqueSlide(n) {
             let slides = document.querySelectorAll('.unique-slide');
             let dots = document.querySelectorAll('.unique-dot');

             if (n > slides.length) {
                 uniqueSlideIndex = 1;
             }
             if (n < 1) {
                 uniqueSlideIndex = slides.length;
             }

             slides.forEach(slide => slide.classList.add("hidden"));
             dots.forEach(dot => {
                 dot.classList.remove("bg-red-500");
                 dot.classList.add("bg-white");
             });

             slides[uniqueSlideIndex - 1].classList.remove("hidden");
             dots[uniqueSlideIndex - 1].classList.remove("bg-white");
             dots[uniqueSlideIndex - 1].classList.add("bg-red-500");
         }

         function uniqueCurrentSlide(n) {
             showUniqueSlide(uniqueSlideIndex = n);
             resetUniqueAutoSlide();
         }

         function uniqueAutoSlide() {
             uniqueSlideIndex++;
             showUniqueSlide(uniqueSlideIndex);
         }

         function startUniqueAutoSlide() {
             uniqueAutoSlideInterval = setInterval(uniqueAutoSlide, 3000);
         }

         function resetUniqueAutoSlide() {
             clearInterval(uniqueAutoSlideInterval);
             startUniqueAutoSlide();
         }

         document.addEventListener('DOMContentLoaded', function() {
             generateDots(); // Generate dots dynamically based on images
             showUniqueSlide(uniqueSlideIndex);
             startUniqueAutoSlide();
         });
     </script>

     @include('frontend.provide')


     <!-- Automatic Sliding Container -->
     {{-- <div class="min-h-auto py-12 px-4 sm:px-6 lg:px-8">
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
    </script> --}}


     @include('components.industry')


     {{-- Collenctions --}}

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
                     <div class="rounded-lg shadow-md p-6">
                         <h1 class="text-center text-3xl font-bold mb-8 text-red-600">Jewelry Collection</h1>
                         <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                             <div
                                 class="group relative overflow-hidden rounded-lg cursor-pointer transform transition-transform duration-300 hover:scale-[1.02]">
                                 <img src="{{ asset('assets/img/slide7.jpg') }}" alt="Jewelry 1"
                                     class="w-full h-96 object-cover product-image" onclick="showPopup(this.src)">
                             </div>
                             <div
                                 class="group relative overflow-hidden rounded-lg cursor-pointer transform transition-transform duration-300 hover:scale-[1.02]">
                                 <img src="{{ asset('assets/img/slide7.jpg') }}" alt="Jewelry 2"
                                     class="w-full h-96 object-cover product-image" onclick="showPopup(this.src)">
                             </div>
                             <div
                                 class="group relative overflow-hidden rounded-lg cursor-pointer transform transition-transform duration-300 hover:scale-[1.02]">
                                 <img src="{{ asset('assets/img/slide7.jpg') }}" alt="Jewelry 3"
                                     class="w-full h-96 object-cover product-image" onclick="showPopup(this.src)">
                             </div>
                             <div
                                 class="group relative overflow-hidden rounded-lg cursor-pointer transform transition-transform duration-300 hover:scale-[1.02]">
                                 <img src="{{ asset('assets/img/slide7.jpg') }}" alt="Jewelry 4"
                                     class="w-full h-96 object-cover product-image" onclick="showPopup(this.src)">
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
                                 <img src="{{ asset('assets/img/category/cakes/1.jpg') }}" alt="Tyre 1"
                                     class="w-full h-96 object-cover product-image" onclick="showPopup(this.src)">
                             </div>
                             <div
                                 class="group relative overflow-hidden rounded-lg cursor-pointer transform transition-transform duration-300 hover:scale-[1.02]">
                                 <img src="{{ asset('assets/img/category/cakes/1.jpg') }}" alt="Tyre 2"
                                     class="w-full h-96 object-cover product-image" onclick="showPopup(this.src)">
                             </div>
                             <div
                                 class="group relative overflow-hidden rounded-lg cursor-pointer transform transition-transform duration-300 hover:scale-[1.02]">
                                 <img src="{{ asset('assets/img/category/cakes/1.jpg') }}" alt="Tyre 3"
                                     class="w-full h-96 object-cover product-image" onclick="showPopup(this.src)">
                             </div>
                             <div
                                 class="group relative overflow-hidden rounded-lg cursor-pointer transform transition-transform duration-300 hover:scale-[1.02]">
                                 <img src="{{ asset('assets/img/category/cakes/1.jpg') }}" alt="Tyre 4"
                                     class="w-full h-96 object-cover product-image" onclick="showPopup(this.src)">
                             </div>
                         </div>
                         <div class="text-center">
                             <a href="#"
                                 class="inline-block px-8 py-3 text-lg font-semibold text-red-600 border-2 border-red-600 rounded-lg hover:bg-red-600 hover:text-white transition-colors duration-300">Shop
                                 Now</a>
                         </div>
                     </div>
                 </div>

             </div>

             <!-- Swiper Navigation -->
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

     <!-- Swiper JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.4.1/swiper-bundle.min.js"></script>

     <script>
         const swiper = new Swiper('.product-swiper', {
             slidesPerView: 1,
             spaceBetween: 30,
             loop: true,
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
         });

         function showPopup(src) {
             const modal = document.getElementById('imageModal');
             const modalImg = document.getElementById('modalImage');
             modal.classList.remove('hidden');
             modalImg.src = src;
             document.body.style.overflow = 'hidden';
         }

         function hidePopup() {
             const modal = document.getElementById('imageModal');
             modal.classList.add('hidden');
             document.body.style.overflow = 'auto';
         }

         document.addEventListener('keydown', function(event) {
             if (event.key === 'Escape') {
                 hidePopup();
             }
         });
     </script>



     {{-- categories --}}
     {{-- <div class="container mx-auto px-4 py-20">
        <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-8 text-center">
            Industry We Served With Premium Solutions and Services 🚀
        </h1>
        <!-- Tabs Navigation -->
        <div class="flex flex-wrap justify-center gap-3 mb-8 bg-gray-100 p-4 rounded-xl shadow-md">
            <button onclick="showTab('menu', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Menu Design
            </button>
            <button onclick="showTab('catalogue', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Catalogue Design
            </button>
            <button onclick="showTab('box', this)"
                class="tab-button px-6 py-3 text-sm font-semibold rounded-full bg-gray-900 text-white hover:bg-gray-800">
                Box Design
            </button>


        </div>

        <!-- Tab Content -->
        <div id="tab-content" class="bg-white shadow-2xl rounded-3xl overflow-hidden">

            <!-- Jewellery Tab -->
            <div id="menu" class="tab-pane active flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        Menu Design
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        We serve the menu desugn with premium solutions, providing high-quality designs,
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
                <div class="w-full lg:w-4/5 relative slider-container">
                    <div id="slider-menu" class="slider-wrapper">
                        <!-- Image Slider -->
                        <img src="{{ asset('assets/img/category/menu-design/Page 10.jpg') }}" alt="menu Slide 1"
                            class="slider-image object-cover ">
                        <img src="{{ asset('assets/img/category/menu-design/Page 11.jpg') }}" alt="menu Slide 2"
                            class="slider-image object-cover">
                        <img src="{{ asset('assets/img/category/menu-design/Page 7.jpg') }}" alt="menu Slide 3"
                            class="slider-image object-cover">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('menu', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('menu', 'right')">→</button>
                </div>
            </div>

            <!-- Cakes Tab -->
            <div id="catalogue" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        Catalogue Design
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Empowering the Catalogue industry with innovative solutions, exceptional quality, and creative
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
                    <div id="slider-catalogue" class="slider-wrapper">
                        <!-- Image Slider -->
                        <img src="{{ asset('assets/img/category/box/Page 1.jpg') }}" alt="cakes Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/catalogue/Page 4.jpg') }}" alt="cakes Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/catalogue/Page 6.jpg') }}" alt="cakes Slide 3"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('catalog', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('catalog', 'right')">→</button>
                </div>
            </div>

            <!-- Cosmetics Tab -->
            <div id="box" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        Box Designing
                    </h2>
                    <p class="text-gray-700 mb-6 leading-relaxed">
                        Empowering the Box designing with innovative solutions, exceptional quality, and creative
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
                    <div id="slider-box" class="slider-wrapper">
                        <!-- Image Slider -->
                        <img src="{{ asset('assets/img/category/box/Page 1.jpg') }}" alt="box Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/box/Page 2.jpg') }}" alt="box Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/box/Page 1.jpg') }}" alt="box Slide 3"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('box', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('box', 'right')">→</button>
                </div>
            </div>

        </div>
    </div> --}}

     {{-- @include('components.industry-2') --}}

     {{-- @include('frontend.s1') --}}


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



     {{-- <div class="relative w-full max-w-5xl mx-auto mt-8">
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
    </script> --}}

     <!-- Socila Media Marketin -->
     <div class="max-w-7xl mx-auto py-8">
         <!-- Header Section -->
         <div class="text-center mb-8">
             <h1 class="text-4xl font-bold text-red-600 mb-4">Social Media Marketing Post</h1>
             <p class="text-gray-700 max-w-3xl mx-auto leading-relaxed">
                 Business gets a chance to target, connect, and reach the audience right at the time. Posters help to target
                 the potential audience and provide an easy way to demonstrate a preview of your content, giving them a
                 taste
                 of your awesome brand.
             </p>
         </div>

         <!-- Gallery Grid -->
         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-4 p-2">

             <!-- Image Cards -->
             <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow duration-300">
                 <img src="assets/img/category/cakes/1.jpg" alt="Cake" class="h-60 w-full object-contain bg-gray-100"
                     onclick="showPopup('assets/img/category/cakes/1.jpg')" />
                 <p class="text-center text-sm font-medium text-gray-800 py-1">Cake</p>
             </div>

             <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow duration-300">
                 <img src="assets/img/category/cosmetics/1.jpg" alt="Cosmetics"
                     class="h-60 w-full object-contain bg-gray-100"
                     onclick="showPopup('assets/img/category/cosmetics/1.jpg')" />
                 <p class="text-center text-sm font-medium text-gray-800 py-1">Cosmetics</p>
             </div>

             <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow duration-300">
                 <img src="assets/img/category/Dental/1.jpg" alt="Dental"
                     class="h-60 w-full object-contain bg-gray-100"
                     onclick="showPopup('assets/img/category/Dental/1.jpg')" />
                 <p class="text-center text-sm font-medium text-gray-800 py-1">Dental</p>
             </div>

             <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow duration-300">
                 <img src="assets/img/category/electronics/1.jpg" alt="Electronics"
                     class="h-60 w-full object-contain bg-gray-100"
                     onclick="showPopup('assets/img/category/electronics/1.jpg')" />
                 <p class="text-center text-sm font-medium text-gray-800 py-1">Electronics</p>
             </div>

             <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow duration-300">
                 <img src="assets/img/category/hardware/1.jpg" alt="Hardware"
                     class="h-60 w-full object-contain bg-gray-100"
                     onclick="showPopup('assets/img/category/hardware/1.jpg')" />
                 <p class="text-center text-sm font-medium text-gray-800 py-1">Hardware</p>
             </div>

             <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow duration-300">
                 <img src="assets/img/category/kids-wear/1.jpg" alt="Kids Wear"
                     class="h-60 w-full object-contain bg-gray-100"
                     onclick="showPopup('assets/img/category/kids-wear/1.jpg')" />
                 <p class="text-center text-sm font-medium text-gray-800 py-1">Kids Wear</p>
             </div>

             <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow duration-300">
                 <img src="assets/img/category/marriage-hall/1.jpg" alt="Marriage Hall"
                     class="h-60 w-full object-contain bg-gray-100"
                     onclick="showPopup('assets/img/category/marriage-hall/1.jpg')" />
                 <p class="text-center text-sm font-medium text-gray-800 py-1">Marriage Hall</p>
             </div>

             <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow duration-300">
                 <img src="assets/img/category/Pipes/1.jpg" alt="Pipes" class="h-60 w-full object-contain bg-gray-100"
                     onclick="showPopup('assets/img/category/Pipes/1.jpg')" />
                 <p class="text-center text-sm font-medium text-gray-800 py-1">Pipes</p>
             </div>

             <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow duration-300">
                 <img src="assets/img/category/plywood/1.jpg" alt="Plywood"
                     class="h-60 w-full object-contain bg-gray-100"
                     onclick="showPopup('assets/img/category/plywood/1.jpg')" />
                 <p class="text-center text-sm font-medium text-gray-800 py-1">Plywood</p>
             </div>

             <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition-shadow duration-300">
                 <img src="assets/img/category/school/1.jpg" alt="School"
                     class="h-60 w-full object-contain bg-gray-100"
                     onclick="showPopup('assets/img/category/school/1.jpg')" />
                 <p class="text-center text-sm font-medium text-gray-800 py-1">School</p>
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
