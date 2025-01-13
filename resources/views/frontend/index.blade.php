@extends('components.main')
@section('content')
{{-- <div class="relative h-screen flex items-center justify-center bg-gradient-to-r from-blue-50 to-gray-50 text-white p-0 rounded-lg shadow-lg">
  <!-- Overlay Text -->
  <div class="absolute inset-0 bg-black opacity-10 rounded-lg"></div>
  
  <!-- Content Section -->
  <div class="z-10 text-center space-y-4">
    <h1 class=" text-4xl font-extrabold text-black leading-tight transform transition duration-500 ease-out opacity-90 hover:opacity-100 hover:translate-y-4">
        365 Days, 365 Posters
    </h1>
    <p class="text-xl font-semibold text-black transform transition duration-500 ease-out opacity-90 hover:opacity-100 hover:translate-y-4">
        Your Brand, Your Story,
    </p>
    <p class="text-2xl font-semibold text-black transform transition duration-500 ease-out opacity-90 hover:opacity-100 hover:translate-y-4">
        Our Design
    </p>
</div> --}}
<section class="dark:bg-gray-100 dark:text-gray-800">
	<div class="container flex flex-col justify-center p-4 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
		<div class="flex flex-col justify-center p-4 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
			<h1 class="text-4xl font-bold leading-none sm:text-4xl">We are growth partners who genuinely care about you and your success.
				<span class="dark:text-red-600"> 365 days , <br> 365 posters</span>
			</h1>
			<p class="mt-6 mb-8 text-lg sm:mb-12">Your brand, your story, 
				<br class="hidden md:inline lg:hidden">our design
			</p>
			<div class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start">
				<a rel="noopener noreferrer" href="#" class="px-8 py-3 text-lg font-semibold rounded dark:bg-red-600 border dark:border-gray-500 hover:bg-transparent hover:text-black">Get Started</a>
				<a rel="noopener noreferrer" href="#" class="px-8 py-3 text-lg font-semibold border rounded dark:border-gray-800 hover:bg-red-500 ">Learn More</a>
			</div>
		</div>
		<div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
			<img src="{{asset('assets/img/hero.jpg')}}" alt="" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128">
		</div>
	</div>
</section>





