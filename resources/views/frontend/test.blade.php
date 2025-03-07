



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
            transition: transform 0.7s cubic-bezier(0.445, 0.05, 0.55, 0.95);
            gap: 10px;
        }

        .slider-image {
            flex: 0 0 100%;
            height: 600px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.5s, filter 0.5s;
        }

        @media (min-width: 1024px) {
            .slider-image {
                flex: 0 0 calc(50% - 5px);
            }
        }

        .slider-image:hover {
            transform: scale(1.05);
            filter: brightness(1.1);
        }

        .slider-arrow {
            background: rgba(0, 0, 0, 0.6);
            color: white;
            border: none;
            padding: 15px 20px;
            font-size: 20px;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .slider-arrow:hover {
            background: rgba(0, 0, 0, 0.8);
        }

        .slider-arrow-left {
            left: 20px;
        }

        .slider-arrow-right {
            right: 20px;
        }

        .tab-button {
            transition: all 0.3s ease;
            background: #1f2937;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 9999px;
            font-weight: 600;
        }

        .tab-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .tab-button.active {
            background: #e11d48;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
        }

        .tab-pane {
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease;
            position: absolute;
            width: 100%;
        }

        .tab-pane.active {
            opacity: 1;
            visibility: visible;
            position: relative;
        }

        @media (max-width: 768px) {
            .slider-image {
                height: 400px;
            }
        }
    </style>

    <div class="container mx-auto px-4 py-10 sm:py-20">
        <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-8 text-center">
            Industry We Served With Premium Solutions and Services 🚀
        </h1>

        <!-- Tabs Navigation -->
        <div class="flex flex-wrap justify-center gap-3 mb-8 bg-gray-100 p-4 rounded-xl shadow-md">
            <button onclick="switchTab('jewellery')" class="tab-button active">Jewellery</button>
            <button onclick="switchTab('cakes')" class="tab-button">Cakes</button>
        </div>

        <!-- Content Container -->
        <div class="bg-white shadow-2xl rounded-3xl overflow-hidden">
            <!-- Jewellery Tab -->
            <div id="jewellery-content" class="tab-pane active">
                <div class="flex flex-col lg:flex-row gap-6 p-8">
                    <!-- Left Section -->
                    <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                        <h2 class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800">Jewellery Industry</h2>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            We serve the jewellery industry with premium solutions and innovative marketing strategies.
                        </p>
                        <!-- Features list here -->
                    </div>

                    <!-- Right Section (Slider) -->
                    <div class="w-full lg:w-9/12 relative slider-container">
                        <div id="jewellery-slider" class="slider-wrapper">
                            <img src="{{ asset('assets/img/jewellery/1.jpg') }}" alt="Jewellery 1" class="slider-image">
                            <img src="{{ asset('assets/img/jewellery/2.jpg') }}" alt="Jewellery 2" class="slider-image">
                            <img src="{{ asset('assets/img/jewellery/3.jpg') }}" alt="Jewellery 3" class="slider-image">
                            <img src="{{ asset('assets/img/jewellery/4.jpg') }}" alt="Jewellery 4" class="slider-image">
                        </div>
                        <button class="slider-arrow slider-arrow-left" onclick="moveSlider('jewellery', -1)">←</button>
                        <button class="slider-arrow slider-arrow-right" onclick="moveSlider('jewellery', 1)">→</button>
                    </div>
                </div>
            </div>

            <!-- Cakes Tab -->
            <div id="cakes-content" class="tab-pane">
                <div class="flex flex-col lg:flex-row gap-6 p-8">
                    <!-- Left Section -->
                    <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-8 rounded-2xl">
                        <h2 class="text-2xl sm:text-3xl font-bold mb-6 text-gray-800">Cakes Industry</h2>
                        <p class="text-gray-700 mb-6 leading-relaxed">
                            Empowering the Cakes industry with innovative solutions and creative marketing.
                        </p>
                        <!-- Features list here -->
                    </div>

                    <!-- Right Section (Slider) -->
                    <div class="w-full lg:w-9/12 relative slider-container">
                        <div id="cakes-slider" class="slider-wrapper">
                            <img src="{{ asset('assets/img/category/cakes/1.jpg') }}" alt="Cakes 1" class="slider-image">
                            <img src="{{ asset('assets/img/category/cakes/2.jpg') }}" alt="Cakes 2" class="slider-image">
                            <img src="{{ asset('assets/img/category/cakes/3.jpg') }}" alt="Cakes 3" class="slider-image">
                            <img src="{{ asset('assets/img/category/cakes/4.jpg') }}" alt="Cakes 4" class="slider-image">
                        </div>
                        <button class="slider-arrow slider-arrow-left" onclick="moveSlider('cakes', -1)">←</button>
                        <button class="slider-arrow slider-arrow-right" onclick="moveSlider('cakes', 1)">→</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Keep track of current positions for each slider
        const sliderPositions = {
            jewellery: 0,
            cakes: 0
        };

        function moveSlider(sliderId, direction) {
            const slider = document.getElementById(`${sliderId}-slider`);
            const slides = slider.getElementsByClassName('slider-image');

            // Calculate how many slides to show based on screen width
            const slidesToShow = window.innerWidth >= 1024 ? 2 : 1;

            // Calculate the maximum position
            const maxPosition = Math.max(0, slides.length - slidesToShow);

            // Update position
            sliderPositions[sliderId] = Math.min(
                Math.max(0, sliderPositions[sliderId] + direction),
                maxPosition
            );

            // Calculate slide width including gap
            const slideWidth = slides[0].offsetWidth + 10; // 10px gap

            // Move slider
            slider.style.transform = `translateX(-${sliderPositions[sliderId] * slideWidth}px)`;
        }

        function switchTab(tabId) {
            // Hide all tabs
            document.querySelectorAll('.tab-pane').forEach(tab => {
                tab.classList.remove('active');
            });

            // Show selected tab
            document.getElementById(`${tabId}-content`).classList.add('active');

            // Update buttons
            document.querySelectorAll('.tab-button').forEach(btn => {
                btn.classList.remove('active');
            });
            event.target.classList.add('active');
        }

        // Reset slider positions on window resize
        window.addEventListener('resize', () => {
            Object.keys(sliderPositions).forEach(sliderId => {
                sliderPositions[sliderId] = 0;
                const slider = document.getElementById(`${sliderId}-slider`);
                slider.style.transform = 'translateX(0)';
            });
        });

        // Auto-slide functionality
        function autoSlide(sliderId) {
            setInterval(() => {
                const slider = document.getElementById(`${sliderId}-slider`);
                if (slider && slider.closest('.tab-pane').classList.contains('active')) {
                    moveSlider(sliderId, 1);
                }
            }, 3000);
        }

        // Initialize auto-slide for both sliders
        document.addEventListener('DOMContentLoaded', () => {
            ['jewellery', 'cakes'].forEach(sliderId => {
                autoSlide(sliderId);
            });

            // Initialize first tab
            switchTab('jewellery');
        });
    </script>
@endsection --}}


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
            transition: transform 0.6s ease-in-out;
            gap: 8px;
        }

        .slider-image {
            flex-shrink: 0;
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .slider-image:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        @media (min-width: 1024px) {
            .slider-image {
                width: calc(50% - 8px);
            }
        }

        .slider-arrow {
            background: rgba(255, 255, 255, 0.8);
            color: black;
            border: none;
            padding: 12px;
            border-radius: 50%;
            transition: all 0.3s ease;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            z-index: 10;
        }

        .slider-arrow:hover {
            background: rgba(255, 255, 255, 1);
            transform: translateY(-50%) scale(1.1);
        }

        .slider-arrow-left {
            left: 10px;
        }

        .slider-arrow-right {
            right: 10px;
        }

        .tab-button {
            transition: all 0.3s ease;
            padding: 10px 20px;
            border-radius: 30px;
            font-size: 1rem;
        }

        .tab-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
        }

        .tab-button.active {
            background: linear-gradient(to right, #ff416c, #ff4b2b);
            color: white;
            box-shadow: 0 4px 8px rgba(255, 71, 87, 0.3);
        }

        @media (max-width: 768px) {
            .slider-image {
                width: 100%;
                max-height: 350px;
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(10px);
            transition: opacity 0.6s ease, transform 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>

    <div class="container mx-auto px-4 py-12">
        <h1 class="text-4xl font-extrabold text-center text-gray-800 mb-6">
            Industry We Serve with Premium Solutions 🚀
        </h1>

        <div class="flex justify-center gap-4 mb-8">
            <button onclick="showTab('jewellery', this)" class="tab-button bg-gray-900 text-white active">
                Jewellery
            </button>
            <button onclick="showTab('cakes', this)" class="tab-button bg-gray-900 text-white">
                Cakes
            </button>
        </div>

        <div id="tab-content" class="bg-white shadow-xl rounded-2xl overflow-hidden">
            <div id="jewellery" class="tab-pane fade-in flex flex-col lg:flex-row p-8 hidden">
                <div class="w-full lg:w-3/12 bg-gradient-to-r from-gray-100 to-gray-50 p-6 rounded-xl">
                    <h2 class="text-3xl font-bold text-gray-900">Jewellery Industry</h2>
                    <p class="text-gray-700 mt-3 leading-relaxed">
                        We provide premium solutions for the jewellery industry, including high-end designs, tools, and
                        marketing.
                    </p>
                </div>
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-jewellery" class="slider-wrapper">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" class="slider-image">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('jewellery', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('jewellery', 'right')">→</button>
                </div>
            </div>

            <div id="cakes" class="tab-pane fade-in flex flex-col lg:flex-row p-8 hidden">
                <div class="w-full lg:w-3/12 bg-gradient-to-r from-gray-100 to-gray-50 p-6 rounded-xl">
                    <h2 class="text-3xl font-bold text-gray-900">Cakes Industry</h2>
                    <p class="text-gray-700 mt-3 leading-relaxed">
                        Empowering the Cakes industry with premium solutions, creative designs, and smart strategies.
                    </p>
                </div>
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-cakes" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/cakes/1.jpg') }}" class="slider-image">
                        <img src="{{ asset('assets/img/category/cakes/2.jpg') }}" class="slider-image">
                        <img src="{{ asset('assets/img/category/cakes/3.jpg') }}" class="slider-image">
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
            const slideWidth = images[0].offsetWidth + 8;
            const maxScroll = (images.length - 2) * slideWidth;
            let currentScroll = parseInt(slider.getAttribute('data-scroll') || '0', 10);

            currentScroll = direction === 'left' ?
                Math.max(currentScroll - slideWidth, 0) :
                Math.min(currentScroll + slideWidth, maxScroll);

            slider.style.transform = `translateX(-${currentScroll}px)`;
            slider.setAttribute('data-scroll', currentScroll);
        }

        function showTab(tabId, button) {
            document.querySelectorAll('.tab-pane').forEach(tab => tab.classList.add('hidden'));
            document.getElementById(tabId).classList.remove('hidden');
            document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            document.getElementById(tabId).classList.add('visible');
        }

        function autoSlide(industry) {
            setInterval(() => {
                moveSlider(industry, 'right');
            }, 3000); // Adjust time as needed (3000ms = 3 seconds)
        }

        document.addEventListener('DOMContentLoaded', () => {
            showTab('jewellery', document.querySelector('.tab-button'));
            autoSlide('jewellery');
            autoSlide('cakes');
        });

        document.addEventListener('DOMContentLoaded', () => showTab('jewellery', document.querySelector('.tab-button')));
    </script>
@endsection --}}

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
