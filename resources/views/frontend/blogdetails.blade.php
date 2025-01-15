@extends('components.main')

@section('content')
    <style>
        :root {
            --card-transition: 0.6s cubic-bezier(0.23, 1, 0.32, 1);
            --card-depth: 60px;
            --primary-color: #ff4444;
            --hover-color: #cc0000;
        }

        /* Enhanced 3D Effects */
        .blog-detail-card {
            transform-style: preserve-3d;
            perspective: 1500px;
            transition: var(--card-transition);
            position: relative;
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .blog-detail-card:hover {
            transform: translateY(-15px) rotateX(10deg) rotateY(10deg);
            box-shadow: 
                0 30px 60px rgba(0, 0, 0, 0.1),
                0 15px 30px rgba(0, 0, 0, 0.07);
        }

        .blog-detail-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(
                45deg, 
                rgba(255, 255, 255, 0),
                rgba(255, 255, 255, 0.5),
                rgba(255, 255, 255, 0)
            );
            transform: translateZ(calc(var(--card-depth) * -1));
            transition: var(--card-transition);
            pointer-events: none;
            border-radius: inherit;
        }

        .card-image {
            transform: translateZ(25px);
            box-shadow: 
                0 20px 40px rgba(0, 0, 0, 0.2),
                0 15px 20px rgba(0, 0, 0, 0.1);
            transition: var(--card-transition);
            position: relative;
            overflow: hidden;
        }

        .card-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(
                to bottom,
                transparent 0%,
                rgba(0, 0, 0, 0.2) 100%
            );
        }

        .card-image img {
            transition: transform 0.8s ease;
        }

        .blog-detail-card:hover .card-image img {
            transform: scale(1.1);
        }

        .card-title {
            transform: translateZ(35px);
            transition: var(--card-transition);
            position: relative;
        }

        .card-title::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary-color);
            transform: scaleX(0);
            transition: transform 0.3s ease;
            transform-origin: left;
        }

        .blog-detail-card:hover .card-title::after {
            transform: scaleX(1);
        }

        .card-description {
            transform: translateZ(30px);
            transition: var(--card-transition);
            line-height: 1.6;
        }

        .category-badge {
            transform: translateZ(40px);
            transition: var(--card-transition);
            background: linear-gradient(135deg, #666, #444);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .read-more-btn {
            display: inline-block;
            background: var(--primary-color);
            color: white;
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            border-radius: 25px;
            margin-top: 15px;
            transition: all 0.3s ease;
            transform: translateZ(35px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .read-more-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent
            );
            transition: 0.5s;
        }

        .read-more-btn:hover {
            background: var(--hover-color);
            transform: translateZ(35px) translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .read-more-btn:hover::before {
            left: 100%;
        }

        /* Page Background Enhancement */
        .page-background {
            background: linear-gradient(135deg, #f5f7fa 0%, #e8ecf1 100%);
            min-height: 100vh;
            position: relative;
            overflow: hidden;
        }

        .page-background::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 50% 50%, rgba(255,255,255,0.8) 0%, transparent 80%);
            pointer-events: none;
        }
    </style>

    <div class="page-background mt-10">
        <!-- Blog Detail Hero Section -->
        <div class="py-24">
            <div class="container mx-auto px-6 text-center">
                <h1 class="text-6xl font-bold text-gray-900 mb-6">Blog Title</h1>
                <p class="text-xl text-gray-600 transform translate-z-10 mt-4">Subtitle or Blog Summary</p>
            </div>
        </div>

        <!-- Blog Content -->
        <div class="container mx-auto px-6 py-8">
            <div class="blog-detail-card rounded-xl overflow-hidden">
                <div class="card-content">
                    <div class="relative">
                        <img src="{{ asset('assets/img/blog-detail.jpg') }}" class="card-image w-full h-96 object-cover">
                    </div>
                    <div class="p-8">
                        <h3 class="card-title text-2xl font-bold text-gray-900 mb-4">
                            Blog Post Title Here
                        </h3>
                        <p class="card-description text-gray-600 mb-4">
                            Full blog content goes here. This can be a detailed explanation of the topic with additional sections, images, and more. Each paragraph can be wrapped in individual elements for styling and structure.
                        </p>
                        <div class="flex items-center justify-between mt-6">
                            <span class="text-sm text-gray-500 font-medium">Published on January 15, 2025</span>
                            <span class="text-sm text-gray-500 font-medium">5 min read</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Comment Section (optional) -->
        <div class="container mx-auto px-6 py-8">
            <h3 class="text-3xl font-semibold text-gray-900 mb-6">Comments</h3>
            <div class="comment-section">
                <div class="comment bg-gray-100 p-6 mb-4 rounded-lg">
                    <p class="text-sm text-gray-500">John Doe - January 15, 2025</p>
                    <p class="text-gray-800">Great blog! I learned a lot from this post, especially the section about modern technology trends.</p>
                </div>
                <!-- Add more comments here -->
            </div>
        </div>
    </div>
@endsection
