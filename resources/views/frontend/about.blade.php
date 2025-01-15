@extends('components.main')

@section('content')
    <style>
        /* Global Styles */
        h1 {
            text-align: center;
            margin-bottom: 3rem;
            color: #333;
            font-size: 3rem;
            font-weight: bold;
            animation: titlePulse 3s ease-in-out infinite;
        }

        h2 {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 1rem;
        }

        p {
            color: #666;
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Animations */
        @keyframes titlePulse {
            0%, 100% {
                transform: scale(1) rotateX(0);
                text-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            }
            50% {
                transform: scale(1.05) rotateX(5deg);
                text-shadow: 0 0 40px rgba(0, 0, 0, 0.8);
            }
        }

        /* Background and Container Styles */
        .bg-gray-100 {
            background-color: #f8f9fa;
        }

        .section-title {
            margin-bottom: 4rem;
        }

        /* Card Styles */
        .mission-card, .team-card, .achievement-card {
            transform-style: preserve-3d;
            transition: all 0.5s ease;
            background: #fff;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .mission-card:hover, .team-card:hover, .achievement-card:hover {
            transform: translateY(-10px) rotateX(10deg) rotateY(10deg);
            box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
        }

        /* Team Card Image */
        .team-card img {
            border-radius: 10px;
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        /* Team Info */
        .team-card .team-info {
            text-align: center;
            margin-top: 1rem;
        }

        .team-card .team-info h3 {
            font-size: 1.2rem;
            color: #333;
        }

        .team-card .team-info p {
            color: #777;
        }

        /* Post Card Styling */
        .post-card {
            display: flex;
            gap: 2rem;
            margin-bottom: 2rem;
            border-radius: 10px;
            background: #fff;
            padding: 2rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .post-card .post-content {
            flex: 1;
        }

        .post-card .post-image {
            flex: 1;
        }

        .slider img {
            width: 100%;
            border-radius: 10px;
            object-fit: cover;
        }

        .slider {
            display: flex;
            gap: 1rem;
            overflow-x: scroll;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }

            .mission-card, .team-card, .achievement-card {
                padding: 1.5rem;
            }

            .team-card img {
                height: 200px;
            }

            .post-card {
                flex-direction: column;
                gap: 1rem;
            }

            .slider {
                flex-direction: column;
                gap: 0.5rem;
            }
        }
    </style>

    <div class="bg-gray-100 py-16 mt-10">
        <!-- Hero Section -->
        <div class="container mx-auto px-6 lg:px-16 text-center">
            <h1 class="section-title">About Us</h1>
            <p class="text-lg text-gray-700">We are dedicated to making a difference. Learn more about our mission, vision, and values.</p>
        </div>

        <!-- Featured Post Section -->
        <div class="posts-page">
            <div class="container mx-auto px-6 lg:px-16">
                <h2 class="text-2xl font-bold text-center mb-6 text-gray-600">Featured Post</h2>
                <div class="post-card">
                    <div class="post-content">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">The Future of Fashion</h3>
                        <p class="text-gray-600 mb-4">Discover the latest trends for the season and how fashion is evolving with sustainability at its core.</p>
                        <p class="text-gray-600 mb-4">Fashion is more than just clothes; it’s a reflection of the culture, technology, and environment we live in. Stay ahead with the most stylish and sustainable trends that are taking over the industry.</p>
                       <a href="#" class="inline-block px-6 py-2 bg-red-600 text-white rounded-full hover:bg-red-700 transition-colors">Read More</a>

                    </div>
                    <div class="post-image">
                        <div class="slider">
                            <img src="{{ asset('assets/img/about.png') }}" alt="Post Image 1">
                            <img src="{{ asset('assets/img/attendence.jpg') }}" alt="Post Image 2">
                            <img src="{{ asset('assets/img/calling.jpg') }}" alt="Post Image 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mission, Vision, and Values Section -->
        <div class="container mx-auto px-6 lg:px-16 mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Mission Card -->
            <div class="mission-card">
                <h2 class="text-2xl font-bold text-black mb-4">Our Mission</h2>
                <p>We are committed to delivering innovative solutions that enhance the lives of our clients and contribute to the betterment of society.</p>
            </div>

            <!-- Vision Card -->
            <div class="mission-card">
                <h2 class="text-2xl font-bold text-black mb-4">Our Vision</h2>
                <p>To be a global leader in providing groundbreaking solutions that challenge the status quo and drive positive change in the world.</p>
            </div>

            <!-- Values Card -->
            <div class="mission-card">
                <h2 class="text-2xl font-bold text-black mb-4">Our Values</h2>
                <p>We value integrity, collaboration, and excellence, ensuring we uphold the highest standards in all that we do.</p>
            </div>
        </div>

        <!-- Team Section -->
        <div class="container mx-auto px-6 lg:px-16 mt-16">
            <h2 class="text-3xl font-bold text-center text-black mb-12">Meet Our Leadership Team</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Cards -->
                <div class="team-card">
                    <img src="{{ asset('assets/img/about.png') }}" alt="Team Member 1">
                    <div class="team-info">
                        <h3>John Doe</h3>
                        <p>Chief Executive Officer</p>
                    </div>
                </div>

                <div class="team-card">
                    <img src="{{ asset('assets/img/about.png') }}" alt="Team Member 2">
                    <div class="team-info">
                        <h3>Jane Smith</h3>
                        <p>Chief Technology Officer</p>
                    </div>
                </div>

                <div class="team-card">
                    <img src="{{ asset('assets/img/about.png') }}" alt="Team Member 3">
                    <div class="team-info">
                        <h3>Emily Johnson</h3>
                        <p>Chief Financial Officer</p>
                    </div>
                </div>

                <div class="team-card">
                    <img src="{{ asset('assets/img/about.png') }}" alt="Team Member 4">
                    <div class="team-info">
                        <h3>Chris Evans</h3>
                        <p>Chief Operating Officer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
