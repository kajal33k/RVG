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
    <div class="slider-container mt-10 flex justify-center">

        <!-- Slide Images -->
        <div class="slides p-4">

            <img src="{{ asset('assets/img/612_x_350_dpi[1].jpg') }}" class="slide rounded-xl w-full h-full object-cover" alt="Slide 1"
                onclick="showPopup(this.src)">


            <img src="{{ asset('assets/img/612_x_350_dpi[1].jpg') }}" class="slide rounded-xl  w-full h-full object-cover" alt="Slide 2"
                onclick="showPopup(this.src)">


            <img src="{{ asset('assets/img/612_x_350_dpi[1].jpg') }}" class="slide rounded-xl  w-full h-full object-cover" alt="Slide 3"
                onclick="showPopup(this.src)">

        </div>

        <!-- Navigation Arrows -->
        {{-- <div class="prev cursor-pointer" onclick="moveSlide(-1)">&#10094;</div>
        <div class="next cursor-pointer" onclick="moveSlide(1)">&#10095;</div> --}}

        <!-- Dots -->
        <div class="dots">
            <span class="dot active" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>




    <div class="min-h-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Achievement Card 1 -->
                <div class="relative w-64 mx-auto">
                    <!-- Pushpin -->
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 z-10">
                        <div class="w-6 h-6 bg-red-500 rounded-full"></div> <!-- Red pin head -->
                        <div class="absolute -bottom-1 left-1/2 -translate-x-1/2">
                            <div class="w-8 h-8 bg-yellow-100 rounded-full opacity-80"></div>
                            <!-- Gold circle behind icon -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="w-4 h-4 text-gray-700" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                                    <line x1="7" y1="8" x2="17" y2="8"></line>
                                    <line x1="7" y1="12" x2="17" y2="12"></line>
                                    <line x1="7" y1="16" x2="13" y2="16"></line>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="bg-gray-900 rounded-xl p-6 pt-8 shadow-lg transform">
                        <h2 class="text-2xl font-bold text-white mb-2">Industry Leader</h2>
                        <p class="text-gray-400 text-center">
                            service most<br />
                            of jewellers in<br />
                            india
                        </p>
                    </div>
                </div>

                <!-- Achievement Card 2 -->
                <div class="relative w-64 mx-auto">
                    <!-- Pushpin -->
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 z-10">
                        <div class="w-6 h-6 bg-red-500 rounded-full"></div> <!-- Red pin head -->
                        <div class="absolute -bottom-1 left-1/2 -translate-x-1/2">
                            <div class="w-8 h-8 bg-yellow-100 rounded-full opacity-80"></div>
                            <!-- Gold circle behind icon -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="w-4 h-4 text-gray-700" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                                    <line x1="7" y1="8" x2="17" y2="8"></line>
                                    <line x1="7" y1="12" x2="17" y2="12"></line>
                                    <line x1="7" y1="16" x2="13" y2="16"></line>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="bg-gray-900 rounded-xl p-6 pt-8 shadow-lg transform">
                        <h2 class="text-2xl font-bold text-white mb-2">Industry Leader</h2>
                        <p class="text-gray-400 text-center">
                            service most<br />
                            of jewellers in<br />
                            india
                        </p>
                    </div>
                </div>

                <!-- Achievement Card 3 -->
                <div class="relative w-64 mx-auto">
                    <!-- Pushpin -->
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 z-10">
                        <div class="w-6 h-6 bg-red-500 rounded-full"></div> <!-- Red pin head -->
                        <div class="absolute -bottom-1 left-1/2 -translate-x-1/2">
                            <div class="w-8 h-8 bg-yellow-100 rounded-full opacity-80"></div>
                            <!-- Gold circle behind icon -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="w-4 h-4 text-gray-700" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                                    <line x1="7" y1="8" x2="17" y2="8"></line>
                                    <line x1="7" y1="12" x2="17" y2="12"></line>
                                    <line x1="7" y1="16" x2="13" y2="16"></line>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="bg-gray-900 rounded-xl p-6 pt-8 shadow-lg transform">
                        <h2 class="text-2xl font-bold text-white mb-2">Industry Leader</h2>
                        <p class="text-gray-400 text-center">
                            service most<br />
                            of jewellers in<br />
                            india
                        </p>
                    </div>
                </div>


                <!-- Achievement Card 4 -->
                <div class="relative w-64 mx-auto">
                    <!-- Pushpin -->
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 z-10">
                        <div class="w-6 h-6 bg-red-500 rounded-full"></div> <!-- Red pin head -->
                        <div class="absolute -bottom-1 left-1/2 -translate-x-1/2">
                            <div class="w-8 h-8 bg-yellow-100 rounded-full opacity-80"></div>
                            <!-- Gold circle behind icon -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="w-4 h-4 text-gray-700" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                                    <line x1="7" y1="8" x2="17" y2="8"></line>
                                    <line x1="7" y1="12" x2="17" y2="12"></line>
                                    <line x1="7" y1="16" x2="13" y2="16"></line>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="bg-gray-900 rounded-xl p-6 pt-8 shadow-lg transform">
                        <h2 class="text-2xl font-bold text-white mb-2">Industry Leader</h2>
                        <p class="text-gray-400 text-center">
                            service most<br />
                            of jewellers in<br />
                            india
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>


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
