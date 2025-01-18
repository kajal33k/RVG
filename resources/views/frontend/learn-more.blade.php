@extends('components.main')
@section('content')



    <!-- Header Section -->
  <header class="bg-white shadow mt-8"  data-aos="fade-down" data-aos-duration="1200" data-aos-delay="200">
    <div class="container mx-auto px-4 py-6 flex items-center justify-between">
      <div class="flex items-center space-x-4">
        <img src="{{asset('assets/img/logo (2).png')}}" alt="Software Logo" class="w-12 h-12 rounded-md">
        <div>
          <h1 class="text-3xl font-bold text-red-700"  data-aos="fade-down" data-aos-duration="1200" data-aos-delay="200">Software Name</h1>
          <p class="text-gray-600"  data-aos="fade-down" data-aos-duration="1200" data-aos-delay="200">Your tagline or slogan goes here</p>
        </div>
      </div>
      <button class="bg-red-600 text-white px-6 py-2 rounded-lg font-medium shadow-lg hover:bg-red-700">
        Get Started
      </button>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-red-50 py-16"  data-aos="fade-down" data-aos-duration="1200" data-aos-delay="200">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-4xl font-extrabold text-red-700">Transform the Way You Work</h2>
      <p class="mt-4 text-lg text-gray-600">
        Our software is designed to simplify your workflow, increase efficiency, and drive better results for your team.
      </p>
      <div class="mt-6">
        <a href="#features" class="bg-red-600 text-white px-6 py-3 rounded-lg shadow-lg font-medium hover:bg-red-700">
          Learn More
        </a>
        <a href="#get-started" class="ml-4 text-red-600 font-medium hover:underline border border-red-600 px-6 py-3 rounded-lg">
          Get Started Free
        </a>
      </div>
    </div>
  </section>


{{-- SOFTWARE DETAILS --}}
   
  <div class="min-h-screen bg-gray-50 flex items-center justify-center px-6 py-10"  data-aos="fade-down" data-aos-duration="1200" data-aos-delay="200">
    <div class="relative w-full max-w-6xl">
        <!-- 3D Software Detail Section -->
        <div class="bg-gray-50 p-10 rounded-3xl shadow-2xl transform perspective-3d rotate-y-2 hover:rotate-y-0 transition-transform duration-500"  data-aos="fade-down" data-aos-duration="1200" data-aos-delay="200">
            <h2 class="text-4xl md:text-5xl font-bold text-red-700 text-center mb-6">Software Details</h2>
            <p class="text-lg text-black text-center mb-8">
                Discover the cutting-edge features and capabilities of our software, designed to simplify your tasks.
            </p>

            <!-- Features in Columns -->
            <div class="grid md:grid-cols-3 gap-8"  data-aos="fade-down" data-aos-duration="1200" data-aos-delay="200">
                <!-- Feature Item 1 -->
                <div class="bg-gray-300 p-6 rounded-xl shadow-lg hover:scale-105 transform transition-transform duration-300">
                    <div class="text-center">
                        <div
                            class="bg-gradient-to-br from-red-600 via-gray-500 to-red-600 w-16 h-16 mx-auto rounded-full flex items-center justify-center shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" class="w-8 h-8 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.75 12.75L15 9l-5.25-3.75M15 15.75l-5.25 3.75" />
                            </svg>
                        </div>
                        <h3 class="text-xl text-black font-bold mt-4">Fast Performance</h3>
                        <p class="text-gray-600 mt-2">Enjoy optimized speed and performance across all tasks.</p>
                    </div>
                </div>

                <!-- Feature Item 2 -->
                <div class="bg-gray-300 p-6 rounded-xl shadow-lg hover:scale-105 transform transition-transform duration-300">
                    <div class="text-center">
                        <div
                            class="bg-gradient-to-br from-red-600 via-gray-500 to-red-600 w-16 h-16 mx-auto rounded-full flex items-center justify-center shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" class="w-8 h-8 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v3.75M12 15.25h.008v.008H12v-.008zM9.25 10.75a6 6 0 1011.32-4.08" />
                            </svg>
                        </div>
                        <h3 class="text-xl text-black font-bold mt-4">Robust Security</h3>
                        <p class="text-gray-800 mt-2">State-of-the-art security to protect your data and privacy.</p>
                    </div>
                </div>

                <!-- Feature Item 3 -->
                <div class="bg-gray-300 p-6 rounded-xl shadow-lg hover:scale-105 transform transition-transform duration-300">
                    <div class="text-center">
                        <div
                            class="bg-gradient-to-br from-red-600 via-gray-500 to-red-600 w-16 h-16 mx-auto rounded-full flex items-center justify-center shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" class="w-8 h-8 text-white">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        <h3 class="text-xl text-black font-bold mt-4">User-Friendly Interface</h3>
                        <p class="text-gray-800 mt-2">Intuitive design for a seamless user experience.</p>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="mt-10 text-center">
                <a href="#"
                    class="bg-gradient-to-r from-red-600 to-gray-600 text-white px-6 py-3 rounded-full shadow-md text-lg hover:shadow-lg transform hover:scale-105 transition-transform">
                    Learn More
                </a>
            </div>
        </div>

        <!-- Subtle Background Element -->
        <div
            class="absolute inset-0 bg-gradient-to-tr from-red-600 via-gray-500 to-red-600 opacity-30 blur-3xl transform -translate-x-6 translate-y-6 -z-10">
        </div>
    </div>
