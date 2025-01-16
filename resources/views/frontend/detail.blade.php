@extends('components.main')
@section('content')

  <!-- Main Section -->
  <div class="container mx-auto flex items-center justify-between min-h-screen px-4">
    <!-- Content -->
    <div class="max-w-2xl">
      <p class="text-lg font-medium text-gray-600 mb-4">Expand Your Business Globally</p>
      <h1 class="text-4xl font-bold text-red-700 mb-4">
        Purchase Software Online.<br>Anywhere in the world.
      </h1>
      <p class="text-gray-700 text-lg font-medium mb-6">
        Your code speaks volumes. It's time to reach customers worldwide.<br>
        <span class="text-gray-500">PayPro Global. One platform for payments, taxes, compliance – everything you need to go global.</span>
      </p>
      <div class="flex space-x-4">
        <a href="#sign-up" class="bg-red-600 text-white text-lg font-semibold py-3 px-6 rounded-full shadow-md hover:bg-red-700">
          Sign up
        </a>
        <a href="#book-demo" class="bg-white text-gray-800 border border-gray-300 text-lg font-semibold py-3 px-6 rounded-full shadow-md hover:bg-gray-100">
          Book my demo
        </a>
      </div>
    </div>

    <!-- Decorative Graphics -->
    <div class="hidden lg:block ">
      <div class="relative">
        <div class="absolute inset-0 bg-gradient-to-r from-purple-100 to-orange-100 opacity-20"></div>
        <div>
          <img src="{{asset('assets/img/apps.jpg')}}" alt="" class="rounded-lg shadow-2xl w-96">
        </div>
      </div>
    </div>
  </div>

  <div class="container mx-auto px-6">
    <!-- Section Title -->
    <h2 class="text-3xl font-bold text-red-600 mb-8">
      Software, Not Your Headaches
    </h2>

    <!-- Content Wrapper -->
    <div class="flex flex-wrap gap-6">
      <!-- Left Text -->
      <div class="flex-1 text-gray-700">
        <p class="text-lg">
          Managing global software sales is a game-changer for businesses, but it’s rarely a simple task. From billing to international payments, taxes, and compliance, it can become a full-time job that distracts from innovation and growth.
        </p>
      </div>

      <!-- Card Section -->
      <div class="flex-1 bg-white shadow-lg rounded-lg p-6">
        <h3 class="text-xl font-semibold text-red-600 mb-4">
          PayPro Global’s Solution
        </h3>
        <p class="text-gray-600 leading-relaxed">
          From flexible billing and payments to global compliance and tax, PayPro Global takes care of the complexities of scaling worldwide so you 
          <span class="font-semibold text-gray-800">can focus on coding your next breakthrough.</span>
        </p>
      </div>
    </div>
  </div>

  {{-- PRODUCT CARDS GRIDS --}}

  <section class="py-10">
    <div class="container mx-auto px-6">
      <div class="flex justify-center">
        <h1 class="text-red-600 text-2xl font-bold p-4">Product Cards</h1>
      </div>
      <!-- Grid Layout for the cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Card 1 -->
        <div class="relative group">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-red-500 to-gray-600 opacity-20 lg:mx-44 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
          <div class="relative p-6 h-full flex flex-col justify-between bg-white rounded-lg shadow-lg">
            <!-- Product Image -->
            <div class="flex justify-center">
              <img src="{{ asset('assets/img/card3.avif') }}" alt="Software Product" class="w-32 h-32 object-contain rounded-lg shadow-md">
            </div>
            <!-- Product Details -->
            <div class="text-center mt-4">
              <h3 class="text-lg font-semibold text-gray-800">Software Product</h3>
              <p class="text-sm text-gray-600 mt-2">An amazing software solution designed to simplify your work and increase productivity.</p>
            </div>
            <!-- Action Button -->
            <div class="mt-6">
              <button class="w-full py-2 px-4 bg-gradient-to-r from-red-500 to-gray-600 text-white font-medium rounded-lg shadow-lg hover:from-gray-600 hover:to-red-500 transform transition-transform duration-300 hover:scale-105">
                Learn More
              </button>
            </div>
          </div>
        </div>
  
        <!-- Card 2 (duplicate structure for more cards) -->
        <div class="relative group">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-red-500 to-gray-600 opacity-20 lg:mx-44 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
          <div class="relative p-6 h-full flex flex-col justify-between bg-white rounded-lg shadow-lg">
            <!-- Product Image -->
            <div class="flex justify-center">
              <img src="{{ asset('assets/img/card3.avif') }}" alt="Software Product" class="w-32 h-32 object-contain rounded-lg shadow-md">
            </div>
            <!-- Product Details -->
            <div class="text-center mt-4">
              <h3 class="text-lg font-semibold text-gray-800">Software Product</h3>
              <p class="text-sm text-gray-600 mt-2">An amazing software solution designed to simplify your work and increase productivity.</p>
            </div>
            <!-- Action Button -->
            <div class="mt-6">
              <button class="w-full py-2 px-4 bg-gradient-to-r from-red-500 to-gray-600 text-white font-medium rounded-lg shadow-lg hover:from-gray-600 hover:to-red-500 transform transition-transform duration-300 hover:scale-105">
                Learn More
              </button>
            </div>
          </div>
        </div>
  
        <!-- Card 3 (duplicate structure for more cards) -->
        <div class="relative group">
          <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-red-500 to-gray-600 opacity-20 lg:mx-44 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none"></div>
          <div class="relative p-6 h-full flex flex-col justify-between bg-white rounded-lg shadow-lg">
            <!-- Product Image -->
            <div class="flex justify-center">
              <img src="{{ asset('assets/img/card3.avif') }}" alt="Software Product" class="w-32 h-32 object-contain rounded-lg shadow-md">
            </div>
            <!-- Product Details -->
            <div class="text-center mt-4">
              <h3 class="text-lg font-semibold text-gray-800">Software Product</h3>
              <p class="text-sm text-gray-600 mt-2">An amazing software solution designed to simplify your work and increase productivity.</p>
            </div>
            <!-- Action Button -->
            <div class="mt-6">
              <button class="w-full py-2 px-4 bg-gradient-to-r from-red-500 to-gray-600 text-white font-medium rounded-lg shadow-lg hover:from-gray-600 hover:to-red-500 transform transition-transform duration-300 hover:scale-105">
                Learn More
              </button>
            </div>
          </div>
        </div>
  
      </div> <!-- End Grid -->
    </div> <!-- End Container -->
  </section>
  
  <!-- Services Section -->
  <div class="bg-gray-100 py-12">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-red-700 text-center mb-8">Our Services</h2>
      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-shadow">
          <h3 class="text-xl font-semibold text-red-700 mb-4">Facebook/Insta Ads</h3>
          <p class="text-gray-600">
            Effective ad campaigns to boost your brand's visibility on social media platforms.
          </p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-shadow">
          <h3 class="text-xl font-semibold text-red-700 mb-4">Google Ads</h3>
          <p class="text-gray-600">
            Targeted advertising strategies to reach your audience on Google Search and beyond.
          </p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-shadow">
          <h3 class="text-xl font-semibold text-red-700 mb-4">Social Media</h3>
          <p class="text-gray-600">
            Comprehensive social media management to elevate your online presence.
          </p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-shadow">
          <h3 class="text-xl font-semibold text-red-700 mb-4">Business Listing</h3>
          <p class="text-gray-600">
            Maximize your reach with accurate and optimized business listings.
          </p>
        </div>
        <div class="bg-white shadow-md rounded-lg p-6 text-center hover:shadow-lg transition-shadow">
          <h3 class="text-xl font-semibold text-red-700 mb-4">SEO</h3>
          <p class="text-gray-600">
            Tailored strategies to boost your online visibility and drive organic traffic.
          </p>
        </div>
      </div>
    </div>
  </div>
  
  <!-- SEO Section -->
  <section class="py-10">
    <div class="container mx-auto px-6 animated-card hover-3d">
      <div class="animated-card-inner bg-white shadow-lg rounded-lg p-8 hover:shadow-lg transition-shadow">
        <h2 class="text-4xl font-semibold text-red-700 mb-4 text-center">
          Focus on SEO
        </h2>
        <p class="text-gray-700 leading-relaxed text-lg text-center">
          Real Victory Groups is your partner in SEO success. We craft tailored strategies to boost your online visibility, drive organic traffic, and outrank competitors. Let’s elevate your search engine presence together.
        </p>
      </div>
    </div>
  </section>

  <!-- Marketing Section -->
  <section class="bg-gray-100 py-10">
    <div class="container mx-auto px-6 card-3d">
      <div class="card-inner bg-white shadow-2xl rounded-lg p-8 transform transition duration-500">
        <h2 class="text-3xl font-bold text-red-700 mb-6 text-center hover:text-red-600 transition duration-300">
          Marketing Support Content
        </h2>
        <p class="text-gray-700 leading-relaxed text-lg text-center">
          Real Victory Groups provides comprehensive support services to ensure your social media strategies thrive.
          From content creation to community engagement, we’re here to amplify your online presence and drive success.
        </p>
      </div>
    </div>
  </section>

  <!-- Social Media Section -->
  <section class="py-10">
    <div class="container mx-auto px-6">
      <div class="animated-card bg-white shadow-lg rounded-lg p-8 hover-scale transform transition">
        <h2 class="text-3xl font-bold text-red-700 mb-4 text-center hover:text-red-600 transition duration-300">
          Focus on Social Media
        </h2>
        <p class="text-gray-700 leading-relaxed text-lg text-center">
          Real Victory Groups excels in creating tailored social media strategies, leveraging platforms such as
          Facebook, Instagram, LinkedIn, and more to elevate your business’s online presence and drive results.
        </p>
      </div>
    </div>
  </section>

  <!-- Call to Action Section -->
  <section class="bg-red-600 text-white py-10">
    <div class="container mx-auto px-6 text-center">
      <h2 class="text-2xl font-semibold mb-4">Ready to Elevate Your Business?</h2>
      <p class="mb-6">Contact us today to discuss your project and discover how we can help your business thrive.</p>
      <a href="#" class="bg-white text-red-600 px-6 py-3 font-semibold rounded-lg shadow hover:bg-gray-100">Get Started</a>
    </div>
  </section>

@endsection