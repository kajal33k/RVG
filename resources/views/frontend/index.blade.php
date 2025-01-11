@extends('components.main')
@section('content')
<div class="relative h-screen flex items-center justify-center bg-gradient-to-r from-red-500 to-black-500 text-white p-10 rounded-lg shadow-lg">
  <!-- Overlay Text -->
  <div class="absolute inset-0 bg-black opacity-50 rounded-lg"></div>
  
  <!-- Content Section -->
  <div class="z-10 text-center space-y-4">
    <h1 class=" text-4xl font-extrabold text-white leading-tight transform transition duration-500 ease-out opacity-90 hover:opacity-100 hover:translate-y-4">
        365 Days, 365 Posters
    </h1>
    <p class="text-xl font-semibold text-white transform transition duration-500 ease-out opacity-90 hover:opacity-100 hover:translate-y-4">
        Your Brand, Your Story,
    </p>
    <p class="text-2xl font-semibold text-red-300 transform transition duration-500 ease-out opacity-90 hover:opacity-100 hover:translate-y-4">
        Our Design
    </p>
</div>



  <!-- Image Background -->
  <img src="{{asset('assets/img/jewellery post  banner.avif')}}" alt="Poster Design" class="absolute inset-0 object-cover w-full h-full opacity-30 rounded-lg">
</div>



<section class="bg-gradient-to-br from-red-500 to-gray-700 text-white py-16">
  <div class="container mx-auto px-6 lg:px-20 flex flex-col lg:flex-row items-center gap-12">
    <!-- Image Section -->
    <div class="w-full lg:w-1/2 relative">
      <img 
        src="{{asset('assets/img/about.png')}}" 
        alt="IT Solutions" 
        class="w-full h-full object-cover rounded-xl shadow-lg"
      />
      <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-0 rounded-xl"></div>
    </div>
    
    <!-- Content Section -->
    <div class="w-full lg:w-1/2">
      <h2 class="text-4xl font-bold mb-4">
        About Us
      </h2>
      <p class="text-lg leading-relaxed mb-6">
        Real Victory Groups provides comprehensive IT solutions and services including <span class="font-semibold">Web Designing & Development</span>, 
        <span class="font-semibold">Website Maintenance</span>, <span class="font-semibold">Mobile Application Design & Development</span>, 
        <span class="font-semibold">Search Engine Optimization</span>, <span class="font-semibold">E-commerce Solutions</span>, 
        <span class="font-semibold">Google Adwords & PPC (Pay per click)</span>, 
        <span class="font-semibold">Website Promotion</span>, <span class="font-semibold">ERP Software</span>, 
        <span class="font-semibold">Domain & Hosting</span>, and <span class="font-semibold">Software Development</span>.
      </p>
      <p class="text-lg leading-relaxed">
        We are happy to offer a wide range of business services to meet the immediate and future needs of organizations and institutions globally.
      </p>
      <button class="mt-6 px-6 py-3 bg-white text-red-600 font-semibold rounded-lg shadow-md hover:bg-red-100 transition-all">
        Learn More
      </button>
    </div>
  </div>