</div>


  <!-- Features Section -->
  <section id="features" class="py-16">
    <div class="container mx-auto px-4">
      <h3 class="text-3xl font-bold text-center text-red-700">Key Features</h3>
      <p class="mt-4 text-center text-gray-600">
        Discover how our software can help you achieve more.
      </p>
      <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Feature 1 -->
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
          <div class="bg-blue-100 text-red-600 w-16 h-16 mx-auto flex items-center justify-center rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 6.75L3 12l6.75 5.25M14.25 6.75L21 12l-6.75 5.25" />
            </svg>
          </div>
          <h4 class="mt-4 text-xl font-semibold text-red-700">Intuitive Design</h4>
          <p class="mt-2 text-gray-600">
            A user-friendly interface that anyone can navigate with ease.
          </p>
        </div>
        <!-- Feature 2 -->
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
          <div class="bg-green-100 text-green-600 w-16 h-16 mx-auto flex items-center justify-center rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a4 4 0 00-8 0v2a4 4 0 01-4 4v4a4 4 0 004 4h8a4 4 0 004-4v-4a4 4 0 01-4-4z" />
            </svg>
          </div>
          <h4 class="mt-4 text-xl font-semibold text-red-700">Robust Security</h4>
          <p class="mt-2 text-gray-600">
            Industry-leading encryption to protect your data.
          </p>
        </div>
        <!-- Feature 3 -->
        <div class="bg-white shadow-md rounded-lg p-6 text-center">
          <div class="bg-yellow-100 text-yellow-600 w-16 h-16 mx-auto flex items-center justify-center rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m6-6l-3 3 3 3" />
            </svg>
          </div>
          <h4 class="mt-4 text-xl font-semibold text-red-700">Seamless Integration</h4>
          <p class="mt-2 text-gray-600">
            Connect with your favorite tools and platforms effortlessly.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Benefits Section -->
  <section class="bg-gray-50 py-16" aria-label="Software Reviews">
    <div class="container mx-auto px-6 md:px-12 text-center">
      <h2 class="text-3xl font-bold text-gray-800">
        What Our Users Say
      </h2>
      <p class="mt-4 text-gray-600 text-lg">
        Hear from those who use and love our software.
      </p>
      <div class="mt-12 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Review Card 1 -->
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
          <img 
            src="{{asset('assets/img/profile.png')}}" 
            alt="User avatar" 
            class="w-20 h-20 rounded-full mb-4"
          />
          <h4 class="text-lg font-semibold text-gray-800">
            Jane Doe
          </h4>
          <p class="text-sm text-gray-600">Product Manager</p>
          <p class="mt-4 text-gray-600 text-base text-center">
            "This software has transformed the way our team works. The intuitive design and powerful features are unmatched!"
          </p>
          <div class="mt-4 flex space-x-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.285 3.951a1 1 0 00.95.69h4.088c.969 0 1.371 1.24.588 1.81l-3.301 2.399a1 1 0 00-.364 1.118l1.285 3.951c.3.921-.755 1.688-1.54 1.118l-3.301-2.399a1 1 0 00-1.175 0l-3.301 2.399c-.784.57-1.839-.197-1.54-1.118l1.285-3.951a1 1 0 00-.364-1.118L2.14 9.378c-.783-.57-.38-1.81.588-1.81h4.088a1 1 0 00.95-.69L9.049 2.927z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.285 3.951a1 1 0 00.95.69h4.088c.969 0 1.371 1.24.588 1.81l-3.301 2.399a1 1 0 00-.364 1.118l1.285 3.951c.3.921-.755 1.688-1.54 1.118l-3.301-2.399a1 1 0 00-1.175 0l-3.301 2.399c-.784.57-1.839-.197-1.54-1.118l1.285-3.951a1 1 0 00-.364-1.118L2.14 9.378c-.783-.57-.38-1.81.588-1.81h4.088a1 1 0 00.95-.69L9.049 2.927z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.285 3.951a1 1 0 00.95.69h4.088c.969 0 1.371 1.24.588 1.81l-3.301 2.399a1 1 0 00-.364 1.118l1.285 3.951c.3.921-.755 1.688-1.54 1.118l-3.301-2.399a1 1 0 00-1.175 0l-3.301 2.399c-.784.57-1.839-.197-1.54-1.118l1.285-3.951a1 1 0 00-.364-1.118L2.14 9.378c-.783-.57-.38-1.81.588-1.81h4.088a1 1 0 00.95-.69L9.049 2.927z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.285 3.951a1 1 0 00.95.69h4.088c.969 0 1.371 1.24.588 1.81l-3.301 2.399a1 1 0 00-.364 1.118l1.285 3.951c.3.921-.755 1.688-1.54 1.118l-3.301-2.399a1 1 0 00-1.175 0l-3.301 2.399c-.784.57-1.839-.197-1.54-1.118l1.285-3.951a1 1 0 00-.364-1.118L2.14 9.378c-.783-.57-.38-1.81.588-1.81h4.088a1 1 0 00.95-.69L9.049 2.927z" />
              </svg>
            <!-- Repeat the star icon 4 more times -->
          </div>
        </div>
  
        <!-- Review Card 2 -->
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
          <img 
            src="{{asset('assets/img/profile.png')}}" 
            alt="User avatar" 
            class="w-20 h-20 rounded-full mb-4"
          />
          <h4 class="text-lg font-semibold text-gray-800">
            John Smith
          </h4>
          <p class="text-sm text-gray-600">Software Engineer</p>
          <p class="mt-4 text-gray-600 text-base text-center">
            "Highly recommended! The seamless integration and exceptional performance make this a must-have tool."
          </p>
          <div class="mt-4 flex space-x-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.285 3.951a1 1 0 00.95.69h4.088c.969 0 1.371 1.24.588 1.81l-3.301 2.399a1 1 0 00-.364 1.118l1.285 3.951c.3.921-.755 1.688-1.54 1.118l-3.301-2.399a1 1 0 00-1.175 0l-3.301 2.399c-.784.57-1.839-.197-1.54-1.118l1.285-3.951a1 1 0 00-.364-1.118L2.14 9.378c-.783-.57-.38-1.81.588-1.81h4.088a1 1 0 00.95-.69L9.049 2.927z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.285 3.951a1 1 0 00.95.69h4.088c.969 0 1.371 1.24.588 1.81l-3.301 2.399a1 1 0 00-.364 1.118l1.285 3.951c.3.921-.755 1.688-1.54 1.118l-3.301-2.399a1 1 0 00-1.175 0l-3.301 2.399c-.784.57-1.839-.197-1.54-1.118l1.285-3.951a1 1 0 00-.364-1.118L2.14 9.378c-.783-.57-.38-1.81.588-1.81h4.088a1 1 0 00.95-.69L9.049 2.927z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.285 3.951a1 1 0 00.95.69h4.088c.969 0 1.371 1.24.588 1.81l-3.301 2.399a1 1 0 00-.364 1.118l1.285 3.951c.3.921-.755 1.688-1.54 1.118l-3.301-2.399a1 1 0 00-1.175 0l-3.301 2.399c-.784.57-1.839-.197-1.54-1.118l1.285-3.951a1 1 0 00-.364-1.118L2.14 9.378c-.783-.57-.38-1.81.588-1.81h4.088a1 1 0 00.95-.69L9.049 2.927z" />
              </svg>
            <!-- Repeat the star icon 4 more times -->
          </div>
        </div>
  
        <!-- Review Card 3 -->
        <div class="bg-white shadow-md rounded-lg p-6 flex flex-col items-center">
          <img 
            src="{{asset('assets/img/profile.png')}}" 
            alt="User avatar" 
            class="w-20 h-20 rounded-full mb-4"
          />
          <h4 class="text-lg font-semibold text-gray-800">
            Alex Johnson
          </h4>
          <p class="text-sm text-gray-600">Freelancer</p>
          <p class="mt-4 text-gray-600 text-base text-center">
            "Easy to use, feature-packed, and a fantastic support team. This software exceeded my expectations!"
          </p>
          <div class="mt-4 flex space-x-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.285 3.951a1 1 0 00.95.69h4.088c.969 0 1.371 1.24.588 1.81l-3.301 2.399a1 1 0 00-.364 1.118l1.285 3.951c.3.921-.755 1.688-1.54 1.118l-3.301-2.399a1 1 0 00-1.175 0l-3.301 2.399c-.784.57-1.839-.197-1.54-1.118l1.285-3.951a1 1 0 00-.364-1.118L2.14 9.378c-.783-.57-.38-1.81.588-1.81h4.088a1 1 0 00.95-.69L9.049 2.927z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.285 3.951a1 1 0 00.95.69h4.088c.969 0 1.371 1.24.588 1.81l-3.301 2.399a1 1 0 00-.364 1.118l1.285 3.951c.3.921-.755 1.688-1.54 1.118l-3.301-2.399a1 1 0 00-1.175 0l-3.301 2.399c-.784.57-1.839-.197-1.54-1.118l1.285-3.951a1 1 0 00-.364-1.118L2.14 9.378c-.783-.57-.38-1.81.588-1.81h4.088a1 1 0 00.95-.69L9.049 2.927z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.285 3.951a1 1 0 00.95.69h4.088c.969 0 1.371 1.24.588 1.81l-3.301 2.399a1 1 0 00-.364 1.118l1.285 3.951c.3.921-.755 1.688-1.54 1.118l-3.301-2.399a1 1 0 00-1.175 0l-3.301 2.399c-.784.57-1.839-.197-1.54-1.118l1.285-3.951a1 1 0 00-.364-1.118L2.14 9.378c-.783-.57-.38-1.81.588-1.81h4.088a1 1 0 00.95-.69L9.049 2.927z" />
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.285 3.951a1 1 0 00.95.69h4.088c.969 0 1.371 1.24.588 1.81l-3.301 2.399a1 1 0 00-.364 1.118l1.285 3.951c.3.921-.755 1.688-1.54 1.118l-3.301-2.399a1 1 0 00-1.175 0l-3.301 2.399c-.784.57-1.839-.197-1.54-1.118l1.285-3.951a1 1 0 00-.364-1.118L2.14 9.378c-.783-.57-.38-1.81.588-1.81h4.088a1 1 0 00.95-.69L9.049 2.927z" />
              </svg>
            <!-- Repeat the star icon 4 more times -->
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <div class="min-h-screen bg-gray-50 flex items-center justify-center px-6 py-10">
    <div class="w-full max-w-4xl">
        <div class="bg-gray-50 p-8 rounded-3xl shadow-xl">
            <!-- Section Heading -->
            <h2 class="text-4xl font-bold text-red-600 text-center mb-6">Frequently Asked Questions</h2>
            <p class="text-lg text-gray-500 text-center mb-8">
                Find answers to common questions about our software and services.
            </p>

            <!-- FAQ Items -->
            <div class="space-y-4">
                <!-- Question 1 -->
                <div class="bg-gray-50 rounded-lg shadow-md">
                    <button
                        class="faq-toggle flex items-center justify-between w-full px-5 py-4 text-lg font-medium text-black hover:text-red-400 focus:outline-none"
                        data-target="#faq1">
                        <span>What is the purpose of this software?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6 text-red-500 transition-transform">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq1" class="faq-answer px-5 pb-4 text-black hidden">
                        This software is designed to streamline workflows, improve productivity, and enhance user experiences across multiple industries.
                    </div>
                </div>

                <!-- Question 2 -->
                <div class="bg-gray-50 rounded-lg shadow-md">
                    <button
                        class="faq-toggle flex items-center justify-between w-full px-5 py-4 text-lg font-medium text-black hover:text-red-400 focus:outline-none"
                        data-target="#faq2">
                        <span>What platforms is the software compatible with?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6 text-red-500 transition-transform">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq2" class="faq-answer px-5 pb-4 text-black hidden">
                        Our software supports Windows, macOS, Linux, and mobile platforms including iOS and Android.
                    </div>
                </div>

                <!-- Question 3 -->
                <div class="bg-gray-50 rounded-lg shadow-md">
                    <button
                        class="faq-toggle flex items-center justify-between w-full px-5 py-4 text-lg font-medium text-black hover:text-red-400 focus:outline-none"
                        data-target="#faq3">
                        <span>Is technical support included?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6 text-red-500 transition-transform">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq3" class="faq-answer px-5 pb-4 text-black hidden">
                        Yes, we offer 24/7 technical support through email, chat, and phone to ensure uninterrupted service.
                    </div>
                </div>

                <!-- Question 4 -->
                <div class="bg-gray-50 rounded-lg shadow-md">
                    <button
                        class="faq-toggle flex items-center justify-between w-full px-5 py-4 text-lg font-medium text-black hover:text-red-400 focus:outline-none"
                        data-target="#faq4">
                        <span>What security measures does the software include?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-6 h-6 text-red-500 transition-transform">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div id="faq4" class="faq-answer px-5 pb-4 text-black hidden">
                        The software employs advanced encryption, firewall protections, and multi-factor authentication to secure your data.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
  document.querySelectorAll('.faq-toggle').forEach(button => {
      button.addEventListener('click', () => {
          const target = document.querySelector(button.dataset.target);

          // Toggle visibility of the answer
          if (target.classList.contains('hidden')) {
              target.classList.remove('hidden');
              button.querySelector('svg').classList.add('rotate-180');
          } else {
              target.classList.add('hidden');
              button.querySelector('svg').classList.remove('rotate-180');
          }
      });
  });
</script>




@endsection