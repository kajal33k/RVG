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
        <a href="/"
            class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors duration-200">Home</a>
        <a href="{{ route('frontend.about') }}"
            class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors duration-200">About Us</a>
        <a href="{{ route('frontend.services') }}"
            class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors duration-200">Services</a>
        <a href="{{ route('frontend.pricing') }}"
            class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors duration-200">Pricing</a>
        <a href="{{ route('frontend.contact') }}"
            class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors duration-200">Contact Us</a>
        <a href="{{ route('frontend.blog') }}"
            class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors duration-200">Blogs</a>
        <a href="{{ route('frontend.careers') }}"
            class="text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors duration-200">Career</a>
        <a href="#"
            class="ml-4 px-8 py-3 bg-black text-white text-sm font-medium rounded-xl shadow hover:bg-gray-900 transition-colors duration-200">
            Sign Up
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
    <a href="/"
        class="block text-sm font-medium text-gray-700 hover:text-gray-900 py-2 transition-colors duration-200">Home</a>
    <a href="{{ route('frontend.about') }}"
        class="block text-sm font-medium text-gray-700 hover:text-gray-900 py-2 transition-colors duration-200">About
        Us</a>
    <a href="{{ route('frontend.services') }}"
        class="block text-sm font-medium text-gray-700 hover:text-gray-900 py-2 transition-colors duration-200">Services</a>
    <a href="{{ route('frontend.pricing') }}"
        class="block text-sm font-medium text-gray-700 hover:text-gray-900 py-2 transition-colors duration-200">Pricing</a>
    <a href="{{ route('frontend.contact') }}"
        class="block text-sm font-medium text-gray-700 hover:text-gray-900 py-2 transition-colors duration-200">Contact
        Us</a>
    <a href="{{ route('frontend.blog') }}"
        class="block text-sm font-medium text-gray-700 hover:text-gray-900 py-2 transition-colors duration-200">Blogs</a>
    <a href="{{ route('frontend.careers') }}"
        class="block text-sm font-medium text-gray-700 hover:text-gray-900 py-2 transition-colors duration-200">Career</a>
    <a href="#"
        class="block bg-black text-white text-sm font-medium rounded-xl shadow hover:bg-gray-900 text-center py-3 mt-4 transition-colors duration-200">
        Sign Up
    </a>
</div>

<!-- JavaScript -->
<script>
    // Get the toggle button and mobile menu
    const toggleButton = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    // Add event listener for toggle button
    toggleButton.addEventListener('click', () => {
        // Toggle the visibility of the mobile menu
        if (mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.remove('hidden');
            setTimeout(() => {
                mobileMenu.style.transform = "translateY(0)"; // Slide the menu down
            }, 10); // Allow time for the class toggle to take effect
        } else {
            mobileMenu.style.transform = "translateY(-100%)"; // Slide the menu up
            setTimeout(() => {
                mobileMenu.classList.add('hidden');
            }, 500); // Wait for the transition to finish before hiding
        }
    });
</script>
