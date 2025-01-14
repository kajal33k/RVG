@extends('components.main')

@section('content')
    <style>
        /* Slider Container */
        .slider-container {
            display: flex;
            overflow: hidden;
            position: relative;
            width: 100%;
            scroll-behavior: smooth;
            perspective: 1000px;
            padding: 2rem 0;
        }

        /* Individual Slide */
        .slide {
            flex: 0 0 25%;
            position: relative;
            margin-right: 1rem;
            transform-style: preserve-3d;
            transition: transform 0.5s ease;
        }

        .slide:hover {
            transform: translateY(-10px) rotateY(5deg);
        }

        .slide::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 5%;
            width: 90%;
            height: 20px;
            background: rgba(0, 0, 0, 0.1);
            filter: blur(10px);
            transform: rotateX(90deg);
            transform-origin: top;
            transition: all 0.5s ease;
        }

        .slide:hover::after {
            bottom: -15px;
            filter: blur(15px);
        }

        .slide:last-child {
            margin-right: 0;
        }

        @media (max-width: 768px) {
            .slide {
                flex: 0 0 100%;
                margin-right: 0;
            }
        }

        /* Image Styling */
        .slide img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            transition: all 0.5s ease;
            transform-style: preserve-3d;
            backface-visibility: hidden;
        }

        .slide:hover img {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        /* Navigation Buttons */
        .nav-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%) translateZ(50px);
            background: rgba(255, 255, 255, 0.95);
            padding: 1.2rem;
            border-radius: 9999px;
            cursor: pointer;
            z-index: 10;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border: none;
        }

        .nav-button:hover {
            background: #ffffff;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
            transform: translateY(-50%) translateZ(50px) scale(1.1);
        }

        .nav-button:active {
            transform: translateY(-50%) translateZ(50px) scale(0.95);
        }

        .nav-button.left {
            left: 1rem;
        }

        .nav-button.right {
            right: 1rem;
        }

        .nav-button svg {
            width: 1.5rem;
            height: 1.5rem;
            color: #2d3748;
            transition: color 0.3s ease;
        }

        .nav-button:hover svg {
            color: #1a202c;
        }

        /* Section Styling */
        .gallery-section {
            background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
            padding: 4rem 0;
            position: relative;
            overflow: hidden;
        }

        .gallery-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 100%;
            background: linear-gradient(to right, rgba(247, 250, 252, 0.8) 0%, rgba(247, 250, 252, 0) 10%, rgba(247, 250, 252, 0) 90%, rgba(247, 250, 252, 0.8) 100%);
            pointer-events: none;
            z-index: 2;
        }

        /* Heading Animation */
        .gallery-title {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 2.5rem;
            background: linear-gradient(135deg, #2d3748 0%, #4a5568 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transform-style: preserve-3d;
            animation: titleFloat 3s ease-in-out infinite;
        }

        @keyframes titleFloat {
            0%, 100% {
                transform: translateY(0) rotateX(0);
            }
            50% {
                transform: translateY(-10px) rotateX(5deg);
            }
        }
    </style>

    <div class="gallery-section">
        <div class="container mx-auto px-6 lg:px-16">
            <h1 class="gallery-title">Our Gallery</h1>
            <div class="slider-container" id="slider">
                <!-- Slides -->
                <div class="slide">
                    <img src="{{ asset('assets/img/about.png') }}" alt="Slide 1">
                </div>
                <div class="slide">
                    <img src="{{ asset('assets/img/calling.jpg') }}" alt="Slide 2">
                </div>
                <div class="slide">
                    <img src="{{ asset('assets/img/imager.jpg') }}" alt="Slide 3">
                </div>
                <div class="slide">
                    <img src="{{ asset('assets/img/banner.jpeg') }}" alt="Slide 4">
                </div>
                <div class="slide">
                    <img src="{{ asset('assets/img/banner.jpeg') }}" alt="Slide 5">
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button class="nav-button left" id="prevBtn">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button class="nav-button right" id="nextBtn">
                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>

    <script>
        const slider = document.getElementById('slider');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const slides = document.querySelectorAll('.slide');

        // Add 3D effect on mouse move for each slide
        slides.forEach(slide => {
            slide.addEventListener('mousemove', (e) => {
                const rect = slide.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const xRotation = ((y - rect.height / 2) / rect.height) * 10;
                const yRotation = ((x - rect.width / 2) / rect.width) * 10;
                
                slide.style.transform = `
                    perspective(1000px)
                    rotateX(${-xRotation}deg)
                    rotateY(${yRotation}deg)
                    translateY(-10px)
                `;
            });

            slide.addEventListener('mouseleave', () => {
                slide.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) translateY(0)';
            });
        });

        // Scroll the slider left or right
        prevBtn.addEventListener('click', () => {
            slider.scrollBy({ left: -slider.clientWidth, behavior: 'smooth' });
        });

        nextBtn.addEventListener('click', () => {
            slider.scrollBy({ left: slider.clientWidth, behavior: 'smooth' });
        });

        // Auto-slide every 3 seconds
        const autoSlide = () => {
            slider.scrollBy({ left: slider.clientWidth, behavior: 'smooth' });

            if (slider.scrollLeft + slider.clientWidth >= slider.scrollWidth) {
                setTimeout(() => {
                    slider.scrollTo({ left: 0, behavior: 'smooth' });
                }, 3000);
            }
        };

        let autoSlideInterval = setInterval(autoSlide, 3000);

        const resetAutoSlide = () => {
            clearInterval(autoSlideInterval);
            autoSlideInterval = setInterval(autoSlide, 3000);
        };

        prevBtn.addEventListener('click', resetAutoSlide);
        nextBtn.addEventListener('click', resetAutoSlide);
    </script>
@endsection