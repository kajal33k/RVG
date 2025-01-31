<style>
    .slider-container {
        perspective: 1000px;
        overflow: hidden;
        position: relative;
    }

    .slider-wrapper {
        display: flex;
        white-space: nowrap;
        transition: transform 0.7s cubic-bezier(0.445, 0.55, 0.55, 0.95);
        gap: 10px;
        /* Add spacing between slides */
    }

    .slider-image {
        flex-shrink: 0;
        width: 100%;
        /* Full width on mobile view */
        height: 500px;
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
 
 {{-- categories --}}
 <div class="container mx-auto px-4 py-20">
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
                sliderWrapper.style.transition = 'transform 0.7s cubic-bezier(0.445, 0.75, 0.55, 0.95)';
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

            sliderWrapper.style.transition = 'transform 0.7s cubic-bezier(0.445, 0.55, 0.55, 0.95)';
            sliderWrapper.style.transform = `translateX(-${currentSlide * (100 / totalSlides)}%)`;
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Initialize first tab by default
            showTab('jewellery', document.querySelector('button'));
        });
    </script>
