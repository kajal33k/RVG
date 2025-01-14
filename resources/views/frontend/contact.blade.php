@extends('components.main')

@section('content')
    <style>
        /* Title Styling */
        .page-title {
            font-size: 5rem;
            font-weight: bold;
            color: gray;
            text-align: center;
            text-shadow: 2px 2px 8px rgba(107, 114, 128, 0.4);
            /* Softer shadow for the title */
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.8) 0%, rgba(158, 163, 175, 0.6) 50%, rgba(75, 85, 99, 0.8) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: title-glow 3s ease-in-out infinite;
        }

        @keyframes title-glow {

            0%,
            100% {
                text-shadow: 0 0 15px rgba(75, 85, 99, 0.5), 0 0 30px rgba(158, 163, 175, 0.4);
            }

            50% {
                text-shadow: 0 0 25px rgba(75, 85, 99, 0.7), 0 0 40px rgba(158, 163, 175, 0.6);
            }
        }

        /* 3D Card Styling */
        .card-3d {
            transition: transform 0.4s, box-shadow 0.4s;
            transform-style: preserve-3d;
            border-radius: 16px;
        }

        .card-3d:hover {
            transform: translateY(-12px) translateZ(20px);
            box-shadow:
                0 30px 60px rgba(0, 0, 0, 0.15),
                0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Form Input Styling */
        .form-input {
            background: #f8fafc;
            /* Light Gray */
            border: 2px solid #D1D5DB;
            /* Subtle border */
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.05);
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .form-input:focus {
            border-color: #3B82F6;
            /* Soft Blue on focus */
            box-shadow: 0 0 8px rgba(59, 130, 246, 0.6);
        }

        /* Button Styling */
        .form-button {
            color: white;
            border-radius: 8px;
            padding: 12px 20px;
            transition: transform 0.2s, box-shadow 0.3s;
            background-color: #EF4444;
            /* Red background color */
        }

        .form-button:hover {
            background-color: #DC2626;
            /* Darker Red on hover */
            box-shadow: 0 5px 15px rgba(220, 38, 38, 0.4);
        }

        .form-button:active {
            transform: translateY(0);
        }

        /* Map Container */
        .map-container {
            height: 450px;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* Section Background Color */
        .bg-section {
            background: linear-gradient(135deg, #E5E7EB, #F3F4F6);
            /* Soft gradient for background */
            padding: 50px 0;
        }

        /* Section Header Styling */
        .section-header {
            font-size: 2rem;
            font-weight: bold;
            color: #111827;
            /* Darker Gray for contrast */
            margin-bottom: 30px;
        }

        /* Paragraph Styling */
        .section-paragraph {
            color: #4B5563;
            /* Light Gray text */
            font-size: 1.1rem;
            margin-bottom: 15px;
        }

        /* Adjustments for Mobile */
        @media (max-width: 768px) {
            .page-title {
                font-size: 3rem;
            }

            .card-3d {
                border-radius: 12px;
            }

            .form-input,
            .form-button {
                padding: 12px;
            }

            .map-container {
                height: 350px;
            }
        }
    </style>

    <div class="bg-section">
        <!-- Hero Section -->
        <div class="max-w-7xl mx-auto px-6 text-center mb-16">
            <h1 class="page-title">Contact Us</h1>
            <p class="section-paragraph">We’re here to help. Reach out to us anytime!</p>
        </div>

        <!-- Contact Details and Form -->
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Details -->
            <div class="p-8 bg-white rounded-3xl card-3d">
                <h2 class="section-header">Get in Touch</h2>
                <ul class="space-y-4">
                    <li class="section-paragraph">
                        <span class="font-bold">Address:</span> <br> 73 Basement, Ekta Enclave Society, Lakhanpur, Khyora,
                        Kanpur, Uttar Pradesh 208024
                    </li>
                    <li class="section-paragraph">
                        <span class="font-bold">Phone:</span> <br> +91 77538 00444
                    </li>
                    <li class="section-paragraph">
                        <span class="font-bold">Email:</span> <br>
                        <a href="mailto:realvictorygroups@gmail.com" class="text-red-600 hover:underline">
                            realvictorygroups@gmail.com
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Form -->
            <div class="p-8 bg-white rounded-3xl card-3d">
                <h2 class="section-header">Send Us a Message</h2>
                <form action="/contact" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="name" class="block text-gray-700 mb-2">Your Name</label>
                        <input type="text" name="name" id="name" class="form-input w-full px-4 py-3 rounded-md"
                            placeholder="John Doe" required>
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 mb-2">Email Address</label>
                        <input type="email" name="email" id="email" class="form-input w-full px-4 py-3 rounded-md"
                            placeholder="you@example.com" required>
                    </div>
                    <div>
                        <label for="message" class="block text-gray-700 mb-2">Message</label>
                        <textarea name="message" id="message" class="form-input w-full px-4 py-3 rounded-md"
                            placeholder="Write your message here..." rows="5" required></textarea>
                    </div>
                    <button type="submit" class="form-button w-full py-3">
                        Send Message
                    </button>
                </form>
            </div>
        </div>

        <!-- Google Map -->
        <div class="max-w-7xl mx-auto px-6 mt-16">
            <h2 class="section-header text-center">Find Us</h2>
            <div class="map-container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3562.1437049696136!2d80.33212041551895!3d26.493087982866265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c38a86e511899%3A0x25f5ae20653f3fd!2sEkta%20Enclave%20Society!5e0!3m2!1sen!2sin!4v1619653915663!5m2!1sen!2sin"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </div>
@endsection
