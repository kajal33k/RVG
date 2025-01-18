@extends('components.main')
@section('content')
    <!-- Smartphone Container -->
    <div class="flex justify-center mt-8 py-12">
        <!-- Smartphone -->
        <div class="relative bg-black w-[400px] h-[800px] rounded-3xl shadow-lg">
            <!-- Screen -->
            <div class="absolute inset-4 bg-gray-100 rounded-2xl overflow-hidden">
                <!-- Slider Section -->
                <div class="flex overflow-x-auto space-x-4 px-4 pt-4 h-full w-full">
                    <!-- Images -->
                    <img src="{{ asset('assets/img/card1.avif') }}" alt="Image 1"
                        class=" object-cover rounded-lg shadow-md cursor-pointer hover:opacity-80 transition"
                        onclick="showPopup(this.src)">
                    <img src="{{ asset('assets/img/card2.avif') }}" alt="Image 2"
                        class=" object-cover rounded-lg shadow-md cursor-pointer hover:opacity-80 transition"
                        onclick="showPopup(this.src)">
                    <img src="{{ asset('assets/img/card3.avif') }}" alt="Image 3"
                        class=" object-cover rounded-lg shadow-md cursor-pointer hover:opacity-80 transition"
                        onclick="showPopup(this.src)">
                    <img src="{{ asset('assets/img/card4.avif') }}" alt="Image 4"
                        class="object-cover rounded-lg shadow-md cursor-pointer hover:opacity-80 transition"
                        onclick="showPopup(this.src)">
                </div>
            </div>

            <!-- Front Camera -->
            <div class="absolute top-2 left-1/2 transform -translate-x-1/2 w-6 h-6 bg-gray-800 rounded-full shadow-inner">
            </div>

            <!-- Speaker -->
            <div class="absolute top-10 left-1/2 transform -translate-x-1/2 w-16 h-1 bg-gray-700 rounded-full"></div>

            <!-- Volume Buttons -->
            <div class="absolute top-20 -left-2 w-1 h-12 bg-gray-800 rounded-r-md"></div>
            <div class="absolute top-36 -left-2 w-1 h-8 bg-gray-800 rounded-r-md"></div>

            <!-- Power Button -->
            <div class="absolute top-28 -right-2 w-1 h-14 bg-gray-800 rounded-l-md"></div>

            
        </div>
    </div>

    <!-- Popup Modal -->
    <div id="popup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden mt-12">
        <div class="bg-white rounded-lg shadow-lg overflow-hidden relative">
            <button onclick="hidePopup()" class="absolute top-2 right-2 text-gray-400 hover:text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <img id="popup-image" src="" alt="Popup Image"
                class="w-full h-full object-contain max-w-lg max-h-screen">
        </div>
    </div>

    <!-- Scripts -->
    <script>
        function showPopup(imageSrc) {
            const popup = document.getElementById('popup');
            const popupImage = document.getElementById('popup-image');
            popupImage.src = imageSrc;
            popup.classList.remove('hidden');
        }

        function hidePopup() {
            const popup = document.getElementById('popup');
            popup.classList.add('hidden');
        }
    </script>

    <!-- Slider Container -->
    <div class="slider-container mt-10 flex justify-center">

        <!-- Slide Images -->
        <div class="slides ">
            <img src="{{ asset('assets/img/slide5.jpg') }}" class="slide rounded-xl w-4xl" alt="Slide 1"  onclick="showPopup(this.src)">
            <img src="{{ asset('assets/img/slide4.jpg') }}" class="slide rounded-xl w-4xl" alt="Slide 2"  onclick="showPopup(this.src)">
            <img src="{{ asset('assets/img/slide3.jpg') }}" class="slide rounded-xl w-4xl" alt="Slide 3" onclick="showPopup(this.src)">
        </div>

        <!-- Navigation Arrows -->
        {{-- <div class="prev cursor-pointer" onclick="moveSlide(-1)">&#10094;</div>
        <div class="next cursor-pointer" onclick="moveSlide(1)">&#10095;</div> --}}

        <!-- Dots -->
        <div class="dots">
            <span class="dot active" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>




    <div class="min-h-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Achievement Card 1 -->
                <div class="relative w-64 mx-auto">
                    <!-- Pushpin -->
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 z-10">
                        <div class="w-6 h-6 bg-red-500 rounded-full"></div> <!-- Red pin head -->
                        <div class="absolute -bottom-1 left-1/2 -translate-x-1/2">
                            <div class="w-8 h-8 bg-yellow-100 rounded-full opacity-80"></div>
                            <!-- Gold circle behind icon -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="w-4 h-4 text-gray-700" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                                    <line x1="7" y1="8" x2="17" y2="8"></line>
                                    <line x1="7" y1="12" x2="17" y2="12"></line>
                                    <line x1="7" y1="16" x2="13" y2="16"></line>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="bg-gray-900 rounded-xl p-6 pt-8 shadow-lg transform">
                        <h2 class="text-2xl font-bold text-white mb-2">Industry Leader</h2>
                        <p class="text-gray-400 text-center">
                            service most<br />
                            of jewellers in<br />
                            india
                        </p>
                    </div>
                </div>

                <!-- Achievement Card 2 -->
                <div class="relative w-64 mx-auto">
                    <!-- Pushpin -->
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 z-10">
                        <div class="w-6 h-6 bg-red-500 rounded-full"></div> <!-- Red pin head -->
                        <div class="absolute -bottom-1 left-1/2 -translate-x-1/2">
                            <div class="w-8 h-8 bg-yellow-100 rounded-full opacity-80"></div>
                            <!-- Gold circle behind icon -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="w-4 h-4 text-gray-700" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                                    <line x1="7" y1="8" x2="17" y2="8"></line>
                                    <line x1="7" y1="12" x2="17" y2="12"></line>
                                    <line x1="7" y1="16" x2="13" y2="16"></line>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="bg-gray-900 rounded-xl p-6 pt-8 shadow-lg transform">
                        <h2 class="text-2xl font-bold text-white mb-2">Industry Leader</h2>
                        <p class="text-gray-400 text-center">
                            service most<br />
                            of jewellers in<br />
                            india
                        </p>
                    </div>
                </div>

                <!-- Achievement Card 3 -->
                <div class="relative w-64 mx-auto">
                    <!-- Pushpin -->
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 z-10">
                        <div class="w-6 h-6 bg-red-500 rounded-full"></div> <!-- Red pin head -->
                        <div class="absolute -bottom-1 left-1/2 -translate-x-1/2">
                            <div class="w-8 h-8 bg-yellow-100 rounded-full opacity-80"></div>
                            <!-- Gold circle behind icon -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="w-4 h-4 text-gray-700" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                                    <line x1="7" y1="8" x2="17" y2="8"></line>
                                    <line x1="7" y1="12" x2="17" y2="12"></line>
                                    <line x1="7" y1="16" x2="13" y2="16"></line>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="bg-gray-900 rounded-xl p-6 pt-8 shadow-lg transform">
                        <h2 class="text-2xl font-bold text-white mb-2">Industry Leader</h2>
                        <p class="text-gray-400 text-center">
                            service most<br />
                            of jewellers in<br />
                            india
                        </p>
                    </div>
                </div>


                <!-- Achievement Card 4 -->
                <div class="relative w-64 mx-auto">
                    <!-- Pushpin -->
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 z-10">
                        <div class="w-6 h-6 bg-red-500 rounded-full"></div> <!-- Red pin head -->
                        <div class="absolute -bottom-1 left-1/2 -translate-x-1/2">
                            <div class="w-8 h-8 bg-yellow-100 rounded-full opacity-80"></div>
                            <!-- Gold circle behind icon -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="w-4 h-4 text-gray-700" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="3" width="18" height="18" rx="2"></rect>
                                    <line x1="7" y1="8" x2="17" y2="8"></line>
                                    <line x1="7" y1="12" x2="17" y2="12"></line>
                                    <line x1="7" y1="16" x2="13" y2="16"></line>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
                    <div class="bg-gray-900 rounded-xl p-6 pt-8 shadow-lg transform">
                        <h2 class="text-2xl font-bold text-white mb-2">Industry Leader</h2>
                        <p class="text-gray-400 text-center">
                            service most<br />
                            of jewellers in<br />
                            india
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>


    {{-- slider --}}

    <!-- Demo styles -->
    <style>
        

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
        
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    
        <!-- Swiper -->
        <div class="swiper mySwiper mb-4">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><div class=" ">
                    <h1 class="text-center text-3xl font-bold mb-4 text-red-600">Jewellery Poster</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
                      <div><img src="{{asset('assets/img/slide5.jpg')}}" alt="Jewellery 1" class="w-full h-auto object-cover"  onclick="showPopup(this.src)"></div>
                      <div><img src="{{asset('assets/img/slide5.jpg')}}" alt="Jewellery 2" class="w-full h-auto object-cover"  onclick="showPopup(this.src)"></div>
                      <div><img src="{{asset('assets/img/slide5.jpg')}}" alt="Jewellery 3" class="w-full h-auto object-cover"  onclick="showPopup(this.src)"></div>
                      <div><img src="{{asset('assets/img/slide5.jpg')}}" alt="Jewellery 4" class="w-full h-auto object-cover"  onclick="showPopup(this.src)"></div>
                    </div>
                    <div class="text-center">
                      <button class="px-6 py-2 border border-red-600 text-red-600 font-semibold rounded-lg hover:bg-red-700 hover:text-white transition duration-200">
                        Shop Now
                      </button>
                    </div>
                  </div></div>
                <div class="swiper-slide"><div class=" ">
                    <h1 class="text-center text-3xl font-bold mb-4 text-red-600">Jewellery Poster</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
                      <div><img src="{{asset('assets/img/slide5.jpg')}}" alt="Jewellery 1" class="w-full h-auto object-cover"  onclick="showPopup(this.src)"></div>
                      <div><img src="{{asset('assets/img/slide5.jpg')}}" alt="Jewellery 2" class="w-full h-auto object-cover"  onclick="showPopup(this.src)"></div>
                      <div><img src="{{asset('assets/img/slide5.jpg')}}" alt="Jewellery 3" class="w-full h-auto object-cover"  onclick="showPopup(this.src)"></div>
                      <div><img src="{{asset('assets/img/slide5.jpg')}}" alt="Jewellery 4" class="w-full h-auto object-cover"  onclick="showPopup(this.src)"></div>
                    </div>
                    <div class="text-center">
                      <button class="px-6 py-2 border border-red-600 text-red-600 font-semibold rounded-lg hover:bg-red-700 hover:text-white transition duration-200">
                        Shop Now
                      </button>
                    </div>
                  </div></div>
                <div class="swiper-slide"><div class=" ">
                    <h1 class="text-center text-3xl font-bold mb-4 text-red-600">Tyre Poster</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
                      <div><img src="{{asset('assets/img/slide2.jpg')}}" alt="Jewellery 1" class="w-full h-auto object-cover"  onclick="showPopup(this.src)"></div>
                      <div><img src="{{asset('assets/img/slide2.jpg')}}" alt="Jewellery 2" class="w-full h-auto object-cover"  onclick="showPopup(this.src)"></div>
                      <div><img src="{{asset('assets/img/slide2.jpg')}}" alt="Jewellery 3" class="w-full h-auto object-cover"  onclick="showPopup(this.src)"></div>
                      <div><img src="{{asset('assets/img/slide2.jpg')}}" alt="Jewellery 4" class="w-full h-auto object-cover"  onclick="showPopup(this.src)"></div>
                    </div>
                    <div class="text-center">
                      <button class="px-6 py-2 border border-red-600 text-red-600 font-semibold rounded-lg hover:bg-red-700 hover:text-white transition duration-200">
                        Shop Now
                      </button>
                    </div>
                  </div></div>
                <div class="swiper-slide"><div class=" ">
                    <h1 class="text-center text-3xl font-bold mb-4 text-red-600">Phone Poster</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
                      <div><img src="{{asset('assets/img/slide4.jpg')}}" alt="Jewellery 1" class="w-full h-auto object-cover" onclick="showPopup(this.src)"></div>
                      <div><img src="{{asset('assets/img/slide4.jpg')}}" alt="Jewellery 2" class="w-full h-auto object-cover" onclick="showPopup(this.src)"></div>
                      <div><img src="{{asset('assets/img/slide4.jpg')}}" alt="Jewellery 3" class="w-full h-auto object-cover" onclick="showPopup(this.src)"></div>
                      <div><img src="{{asset('assets/img/slide4.jpg')}}" alt="Jewellery 4" class="w-full h-auto object-cover" onclick="showPopup(this.src)"></div>
                    </div>
                    <div class="text-center">
                      <button class="px-6 py-2 border border-red-600 text-red-600 font-semibold rounded-lg hover:bg-red-700 hover:text-white transition duration-200">
                        Shop Now
                      </button>
                    </div>
                  </div></div>
                <div class="swiper-slide"><div class=" ">
                    <h1 class="text-center text-3xl font-bold mb-4 text-red-600 ">Food Poster</h1>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mb-6">
                      <div><img src="{{asset('assets/img/slide3.jpg')}}" alt="Jewellery 1" class="w-full h-auto object-cover" onclick="showPopup(this.src)"></div>
                      <div><img src="{{asset('assets/img/slide3.jpg')}}" alt="Jewellery 2" class="w-full h-auto object-cover" onclick="showPopup(this.src)"></div>
                      <div><img src="{{asset('assets/img/slide3.jpg')}}" alt="Jewellery 3" class="w-full h-auto object-cover" onclick="showPopup(this.src)"></div>
                      <div><img src="{{asset('assets/img/slide3.jpg')}}" alt="Jewellery 4" class="w-full h-auto object-cover" onclick="showPopup(this.src)"></div>
                    </div>
                    <div class="text-center">
                      <button class="px-6 py-2 border border-red-600 text-red-600 font-semibold rounded-lg hover:bg-red-700 hover:text-white transition duration-200">
                        Shop Now
                      </button>
                    </div>
                  </div></div>
                
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            {{-- <div class="swiper-pagination"></div> --}}
        </div>


        <div class="relative w-full overflow-hidden">
            <!-- Aspect ratio container -->
            <div class="relative pt-[56.132%]">
                <iframe 
                    src="https://gifer.com/embed/DXNR" 
                    class="absolute top-0 left-0 w-full h-full border-none" 
                    allowfullscreen>
                </iframe>
            </div>
        
            <!-- Overlay content -->
            <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50 flex flex-col justify-center items-center text-white text-center ">
                <p class="text-xl sm:text-2xl md:text-3xl font-bold mb-4 sm:mb-5 leading-tight">
                    Outstanding website design can help you make a lasting impression.
                </p>
                <p class="text-base sm:text-lg md:text-xl mb-4 sm:mb-5">
                 We provide 365 post, at the 365 days
                </p>
                <button class="bg-[#008CBA] text-white border-none py-2 px-4 sm:py-3 sm:px-6 text-sm sm:text-lg rounded-lg cursor-pointer hover:bg-[#007B9A] transition duration-300">
                    View More
                </button>
            </div>
        </div>
        
       
       {{-- fhdxfju --}}
       <div id="carousel" class="relative w-full max-w-7xl mt-8">
        <!-- Carousel wrapper -->
        <div class="relative flex overflow-hidden rounded-lg px-4 sm:px-8 md:px-16">
          <!-- Slides -->
          <div
            class="flex transition-transform duration-700 ease-in-out"
            id="carousel-slides"
          >
            <div class="w-full sm:w-[300px] md:w-[400px] h-[300px] sm:h-[350px] md:h-[400px] flex-shrink-0 p-2 md:p-4">
              <img
                src="{{asset('assets/img/calling.jpg')}}"
                alt="Slide 1"
                class="w-full h-full object-cover rounded-lg"
                onclick="showPopup(this.src)"
              />
            </div>
            <div class="w-full sm:w-[300px] md:w-[400px] h-[300px] sm:h-[350px] md:h-[400px] flex-shrink-0 p-2 md:p-4">
              <img
                src="{{asset('assets/img/calling.jpg')}}"
                alt="Slide 2"
                class="w-full h-full object-cover rounded-lg"
                onclick="showPopup(this.src)"
              />
            </div>
            <div class="w-full sm:w-[300px] md:w-[400px] h-[300px] sm:h-[350px] md:h-[400px] flex-shrink-0 p-2 md:p-4">
              <img
                src="{{asset('assets/img/calling.jpg')}}"
                alt="Slide 3"
                class="w-full h-full object-cover rounded-lg"
                onclick="showPopup(this.src)"
              />
            </div>
            <!-- Add more slides as needed -->
          </div>
        </div>
      
        <!-- Indicators -->
        <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 flex space-x-2">
          <button
            class="w-3 h-3 bg-gray-500 rounded-full"
            aria-label="Slide 1"
            data-carousel-slide-to="0"
          ></button>
          <button
            class="w-3 h-3 bg-gray-500 rounded-full"
            aria-label="Slide 2"
            data-carousel-slide-to="1"
          ></button>
          <button
            class="w-3 h-3 bg-gray-500 rounded-full"
            aria-label="Slide 3"
            data-carousel-slide-to="2"
          ></button>
        </div>
      
        <!-- Controls -->
        <button
          class="absolute top-1/2 left-2 md:left-4 transform -translate-y-1/2 p-2 text-white rounded-full focus:outline-none"
          id="prev"
        >
          <svg
            class="w-6 h-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M15 19l-7-7 7-7"
            />
          </svg>
        </button>
        <button
          class="absolute top-1/2 right-2 md:right-4 transform -translate-y-1/2 p-2 text-white rounded-full focus:outline-none"
          id="next"
        >
          <svg
            class="w-6 h-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M9 5l7 7-7 7"
            />
          </svg>
        </button>
      </div>
      
          <script>
            document.addEventListener('DOMContentLoaded', () => {
              const slides = document.getElementById('carousel-slides');
              const prevButton = document.getElementById('prev');
              const nextButton = document.getElementById('next');
              const indicators = document.querySelectorAll('[data-carousel-slide-to]');
              const slideWidth = slides.firstElementChild.offsetWidth;
              let currentIndex = 0;
        
              function updateCarousel() {
                slides.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
                indicators.forEach((indicator, index) => {
                  indicator.classList.toggle('bg-gray-900', index === currentIndex);
                });
              }
        
              prevButton.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + indicators.length) % indicators.length;
                updateCarousel();
              });
        
              nextButton.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % indicators.length;
                updateCarousel();
              });
        
              indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                  currentIndex = index;
                  updateCarousel();
                });
              });
        
              // Initial update
              updateCarousel();
            });
          </script>
        
        
        
    <div class="max-w-7xl mx-auto pt-24">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-red-600 mb-6">Social Media Marketing Post</h1>
            <p class="text-white max-w-3xl mx-auto leading-relaxed">
                Business gets a chance to target, connect and reach the audience right at the time, posters help to target the potential audience and provide an easy way to demonstrate a trailer of your content, giving them a bite of your awesome brand.
            </p>
            <button class="mt-6 bg-red-600 text-white px-6 py-2 rounded-md hover:bg-red-700 transition-colors">
                View More
            </button>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
            <!-- Gallery Items -->
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{asset('assets/img/card2.avif')}}" alt="World Food Day" class="w-full h-64 object-cover" onclick="showPopup(this.src)"/>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{asset('assets/img/card2.avif')}}" alt="Sumera Enterprises" class="w-full h-64 object-cover" onclick="showPopup(this.src)" />
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{asset('assets/img/card2.avif')}}" alt="Feel Good Foundation" class="w-full h-64 object-cover" onclick="showPopup(this.src)"/>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{asset('assets/img/card2.avif')}}" alt="R.K. Traders" class="w-full h-64 object-cover" onclick="showPopup(this.src)"/>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{asset('assets/img/card2.avif')}}" alt="Durga Puja" class="w-full h-64 object-cover" onclick="showPopup(this.src)"/>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{asset('assets/img/card2.avif')}}" alt="Karwa Chauth" class="w-full h-64 object-cover" onclick="showPopup(this.src)"/>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{asset('assets/img/card2.avif')}}" alt="Eid" class="w-full h-64 object-cover" onclick="showPopup(this.src)"/>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{asset('assets/img/card2.avif')}}" alt="Festival Post" class="w-full h-64 object-cover" onclick="showPopup(this.src)"/>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{asset('assets/img/card2.avif')}}" alt="Durga Puja Fabtex" class="w-full h-64 object-cover" onclick="showPopup(this.src)"/>
            </div>
            <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{asset('assets/img/card2.avif')}}" alt="Animal Day" class="w-full h-64 object-cover" onclick="showPopup(this.src)"/>
            </div>
        </div>
    </div>


        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                pagination: {
                    el: ".swiper-pagination",
                 
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },  
            });
        </script>




        <!-- JavaScript for functionality -->
        <script>
            let slideIndex = 1;
            let slides = document.querySelectorAll('.slide');
            let dots = document.querySelectorAll('.dot');

            // Show the current slide and hide the rest
            function showSlide(index) {
                if (index > slides.length) slideIndex = 1;
                if (index < 1) slideIndex = slides.length;

                // Hide all slides
                slides.forEach(slide => slide.style.display = "none");

                // Reset dots to default color
                dots.forEach(dot => dot.classList.remove('active'));

                // Show the current slide
                slides[slideIndex - 1].style.display = "block";

                // Set the active dot
                dots[slideIndex - 1].classList.add('active');
            }

            // Move slides forward or backward
            function moveSlide(n) {
                showSlide(slideIndex += n);
            }

            // Move to a specific slide via dots
            function currentSlide(n) {
                showSlide(slideIndex = n);
            }

            // Initialize the slider
            showSlide(slideIndex);

            // Auto slide every 3 seconds
            setInterval(() => {
                moveSlide(1);
            }, 3000);
        </script>

  
    @endsection
