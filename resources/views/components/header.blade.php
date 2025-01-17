<!-- Navbar -->
<nav
    class="fixed inset-x-0 top-0 z-50 mx-auto mt-4 flex w-[98%] max-w-[85rem] items-center justify-between rounded-2xl px-4 py-2 bg-white/50 backdrop-blur-xl shadow-lg shadow-black/50">
    <!-- Logo Section -->
    <div>
        <a href="/">
            <img src="{{ asset('assets/img/logo (2).png') }}" alt="Logo"
                class="h-[40px] w-[100px] object-contain md:h-[60px] md:w-[150px]" />
        </a>
    </div>

    <!-- Navigation Links (Desktop) -->
    <div class="hidden md:flex items-center space-x-6">
        <a href="/" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors duration-200">Home</a>
        <a href="{{ route('frontend.about') }}" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors duration-200">About Us</a>
        <a href="{{ route('frontend.services') }}" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors duration-200">Services</a>
        <a href="{{ route('frontend.pricing') }}" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors duration-200">Pricing</a>
        <a href="{{ route('frontend.contact') }}" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors duration-200">Contact Us</a>
        <a href="{{ route('frontend.blog') }}" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors duration-200">Blogs</a>
        <a href="{{ route('frontend.careers') }}" class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors duration-200">Career</a>
        <a href="#" id="enquiry-btn"
            class="ml-4 px-8 py-3 bg-black text-white text-sm font-medium rounded-xl shadow hover:bg-gray-900 transition-colors duration-200">
            Enquiry
        </a>
    </div>

    <!-- Mobile Menu Icon -->
    <div class="flex md:hidden">
        <button id="mobile-menu-toggle" class="text-gray-700">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>
</nav>

<!-- Mobile Menu -->
<div id="mobile-menu"
    class="fixed inset-x-0 top-0 bg-white/50 backdrop-blur-lg shadow-lg shadow-black/50 rounded-lg p-4 mt-20 mx-4 hidden transform transition-all duration-500 ease-in-out max-h-screen overflow-y-auto z-40">
    <a href="/" class="block text-sm font-medium text-gray-700 hover:text-gray-900 py-2 transition-colors duration-200">Home</a>
    <a href="{{ route('frontend.about') }}" class="block text-sm font-medium text-gray-700 hover:text-gray-900 py-2 transition-colors duration-200">About Us</a>
    <a href="{{ route('frontend.services') }}" class="block text-sm font-medium text-gray-700 hover:text-gray-900 py-2 transition-colors duration-200">Services</a>
    <a href="{{ route('frontend.pricing') }}" class="block text-sm font-medium text-gray-700 hover:text-gray-900 py-2 transition-colors duration-200">Pricing</a>
    <a href="{{ route('frontend.contact') }}" class="block text-sm font-medium text-gray-700 hover:text-gray-900 py-2 transition-colors duration-200">Contact Us</a>
    <a href="{{ route('frontend.blog') }}" class="block text-sm font-medium text-gray-700 hover:text-gray-900 py-2 transition-colors duration-200">Blogs</a>
    <a href="{{ route('frontend.careers') }}" class="block text-sm font-medium text-gray-700 hover:text-gray-900 py-2 transition-colors duration-200">Career</a>
    <a href="#"
        class="block bg-black text-white text-sm font-medium rounded-xl shadow hover:bg-gray-900 text-center py-3 mt-4 transition-colors duration-200" id="enquiry-mobile-btn">
        Enquiry
    </a>
</div>

<!-- Contact Modal -->
<div id="contact-modal" class="fixed inset-0 bg-gray-500 bg-opacity-75 flex justify-center items-center hidden z-50">
    <div class="bg-white rounded-lg p-8 w-11/12 md:w-1/2 shadow-lg">
        <h2 class="text-2xl font-bold mb-6 text-center">Contact Us</h2>
        <form class="space-y-4">
            <!-- Name -->
            <div>
                <input type="text" placeholder="Full Name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black transition" />
            </div>

            <!-- Email -->
            <div>
                <input type="email" placeholder="Email Address" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black transition" />
            </div>

            <!-- Mobile Number -->
            <div>
                <input type="tel" placeholder="Mobile Number" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black transition" />
            </div>

            <!-- Message -->
            <div>
                <textarea placeholder="Your Message" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-black transition h-32"></textarea>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="w-full py-3 bg-black text-white text-lg font-medium rounded-lg hover:bg-gray-900 transition-colors">Submit</button>
            </div>
        </form>

        <!-- Close Modal Button -->
        <button id="close-modal" class="mt-4 w-full text-center py-2 text-black bg-gray-200 rounded-lg hover:bg-gray-300 transition">
            Close
        </button>
    </div>
</div>

<!-- JavaScript -->
<script>
    // Toggle mobile menu
    const toggleButton = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    toggleButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        mobileMenu.classList.toggle('transform');
        mobileMenu.classList.toggle('translate-y-0');
    });

    // Open Contact Modal
    const enquiryBtn = document.getElementById('enquiry-btn');
    const enquiryMobileBtn = document.getElementById('enquiry-mobile-btn');
    const contactModal = document.getElementById('contact-modal');
    const closeModal = document.getElementById('close-modal');

    const openModal = () => {
        contactModal.classList.remove('hidden');
    };

    const closeModalFunction = () => {
        contactModal.classList.add('hidden');
    };

    enquiryBtn.addEventListener('click', openModal);
    enquiryMobileBtn.addEventListener('click', openModal);
    closeModal.addEventListener('click', closeModalFunction);
</script>
