@extends('components.main')

@section('content')
    <style>
        /* Modern Background Effect */
        .pricing-container {
            position: relative;
            background: linear-gradient(135deg, #f6f9fc 0%, #ffffff 100%);
            overflow: hidden;
        }

        .background-shapes {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 0;
            overflow: hidden;
        }

        .shape {
            position: absolute;
            background: linear-gradient(45deg, #f1f5f9 0%, #e2e8f0 100%);
            border-radius: 50%;
            animation: float 15s infinite;
        }

        .shape:nth-child(1) {
            width: 300px;
            height: 300px;
            top: -150px;
            left: -150px;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 200px;
            height: 200px;
            top: 50%;
            right: -100px;
            animation-delay: -5s;
        }

        .shape:nth-child(3) {
            width: 250px;
            height: 250px;
            bottom: -125px;
            left: 10%;
            animation-delay: -10s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0) rotate(0deg);
            }

            25% {
                transform: translate(10px, -10px) rotate(5deg);
            }

            50% {
                transform: translate(0, 20px) rotate(-5deg);
            }

            75% {
                transform: translate(-10px, -15px) rotate(3deg);
            }
        }

        /* Enhanced Title */
        .page-title {
            font-size: 4rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 3rem;
            color: gray;
            animation: titlePulse 3s ease-in-out infinite;
        }

        .title-underline {
            position: relative;
            display: inline-block;
        }

        .title-underline::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -10px;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #ff4c60 0%, #ff8f70 100%);
            border-radius: 2px;
        }

        /* Enhanced Pricing Cards */
        .pricing-card {
            position: relative;
            background: white;
            border-radius: 24px;
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            transform-style: preserve-3d;
            overflow: hidden;
        }

        .pricing-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255, 76, 96, 0.1) 0%, rgba(255, 143, 112, 0.1) 100%);
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .pricing-card:hover {
            transform: translateY(-16px) rotateX(5deg);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .pricing-card:hover::before {
            opacity: 1;
        }

        .card-popular {
            position: relative;
            overflow: hidden;
        }

        .card-popular::after {
            content: 'POPULAR';
            position: absolute;
            top: 20px;
            right: -35px;
            background: #ff4c60;
            color: white;
            padding: 8px 40px;
            transform: rotate(45deg);
            font-size: 0.75rem;
            font-weight: bold;
            letter-spacing: 1px;
        }

        /* Price Tag */
        .price-tag {
            font-size: 2.5rem;
            font-weight: 800;
            color: #2d3748;
            margin: 1.5rem 0;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.25rem;
        }

        .price-currency {
            font-size: 1.5rem;
            color: #4a5568;
        }

        /* Feature List */
        .feature-list {
            position: relative;
            z-index: 1;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.75rem 0;
            color: #4a5568;
            font-size: 1rem;
        }

        .feature-icon {
            color: #ff4c60;
            flex-shrink: 0;
        }

        /* Enhanced Button */
        .pricing-button {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, #ff4c60 0%, #ff8f70 100%);
            color: white;
            font-weight: 600;
            border-radius: 50px;
            overflow: hidden;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.875rem;
        }

        .pricing-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0) 100%);
            transform: translateX(-100%);
            transition: transform 0.6s ease;
        }

        .pricing-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(255, 76, 96, 0.3);
        }

        .pricing-button:hover::before {
            transform: translateX(100%);
        }

        /* Post Charges Badge */
        .post-charges {
            display: inline-block;
            padding: 0.5rem 1rem;
            background: #f7fafc;
            border-radius: 12px;
            font-size: 0.875rem;
            color: #4a5568;
            margin-top: 1.5rem;
            border: 1px solid #e2e8f0;
        }
    </style>

    <div class="pricing-container min-h-screen py-16 px-4">
        <div class="background-shapes">
            <div class="shape"></div>
            <div class="shape"></div>
            <div class="shape"></div>
        </div>

        <div class="container mx-auto max-w-7xl relative z-10">
            <!-- Enhanced Title -->
            <h1 class="page-title mb-16">
                <span class="title-underline">Pricing Plans</span>
            </h1>

            <!-- Pricing Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Basic Plan -->
                <div class="pricing-card p-8">
                    <h3 class="text-2xl font-bold text-gray-800">Basic Plan</h3>
                    <div class="price-tag">
                        <span class="price-currency">₹</span>1,499
                        <span class="text-base text-gray-500">/month</span>
                    </div>
                    <div class="feature-list space-y-2">
                        <div class="feature-item">
                            <svg class="w-5 h-5 feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>1 Website</span>
                        </div>
                        <div class="feature-item">
                            <svg class="w-5 h-5 feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>5 GB Storage</span>
                        </div>
                        <div class="feature-item">
                            <svg class="w-5 h-5 feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>24/7 Support</span>
                        </div>
                        <div class="feature-item">
                            <svg class="w-5 h-5 feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>Free Updates</span>
                        </div>
                    </div>
                    <div class="post-charges">Post Charges: ₹50 per post</div>
                    <button class="pricing-button w-full mt-8">Choose Plan</button>
                </div>

                <!-- Standard Plan (Popular) -->
                <div class="pricing-card p-8 card-popular">
                    <h3 class="text-2xl font-bold text-gray-800">Standard Plan</h3>
                    <div class="price-tag">
                        <span class="price-currency">₹</span>3,499
                        <span class="text-base text-gray-500">/month</span>
                    </div>
                    <div class="feature-list space-y-2">
                        <div class="feature-item">
                            <svg class="w-5 h-5 feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>3 Websites</span>
                        </div>
                        <div class="feature-item">
                            <svg class="w-5 h-5 feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>50 GB Storage</span>
                        </div>
                        <div class="feature-item">
                            <svg class="w-5 h-5 feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>Priority Support</span>
                        </div>
                        <div class="feature-item">
                            <svg class="w-5 h-5 feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>Free Updates</span>
                        </div>
                    </div>
                    <div class="post-charges">Post Charges: ₹30 per post</div>
                    <button class="pricing-button w-full mt-8">Choose Plan</button>
                </div>

                <!-- Premium Plan -->
                <div class="pricing-card p-8">
                    <h3 class="text-2xl font-bold text-gray-800">Premium Plan</h3>
                    <div class="price-tag">
                        <span class="price-currency">₹</span>7,499
                        <span class="text-base text-gray-500">/month</span>
                    </div>
                    <div class="feature-list space-y-2">
                        <div class="feature-item">
                            <svg class="w-5 h-5 feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>Unlimited Websites</span>
                        </div>
                        <div class="feature-item">
                            <svg class="w-5 h-5 feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>200 GB Storage</span>
                        </div>
                        <div class="feature-item">
                            <svg class="w-5 h-5 feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>Dedicated Support</span>
                        </div>
                        <div class="feature-item">
                            <svg class="w-5 h-5 feature-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            <span>Free Updates & Features</span>
                        </div>
                    </div>
                    <div class="post-charges">Post Charges: ₹20 per post</div>
                    <button class="pricing-button w-full mt-8">Choose Plan</button>
                </div>
            </div>
        </div>
        <!-- End of Container -->
    </div>
@endsection
