
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

        {{-- <div class="flex justify-center mt-8">
            <a href="{{route('frontend.industryserve')}}"
                class="px-6 py-3 text-white font-semibold bg-red-500 rounded-lg shadow-md transition-all duration-300 hover:bg-red-600 hover:shadow-lg hover:-translate-y-1 active:translate-y-1">
                View More
            </a>
        </div> --}}
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
            showTab('cakes', document.querySelector('button'));
        });
    </script>

    <!-- Industry Section End-->