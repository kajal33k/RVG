@extends('components.main')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-gray-50 to-gray-100 py-12 mt-10">
        <div class="container mx-auto max-w-7xl px-6">

            <h1 class="text-2xl md:text-4xl font-extrabold text-center mb-12 text-gray-800 animate-pulse">
                Career Opportunities at Real Victory Groups
                <div class="w-24 h-1 bg-red-500 mx-auto mt-4 rounded"></div>
            </h1>

            <!-- Top Bar Section -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-12">
                <div class="bg-gradient-to-r from-red-600 to-red-800 p-8 relative">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full -mr-32 -mt-32"></div>
                    <div class="relative z-10 text-white">
                        <h1 class="text-4xl md:text-5xl font-bold mb-2">Find Your Next Job</h1>
                        <p class="text-lg opacity-90">Join our team at Real Victory Groups</p>
                    </div>
                </div>

                <div class="p-6">
                    <div class="flex flex-col md:flex-row gap-4">
                        <div class="relative flex-1">
                            <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <input type="text"
                                class="w-full pl-12 pr-4 py-3 rounded-xl border-2 border-gray-100 focus:border-red-500 focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition-all"
                                placeholder="Search for jobs...">
                        </div>

                        <div class="flex flex-col sm:flex-row gap-4">
                            <div class="relative">
                                <label
                                    class="absolute -top-2 left-4 bg-white px-2 text-sm font-medium text-gray-600">Location</label>
                                <select
                                    class="w-full sm:w-44 px-4 py-3 rounded-xl border-2 border-gray-100 focus:border-red-500 focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition-all appearance-none">
                                    <option value="">All Locations</option>
                                    <option value="Remote">Remote</option>
                                    <option value="New York">New York, NY</option>
                                    <option value="London">London, UK</option>
                                </select>
                                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>

                            <div class="relative">
                                <label class="absolute -top-2 left-4 bg-white px-2 text-sm font-medium text-gray-600">Job
                                    Type</label>
                                <select
                                    class="w-full sm:w-44 px-4 py-3 rounded-xl border-2 border-gray-100 focus:border-red-500 focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition-all appearance-none">
                                    <option value="">All Types</option>
                                    <option value="Full-Time">Full-Time</option>
                                    <option value="Part-Time">Part-Time</option>
                                    <option value="Contract">Contract</option>
                                </select>
                                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>

                            <div class="relative">
                                <label class="absolute -top-2 left-4 bg-white px-2 text-sm font-medium text-gray-600">Job
                                    Type</label>
                                <select
                                    class="w-full sm:w-44 px-4 py-3 rounded-xl border-2 border-gray-100 focus:border-red-500 focus:ring-2 focus:ring-red-500 focus:ring-opacity-50 transition-all appearance-none">
                                    <option value="">All Types</option>
                                    <option value="Full-Time">Full-Time</option>
                                    <option value="Part-Time">Part-Time</option>
                                    <option value="Contract">Contract</option>
                                </select>
                                <div class="absolute inset-y-0 right-4 flex items-center pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Job Cards Grid -->
            <div class="grid lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-6">
                <!-- Software Engineer Card -->
                <div class="p-6 rounded-xl bg-white shadow-lg hover:-translate-y-2 hover:shadow-xl transition-all">
                    <h3 class="text-2xl font-semibold text-red-500 mb-3">Software Engineer</h3>
                    <p class="text-gray-600 mb-6">
                        We are looking for a talented Software Engineer to join our dynamic team. Design, code, and test new
                        features in a collaborative environment.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="bg-red-100 text-red-500 py-1.5 px-4 rounded-full text-sm font-medium">Remote</span>
                        <button onclick="openModal('Software Engineer')"
                            class="py-2 px-6 rounded-full bg-gradient-to-r from-red-500 to-red-700 text-white font-semibold hover:shadow-lg transition-all">Apply
                            Now</button>
                    </div>
                </div>

                <!-- Graphic Designer Card -->
                <div class="p-6 rounded-xl bg-white shadow-lg hover:-translate-y-2 hover:shadow-xl transition-all">
                    <h3 class="text-2xl font-semibold text-red-500 mb-3">Graphic Designer</h3>
                    <p class="text-gray-600 mb-6">
                        Join our creative team as a Graphic Designer. Create engaging visuals for digital and print media in
                        a fast-paced environment.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="bg-red-100 text-red-500 py-1.5 px-4 rounded-full text-sm font-medium">New York,
                            NY</span>
                        <button onclick="openModal('Graphic Designer')"
                            class="py-2 px-6 rounded-full bg-gradient-to-r from-red-500 to-red-700 text-white font-semibold hover:shadow-lg transition-all">Apply
                            Now</button>
                    </div>
                </div>

                <!-- Marketing Manager Card -->
                <div class="p-6 rounded-xl bg-white shadow-lg hover:-translate-y-2 hover:shadow-xl transition-all">
                    <h3 class="text-2xl font-semibold text-red-500 mb-3">Marketing Manager</h3>
                    <p class="text-gray-600 mb-6">
                        Lead our marketing initiatives as Marketing Manager. Develop and execute strategies to drive growth
                        and brand awareness.
                    </p>
                    <div class="flex justify-between items-center">
                        <span class="bg-red-100 text-red-500 py-1.5 px-4 rounded-full text-sm font-medium">Remote</span>
                        <button onclick="openModal('Marketing Manager')"
                            class="py-2 px-6 rounded-full bg-gradient-to-r from-red-500 to-red-700 text-white font-semibold hover:shadow-lg transition-all">Apply
                            Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Application Modal -->
    <div id="applicationModal"
        class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden z-50 flex items-center justify-center overflow-y-auto py-8">
        <div class="bg-white rounded-2xl w-full max-w-2xl mx-4">
            <!-- Modal Header -->
            <div class="bg-gradient-to-r from-red-600 to-red-800 p-4 rounded-t-2xl mt-48 md:mt-12">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-bold text-white" id="modalJobTitle">Apply for Position</h3>
                    <button onclick="closeModal()" class="text-white hover:text-gray-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Application Form -->
            <form id="applicationForm" class="p-6" onsubmit="submitApplication(event)">
                <input type="hidden" id="jobPosition" name="position">

                <!-- Personal Information -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">First Name *</label>
                        <input type="text" required
                            class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Last Name *</label>
                        <input type="text" required
                            class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Email *</label>
                        <input type="email" required
                            class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone *</label>
                        <input type="tel" required
                            class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500">
                    </div>
                </div>

                <!-- Experience -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Years of Experience *</label>
                    <select required
                        class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500">
                        <option value="">Select experience</option>
                        <option value="0-1">0-1 years</option>
                        <option value="1-3">1-3 years</option>
                        <option value="3-5">3-5 years</option>
                        <option value="5+">5+ years</option>
                    </select>
                </div>

                <!-- Resume Upload -->
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Resume/CV *</label>
                    <div class="mt-1 flex justify-center px-6 pt-4 pb-4 border-2 border-gray-300 border-dashed rounded-lg">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-8 w-8 text-gray-400" stroke="currentColor" fill="none"
                                viewBox="0 0 48 48">
                                <path
                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-gray-600">
                                <label for="file-upload"
                                    class="relative cursor-pointer bg-white rounded-md font-medium text-red-600 hover:text-red-500">
                                    <span>Upload a file</span>
                                    <input id="file-upload" name="file-upload" type="file" class="sr-only"
                                        accept=".pdf,.doc,.docx" required>
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-gray-500">PDF, DOC up to 10MB</p>
                        </div>
                    </div>
                </div>

                <!-- Cover Letter -->
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-1">Cover Letter</label>
                    <textarea rows="3"
                        class="w-full px-3 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-red-500 focus:border-red-500"
                        placeholder="Tell us why you're interested in this position..."></textarea>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end">
                    <button type="submit"
                        class="px-6 py-2.5 bg-gradient-to-r from-red-500 to-red-700 text-white font-semibold rounded-full hover:shadow-lg transition-all">Submit
                        Application</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openModal(position) {
            document.getElementById('applicationModal').classList.remove('hidden');
            document.getElementById('modalJobTitle').textContent = `Apply for ${position}`;
            document.getElementById('jobPosition').value = position;
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('applicationModal').classList.add('hidden');
            document.body.style.overflow = 'auto';
            document.getElementById('applicationForm').reset();
        }

        // Close modal when clicking outside
        document.getElementById('applicationModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeModal();
            }
        });

        function submitApplication(event) {
            event.preventDefault();
            const form = event.target;
            const formData = new FormData(form);

            // Simulate form submission
            setTimeout(() => {
                alert('Application submitted successfully!');
                closeModal();
            }, 1000);
        }
    </script>
@endsection
