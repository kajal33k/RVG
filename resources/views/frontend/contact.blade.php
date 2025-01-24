@extends('components.main')

@section('content')
    <div class="min-h-screen py-16 bg-gray-100 text-gray-600 mt-10 overflow-hidden">
        <!-- Hero Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center mb-16"
             data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-out-quart" data-aos-delay="200">
            <h1 class="text-4xl md:text-6xl font-extrabold text-center mb-12 text-gray-900 animate-pulse">
                Contact <span class="text-red-600">Us</span>
                <div class="w-24 h-1 bg-red-500 mx-auto mt-4 rounded"></div>
            </h1>
            <p class="text-gray-600 text-lg">We’re here to help. Reach out to us anytime!</p>
        </div>

        <!-- Contact Details and Form -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Contact Details -->
            <div class="p-8 bg-white rounded-3xl shadow-lg"
                 data-aos="fade-right" data-aos-duration="1200" data-aos-easing="ease-out-quart" data-aos-delay="300">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Get in Touch</h2>
                <div class="w-16 h-1 bg-red-500 mx-auto mt-4 mb-6 rounded"></div>

                <div class="flex items-center gap-4 mb-6">
                    <div class="w-32 h-12 rounded-full bg-red-500 flex justify-center items-center text-white">
                        <span class="material-icons">location_on</span>
                    </div>
                    <p class="text-gray-600">73 Basement, Ekta Enclave Society, Lakhanpur, Khyora, Kanpur, Uttar Pradesh 208024</p>
                </div>

                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-full bg-red-500 flex justify-center items-center text-white">
                        <span class="material-icons">call</span>
                    </div>
                    <p class="text-gray-600">+91 77538 00444</p>
                </div>

                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-full bg-red-500 flex justify-center items-center text-white">
                        <span class="material-icons">email</span>
                    </div>
                    <a href="mailto:realvictorygroups@gmail.com" class="text-red-600 hover:underline">realvictorygroups@gmail.com</a>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="p-8 bg-white rounded-3xl shadow-lg"
                 data-aos="fade-left" data-aos-duration="1200" data-aos-easing="ease-out-quart" data-aos-delay="500">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Send Us a Message</h2>
                <div class="w-16 h-1 bg-red-500 mx-auto mt-4 mb-6 rounded"></div>

                <form action="/contact" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-gray-700 mb-2">Your Name</label>
                        <input type="text" name="name" id="name"
                               class="w-full p-3 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                               placeholder="John Doe" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 mb-2">Email Address</label>
                        <input type="email" name="email" id="email"
                               class="w-full p-3 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                               placeholder="you@example.com" required>
                    </div>
                    <div>
                        <label for="phone" class="block text-gray-700 mb-2">Phone Number</label>
                        <input type="tel" name="phone" id="phone"
                               class="w-full p-3 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                               placeholder="+91 12345 67890" required>
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700 mb-2">Message</label>
                        <textarea name="message" id="message"
                                  class="w-full p-3 bg-gray-50 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                                  placeholder="Write your message here..." rows="5" required></textarea>
                    </div>
                    <button type="submit"
                            class="w-full p-3 bg-red-500 text-white font-semibold rounded-lg hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                        Send Message
                    </button>
                </form>
            </div>
        </div>

        <!-- Google Map -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 mt-16"
             data-aos="zoom-in" data-aos-duration="1500" data-aos-easing="ease-out-quart" data-aos-delay="700">
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-4">Find Us</h2>
            <div class="w-16 h-1 bg-red-500 mx-auto mt-4 mb-6 rounded"></div>
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3562.1437049696136!2d80.33212041551895!3d26.493087982866265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c38a86e511899%3A0x25f5ae20653f3fd!2sEkta%20Enclave%20Society!5e0!3m2!1sen!2sin!4v1619653915663!5m2!1sen!2sin"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
@endsection
