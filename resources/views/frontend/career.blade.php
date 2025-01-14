@extends('components.main')

@section('content')
<div class="min-h-screen bg-gradient-to-b from-gray-50 to-gray-100 py-12">
    <div class="container mx-auto max-w-7xl px-6 flex flex-col items-center">
        <!-- Page Title -->
        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-12">Career Opportunities at Real Victory Groups</h2>

        <!-- Top Bar Section -->
        <div class="w-full bg-white bg-opacity-95 rounded-xl shadow-lg p-8 backdrop-blur-sm border border-white border-opacity-20 mb-12">
            <div class="career-header text-center">
                <h1 class="text-4xl font-extrabold text-transparent bg-gradient-to-r from-red-500 to-red-700 bg-clip-text text-shadow-lg mb-2">Find Your Next Job</h1>
                <p class="text-lg text-gray-600">Join our team at Real Victory Groups</p>
            </div>

            <div class=" mt-8 space-x-6">
                <input type="text" class="w-3/12 p-4 rounded-xl border-2 border-opacity-10 bg-opacity-90 text-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition-all shadow-lg" placeholder="Search jobs...">

                <div class="flex gap-8 space-x-4">
                    <!-- Location Filter -->
                    <div class="filter-section">
                        <label class="block text-gray-800 font-semibold mb-2">Location</label>
                        <select class="w-36 p-4 rounded-xl border-2 border-opacity-10 bg-opacity-90 text-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition-all cursor-pointer">
                            <option value="">All Locations</option>
                            <option value="Remote">Remote</option>
                            <option value="New York">New York, NY</option>
                            <option value="London">London, UK</option>
                        </select>
                    </div>

                    <!-- Job Type Filter -->
                    <div class="filter-section">
                        <label class="block text-gray-800 font-semibold mb-2">Job Type</label>
                        <select class="w-36 p-4 rounded-xl border-2 border-opacity-10 bg-opacity-90 text-lg focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition-all cursor-pointer">
                            <option value="">All Job Types</option>
                            <option value="Full-Time">Full-Time</option>
                            <option value="Part-Time">Part-Time</option>
                            <option value="Internship">Internship</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Job List Section -->
        <div class="job-list grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-10 w-full">
            <!-- Job Card 1 -->
            <div class="job-card p-8 rounded-xl bg-white bg-opacity-95 shadow-lg transform hover:translate-y-[-15px] hover:shadow-2xl transition-all">
                <div class="job-card-header text-2xl font-semibold text-red-500 mb-4">Software Engineer</div>
                <div class="job-card-body text-lg text-gray-600 mb-6">
                    <p>We are looking for a talented and self-driven Software Engineer to join our dynamic tech team. As a Software Engineer, you will be responsible for designing, coding, and testing new features.</p>
                </div>
                <div class="job-card-footer flex justify-between items-center">
                    <span class="location-badge bg-red-100 text-red-500 py-2 px-4 rounded-full text-sm font-medium">Remote</span>
                    <a href="#" class="apply-button py-3 px-8 rounded-full bg-gradient-to-r from-red-500 to-red-700 text-white font-semibold transition-all hover:translate-z-10 hover:shadow-xl">Apply Now</a>
                </div>
            </div>

            <!-- Job Card 2 -->
            <div class="job-card p-8 rounded-xl bg-white bg-opacity-95 shadow-lg transform hover:translate-y-[-15px] hover:shadow-2xl transition-all">
                <div class="job-card-header text-2xl font-semibold text-red-500 mb-4">Graphic Designer</div>
                <div class="job-card-body text-lg text-gray-600 mb-6">
                    <p>We are seeking a creative and innovative Graphic Designer to join our marketing team. You will be responsible for designing visually engaging graphics for digital and print media.</p>
                </div>
                <div class="job-card-footer flex justify-between items-center">
                    <span class="location-badge bg-red-100 text-red-500 py-2 px-4 rounded-full text-sm font-medium">New York, NY</span>
                    <a href="#" class="apply-button py-3 px-8 rounded-full bg-gradient-to-r from-red-500 to-red-700 text-white font-semibold transition-all hover:translate-z-10 hover:shadow-xl">Apply Now</a>
                </div>
            </div>

            <!-- Job Card 3 -->
            <div class="job-card p-8 rounded-xl bg-white bg-opacity-95 shadow-lg transform hover:translate-y-[-15px] hover:shadow-2xl transition-all">
                <div class="job-card-header text-2xl font-semibold text-red-500 mb-4">Marketing Manager</div>
                <div class="job-card-body text-lg text-gray-600 mb-6">
                    <p>We are looking for a highly motivated and experienced Marketing Manager to oversee our marketing campaigns and strategies. This position requires expertise in digital marketing, branding, and analytics.</p>
                </div>
                <div class="job-card-footer flex justify-between items-center">
                    <span class="location-badge bg-red-100 text-red-500 py-2 px-4 rounded-full text-sm font-medium">Remote</span>
                    <a href="#" class="apply-button py-3 px-8 rounded-full bg-gradient-to-r from-red-500 to-red-700 text-white font-semibold transition-all hover:translate-z-10 hover:shadow-xl">Apply Now</a>
                </div>
            </div>

            <!-- Job Card 4 -->
            <div class="job-card p-8 rounded-xl bg-white bg-opacity-95 shadow-lg transform hover:translate-y-[-15px] hover:shadow-2xl transition-all">
                <div class="job-card-header text-2xl font-semibold text-red-500 mb-4">HR Specialist</div>
                <div class="job-card-body text-lg text-gray-600 mb-6">
                    <p>Join our HR team as a specialist. You will be responsible for talent acquisition, onboarding new hires, and ensuring a smooth employee experience within the company.</p>
                </div>
                <div class="job-card-footer flex justify-between items-center">
                    <span class="location-badge bg-red-100 text-red-500 py-2 px-4 rounded-full text-sm font-medium">London, UK</span>
                    <a href="#" class="apply-button py-3 px-8 rounded-full bg-gradient-to-r from-red-500 to-red-700 text-white font-semibold transition-all hover:translate-z-10 hover:shadow-xl">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