</section>


  <!-- Swiper -->
  <div class="swiper mySwiper relative w-full h-full py-12">
    <div class="swiper-wrapper">
      <div class="swiper-slide flex justify-center items-center bg-white">
        <img src="{{asset('assets/img/jewellery post  banner.avif')}}" alt="" class="h-1/2 w-1/2">
      </div>
      <div class="swiper-slide flex justify-center items-center bg-white">
        <img src="{{asset('assets/img/jewellery post  banner.avif')}}" alt="" class="h-1/2 w-1/2">
      </div>
      <div class="swiper-slide flex justify-center items-center bg-white">
        <img src="{{asset('assets/img/jewellery post  banner.avif')}}" alt="" class="h-1/2 w-1/2">
      </div>
      <div class="swiper-slide flex justify-center items-center bg-white">
        <img src="{{asset('assets/img/jewellery post  banner.avif')}}" alt="" class="h-1/2 w-1/2">
      </div>
      
    </div>
    
    <!-- Navigation buttons -->
    {{-- <div class="swiper-button-next absolute top-1/2 right-0 transform -translate-y-1/2 text-white text-3xl p-2 bg-black bg-opacity-50 rounded-full"></div>
    <div class="swiper-button-prev absolute top-1/2 left-0 transform -translate-y-1/2 text-white text-3xl p-2 bg-black bg-opacity-50 rounded-full"></div>
   --}}
  </div>
  {{-- OUR SECTION --}}
  <section class="py-20 text-white backdrop-blur-sm relative z-10 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-red-500 to-black animate-gradient-x"></div>
    <div class="container mx-auto px-6 text-center relative z-10">
      <h2 class="text-4xl font-extrabold mb-12">Our Digital Marketing Services</h2>
      <p class="text-xl mb-12 opacity-80">Real Victory Groups specializes in crafting funnel-based strategies tailored to your business needs. Leveraging various marketing platforms including Facebook, Instagram, Google, YouTube, LinkedIn, and more, we deliver optimal strategies designed to drive success.</p>
  
      <!-- Service Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Service 1 -->
        <div class="service-card bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
          <h3 class="text-2xl font-semibold mb-4 text-gray-800">Facebook/Insta Ads</h3>
          <p class="text-gray-600">Leverage the power of social media advertising to reach your ideal audience and drive conversions.</p>
        </div>
  
        <!-- Service 2 -->
        <div class="service-card bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
          <h3 class="text-2xl font-semibold mb-4 text-gray-800">Google Ads</h3>
          <p class="text-gray-600">Target your customers effectively with Google Ads, ensuring maximum visibility and ROI.</p>
        </div>
  
        <!-- Service 3 -->
        <div class="service-card bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
          <h3 class="text-2xl font-semibold mb-4 text-gray-800">Social Media</h3>
          <p class="text-gray-600">Expand your business's reach with tailored social media strategies that engage and convert.</p>
        </div>
  
        <!-- Service 4 -->
        <div class="service-card bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
          <h3 class="text-2xl font-semibold mb-4 text-gray-800">Business Listing</h3>
          <p class="text-gray-600">Optimize your local presence with strategic business listings across major platforms.</p>
        </div>
  
        <!-- Service 5 -->
        <div class="service-card bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
          <h3 class="text-2xl font-semibold mb-4 text-gray-800">SEO</h3>
          <p class="text-gray-600">Boost your search engine visibility, drive organic traffic, and grow your online presence.</p>
        </div>
  
        <!-- Service 6 -->
        <div class="service-card bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
          <h3 class="text-2xl font-semibold mb-4 text-gray-800">Focus on SEO</h3>
          <p class="text-gray-600">Partner with us for SEO strategies that will outrank your competition and elevate your online presence.</p>
        </div>
  
        <!-- Service 7 -->
        <div class="service-card bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
          <h3 class="text-2xl font-semibold mb-4 text-gray-800">Support Content</h3>
          <p class="text-gray-600">Get the right content for your social media platforms, ensuring consistency and engagement.</p>
        </div>
  
        <!-- Service 8 -->
        <div class="service-card bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
          <h3 class="text-2xl font-semibold mb-4 text-gray-800">Focus on Social Media</h3>
          <p class="text-gray-600">Maximize your social media potential with personalized strategies and targeted content.</p>
        </div>
      </div>
    </div>
  
    <!-- Animation Styles -->
    <style>
      @keyframes gradient-x {
        0% {
          background-position: -200% 0;
        }
        50% {
          background-position: 200% 0;
        }
        100% {
          background-position: -200% 0;
        }
      }
  
      .animate-gradient-x {
        background-size: 400% 400%;
        animation: gradient-x 10s ease infinite;
      }
    </style>
  </section>
  
  
  <!-- Component: Slider with controls inside -->
<div class="relative w-full glide-01 py-12">
  <!-- Slides -->
  <div class="overflow-hidden" data-glide-el="track">
      <ul class="relative w-full overflow-hidden p-0 whitespace-no-wrap flex flex-no-wrap [backface-visibility: hidden] [transform-style: preserve-3d] [touch-action: pan-Y] [will-change: transform]">
          <li><img src="https://Tailwindmix.b-cdn.net/image-01.jpg" class=" max-w-1/2 max-h-1/2 m-auto" /></li>
          <li><img src="https://Tailwindmix.b-cdn.net/image-02.jpg" class="max-w-1/2 max-h-1/2 m-auto" /></li>
          <li><img src="https://Tailwindmix.b-cdn.net/image-03.jpg" class="max-w-1/2 max-h-1/2 m-auto" /></li>
          <li><img src="https://Tailwindmix.b-cdn.net/image-04.jpg" class="max-w-1/2 max-h-1/2 m-auto" /></li>
          <li><img src="https://Tailwindmix.b-cdn.net/image-05.jpg" class="max-w-1/2 max-h-1/2 m-auto" /></li>
      </ul>
  </div>
  <!-- Controls -->
  {{-- <div class="absolute left-0 flex items-center justify-between w-full h-0 px-4 top-1/2 " data-glide-el="controls">
      <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir="<" aria-label="prev slide">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
              <title>prev slide</title>
              <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
          </svg>
      </button>
      <button class="inline-flex items-center justify-center w-8 h-8 transition duration-300 border rounded-full lg:w-12 lg:h-12 text-slate-700 border-slate-700 hover:text-slate-900 hover:border-slate-900 focus-visible:outline-none bg-white/20" data-glide-dir=">" aria-label="next slide">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
              <title>next slide</title>
              <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
          </svg>
      </button>
  </div> --}}