<section class="bg-gradient-to-br from-[#E63636] to-gray-700 text-white py-16">
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
      <div class="swiper-slide flex justify-center items-center bg-white ">
        <img src="{{asset('assets/img/jewellery post  banner.avif')}}" alt="" class="h-1/2 w-1/2 ">
      </div>
      <div class="swiper-slide flex justify-center items-center bg-white">
        <img src="{{asset('assets/img/slide1.jpg')}}" alt="" class="h-1/2 w-1/2">
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



  <style>
    /* 3D Hover Effect */
    .feature-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      transform: perspective(1000px) rotateX(0deg) rotateY(0deg);
    }

    .feature-card:hover {
      transform: perspective(1000px) rotateX(10deg) rotateY(10deg) scale(1.05);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    /* Smooth entry animation */
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fade-in {
      animation: fadeInUp 0.8s ease forwards;
    }

    /* Delay for each card */
    .fade-in:nth-child(1) {
      animation-delay: 0.2s;
    }

    .fade-in:nth-child(2) {
      animation-delay: 0.4s;
    }

    .fade-in:nth-child(3) {
      animation-delay: 0.6s;
    }

    .fade-in:nth-child(4) {
      animation-delay: 0.8s;
    }

    .fade-in:nth-child(5) {
      animation-delay: 1s;
    }

    .fade-in:nth-child(6) {
      animation-delay: 1.2s;
    }
  </style>

  <section class="py-12">
    <div class="max-w-6xl mx-auto px-6">
      <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Features</h2>
      <p class="text-center text-lg text-gray-600 mb-12">Experience the Best Features Ever</p>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Friendly Admin -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center feature-card fade-in">
          <div class="text-blue-500 text-4xl mb-4">👤</div>
          <h3 class="text-xl font-semibold mb-2">Friendly Admin</h3>
          <p class="text-gray-600">Welcome to <strong>Friendly Admin</strong> – your ultimate partner in efficient management. Simplify your tasks with intuitive tools and dedicated support.</p>
        </div>
        
        <!-- Comprehensive Documentation -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center feature-card fade-in">
          <div class="text-green-500 text-4xl mb-4">📚</div>
          <h3 class="text-xl font-semibold mb-2">Comprehensive Documentation</h3>
          <p class="text-gray-600">Navigate with ease using well-organized documentation. Every step is outlined to ensure you’re always on the right track.</p>
        </div>
        
        <!-- Infinite Customization -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center feature-card fade-in">
          <div class="text-purple-500 text-4xl mb-4">🎨</div>
          <h3 class="text-xl font-semibold mb-2">Infinite Customization</h3>
          <p class="text-gray-600">Transform our solutions to suit your vision. With endless customization, align every feature seamlessly with your needs.</p>
        </div>
        
        <!-- Free to Explore -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center feature-card fade-in">
          <div class="text-orange-500 text-4xl mb-4">💾</div>
          <h3 class="text-xl font-semibold mb-2">Free to Explore</h3>
          <p class="text-gray-600">Access our tools with a <strong>free download</strong> today. Explore powerful features at zero cost.</p>
        </div>
        
        <!-- Responsive by Design -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center feature-card fade-in">
          <div class="text-red-500 text-4xl mb-4">📱</div>
          <h3 class="text-xl font-semibold mb-2">Responsive by Design</h3>
          <p class="text-gray-600">Stay connected wherever you go with our fully responsive design, delivering a seamless experience on all devices.</p>
        </div>
        
        <!-- Unwavering Security -->
        <div class="bg-white shadow-lg rounded-lg p-6 text-center feature-card fade-in">
          <div class="text-teal-500 text-4xl mb-4">🔒</div>
          <h3 class="text-xl font-semibold mb-2">Unwavering Security</h3>
          <p class="text-gray-600">Your data’s safety is our top priority. Cutting-edge security measures provide peace of mind and trust.</p>
        </div>
      </div>
    </div>
  </section>




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

{{--  REVIEW SECTION  --}}
<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />

<script type="module">
  import KeenSlider from 'https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/+esm'

  const keenSliderActive = document.getElementById('keen-slider-active')
  const keenSliderCount = document.getElementById('keen-slider-count')

  const keenSlider = new KeenSlider(
    '#keen-slider',
    {
      loop: true,
      defaultAnimation: {
        duration: 750,
      },
      slides: {
        origin: 'center',
        perView: 1,
        spacing: 16,
      },
      breakpoints: {
        '(min-width: 640px)': {
          slides: {
            origin: 'center',
            perView: 1.5,
            spacing: 16,
          },
        },
        '(min-width: 768px)': {
          slides: {
            origin: 'center',
            perView: 1.75,
            spacing: 16,
          },
        },
        '(min-width: 1024px)': {
          slides: {
            origin: 'center',
            perView: 3,
            spacing: 16,
          },
        },
      },
      created(slider) {
        slider.slides[slider.track.details.rel].classList.remove('opacity-40')

        keenSliderActive.innerText = slider.track.details.rel + 1
        keenSliderCount.innerText = slider.slides.length
      },
      slideChanged(slider) {
        slider.slides.forEach((slide) => slide.classList.add('opacity-40'))

        slider.slides[slider.track.details.rel].classList.remove('opacity-40')

        keenSliderActive.innerText = slider.track.details.rel + 1
      },
    },
    []
  )

  const keenSliderPrevious = document.getElementById('keen-slider-previous')
  const keenSliderNext = document.getElementById('keen-slider-next')

  keenSliderPrevious.addEventListener('click', () => keenSlider.prev())
  keenSliderNext.addEventListener('click', () => keenSlider.next())
</script>

<section class="bg-white">
  <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 lg:px-8 lg:py-16">
    <h2 class="text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
      Read trusted reviews from our customers
    </h2>

    <div class="mt-8">
      <div id="keen-slider" class="keen-slider">
        <div class="keen-slider__slide opacity-40 transition-opacity duration-500">
          <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
            <div class="flex items-center gap-4">
              <img
                alt=""
                src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                class="size-14 rounded-full object-cover"
              />

              <div>
                <div class="flex justify-center gap-0.5 text-green-500">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                </div>

                <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
              </div>
            </div>

            <p class="mt-4 text-gray-700">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
              consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius
              accusamus error officiis atque voluptates magnam!
            </p>
          </blockquote>
        </div>

        <div class="keen-slider__slide opacity-40 transition-opacity duration-500">
          <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
            <div class="flex items-center gap-4">
              <img
                alt=""
                src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                class="size-14 rounded-full object-cover"
              />

              <div>
                <div class="flex justify-center gap-0.5 text-green-500">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                </div>

                <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
              </div>
            </div>

            <p class="mt-4 text-gray-700">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
              consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius
              accusamus error officiis atque voluptates magnam!
            </p>
          </blockquote>
        </div>

        <div class="keen-slider__slide opacity-40 transition-opacity duration-500">
          <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
            <div class="flex items-center gap-4">
              <img
                alt=""
                src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                class="size-14 rounded-full object-cover"
              />

              <div>
                <div class="flex justify-center gap-0.5 text-green-500">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                </div>

                <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
              </div>
            </div>

            <p class="mt-4 text-gray-700">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
              consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius
              accusamus error officiis atque voluptates magnam!
            </p>
          </blockquote>
        </div>

        <div class="keen-slider__slide opacity-40 transition-opacity duration-500">
          <blockquote class="rounded-lg bg-gray-50 p-6 shadow-sm sm:p-8">
            <div class="flex items-center gap-4">
              <img
                alt=""
                src="https://images.unsplash.com/photo-1595152772835-219674b2a8a6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                class="size-14 rounded-full object-cover"
              />

              <div>
                <div class="flex justify-center gap-0.5 text-green-500">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="size-5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                    />
                  </svg>
                </div>

                <p class="mt-0.5 text-lg font-medium text-gray-900">Paul Starr</p>
              </div>
            </div>

            <p class="mt-4 text-gray-700">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa sit rerum incidunt, a
              consequuntur recusandae ab saepe illo est quia obcaecati neque quibusdam eius
              accusamus error officiis atque voluptates magnam!
            </p>
          </blockquote>
        </div>
      </div>

      <div class="mt-6 flex items-center justify-center gap-4">
        <button
          aria-label="Previous slide"
          id="keen-slider-previous"
          class="text-gray-600 transition-colors hover:text-gray-900"
        >
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="size-5"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
          </svg>
        </button>

        <p class="w-16 text-center text-sm text-gray-700">
          <span id="keen-slider-active"></span>
          /
          <span id="keen-slider-count"></span>
        </p>

        <button
          aria-label="Next slide"
          id="keen-slider-next"
          class="text-gray-600 transition-colors hover:text-gray-900"
        >
          <svg
            class="size-5"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M9 5l7 7-7 7"
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
            />
          </svg>
        </button>
      </div>
    </div>
  </div>
</section>


<div class="bg-[#fff2f4] h-screen">
  <section class="max-w-5xl mx-auto py-10 sm:py-20">
    <div class="flex items-center justify-center flex-col gap-y-2 py-5">
      <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold">Frequently asked questions</h2>
      <p class="text-lg font-medium text-slate-700/70">Questions related to web hosting</p>
    </div>
    <div class="w-full px-7 md:px-10 xl:px-2 py-4">
      <div class="mx-auto w-full max-w-5xl border border-slate-400/20 rounded-lg bg-white">
        <div class="border-b border-[#0A071B]/10">
          <button class="question-btn flex w-full items-start gap-x-5 justify-between rounded-lg text-left text-lg font-bold text-slate-800 focus:outline-none p-5" data-toggle="answer-1"><span>What types of hosting plans do you offer?</span><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class=" mt-1.5 md:mt-0 flex-shrink-0 rotate-180 transform h-5 w-5 text-[#5B5675]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path></svg></button>
          <div class="answer pt-2 pb-5 px-5 text-sm lg:text-base text-[#343E3A] font-medium" id="answer-1"
            style="display: none;">We offer shared hosting, VPS hosting, dedicated server hosting, and cloud hosting
            plans.</div>
        </div>
        <div class="border-b border-[#0A071B]/10">
          <button class="question-btn flex w-full items-start gap-x-5 justify-between rounded-lg text-left text-lg font-bold text-slate-800 focus:outline-none p-5" data-toggle="answer-2"><span>What is the uptime guarantee for your hosting services?</span><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class=" mt-1.5 md:mt-0 flex-shrink-0  h-5 w-5 text-[#5B5675]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path></svg></button>
          <div class="answer pt-2 pb-5 px-5 text-sm lg:text-base text-[#343E3A] font-medium" id="answer-2"
            style="display: none;">We guarantee an uptime of 99.9% for all our hosting services.</div>
        </div>
        <div class="border-b border-[#0A071B]/10">
          <button class="question-btn flex w-full items-start gap-x-5 justify-between rounded-lg text-left text-lg font-bold text-slate-800 focus:outline-none p-5" data-toggle="answer-3"><span>Do you provide website migration assistance?</span><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class=" mt-1.5 md:mt-0 flex-shrink-0  h-5 w-5 text-[#5B5675]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path></svg></button>
          <div class="answer pt-2 pb-5 px-5 text-sm lg:text-base text-[#343E3A] font-medium" id="answer-3"
            style="display: none;">Yes, we offer free website migration assistance for new customers.</div>
        </div>
        <div class="">
          <button class="question-btn flex w-full items-start gap-x-5 justify-between rounded-lg text-left text-lg font-bold text-slate-800 focus:outline-none p-5" data-toggle="answer-4"><span>What security measures do you have in place?</span><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class=" mt-1.5 md:mt-0 flex-shrink-0  h-5 w-5 text-[#5B5675]" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M16.293 9.293 12 13.586 7.707 9.293l-1.414 1.414L12 16.414l5.707-5.707z"></path></svg></button>
          <div class="answer pt-2 pb-5 px-5 text-sm lg:text-base text-[#343E3A] font-medium" id="answer-4"
            style="display: none;">We employ advanced security measures including firewalls, DDoS protection, and
            regular security audits.</div>
        </div>
      </div>
    </div>
  </section>
</div>


<section class="min-h-screen bg-cover " style="background-image: url('https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80')">
  <div class="flex flex-col min-h-screen bg-red/60">
      <div class="container flex flex-col flex-1 px-6 py-12 mx-auto">
          <div class="flex-1 lg:flex lg:items-center lg:-mx-6">
              <div class="text-white lg:w-1/2 lg:mx-6">
                  <h1 class="text-2xl font-semibold capitalize lg:text-3xl">Ultimate design solution</h1>

                  <p class="max-w-xl mt-6">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem quo
                      aliquid molestiae hic incidunt beatae placeat accusantium! Alias ex quisquam ab tempora. Ratione
                      autem doloremque ducimus numquam doloribus, error sed.
                  </p>

                  <button class="px-8 py-3 mt-6 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:ring focus:ring-blue-400 focus:ring-opacity-50">
                      get in touch
                  </button>

                  <div class="mt-6 md:mt-8">
                      <h3 class="text-gray-300 ">Follow us</h3>

                      <div class="flex mt-4 -mx-1.5 ">
                          <a class="mx-1.5 text-white transition-colors duration-300 transform hover:text-red-500" href="#">
                              <svg class="w-10 h-10 fill-current" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M18.6668 6.67334C18.0002 7.00001 17.3468 7.13268 16.6668 7.33334C15.9195 6.49001 14.8115 6.44334 13.7468 6.84201C12.6822 7.24068 11.9848 8.21534 12.0002 9.33334V10C9.83683 10.0553 7.91016 9.07001 6.66683 7.33334C6.66683 7.33334 3.87883 12.2887 9.3335 14.6667C8.0855 15.498 6.84083 16.0587 5.3335 16C7.53883 17.202 9.94216 17.6153 12.0228 17.0113C14.4095 16.318 16.3708 14.5293 17.1235 11.85C17.348 11.0351 17.4595 10.1932 17.4548 9.34801C17.4535 9.18201 18.4615 7.50001 18.6668 6.67268V6.67334Z" />
                              </svg>
                          </a>

                          <a class="mx-1.5 text-white transition-colors duration-300 transform hover:text-red-500" href="#">
                              <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M15.2 8.80005C16.4731 8.80005 17.694 9.30576 18.5941 10.2059C19.4943 11.1061 20 12.327 20 13.6V19.2H16.8V13.6C16.8 13.1757 16.6315 12.7687 16.3314 12.4687C16.0313 12.1686 15.6244 12 15.2 12C14.7757 12 14.3687 12.1686 14.0687 12.4687C13.7686 12.7687 13.6 13.1757 13.6 13.6V19.2H10.4V13.6C10.4 12.327 10.9057 11.1061 11.8059 10.2059C12.7061 9.30576 13.927 8.80005 15.2 8.80005Z" fill="currentColor" />
                                  <path d="M7.2 9.6001H4V19.2001H7.2V9.6001Z" fill="currentColor" />
                                  <path d="M5.6 7.2C6.48366 7.2 7.2 6.48366 7.2 5.6C7.2 4.71634 6.48366 4 5.6 4C4.71634 4 4 4.71634 4 5.6C4 6.48366 4.71634 7.2 5.6 7.2Z" fill="currentColor" />
                              </svg>
                          </a>

                          <a class="mx-1.5 text-white transition-colors duration-300 transform hover:text-red-500" href="#">
                              <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M7 10.2222V13.7778H9.66667V20H13.2222V13.7778H15.8889L16.7778 10.2222H13.2222V8.44444C13.2222 8.2087 13.3159 7.9826 13.4826 7.81591C13.6493 7.64921 13.8754 7.55556 14.1111 7.55556H16.7778V4H14.1111C12.9324 4 11.8019 4.46825 10.9684 5.30175C10.1349 6.13524 9.66667 7.2657 9.66667 8.44444V10.2222H7Z" fill="currentColor" />
                              </svg>
                          </a>

                          <a class="mx-1.5 text-white transition-colors duration-300 transform hover:text-red-500" href="#">
                              <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M11.9294 7.72275C9.65868 7.72275 7.82715 9.55428 7.82715 11.825C7.82715 14.0956 9.65868 15.9271 11.9294 15.9271C14.2 15.9271 16.0316 14.0956 16.0316 11.825C16.0316 9.55428 14.2 7.72275 11.9294 7.72275ZM11.9294 14.4919C10.462 14.4919 9.26239 13.2959 9.26239 11.825C9.26239 10.354 10.4584 9.15799 11.9294 9.15799C13.4003 9.15799 14.5963 10.354 14.5963 11.825C14.5963 13.2959 13.3967 14.4919 11.9294 14.4919ZM17.1562 7.55495C17.1562 8.08692 16.7277 8.51178 16.1994 8.51178C15.6674 8.51178 15.2425 8.08335 15.2425 7.55495C15.2425 7.02656 15.671 6.59813 16.1994 6.59813C16.7277 6.59813 17.1562 7.02656 17.1562 7.55495ZM19.8731 8.52606C19.8124 7.24434 19.5197 6.10901 18.5807 5.17361C17.6453 4.23821 16.51 3.94545 15.2282 3.88118C13.9073 3.80621 9.94787 3.80621 8.62689 3.88118C7.34874 3.94188 6.21341 4.23464 5.27444 5.17004C4.33547 6.10544 4.04628 7.24077 3.98201 8.52249C3.90704 9.84347 3.90704 13.8029 3.98201 15.1238C4.04271 16.4056 4.33547 17.5409 5.27444 18.4763C6.21341 19.4117 7.34517 19.7045 8.62689 19.7687C9.94787 19.8437 13.9073 19.8437 15.2282 19.7687C16.51 19.708 17.6453 19.4153 18.5807 18.4763C19.5161 17.5409 19.8089 16.4056 19.8731 15.1238C19.9481 13.8029 19.9481 9.84704 19.8731 8.52606ZM18.1665 16.5412C17.8881 17.241 17.349 17.7801 16.6456 18.0621C15.5924 18.4799 13.0932 18.3835 11.9294 18.3835C10.7655 18.3835 8.26272 18.4763 7.21307 18.0621C6.51331 17.7837 5.9742 17.2446 5.69215 16.5412C5.27444 15.488 5.37083 12.9888 5.37083 11.825C5.37083 10.6611 5.27801 8.15832 5.69215 7.10867C5.97063 6.40891 6.50974 5.8698 7.21307 5.58775C8.26629 5.17004 10.7655 5.26643 11.9294 5.26643C13.0932 5.26643 15.596 5.17361 16.6456 5.58775C17.3454 5.86623 17.8845 6.40534 18.1665 7.10867C18.5843 8.16189 18.4879 10.6611 18.4879 11.825C18.4879 12.9888 18.5843 15.4916 18.1665 16.5412Z" fill="currentColor" />
                              </svg>
                          </a>
                      </div>
                  </div>
              </div>

              <div class="mt-8 lg:w-1/2 lg:mx-6">
                  <div class="w-full px-8 py-10 mx-auto overflow-hidden bg-white shadow-2xl rounded-xl dark:bg-red-900 lg:max-w-xl">
                      <h1 class="text-xl font-medium text-red-700 dark:text-gray-200">Contact form</h1>

                      <p class="mt-2 text-red-500 dark:text-red-400">
                          Ask us everything and we would love
                          to hear from you
                      </p>

                      <form class="mt-6">
                          <div class="flex-1">
                              <label class="block mb-2 text-sm text-red-600 dark:text-gray-200">Full Name</label>
                              <input type="text" placeholder="John Doe" class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-50 dark:text-gray-300 dark:border-gray-600 focus:border-red-400 focus:ring-red-300 focus:ring-opacity-40 dark:focus:border-red-300 focus:outline-none focus:ring" />
                          </div>

                          <div class="flex-1 mt-6">
                              <label class="block mb-2 text-sm text-red-600 dark:text-gray-200">Email address</label>
                              <input type="email" placeholder="johndoe@example.com" class="block w-full px-5 py-3 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-50 dark:text-gray-300 dark:border-gray-600 focus:border-red-400 focus:ring-red-300 focus:ring-opacity-40 dark:focus:border-red-300 focus:outline-none focus:ring" />
                          </div>

                          <div class="w-full mt-6">
                              <label class="block mb-2 text-sm text-red-600 dark:text-gray-200">Message</label>
                              <textarea class="block w-full h-32 px-5 py-3 mt-2 text-gray-700 placeholder-gray-400 bg-white border border-gray-200 rounded-md md:h-48 dark:bg-gray-50 dark:text-gray-300 dark:border-gray-600 focus:border-red-400 focus:ring-red-300 focus:ring-opacity-40 dark:focus:border-red-300 focus:outline-none focus:ring" placeholder="Message"></textarea>
                          </div>

                          <button class="w-full px-6 py-3 mt-6 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:ring focus:ring-red-400 focus:ring-opacity-50">
                              get in touch
                          </button>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>


<script>
  document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.question-btn');

    buttons.forEach(button => {
      button.addEventListener('click', function() {
        const targetId = this.getAttribute('data-toggle');
        const target = document.getElementById(targetId);
        const isExpanded = target.style.display === 'block';

        if (isExpanded) {
          target.style.display = 'none';
          this.querySelector('svg').classList.remove('rotate-180');
        } else {
          target.style.display = 'block';
          this.querySelector('svg').classList.add('rotate-180');
        }
      });
    });
  });
</script>


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

@endsection
