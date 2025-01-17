@extends('components.main')

@section('content')
    <div class="min-h-screen py-16 bg-gray-100 text-gray-600 mt-10" data-aos="fade-up" data-aos-duration="1500" data-aos-easing="ease-out-cubic">
        <div class="container mx-auto px-4 lg:px-16">
            <!-- Page Title with animation -->
            <h1 class="text-4xl md:text-6xl font-extrabold text-center mb-12 text-gray-900 animate-pulse" 
                data-aos="fade-down" data-aos-duration="1200" data-aos-delay="200">
                About <span class="text-red-600">Us</span>
                <div class="w-24 h-1 bg-red-500 mx-auto mt-4 rounded"></div>
                <p class="text-lg text-gray-700 mt-4">We are dedicated to making a difference. Learn more about our mission,
                    vision, and values.</p>
            </h1>

            <!-- Post Card -->
            <div class="bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2 mb-16"
                data-aos="flip-left" data-aos-duration="1200" data-aos-delay="400">
                <div class="flex flex-col md:flex-row">
                    <!-- Post Content -->
                    <div class="flex-1 p-8 order-2 md:order-1">
                        <h2 class="text-2xl font-bold mb-4 text-gray-800">Latest Fashion Trends</h2>
                        <p class="text-gray-600 mb-4">Discover the hottest fashion trends for the upcoming season. From
                            street style to haute couture.</p>
                        <p class="text-gray-600 mb-4">Fashion is ever-evolving, with new trends emerging every season. From
                            the streets to the runway, styles are influenced by culture, technology, and even the
                            environment.</p>
                        <p class="text-gray-600 mb-6">In this post, we dive into the latest trends that are set to dominate
                            the fashion industry.</p>
                        <a href="#"
                            class="inline-block px-6 py-2 bg-red-500 text-white rounded-full hover:bg-red-600 transition-colors">Read
                            More</a>
                    </div>
                    <!-- Post Image Slider -->
                    <div class="flex-1 relative overflow-hidden order-1 md:order-2">
                        <div class="flex transition-transform duration-1000" id="imageSlider">
                            <img src="{{ asset('assets/img/about.png') }}" alt="Post Image 1"
                                class="w-full h-full object-cover flex-shrink-0">
                            <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Post Image 2"
                                class="w-full h-full object-cover flex-shrink-0">
                            <img src="{{ asset('assets/img/calling.jpg') }}" alt="Post Image 3"
                                class="w-full h-full object-cover flex-shrink-0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mission, Vision, and Values Section -->
        <div class="container mx-auto px-6 lg:px-16 mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8"
            data-aos="zoom-in" data-aos-duration="1500" data-aos-easing="ease-in-out">
            <!-- Mission Card -->
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
                data-aos="fade-up" data-aos-duration="1000">
                <h2 class="text-2xl font-bold text-black mb-4">Our Mission</h2>
                <p>We are committed to delivering innovative solutions that enhance the lives of our clients and contribute
                    to the betterment of society.</p>
            </div>

            <!-- Vision Card -->
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
                data-aos="fade-up" data-aos-duration="1000">
                <h2 class="text-2xl font-bold text-black mb-4">Our Vision</h2>
                <p>To be a global leader in providing groundbreaking solutions that challenge the status quo and drive
                    positive change in the world.</p>
            </div>

            <!-- Values Card -->
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
                data-aos="fade-up" data-aos-duration="1000">
                <h2 class="text-2xl font-bold text-black mb-4">Our Values</h2>
                <p>We value integrity, collaboration, and excellence, ensuring we uphold the highest standards in all that
                    we do.</p>
            </div>
        </div>

        <!-- Team Section -->
        <div class="container mx-auto px-6 lg:px-16 mt-16" data-aos="fade-up" data-aos-duration="1500">
            <div class="mb-12">
                <h2 class="text-3xl font-bold text-center text-black">Meet Our Leadership Team</h2>
                <div class="w-24 h-1 bg-red-500 mx-auto mt-4 rounded"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Cards -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
                    data-aos="flip-up" data-aos-duration="1000">
                    <img src="{{ asset('assets/img/about.png') }}" alt="Team Member 1"
                        class="rounded-full w-32 h-32 mx-auto mb-4 object-cover">
                    <div class="text-center">
                        <h3 class="text-xl font-bold text-gray-800">John Doe</h3>
                        <p class="text-gray-600">Chief Executive Officer</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
                    data-aos="flip-up" data-aos-duration="1000">
                    <img src="{{ asset('assets/img/about.png') }}" alt="Team Member 2"
                        class="rounded-full w-32 h-32 mx-auto mb-4 object-cover">
                    <div class="text-center">
                        <h3 class="text-xl font-bold text-gray-800">Jane Smith</h3>
                        <p class="text-gray-600">Chief Technology Officer</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
                    data-aos="flip-up" data-aos-duration="1000">
                    <img src="{{ asset('assets/img/about.png') }}" alt="Team Member 3"
                        class="rounded-full w-32 h-32 mx-auto mb-4 object-cover">
                    <div class="text-center">
                        <h3 class="text-xl font-bold text-gray-800">Emily Johnson</h3>
                        <p class="text-gray-600">Chief Financial Officer</p>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
                    data-aos="flip-up" data-aos-duration="1000">
                    <img src="{{ asset('assets/img/about.png') }}" alt="Team Member 4"
                        class="rounded-full w-32 h-32 mx-auto mb-4 object-cover">
                    <div class="text-center">
                        <h3 class="text-xl font-bold text-gray-800">Chris Evans</h3>
                        <p class="text-gray-600">Chief Operating Officer</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Section for Testimonials -->
        <div class="container mx-auto px-6 lg:px-16 mt-16 bg-gray-50 py-8 rounded-xl shadow-lg" data-aos="zoom-in-up"
            data-aos-duration="1500" data-aos-delay="200">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-center text-gray-800">What Our Clients Say</h2>
                <div class="w-24 h-1 bg-red-500 mx-auto mt-4 rounded"></div>
            </div>
            <div class="flex flex-col md:flex-row justify-between gap-8">
                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up" data-aos-duration="1000">
                    <p class="text-lg text-gray-600 mb-4">"This company truly transformed our business. Their innovation and
                        dedication helped us grow beyond our expectations."</p>
                    <p class="font-bold text-gray-800">Sarah Williams</p>
                    <p class="text-gray-500">CEO, ABC Corp</p>
                </div>

                <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300"
                    data-aos="fade-up" data-aos-duration="1000">
                    <p class="text-lg text-gray-600 mb-4">"The team at this company is simply outstanding. We couldn’t have
                        asked for a better partner in our journey to success."</p>
                    <p class="font-bold text-gray-800">Michael Johnson</p>
                    <p class="text-gray-500">Marketing Director, XYZ Ltd.</p>
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
