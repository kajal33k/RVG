@extends('components.main')

@section('content')
    <style>
        .slider-container {
            perspective: 1000px;
            overflow: hidden;
            position: relative;
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .slider-wrapper {
            display: flex;
            transition: transform 0.7s ease-in-out;
            gap: 10px;
            justify-content: flex-start;
            width: max-content;
            /* Ensure no extra white space */
        }

        .slider-image {
            flex-shrink: 0;
            width: calc(50% - 5px);
            /* 2 images ek sath desktop pe */
            height: 600px;
            object-fit: contain;
            /* Crop issue fix */
            border-radius: 10px;
            background-color: #f5f5f5;
            /* To prevent white space issues */
        }

        @media (max-width: 1024px) {
            .slider-image {
                width: calc(50% - 10px);
                height: auto;
            }
        }

        @media (max-width: 768px) {
            .slider-image {
                width: 100%;
                max-height: 400px;
                object-fit: contain;
                /* Mobile pe bhi full image dikhe */
            }
        }

        .slider-image:hover {
            transform: scale(1.05);
            filter: brightness(1.1);
            transition: 0.3s ease-in-out;
        }

        .slider-arrow {
            background: rgba(0, 0, 0, 0.6);
            color: white;
            border: none;
            padding: 12px;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .slider-arrow-left {
            left: 10px;
        }

        .slider-arrow-right {
            right: 10px;
        }

        .slider-arrow:hover {
            background: rgba(0, 0, 0, 0.8);
            transform: translateY(-50%) scale(1.1);
        }

        .tab-button {
            transition: all 0.3s ease;
            padding: 10px 15px;
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
    </style>


    <div class="container mx-auto px-4 py-10 sm:py-20">

        <h1 class="text-3xl sm:text-4xl font-bold text-gray-800 mb-8 text-center">
            Our Services 🚀
        </h1>


        <div class="flex flex-wrap justify-center gap-3 mb-8 bg-gray-100 p-4 rounded-xl shadow-md">

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

              <!-- restaurant Design Tab -->
              <div id="restaurant" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        restaurant Industry Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Empowering the restaurant industry with high-quality design services, cutting-edge crafting tools,
                        and
                        innovative marketing strategies to elevate your brand.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>State-of-the-Art Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-restaurant" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/restaurant/1.jpg') }}" alt="restaurant Slide 1" class="slider-image">
                        <img src="{{ asset('assets/img/category/restaurant/2.jpg') }}" alt="restaurant Slide 2" class="slider-image">
                        <img src="{{ asset('assets/img/category/restaurant/3.jpg') }}" alt="restaurant Slide 3" class="slider-image">
                        <img src="{{ asset('assets/img/category/restaurant/4.jpg') }}" alt="restaurant Slide 4" class="slider-image">
                        <img src="{{ asset('assets/img/category/restaurant/5.jpg') }}" alt="restaurant Slide 5" class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('restaurant', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('restaurant', 'right')">→</button>
                </div>
            </div>
            

             <!-- hospital Design Tab -->
             <div id="hospital" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        hospital Industry Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Empowering the hospital industry with high-quality design services, cutting-edge crafting tools,
                        and
                        innovative marketing strategies to elevate your brand.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>State-of-the-Art Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-hospital" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/hospital/1.jpg') }}" alt="hospital Slide 1" class="slider-image">
                        <img src="{{ asset('assets/img/category/hospital/2.jpg') }}" alt="hospital Slide 2" class="slider-image">
                        <img src="{{ asset('assets/img/category/hospital/3.jpg') }}" alt="hospital Slide 3" class="slider-image">
                        <img src="{{ asset('assets/img/category/hospital/4.jpg') }}" alt="hospital Slide 4" class="slider-image">
                        <img src="{{ asset('assets/img/category/hospital/5.jpg') }}" alt="hospital Slide 5" class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('hospital', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('hospital', 'right')">→</button>
                </div>
            </div>
            
             <!-- dentist Design Tab -->
             <div id="dentist" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        dentist Industry Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Empowering the dentist industry with high-quality design services, cutting-edge crafting tools,
                        and
                        innovative marketing strategies to elevate your brand.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>State-of-the-Art Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-dentist" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/dentist/1.jpg') }}" alt="dentist Slide 1" class="slider-image">
                        <img src="{{ asset('assets/img/category/dentist/2.jpg') }}" alt="dentist Slide 2" class="slider-image">
                        <img src="{{ asset('assets/img/category/dentist/3.jpg') }}" alt="dentist Slide 3" class="slider-image">
                        <img src="{{ asset('assets/img/category/dentist/4.jpg') }}" alt="dentist Slide 4" class="slider-image">
                        <img src="{{ asset('assets/img/category/dentist/5.jpg') }}" alt="dentist Slide 5" class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('dentist', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('dentist', 'right')">→</button>
                </div>
            </div>

             <!-- parlour Design Tab -->
             <div id="parlour" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        parlour Industry Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Empowering the parlour industry with high-quality design services, cutting-edge crafting tools,
                        and
                        innovative marketing strategies to elevate your brand.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>State-of-the-Art Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-parlour" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/parlour/1.jpg') }}" alt="parlour Slide 1" class="slider-image">
                        <img src="{{ asset('assets/img/category/parlour/2.jpg') }}" alt="parlour Slide 2" class="slider-image">
                        <img src="{{ asset('assets/img/category/parlour/3.jpg') }}" alt="parlour Slide 3" class="slider-image">
                        <img src="{{ asset('assets/img/category/parlour/4.jpg') }}" alt="parlour Slide 4" class="slider-image">
                        <img src="{{ asset('assets/img/category/parlour/5.jpg') }}" alt="parlour Slide 5" class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('parlour', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('parlour', 'right')">→</button>
                </div>
            </div>

            <!-- solar Design Tab -->
            <div id="solar" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        solar Industry Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Empowering the solar industry with high-quality design services, cutting-edge crafting tools,
                        and
                        innovative marketing strategies to elevate your brand.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>State-of-the-Art Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-solar" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/solar/1.jpg') }}" alt="solar Slide 1" class="slider-image">
                        <img src="{{ asset('assets/img/category/solar/2.jpg') }}" alt="solar Slide 2" class="slider-image">
                        <img src="{{ asset('assets/img/category/solar/3.jpg') }}" alt="solar Slide 3" class="slider-image">
                        <img src="{{ asset('assets/img/category/solar/4.jpg') }}" alt="solar Slide 4" class="slider-image">
                        <img src="{{ asset('assets/img/category/solar/5.jpg') }}" alt="solar Slide 5" class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('solar', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('solar', 'right')">→</button>
                </div>
            </div>

            <!-- hardware Design Tab -->
            <div id="hardware" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        hardware Industry Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Empowering the hardware industry with high-quality design services, cutting-edge crafting tools,
                        and
                        innovative marketing strategies to elevate your brand.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>State-of-the-Art Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-hardware" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/hardware/1.jpg') }}" alt="hardware Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/hardware/2.jpg') }}" alt="hardware Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/hardware/3.jpg') }}" alt="hardware Slide 3"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/hardware/4.jpg') }}" alt="hardware Slide 4"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/hardware/5.jpg') }}" alt="hardware Slide 5"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('hardware', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('hardware', 'right')">→</button>
                </div>
            </div>

            <!-- salwar-suit Design Tab -->
            <div id="salwar-suit" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        salwar-suit Industry Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Empowering the salwar-suit industry with high-quality design services, cutting-edge crafting tools,
                        and
                        innovative marketing strategies to elevate your brand.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>State-of-the-Art Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-salwar-suit" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/salwar-suit/1.jpg') }}" alt="salwar-suit Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/salwar-suit/2.jpg') }}" alt="salwar-suit Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/salwar-suit/3.jpg') }}" alt="salwar-suit Slide 3"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/salwar-suit/4.jpg') }}" alt="salwar-suit Slide 4"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/salwar-suit/5.jpg') }}" alt="salwar-suit Slide 5"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('salwar-suit', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right"
                        onclick="moveSlider('salwar-suit', 'right')">→</button>
                </div>
            </div>

            <!-- marriage-hall Design Tab -->
            <div id="marriage-hall" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        marriage-hall Industry Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Empowering the marriage-hall industry with high-quality design services, cutting-edge crafting
                        tools,
                        and
                        innovative marketing strategies to elevate your brand.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>State-of-the-Art Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-marriage-hall" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/marriage-hall/1.jpg') }}" alt="marriage-hall Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/marriage-hall/2.jpg') }}" alt="marriage-hall Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/marriage-hall/3.jpg') }}" alt="marriage-hall Slide 3"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/marriage-hall/4.jpg') }}" alt="marriage-hall Slide 4"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/marriage-hall/5.jpg') }}" alt="marriage-hall Slide 5"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left"
                        onclick="moveSlider('marriage-hall', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right"
                        onclick="moveSlider('marriage-hall', 'right')">→</button>
                </div>
            </div>

            <!-- saree Design Tab -->
            <div id="saree" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        saree Industry Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Empowering the saree industry with high-quality design services, cutting-edge crafting tools,
                        and
                        innovative marketing strategies to elevate your brand.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>State-of-the-Art Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-saree" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/saree/1.jpg') }}" alt="saree Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/saree/2.jpg') }}" alt="saree Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/saree/3.jpg') }}" alt="saree Slide 3"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/saree/4.jpg') }}" alt="saree Slide 4"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/saree/5.jpg') }}" alt="saree Slide 5"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('saree', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('saree', 'right')">→</button>
                </div>
            </div>

            <!-- lehenga Design Tab -->
            <div id="lehenga" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        lehenga Industry Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Empowering the lehenga industry with high-quality design services, cutting-edge crafting tools,
                        and
                        innovative marketing strategies to elevate your brand.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>State-of-the-Art Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-lehenga" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/lehenga/1.jpg') }}" alt="lehenga Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/lehenga/2.jpg') }}" alt="lehenga Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/lehenga/3.jpg') }}" alt="lehenga Slide 3"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/lehenga/4.jpg') }}" alt="lehenga Slide 4"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/lehenga/5.jpg') }}" alt="lehenga Slide 5"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('lehenga', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('lehenga', 'right')">→</button>
                </div>
            </div>

            <!-- kids-wear Design Tab -->
            <div id="kids-wear" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        kids-wear Industry Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Empowering the kids-wear industry with high-quality design services, cutting-edge crafting tools,
                        and
                        innovative marketing strategies to elevate your brand.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>State-of-the-Art Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-kids-wear" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/kids-wear/1.jpg') }}" alt="kids-wear Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/kids-wear/2.jpg') }}" alt="kids-wear Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/kids-wear/3.jpg') }}" alt="kids-wear Slide 3"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/kids-wear/4.jpg') }}" alt="kids-wear Slide 4"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/kids-wear/5.jpg') }}" alt="kids-wear Slide 5"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('kids-wear', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('kids-wear', 'right')">→</button>
                </div>
            </div>

            <!-- school Design Tab -->
            <div id="school" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        school Industry Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Empowering the school industry with high-quality design services, cutting-edge crafting tools,
                        and
                        innovative marketing strategies to elevate your brand.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>State-of-the-Art Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-school" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/school/1.jpg') }}" alt="school Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/school/2.jpg') }}" alt="school Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/school/3.jpg') }}" alt="school Slide 3"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/school/4.jpg') }}" alt="school Slide 4"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/school/5.jpg') }}" alt="school Slide 5"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('school', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('school', 'right')">→</button>
                </div>
            </div>

            <!-- plywood Design Tab -->
            <div id="plywood" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        plywood Industry Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Empowering the plywood industry with high-quality design services, cutting-edge crafting tools,
                        and
                        innovative marketing strategies to elevate your brand.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>State-of-the-Art Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-plywood" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/plywood/1.jpg') }}" alt="plywood Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/plywood/2.jpg') }}" alt="plywood Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/plywood/3.jpg') }}" alt="plywood Slide 3"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/plywood/4.jpg') }}" alt="plywood Slide 4"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/plywood/5.jpg') }}" alt="plywood Slide 5"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('plywood', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('plywood', 'right')">→</button>
                </div>
            </div>

            <!-- pipes Design Tab -->
            <div id="pipes" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        pipes Industry Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Empowering the pipes industry with high-quality design services, cutting-edge crafting tools,
                        and
                        innovative marketing strategies to elevate your brand.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>State-of-the-Art Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-pipes" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/pipes/1.jpg') }}" alt="pipes Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/pipes/2.jpg') }}" alt="pipes Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/pipes/3.jpg') }}" alt="pipes Slide 3"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/pipes/4.jpg') }}" alt="pipes Slide 4"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/pipes/5.jpg') }}" alt="pipes Slide 5"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('pipes', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('pipes', 'right')">→</button>
                </div>
            </div>

            <!-- electronics Design Tab -->
            <div id="electronics" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        electronics Industry Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Empowering the electronics industry with high-quality design services, cutting-edge crafting tools,
                        and
                        innovative marketing strategies to elevate your brand.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>State-of-the-Art Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-electronics" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/electronics/1.jpg') }}" alt="electronics Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/electronics/2.jpg') }}" alt="electronics Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/electronics/3.jpg') }}" alt="electronics Slide 3"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/electronics/4.jpg') }}" alt="electronics Slide 4"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/electronics/5.jpg') }}" alt="electronics Slide 5"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('electronics', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right"
                        onclick="moveSlider('electronics', 'right')">→</button>
                </div>
            </div>

            <!-- cosmetics Design Tab -->
            <div id="cosmetics" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        cosmetics Industry Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Empowering the cosmetics industry with high-quality design services, cutting-edge crafting tools,
                        and
                        innovative marketing strategies to elevate your brand.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>State-of-the-Art Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-cosmetics" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/cosmetics/1.jpg') }}" alt="cosmetics Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/cosmetics/2.jpg') }}" alt="cosmetics Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/cosmetics/3.jpg') }}" alt="cosmetics Slide 3"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/cosmetics/4.jpg') }}" alt="cosmetics Slide 4"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/cosmetics/5.jpg') }}" alt="cosmetics Slide 5"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('cosmetics', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('cosmetics', 'right')">→</button>
                </div>
            </div>

            <!-- Cakes Design Tab -->
            <div id="cakes" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        cakes Industry Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Empowering the cakes industry with high-quality design services, cutting-edge crafting tools, and
                        innovative marketing strategies to elevate your brand.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>State-of-the-Art Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-cakes" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/cakes/1.jpg') }}" alt="cakes Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/cakes/2.jpg') }}" alt="cakes Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/cakes/3.jpg') }}" alt="cakes Slide 3"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/cakes/4.jpg') }}" alt="cakes Slide 4"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/cakes/5.jpg') }}" alt="cakes Slide 5"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('cakes', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('cakes', 'right')">→</button>
                </div>
            </div>

            <!-- Menu Design Tab -->
            <div id="menu" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-4/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        Menu Industry Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Empowering the menu industry with high-quality design services, cutting-edge crafting tools, and
                        innovative marketing strategies to elevate your brand.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Design Solutions</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>State-of-the-Art Crafting Tools</span>
                        </li>
                    </ul>
                </div>

                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-menu" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/menu-design/Page 7.jpg') }}" alt="menu Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/menu-design/Page 8.jpg') }}" alt="menu Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/menu-design/Page 9.jpg') }}" alt="menu Slide 3"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/menu-design/Page 10.jpg') }}" alt="menu Slide 4"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/menu-design/Page 11.jpg') }}" alt="menu Slide 5"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('menu', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('menu', 'right')">→</button>
                </div>
            </div>

            <!-- Catalogue Design Tab -->
            <div id="catalogue" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        Catalogue Design Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Elevate your brand with premium catalogue designs, cutting-edge crafting tools, and strategic
                        marketing
                        solutions that enhance visibility and engagement.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Creative & Custom Catalogue Designs</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Data-Driven Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>Innovative Printing & Digital Tools</span>
                        </li>
                    </ul>
                </div>


                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-catalogue" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/catalogue/Page 3.jpg') }}" alt="catalogue Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/catalogue/Page 4.jpg') }}" alt="catalogue Slide 2"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/catalogue/Page 5.jpg') }}" alt="catalogue Slide 3"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/catalogue/Page 6.jpg') }}" alt="catalogue Slide 4"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('catalogue', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('catalogue', 'right')">→</button>
                </div>
            </div>

            <!-- Box Design Tab -->
            <div id="box" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
                <!-- Left Section -->
                <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
                    <h2
                        class="text-2xl sm:text-3xl font-bold mb-6 text-gray-900 bg-clip-text text-transparent bg-gradient-to-r from-gray-900 to-blue-600">
                        Box Design Solutions
                    </h2>
                    <p class="text-gray-800 mb-6 leading-relaxed">
                        Delivering innovative box designs with premium materials, advanced crafting tools, and
                        strategic branding solutions to enhance product presentation and market impact.
                    </p>
                    <ul class="space-y-4 mb-6 text-gray-700">
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">design_services</span>
                            <span>Custom Box Design & Prototyping</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">insights</span>
                            <span>Branding & Marketing Strategies</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <span class="material-icons text-2xl text-blue-600">build</span>
                            <span>Eco-Friendly & Durable Materials</span>
                        </li>
                    </ul>
                </div>


                <!-- Right Section -->
                <div class="w-full lg:w-9/12 relative slider-container">
                    <div id="slider-box" class="slider-wrapper">
                        <img src="{{ asset('assets/img/category/box/Page 1.jpg') }}" alt="box Slide 1"
                            class="slider-image">
                        <img src="{{ asset('assets/img/category/box/Page 2.jpg') }}" alt="box Slide 2"
                            class="slider-image">
                    </div>
                    <button class="slider-arrow slider-arrow-left" onclick="moveSlider('box', 'left')">←</button>
                    <button class="slider-arrow slider-arrow-right" onclick="moveSlider('box', 'right')">→</button>
                </div>
            </div>

        </div>

    </div>


    <!-- Image Popup Modal -->
    <div id="image-modal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden">
        <div class="relative bg-white p-4 rounded-lg shadow-lg max-w-3xl">
            <button onclick="closeModal()" class="absolute top-2 right-2 text-gray-600 hover:text-gray-900 text-2xl">
                &times;
            </button>
            <img id="modal-image" src="" alt="Enlarged Image" class="w-full h-auto max-h-[80vh] rounded-lg">
        </div>
    </div>

    <script>
        function showImageModal(image) {
            const modal = document.getElementById('image-modal');
            const modalImage = document.getElementById('modal-image');

            modalImage.src = image.src; // Set clicked image as modal image
            modal.classList.remove('hidden'); // Show modal
        }

        function closeModal() {
            document.getElementById('image-modal').classList.add('hidden'); // Hide modal
        }

        // Close modal when clicking outside the image
        document.getElementById('image-modal').addEventListener('click', function(event) {
            if (event.target === this) {
                closeModal();
            }
        });
    </script>

    <script>
        function moveSlider(industry, direction) {
            const slider = document.getElementById(`slider-${industry}`);
            const images = slider.getElementsByClassName('slider-image');
            if (images.length === 0) return; // Prevent errors if no images

            const slideWidth = images[0].offsetWidth + 10; // Considering gap
            const slidesToShow = window.innerWidth >= 1024 ? 2 : 1; // 2 slides for desktop, 1 for mobile
            const totalSlides = images.length;
            const maxScroll = Math.max((totalSlides - slidesToShow) * slideWidth, 0); // Prevent negative values

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
            // Remove 'hidden' class to show tab
            document.getElementById(tabId).classList.remove('hidden');

            // Set active class on selected tab button
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

        // Auto-slide function with pause on hover
        function autoSlide(industry) {
            const slider = document.getElementById(`slider-${industry}`);
            let interval = setInterval(() => {
                moveSlider(industry, 'right');
            }, 3000); // Adjust time interval as needed (3000ms = 3s)

            slider.addEventListener('mouseenter', () => clearInterval(interval));
            slider.addEventListener('mouseleave', () => {
                interval = setInterval(() => {
                    moveSlider(industry, 'right');
                }, 3000);
            });
        }

        // Start auto-slide for each slider
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll('.slider-wrapper').forEach(slider => {
                const industry = slider.id.replace('slider-', '');
                autoSlide(industry);
            });

            // Open "menu" and "cakes" tabs by default
            setTimeout(() => {
                showTab('menu', document.querySelector('[data-tab="menu"]'));
                showTab('cakes', document.querySelector('[data-tab="cakes"]'));
            }, 100);
        });
    </script>
@endsection
