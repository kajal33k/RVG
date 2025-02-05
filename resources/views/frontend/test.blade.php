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
            gap: 5px;
            /* Reduce gap */
        }


        .slider-image {
            flex-shrink: 0;
            width: 100%;
            height: 600px;
            object-fit: contain;
            transition: transform 0.5s, filter 0.5s;

            border-radius: 10px;
        }

        @media (min-width: 1024px) {
            .slider-image {
                width: calc(50% - 5px);
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
            transform: translateY(-50%) scale(1.1);
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
            color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .slider-image {
                flex-shrink: 0;
                width: 100%;
                max-height: 400px;
                /* Adjust for mobile */
                object-fit: cover;
            }
        }
    </style>

    <div class="container mx-auto px-4 py-10 sm:py-20">
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
                        <img src="{{ asset('assets/img/attendence.jpg') }}" loading="lazy" alt="Jewellery Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" loading="lazy" alt="Jewellery Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" loading="lazy" alt="Jewellery Slide 3"
                            class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" loading="lazy" alt="Jewellery Slide 4"
                            class="slider-image">
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
                        <img src="{{ asset('assets/img/category/cakes/1.jpg') }}" loading="lazy" alt="Cakes Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/cakes/2.jpg') }}" loading="lazy" alt="Cakes Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/cakes/3.jpg') }}" loading="lazy" alt="Cakes Slide 3"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/cakes/4.jpg') }}" loading="lazy" alt="Cakes Slide 4"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('cakes', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('cakes', 'right')">→</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function moveSlider(industry, direction) {
            const slider = document.getElementById(`slider-${industry}`);
            const images = slider.getElementsByClassName('slider-image');
            const slideWidth = images[0].offsetWidth + 10; // Considering gap
            const slidesToShow = window.innerWidth >= 1024 ? 2 : 1; // 2 slides for desktop, 1 for mobile
            const maxScroll = (images.length - slidesToShow) * slideWidth;

            let currentScroll = parseInt(slider.getAttribute('data-scroll') || '0', 10);

            if (direction === 'left') {
                currentScroll = Math.max(currentScroll - slideWidth * slidesToShow, 0);
            } else {
                currentScroll = Math.min(currentScroll + slideWidth * slidesToShow, maxScroll);
            }

            slider.style.transform = `translateX(-${currentScroll}px)`;
            slider.setAttribute('data-scroll', currentScroll);
        }

        function showTab(tabId, button) {
            document.querySelectorAll('.tab-pane').forEach(tab => tab.classList.add('hidden'));
            document.getElementById(tabId).classList.remove('hidden');

            document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
        }

        // Adjust slider position on window resize
        window.addEventListener('resize', () => {
            document.querySelectorAll('.slider-wrapper').forEach(slider => {
                slider.setAttribute('data-scroll', '0');
                slider.style.transform = 'translateX(0)';
            });
        });

        // Auto-slide function
        function autoSlide(industry) {
            setInterval(() => {
                moveSlider(industry, 'right');
            }, 3000); // Adjust time interval as needed (3000ms = 3s)
        }

        // Start auto-slide for each slider
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll('.slider-wrapper').forEach(slider => {
                const industry = slider.id.replace('slider-', '');
                autoSlide(industry);
            });
        });
    </script>
@endsection






{{-- <script>
    function showTab(tabName, button) {
        document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.add('hidden'));
        document.querySelector(`#${tabName}`).classList.remove('hidden');

        document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');

        initializeSlider(`slider-${tabName}`);
    }

    function initializeSlider(sliderId) {
        const sliderWrapper = document.querySelector(`#${sliderId}`);
        const slides = sliderWrapper.querySelectorAll('.slider-image');
        const totalSlides = slides.length;

        // Calculate slides to show based on screen width
        const slidesToShow = window.innerWidth >= 1024 ? 2 : 1;

        // Clone slides for seamless looping
        sliderWrapper.innerHTML += sliderWrapper.innerHTML;

        let currentSlide = 0;

        function moveToNextSlide() {
            currentSlide++;
            const slideWidth = 100 / (totalSlides * slidesToShow);
            sliderWrapper.style.transition = 'transform 0.7s cubic-bezier(0.445, 0.05, 0.55, 0.95)';
            sliderWrapper.style.transform = `translateX(-${currentSlide * slideWidth * slidesToShow}%)`;

            if (currentSlide >= totalSlides) {
                setTimeout(() => {
                    sliderWrapper.style.transition = 'none';
                    sliderWrapper.style.transform = 'translateX(0)';
                    currentSlide = 0;
                }, 700);
            }
        }

        setInterval(moveToNextSlide, 3000);
    }

    function moveSlider(tabName, direction) {
        const sliderWrapper = document.querySelector(`#slider-${tabName}`);
        const slides = sliderWrapper.querySelectorAll('.slider-image');
        const totalSlides = slides.length;
        const slidesToShow = window.innerWidth >= 1024 ? 2 : 1;

        let currentTransform = sliderWrapper.style.transform;
        let currentSlide = Math.round(Math.abs(parseInt(currentTransform.replace('translateX(', '').replace('%)', '')) / (100 / totalSlides))) || 0;

        if (direction === 'left') {
            currentSlide = (currentSlide - slidesToShow + totalSlides) % totalSlides;
        } else if (direction === 'right') {
            currentSlide = (currentSlide + slidesToShow) % totalSlides;
        }

        const slideWidth = 100 / (totalSlides * slidesToShow);
        sliderWrapper.style.transition = 'transform 0.7s cubic-bezier(0.445, 0.05, 0.55, 0.95)';
        sliderWrapper.style.transform = `translateX(-${currentSlide * slideWidth * slidesToShow}%)`;
    }

    // Add resize handler to update slidesToShow
    window.addEventListener('resize', () => {
        document.querySelectorAll('.slider-wrapper').forEach(wrapper => {
            const sliderId = wrapper.id;
            initializeSlider(sliderId);
        });
    });

    document.addEventListener('DOMContentLoaded', () => {
        showTab('jewellery', document.querySelector('button'));
    });
</script> --}}
