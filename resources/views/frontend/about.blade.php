@extends('components.main')

@section('content')
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(2deg); }
            50% { transform: translateY(-10px) rotate(-2deg); }
        }
        
        .card-3d {
            transform-style: preserve-3d;
            perspective: 1000px;
            backface-visibility: hidden;
        }
        
        .team-card:hover {
            transform: translateY(-10px) rotateX(10deg) rotateY(10deg);
            box-shadow: 
                20px 20px 60px #00000030,
                -20px -20px 60px #ffffff50;
        }
        
        .mission-card {
            transform-style: preserve-3d;
            transition: all 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            background: linear-gradient(145deg, #ffffff, #f3f3f3);
        }
        
        .mission-card:hover {
            transform: translateZ(20px) rotateX(10deg) rotateY(10deg);
            box-shadow: 
                20px 20px 60px #00000040,
                -20px -20px 60px #ffffff60;
        }
        
        .hanging-card {
            animation: float 4s ease-in-out infinite;
            box-shadow: 
                0 10px 20px rgba(0,0,0,0.3),
                0 6px 6px rgba(0,0,0,0.2);
        }
    </style>

    <div class="bg-gray-100 py-16">
        <!-- Hero Section -->
        <div class="container mx-auto px-6 lg:px-16 text-center">
            <h1 class="text-4xl font-bold text-black mb-4 transform transition-all hover:scale-105">About Us</h1>
            <p class="text-lg text-gray-700">
                Discover who we are, our mission, and what we strive to achieve every day.
            </p>
        </div>

        <!-- 3D Cards Section -->
        <div class="container mx-auto px-6 lg:px-16 mt-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Mission Card -->
            <div class="mission-card p-8 rounded-2xl">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-black mb-4">Our Mission</h2>
                    <p class="text-gray-700">
                        To provide exceptional services that improve the lives of our clients.
                    </p>
                </div>
            </div>

            <!-- Vision Card -->
            <div class="mission-card p-8 rounded-2xl">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-black mb-4">Our Vision</h2>
                    <p class="text-gray-700">
                        To lead the industry with innovation, integrity, and excellence.
                    </p>
                </div>
            </div>

            <!-- Values Card -->
            <div class="mission-card p-8 rounded-2xl">
                <div class="text-center">
                    <h2 class="text-2xl font-bold text-black mb-4">Our Values</h2>
                    <p class="text-gray-700">
                        Commitment, teamwork, and respect guide everything we do.
                    </p>
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <div class="container mx-auto px-6 lg:px-16 mt-16">
            <h2 class="text-3xl font-bold text-center text-black mb-12">Meet Our Team</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Team Cards -->
                <div class="team-card bg-white rounded-2xl shadow-xl transition-all duration-500">
                    <img class="rounded-t-2xl w-full h-64 object-cover" src="{{ asset('assets/img/team-member-1.jpg') }}" alt="Team Member 1">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-black">John Doe</h3>
                        <p class="text-gray-600">CEO</p>
                    </div>
                </div>

                <div class="team-card bg-white rounded-2xl shadow-xl transition-all duration-500">
                    <img class="rounded-t-2xl w-full h-64 object-cover" src="{{ asset('assets/img/team-member-2.jpg') }}" alt="Team Member 2">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-black">Jane Smith</h3>
                        <p class="text-gray-600">CTO</p>
                    </div>
                </div>

                <div class="team-card bg-white rounded-2xl shadow-xl transition-all duration-500">
                    <img class="rounded-t-2xl w-full h-64 object-cover" src="{{ asset('assets/img/team-member-3.jpg') }}" alt="Team Member 3">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-black">Emily Johnson</h3>
                        <p class="text-gray-600">CFO</p>
                    </div>
                </div>

                <div class="team-card bg-white rounded-2xl shadow-xl transition-all duration-500">
                    <img class="rounded-t-2xl w-full h-64 object-cover" src="{{ asset('assets/img/team-member-4.jpg') }}" alt="Team Member 4">
                    <div class="p-6 text-center">
                        <h3 class="text-xl font-bold text-black">Chris Evans</h3>
                        <p class="text-gray-600">COO</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hanging Cards Section -->
        <div class="container mx-auto px-6 lg:px-16 mt-20 grid grid-cols-1 sm:grid-cols-2 gap-8">
            <!-- Achievement Card 1 -->
            <div class="relative flex flex-col items-center">
                <div class="absolute -top-3 z-10">
                    <div class="w-6 h-6 bg-red-600 rounded-full shadow-lg"></div>
                </div>
                <div class="hanging-card w-full bg-black text-white p-8 rounded-xl">
                    <div class="text-center">
                        <h2 class="text-2xl font-bold">6+ Years of Excellence</h2>
                        <p class="mt-4 text-gray-300">Since 2018, we are serving all over India.</p>
                    </div>
                </div>
            </div>

            <!-- Achievement Card 2 -->
            <div class="relative flex flex-col items-center">
                <div class="absolute -top-3 z-10">
                    <div class="w-6 h-6 bg-red-600 rounded-full shadow-lg"></div>
                </div>
                <div class="hanging-card w-full bg-black text-white p-8 rounded-xl">
                    <div class="text-center">
                        <h2 class="text-2xl font-bold">Industry Leader</h2>
                        <p class="mt-4 text-gray-300">Serving most jewelers in India.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection