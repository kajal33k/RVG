@extends('components.main')

@section('content')
    <style>
        :root {
            --card-transition: 0.6s cubic-bezier(0.23, 1, 0.32, 1);
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
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.1), 0 15px 30px rgba(0, 0, 0, 0.07);
        }

        .card-image {
            transform: translateZ(25px);
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
            background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.2) 100%);
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
            background: radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.8) 0%, transparent 80%);
            pointer-events: none;
        }
    </style>

    <div class="page-background mt-10">
        <!-- Blog Detail Hero Section -->
        <div class="py-24">
            <div class="container mx-auto px-6 text-center">
                <h1 class="text-6xl font-bold text-gray-900 mb-6">Blog Post Title</h1>
                <p class="text-xl text-gray-600 mt-4">A detailed look into the world of modern technology and innovation.</p>
            </div>
        </div>

        <!-- Blog Content -->
        <div class="container mx-auto px-6 py-8">
            <div class="blog-detail-card rounded-xl overflow-hidden">
                <div class="card-content">
                    <div class="relative">
                        <img src="{{ asset('assets/img/attendence.jpg') }}" class="card-image w-full h-96 object-cover">
                    </div>
                    <div class="p-8">
                        <h3 class="card-title text-3xl font-bold text-gray-900 mb-4">
                            The Future of Technology: How Innovations Are Shaping Our World
                        </h3>
                        <p class="card-description text-gray-600 mb-6">
                            In this blog post, we explore the rapid growth of technology and how it is shaping the future of
                            various industries. From artificial intelligence to quantum computing, these innovations are
                            paving the way for a new era of possibilities. Technology continues to evolve at an
                            unprecedented rate, influencing everything from our daily lives to the global economy. Let's
                            dive deeper into these trends and what they mean for the future.
                        </p>
                        <p class="card-description text-gray-600 mb-6">
                            One of the most significant trends in recent years is the rise of AI and machine learning. These
                            technologies are revolutionizing industries such as healthcare, finance, and manufacturing. With
                            AI, we are able to process vast amounts of data, identify patterns, and make informed decisions
                            at a speed and accuracy previously impossible. In healthcare, AI is being used to predict
                            patient outcomes, analyze medical images, and personalize treatment plans.
                        </p>
                        <p class="card-description text-gray-600 mb-6">
                            Another transformative technology is blockchain. Originally known for powering cryptocurrencies
                            like Bitcoin, blockchain technology is now being used in a wide range of applications, from
                            supply chain management to secure voting systems. Its decentralized nature ensures transparency
                            and security, making it an attractive solution for businesses across various sectors.
                        </p>
                        <p class="card-description text-gray-600 mb-6">
                            As we look ahead, it's clear that technology will continue to play an essential role in shaping
                            the future. From sustainable energy solutions to advancements in space exploration, the
                            possibilities are endless. We are only at the beginning of a technological revolution, and the
                            impact it will have on society is yet to be fully realized. Stay tuned as we dive deeper into
                            these innovations and explore how they are transforming our world.
                        </p>
                        <div class="flex items-center justify-between mt-6">
                            <span class="text-sm text-gray-500 font-medium">Published on January 15, 2025</span>
                            <span class="text-sm text-gray-500 font-medium">7 min read</span>
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
                    <p class="text-gray-800">Great article! I really enjoyed reading about the potential of AI and
                        blockchain. Can't wait to see how these technologies evolve in the coming years!</p>
                </div>
                <div class="comment bg-gray-100 p-6 mb-4 rounded-lg">
                    <p class="text-sm text-gray-500">Jane Smith - January 16, 2025</p>
                    <p class="text-gray-800">The future of technology is indeed exciting! I agree with the point about how
                        AI is changing healthcare. It's amazing to think about all the lives it could save.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
