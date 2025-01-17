@extends('components.main')

@section('content')
    <div class="min-h-screen py-16 bg-gray-100 text-gray-600 mt-10">
        <div class="container mx-auto px-4 lg:px-16">
            <!-- Page Title with animation -->
            <h1 class="text-4xl md:text-6xl font-extrabold text-center mb-12 text-gray-800 animate-pulse"
                data-aos="fade-down" data-aos-duration="1200">
                Featured Post
                <div class="w-24 h-1 bg-red-500 mx-auto mt-4 rounded"></div>
            </h1>

            <!-- Post Card -->
            <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2"
                data-aos="flip-left" data-aos-duration="1000">
                <div class="flex flex-col md:flex-row">
                    <!-- Post Content -->
                    <div class="flex-1 p-8 order-2 md:order-1" data-aos="fade-right" data-aos-duration="1200">
                        <h2 class="text-2xl font-bold mb-4 text-gray-800">Latest Fashion Trends</h2>
                        <p class="text-gray-600 mb-4">Discover the hottest fashion trends for the upcoming season. From street style to haute couture.</p>
                        <p class="text-gray-600 mb-4">Fashion is ever-evolving, with new trends emerging every season. From the streets to the runway, styles are influenced by culture, technology, and even the environment.</p>
                        <p class="text-gray-600 mb-6">In this post, we dive into the latest trends that are set to dominate the fashion industry.</p>
                        <a href="#" class="inline-block px-6 py-2 bg-red-500 text-white rounded-full hover:bg-red-600 transition-colors">Read
                            More</a>
                    </div>
                    <!-- Post Image Slider -->
                    <div class="flex-1 relative overflow-hidden order-1 md:order-2" data-aos="fade-left" data-aos-duration="1200">
                        <div class="flex transition-transform duration-1000" id="imageSlider">
                            <img src="{{ asset('assets/img/about.png') }}" alt="Post Image 1" class="w-full h-full object-cover flex-shrink-0">
                            <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Post Image 2" class="w-full h-full object-cover flex-shrink-0">
                            <img src="{{ asset('assets/img/calling.jpg') }}" alt="Post Image 3" class="w-full h-full object-cover flex-shrink-0">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Services Section -->
            <div class="mt-16 text-center">
                <div class="mb-12" data-aos="fade-up" data-aos-duration="1500">
                    <h2 class="text-4xl font-bold text-gray-800">Our Services</h2>
                    <div class="w-24 h-1 bg-red-500 mx-auto mt-2 rounded"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Service Cards with Icons -->
                    <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
                        data-aos="zoom-in-up" data-aos-duration="1000">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-paint-brush text-3xl text-red-500 mr-4"></i>
                            <h3 class="text-xl font-semibold text-gray-800">Poster Designing</h3>
                        </div>
                        <p class="text-gray-600 mb-6">Explore our range of advertising and marketing packages tailored to boost your brand's visibility.</p>
                        <a href="#" class="inline-block px-6 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition-colors font-semibold">Learn
                            More</a>
                    </div>

                    <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
                        data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-desktop text-3xl text-red-500 mr-4"></i>
                            <h3 class="text-xl font-semibold text-gray-800">Website Designing</h3>
                        </div>
                        <p class="text-gray-600 mb-6">From social media campaigns to influencer partnerships, we have the perfect solutions for you.</p>
                        <a href="#" class="inline-block px-6 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition-colors font-semibold">Learn
                            More</a>
                    </div>

                    <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
                        data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-briefcase text-3xl text-red-500 mr-4"></i>
                            <h3 class="text-xl font-semibold text-gray-800">Online Business</h3>
                        </div>
                        <p class="text-gray-600 mb-6">Boost your online presence and achieve your goals with our strategic planning services.</p>
                        <a href="#" class="inline-block px-6 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition-colors font-semibold">Learn
                            More</a>
                    </div>

                    <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
                        data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="600">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-share-alt text-3xl text-red-500 mr-4"></i>
                            <h3 class="text-xl font-semibold text-gray-800">Social Media Marketing</h3>
                        </div>
                        <p class="text-gray-600 mb-6">Drive engagement and reach your audience effectively with our marketing services.</p>
                        <a href="#" class="inline-block px-6 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition-colors font-semibold">Learn
                            More</a>
                    </div>

                    <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
                        data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="800">
                        <div class="flex items-center mb-4">
                            <i class="fas fa-pencil-alt text-3xl text-red-500 mr-4"></i>
                            <h3 class="text-xl font-semibold text-gray-800">Logo Design</h3>
                        </div>
                        <p class="text-gray-600 mb-6">Create a unique identity for your brand with our professional logo designing services.</p>
                        <a href="#" class="inline-block px-6 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition-colors font-semibold">Learn
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Image Slider
        const slider = document.getElementById('imageSlider');
        let currentSlide = 0;

        function slideImages() {
            currentSlide = (currentSlide + 1) % 3;
            slider.style.transform = `translateX(-${currentSlide * 100}%)`;
        }

        setInterval(slideImages, 3000);
    </script>
@endsection
