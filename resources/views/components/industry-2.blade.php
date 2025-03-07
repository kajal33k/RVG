
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

        <!-- Menu Design Tab -->
        <div id="menu" class="tab-pane flex flex-col lg:flex-row gap-6 p-8 hidden">
            <!-- Left Section -->
            <div class="w-full lg:w-3/12 bg-gradient-to-br from-gray-50 to-gray-100 p-10 rounded-2xl shadow-lg">
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
                    <img src="{{ asset('assets/img/category/menu-design/Page 7.jpg') }}" 
                        alt="menu Slide 1" class="slider-image">
                    <img src="{{ asset('assets/img/category/menu-design/Page 8.jpg') }}" 
                        alt="menu Slide 2" class="slider-image">
                    <img src="{{ asset('assets/img/category/menu-design/Page 9.jpg') }}" 
                        alt="menu Slide 3" class="slider-image">
                    <img src="{{ asset('assets/img/category/menu-design/Page 10.jpg') }}" 
                        alt="menu Slide 4" class="slider-image">
                    <img src="{{ asset('assets/img/category/menu-design/Page 11.jpg') }}" 
                        alt="menu Slide 5" class="slider-image">
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
                    <img src="{{ asset('assets/img/category/catalogue/Page 3.jpg') }}" 
                        alt="catalogue Slide 1" class="slider-image">
                    <img src="{{ asset('assets/img/category/catalogue/Page 4.jpg') }}" 
                        alt="catalogue Slide 2" class="slider-image">
                    <img src="{{ asset('assets/img/category/catalogue/Page 5.jpg') }}" 
                        alt="catalogue Slide 3" class="slider-image">
                    <img src="{{ asset('assets/img/category/catalogue/Page 6.jpg') }}" 
                        alt="catalogue Slide 4" class="slider-image">
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
                    <img src="{{ asset('assets/img/category/box/Page 1.jpg') }}"  alt="box Slide 1"
                        class="slider-image">
                    <img src="{{ asset('assets/img/category/box/Page 2.jpg') }}"  alt="box Slide 2"
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

    document.addEventListener('DOMContentLoaded', () => {
        // Initialize first tab by default
        showTab('menu', document.querySelector('button'));
    });
</script>
