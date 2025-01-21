@extends('components.main')
@section('content')

{{-- Hero section  --}}
<div class="relative">
  <!-- Video Section -->
  <video 
    src="{{ asset('assets/img/videosfsd.mp4') }}" 
    autoplay 
    loop 
    muted 
    playsinline 
    preload="auto" 
    class="w-screen h-auto object-cover">
    Your browser does not support the video tag.
  </video>

  <!-- Overlay Content -->
  <div class="absolute inset-0 bg-black bg-opacity-60 flex flex-col justify-center items-center text-white text-center">
    <h1 class="lg:text-7xl md:text-5xl text-2xl font-bold md:mb-4">
      365 Days, 365 Posters
    </h1>
    <p class="text-lg md:text-2xl md:mb-6">
      Your brand, your story, our design
    </p>
    <div class="flex flex-wrap justify-center md:gap-4 gap-2">
      <button 
        class="bg-red-600 hover:bg-red-700 text-white font-medium md:py-3 md:px-12 p-2 rounded-lg shadow transition-all duration-300"
      >
        Get Started
      </button>
      <button 
        class="bg-transparent border border-white hover:bg-white hover:text-black text-white font-medium md:py-3 md:px-12 p-2 rounded-lg shadow transition-all duration-300"
      >
        Learn More
      </button>
    </div>
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
            
              <img src="{{ asset('assets/img/one.jpg') }}" class="slide rounded-xl w-4xl h-96" alt="Slide 1"  onclick="showPopup(this.src)">
            
       
            <img src="{{ asset('assets/img/two.jpg') }}" class="slide rounded-xl w-4xl h-96" alt="Slide 2"  onclick="showPopup(this.src)">
           
           
            <img src="{{ asset('assets/img/one.jpg') }}" class="slide rounded-xl w-4xl h-96" alt="Slide 3" onclick="showPopup(this.src)">
         
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
                <button class="bg-red-600 text-white border-none py-2 px-4 sm:py-3 sm:px-6 text-sm sm:text-lg rounded-lg cursor-pointer hover:bg-red-700 transition duration-300">
                    View More
                </button>
            </div>
        </div>
        
       
        {{-- <div id="carousel" class="relative w-full max-w-7xl mt-8">
          <!-- Carousel wrapper -->
          <div class="relative flex overflow-hidden rounded-lg px-4 sm:px-8 md:px-16">
            <!-- Slides -->
            <div
              id="carousel-slides"
              class="flex transition-transform duration-700 ease-in-out"
            >
              <!-- Slide 1 -->
              <div class="w-full sm:w-[300px] md:w-[400px] h-[300px] sm:h-[350px] md:h-[400px] flex-shrink-0 p-2 md:p-4">
                <img
                  src="{{ asset('assets/img/calling.jpg') }}"
                  alt="Slide 1"
                  class="w-full h-full object-cover rounded-lg"
                  onclick="showPopup(this.src)"
                />
              </div>
              <!-- Slide 2 -->
              <div class="w-full sm:w-[300px] md:w-[400px] h-[300px] sm:h-[350px] md:h-[400px] flex-shrink-0 p-2 md:p-4">
                <img
                  src="{{ asset('assets/img/calling.jpg') }}"
                  alt="Slide 2"
                  class="w-full h-full object-cover rounded-lg"
                  onclick="showPopup(this.src)"
                />
              </div>
              <!-- Slide 3 -->
              <div class="w-full sm:w-[300px] md:w-[400px] h-[300px] sm:h-[350px] md:h-[400px] flex-shrink-0 p-2 md:p-4">
                <img
                  src="{{ asset('assets/img/calling.jpg') }}"
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
              class="w-3 h-3 bg-gray-500 rounded-full transition-all duration-300"
              aria-label="Slide 1"
              data-carousel-slide-to="0"
            ></button>
            <button
              class="w-3 h-3 bg-gray-500 rounded-full transition-all duration-300"
              aria-label="Slide 2"
              data-carousel-slide-to="1"
            ></button>
            <button
              class="w-3 h-3 bg-gray-500 rounded-full transition-all duration-300"
              aria-label="Slide 3"
              data-carousel-slide-to="2"
            ></button>
          </div>
        
          <!-- Controls -->
          <button
            id="prev"
            class="absolute top-1/2 left-2 md:left-4 transform -translate-y-1/2 p-2 bg-gray-800 text-white rounded-full hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-400"
            aria-label="Previous Slide"
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
            id="next"
            class="absolute top-1/2 right-2 md:right-4 transform -translate-y-1/2 p-2 bg-gray-800 text-white rounded-full hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-400"
            aria-label="Next Slide"
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
          document.addEventListener("DOMContentLoaded", () => {
            const slides = document.getElementById("carousel-slides");
            const prevButton = document.getElementById("prev");
            const nextButton = document.getElementById("next");
            const indicators = document.querySelectorAll("[data-carousel-slide-to]");
            let currentIndex = 0;
        
            const getSlideWidth = () => slides.children[0].getBoundingClientRect().width;
        
            const updateCarousel = () => {
              const slideWidth = getSlideWidth();
              slides.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
        
              // Update indicators
              indicators.forEach((indicator, index) => {
                indicator.classList.toggle("bg-gray-900", index === currentIndex);
                indicator.classList.toggle("bg-gray-500", index !== currentIndex);
                indicator.setAttribute("aria-current", index === currentIndex ? "true" : "false");
              });
            };
        
            // Controls
            prevButton.addEventListener("click", () => {
              currentIndex = (currentIndex - 1 + slides.children.length) % slides.children.length;
              updateCarousel();
            });
        
            nextButton.addEventListener("click", () => {
              currentIndex = (currentIndex + 1) % slides.children.length;
              updateCarousel();
            });
        
            // Indicators
            indicators.forEach((indicator, index) => {
              indicator.addEventListener("click", () => {
                currentIndex = index;
                updateCarousel();
              });
            });
        
            // Resize event with debounce
            let resizeTimeout;
            window.addEventListener("resize", () => {
              clearTimeout(resizeTimeout);
              resizeTimeout = setTimeout(() => {
                updateCarousel();
              }, 100);
            });
        
            // Initial update
            updateCarousel();
          });
        </script> --}}

       <div class="relative w-full max-w-5xl mx-auto mt-8">
  <!-- Carousel Container -->
  <div class="overflow-hidden rounded-lg" id="carousel">
    <h1 class="text-3xl font-bold text-center text-red-600">Our Demo</h1>
    <div class="flex transition-transform duration-700 ease-in-out gap-4 mt-4" id="carousel-slides">
      
      <!-- Slide 1 -->
      <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 h-64">
        <img
          src="{{asset('assets/img/calling.jpg')}}"
          alt="Slide 1"
          class="w-full h-full object-cover rounded-lg"
        />
      </div>
      <!-- Slide 2 -->
      <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 h-64">
        <img
          src="{{asset('assets/img/calling.jpg')}}"
          alt="Slide 2"
          class="w-full h-full object-cover rounded-lg"
        />
      </div>
      <!-- Slide 3 -->
      <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 h-64">
        <img
          src="{{asset('assets/img/calling.jpg')}}"
          alt="Slide 3"
          class="w-full h-full object-cover rounded-lg"
        />
      </div>
      <!-- Slide 4 -->
      <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 h-64">
        <img
          src="{{asset('assets/img/calling.jpg')}}"
          alt="Slide 4"
          class="w-full h-full object-cover rounded-lg"
        />
      </div>
      <!-- Slide 5 -->
      <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 h-64">
        <img
          src="{{asset('assets/img/calling.jpg')}}"
          alt="Slide 5"
          class="w-full h-full object-cover rounded-lg"
        />
      </div>
      <!-- Slide 6 -->
      <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 h-64">
        <img
          src="{{asset('assets/img/calling.jpg')}}"
          alt="Slide 6"
          class="w-full h-full object-cover rounded-lg"
        />
      </div>
      <!-- Slide 7 -->
      <div class="flex-shrink-0 w-full sm:w-1/2 lg:w-1/3 h-64">
        <img
          src="{{asset('assets/img/calling.jpg')}}"
          alt="Slide 7"
          class="w-full h-full object-cover rounded-lg"
        />
      </div>
    </div>
  </div>

  <!-- Controls -->
  <button
    class="absolute top-1/2 left-4 transform -translate-y-1/2 p-2 bg-gray-800 text-white rounded-full hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-400"
    id="prev"
    aria-label="Previous Slide"
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
    class="absolute top-1/2 right-4 transform -translate-y-1/2 p-2 bg-gray-800 text-white rounded-full hover:bg-gray-700 focus:outline-none focus:ring focus:ring-gray-400"
    id="next"
    aria-label="Next Slide"
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

  <!-- Indicators -->
  <div class="flex justify-center mt-4 space-x-2">
    <button
      class="w-3 h-3 rounded-full transition-all bg-gray-900"
      data-carousel-slide-to="0"
      aria-label="Slide 1"
    ></button>
    <button
      class="w-3 h-3 rounded-full transition-all bg-gray-500"
      data-carousel-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      class="w-3 h-3 rounded-full transition-all bg-gray-500"
      data-carousel-slide-to="2"
      aria-label="Slide 3"
    ></button>
    <button
      class="w-3 h-3 rounded-full transition-all bg-gray-500"
      data-carousel-slide-to="3"
      aria-label="Slide 4"
    ></button>
    <button
      class="w-3 h-3 rounded-full transition-all bg-gray-500"
      data-carousel-slide-to="4"
      aria-label="Slide 5"
    ></button>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const slides = document.getElementById("carousel-slides");
    const prevButton = document.getElementById("prev");
    const nextButton = document.getElementById("next");
    const indicators = document.querySelectorAll("[data-carousel-slide-to]");

    let slideWidth = slides.children[0].offsetWidth;
    let currentIndex = 0;

    const updateCarousel = () => {
      // Dynamically calculate the number of slides to show based on screen size
      const containerWidth = document.getElementById("carousel").offsetWidth;
      const visibleSlides = containerWidth < 640 ? 1 : containerWidth < 1024 ? 2 : 3; // 1 on mobile, 2 on tablets, 3 on desktops
      slideWidth = slides.children[0].offsetWidth * visibleSlides; // Adjust slide width

      slides.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

      indicators.forEach((indicator, index) => {
        indicator.classList.toggle("bg-gray-900", index === currentIndex);
        indicator.classList.toggle("bg-gray-500", index !== currentIndex);
      });
    };

    prevButton.addEventListener("click", () => {
      currentIndex = (currentIndex - 1 + slides.children.length - 2) % (slides.children.length - 2); // Adjust for showing multiple slides
      updateCarousel();
    });

    nextButton.addEventListener("click", () => {
      currentIndex = (currentIndex + 1) % (slides.children.length - 2); // Adjust for showing multiple slides
      updateCarousel();
    });

    indicators.forEach((indicator, index) => {
      indicator.addEventListener("click", () => {
        currentIndex = index;
        updateCarousel();
      });
    });

    window.addEventListener("resize", () => {
      updateCarousel();
    });

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
