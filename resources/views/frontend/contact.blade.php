@extends('components.main')

@section('content')
<style>
    /* General Section Styling */
    .bg-section {
        background: linear-gradient(135deg, #F3F4F6, #E5E7EB);
        padding: 50px 0;
        position: relative;
        overflow: hidden;
    }

    .bg-section::before,
    .bg-section::after {
        content: '';
        position: absolute;
        background: #F87171; /* Light Red Accent */
        border-radius: 50%;
        filter: blur(100px);
    }

    .bg-section::before {
        width: 200px;
        height: 200px;
        top: -50px;
        left: 20%;
    }

    .bg-section::after {
        width: 300px;
        height: 300px;
        bottom: -80px;
        right: 10%;
    }

    /* Perfect Circle Class for All Circles */
    .circle {
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #F87171, #EF4444);
        color: white;
        box-shadow: 0 5px 15px rgba(239, 68, 68, 0.2);
        font-size: 24px; /* Adjusted for icons */
    }

    /* Section Header */
    .section-header {
        font-size: 2rem;
        font-weight: bold;
        color: #1F2937; /* Dark Gray */
        margin-bottom: 20px;
        text-align: center;
    }

    .section-divider {
        width: 60px;
        height: 4px;
        margin: 0 auto 20px;
        background: linear-gradient(90deg, #EF4444, #F87171);
        border-radius: 2px;
    }

    /* Contact Details */
    .contact-item {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 15px;
    }

    .contact-item-icon {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 24px;
    }

    .contact-item-icon .material-icons {
        font-size: 24px; /* Ensure icon size fits the circle */
    }

    /* Contact Item Text */
    .contact-item-text {
        color: #4B5563; /* Gray */
    }

    .contact-item-text a {
        color: #EF4444;
        text-decoration: none;
    }

    .contact-item-text a:hover {
        text-decoration: underline;
    }

    /* Form Styling */
    .form-input {
        background: #F9FAFB;
        border: 2px solid #D1D5DB;
        padding: 12px;
        font-size: 1rem;
        border-radius: 8px;
        transition: all 0.3s;
    }

    .form-input:focus {
        border-color: #EF4444;
        box-shadow: 0 0 10px rgba(239, 68, 68, 0.3);
    }

    .form-button {
        background: linear-gradient(135deg, #EF4444, #DC2626);
        color: white;
        padding: 12px 20px;
        border-radius: 8px;
        font-size: 1rem;
        font-weight: bold;
        transition: all 0.3s;
    }

    .form-button:hover {
        background: linear-gradient(135deg, #DC2626, #B91C1C);
        box-shadow: 0 10px 20px rgba(239, 68, 68, 0.3);
    }

    /* Responsive Grid */
    .grid-cols-responsive {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
    }

    @media (min-width: 1024px) {
        .grid-cols-responsive {
            grid-template-columns: repeat(2, 1fr);
        }
    }
</style>

<div class="bg-section mt-10">
    <!-- Hero Section -->
    <div class="max-w-7xl mx-auto px-6 text-center mb-16">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
            Contact <span class="text-red-600">Us</span>
        </h1>
        <p class="text-gray-600 text-lg">We’re here to help. Reach out to us anytime!</p>
    </div>

    <!-- Contact Details and Form -->
    <div class="max-w-7xl mx-auto px-6 grid-cols-responsive">
        <!-- Contact Details -->
        <div class="p-8 bg-white rounded-3xl shadow-lg">
            <h2 class="section-header">Get in Touch</h2>
            <div class="section-divider"></div>
            <div class="contact-item">
                <div class="contact-item-icon circle">
                    <span class="material-icons">location_on</span>
                </div>
                <div class="contact-item-text">
                    73 Basement, Ekta Enclave Society, Lakhanpur, Khyora, Kanpur, Uttar Pradesh 208024
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-item-icon circle">
                    <span class="material-icons">call</span>
                </div>
                <div class="contact-item-text">
                    +91 77538 00444
                </div>
            </div>
            <div class="contact-item">
                <div class="contact-item-icon circle">
                    <span class="material-icons">email</span>
                </div>
                <div class="contact-item-text">
                    <a href="mailto:realvictorygroups@gmail.com">realvictorygroups@gmail.com</a>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="p-8 bg-white rounded-3xl shadow-lg">
            <h2 class="section-header">Send Us a Message</h2>
            <div class="section-divider"></div>
            <form action="/contact" method="POST" class="space-y-6">
                @csrf
                <div>
                    <label for="name" class="block text-gray-700 mb-2">Your Name</label>
                    <input type="text" name="name" id="name" class="form-input w-full" placeholder="John Doe" required>
                </div>
                <div>
                    <label for="email" class="block text-gray-700 mb-2">Email Address</label>
                    <input type="email" name="email" id="email" class="form-input w-full" placeholder="you@example.com"
                        required>
                </div>
                <div>
                    <label for="phone" class="block text-gray-700 mb-2">Phone Number</label>
                    <input type="tel" name="phone" id="phone" class="form-input w-full"
                        placeholder="+91 12345 67890" required>
                </div>
                <div>
                    <label for="message" class="block text-gray-700 mb-2">Message</label>
                    <textarea name="message" id="message" class="form-input w-full" placeholder="Write your message here..."
                        rows="5" required></textarea>
                </div>
                <button type="submit" class="form-button w-full">
                    Send Message
                </button>
            </form>
        </div>
    </div>

    <!-- Google Map -->
    <div class="max-w-7xl mx-auto px-6 mt-16">
        <h2 class="section-header text-center">Find Us</h2>
        <div class="section-divider"></div>
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3562.1437049696136!2d80.33212041551895!3d26.493087982866265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c38a86e511899%3A0x25f5ae20653f3fd!2sEkta%20Enclave%20Society!5e0!3m2!1sen!2sin!4v1619653915663!5m2!1sen!2sin"
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>
    </div>
</div>
@endsection