</div>

{{-- OUR DEMO::::::::::::: --}}

 <!-- Include Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Include Slick Carousel Styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">

<!-- Include jQuery (required for Slick) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include Slick Carousel Script -->
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<style>
  /* Custom styles for Slick Slider navigation */
  .slick-prev, .slick-next {
    font-size: 24px;
    color: white;
    z-index: 10;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .slick-prev {
    left: -50px;
  }

  .slick-next {
    right: -50px;
  }

  .slick-prev:hover, .slick-next:hover {
    background-color: rgba(255, 255, 255, 0.7);
    color: black;
  }

  /* Ensures consistent image rendering */
  .slick-slide img {
    border-radius: 8px;
    object-fit: cover;
  }

  /* Hide default slick dots */
  .slick-dots {
    display: none !important;
  }
</style>

<!-- Slider Section -->
<section class="w-full flex justify-center py-10 bg-red-900">
  <div class="slider w-full max-w-5xl">
    <!-- Slide 1 -->
    <div class="relative">
      <img src="{{asset('assets/img/imgg.avif')}}" alt="First Slide" class="w-full h-72 md:h-96 object-cover rounded-lg">
      <div class="absolute top-1/2 left-8 transform -translate-y-1/2 text-white">
        <h2 class="text-3xl md:text-4xl font-bold mb-2">First Slide</h2>
        <p class="text-sm md:text-lg">Explore the amazing features of our demo.</p>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="relative">
      <img src="{{asset('assets/img/jewellery post banner.avif')}}" alt="Second Slide" class="w-full h-72 md:h-96 object-cover rounded-lg">
      <div class="absolute top-1/2 left-8 transform -translate-y-1/2 text-white">
        <h2 class="text-3xl md:text-4xl font-bold mb-2">Second Slide</h2>
        <p class="text-sm md:text-lg">Learn more about what we offer in this section.</p>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="relative">
      <img src="{{asset('assets/img/imgg.avif')}}" alt="Third Slide" class="w-full h-72 md:h-96 object-cover rounded-lg">
      <div class="absolute top-1/2 left-8 transform -translate-y-1/2 text-white">
        <h2 class="text-3xl md:text-4xl font-bold mb-2">Third Slide</h2>
        <p class="text-sm md:text-lg">Check out our stunning features in action.</p>
      </div>
    </div>
  </div>
</section>

<!-- Slick Slider Initialization Script -->
<script>
  $(document).ready(function () {
    // Initialize the slick slider
    $('.slider').slick({
      infinite: true,             // Infinite loop
      speed: 500,                 // Transition speed
      fade: true,                 // Fade effect between slides
      autoplay: true,             // Enable autoplay
      autoplaySpeed: 3000,        // Set autoplay speed (3 seconds)
      prevArrow: '<button type="button" class="slick-prev" aria-label="Previous Slide"></button>',
      nextArrow: '<button type="button" class="slick-next" aria-label="Next Slide"></button>',
      dots: false,                // Disable dots
      arrows: true,               // Enable arrows
    });
  });
</script>






{{-- VIDEO------- --}}
<div>
  <iframe 
  width="100%" 
  height="315" 
  src="https://www.youtube.com/embed/D6446Z5z7p8?autoplay=1&modestbranding=1&rel=0&showinfo=0" 
  frameborder="0" 
  allow="autoplay; encrypted-media" 
  allowfullscreen>
</iframe>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.0.2/glide.js"></script>

<script>
  var glide01 = new Glide('.glide-01', {
      type: 'slider',
      focusAt: 'center',
      perView: 1,
      autoplay: 3000,
      animationDuration: 700,
      gap: 0,
      classes: {
          activeNav: '[&>*]:bg-slate-700',
      },

  });

  glide01.mount();
</script>
<!-- End Slider with controls inside -->

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      loop: true, // Optional, allows continuous loop mode
      autoplay: {
        delay: 2000, // Time between slides in ms (2 seconds)
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>



@section('content')
<style>
  .bubbles-container {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
    z-index: 10;
  }

  .bubble {
    position: absolute;
    width: 30px;
    height: 30px;
    background-color: rgba(255, 255, 255, 0.6);
    border-radius: 50%;
    animation: bubbleAnimation linear infinite;
  }

  @keyframes bubbleAnimation {
    0% {
      transform: translateY(100%) scale(0.5);
      opacity: 0;
    }
    50% {
      transform: translateY(0) scale(1);
      opacity: 1;
    }
    100% {
      transform: translateY(-100%) scale(0.5);
      opacity: 0;
    }
  }

  /* Adjust different bubble sizes and timings */
  .bubble:nth-child(1) {
    animation-delay: 0s;
  }
  .bubble:nth-child(2) {
    animation-delay: 1s;
  }
  .bubble:nth-child(3) {
    animation-delay: 2s;
  }
  .bubble:nth-child(4) {
    animation-delay: 3s;
  }
  .bubble:nth-child(5) {
    animation-delay: 4s;
  }
</style>


  <section class="pt-44 pb-14 relative overflow-hidden">
    <h1 class="text-3xl font-bold text-center mb-8" data-aos="fade-up" data-aos-duration="500">Happiness @ Walkover</h1>

    <!-- First Card -->
    <div class="max-w-7xl mx-auto p-4" data-aos="fade-up" data-aos-duration="500">
      <div class="border border-gray-300 rounded-lg bg-white shadow-md">
        <div class="w-1/4 bg-red-500 text-white text-sm p-1 text-center">
          Inbox
        </div>
        <div class="p-4">
          <p class="text-gray-700 text-3xl font-medium mb-2">
            Who has appointed you the judge of their actions?
          </p>
          <p class="text-gray-500 text-sm text-right">Fri, Jul 26</p>
        </div>
      </div>
    </div>

    <!-- Second Card -->
    <div class="max-w-7xl mx-auto p-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
      <div class="border border-gray-300 rounded-lg bg-white shadow-md">
        <div class="w-1/4 bg-red-500 text-white text-sm p-1 text-center">
          Inbox
        </div>
        <div class="p-4">
          <p class="text-gray-700 text-3xl font-medium mb-2">
            Who has appointed you the judge of their actions?
          </p>
          <p class="text-gray-500 text-sm text-right">Fri, Jul 26</p>
        </div>
      </div>
    </div>

    <!-- Third Card -->
    <div class="max-w-7xl mx-auto p-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
      <div class="border border-gray-300 rounded-lg bg-white shadow-md">
        <div class="w-1/4 bg-red-500 text-white text-sm p-1 text-center">
          Inbox
        </div>
        <div class="p-4">
          <p class="text-gray-700 text-3xl font-medium mb-2">
            Who has appointed you the judge of their actions?
          </p>
          <p class="text-gray-500 text-sm text-right">Fri, Jul 26</p>
        </div>
      </div>
    </div>

    <!-- Fourth Card -->
    <div class="max-w-7xl mx-auto p-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600">
      <div class="border border-gray-300 rounded-lg bg-white shadow-md">
        <div class="w-1/4 bg-red-500 text-white text-sm p-1 text-center">
          Inbox
        </div>
        <div class="p-4">
          <p class="text-gray-700 text-3xl font-medium mb-2">
            Who has appointed you the judge of their actions?
          </p>
          <p class="text-gray-500 text-sm text-right">Fri, Jul 26</p>
        </div>
      </div>
    </div>

    <!-- Fifth Card -->
    <div class="max-w-7xl mx-auto p-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="800">
      <div class="border border-gray-300 rounded-lg bg-white shadow-md">
        <div class="w-1/4 bg-red-500 text-white text-sm p-1 text-center">
          Inbox
        </div>
        <div class="p-4">
          <p class="text-gray-700 text-3xl font-medium mb-2">
            Who has appointed you the judge of their actions?
          </p>
          <p class="text-gray-500 text-sm text-right">Fri, Jul 26</p>
        </div>
      </div>
    </div>

    <!-- Sixth Card -->
    <div class="max-w-7xl mx-auto p-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="1000">
      <div class="border border-gray-300 rounded-lg bg-white shadow-md">
        <div class="w-1/4 bg-red-500 text-white text-sm p-1 text-center">
          Inbox
        </div>
        <div class="p-4">
          <p class="text-gray-700 text-3xl font-medium mb-2">
            Who has appointed you the judge of their actions?
          </p>
          <p class="text-gray-500 text-sm text-right">Fri, Jul 26</p>
        </div>
      </div>
    </div>

  </section>

  <!-- Bubble Flow Effect -->
  <div class="bubbles-container absolute top-0 left-0 right-0 bottom-0 pointer-events-none z-10">
    <!-- Multiple Bubbles -->
    <div class="bubble" style="left: 20%; animation-duration: 6s;"></div>
    <div class="bubble" style="left: 40%; animation-duration: 7s;"></div>
    <div class="bubble" style="left: 60%; animation-duration: 5s;"></div>
    <div class="bubble" style="left: 70%; animation-duration: 8s;"></div>
    <div class="bubble" style="left: 90%; animation-duration: 9s;"></div>
  </div>

@endsection
