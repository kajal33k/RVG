@extends('components.main')

@section('content')
<style>
  .bubbles-container {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    pointer-events: none;
    z-index: 10;
  }

  .bubble {
    position: absolute;
    width: 30px;
    height: 30px;
    background-color: rgba(255, 255, 255, 0.6);
    border-radius: 50%;
    animation: bubbleAnimation linear infinite;
  }

  @keyframes bubbleAnimation {
    0% {
      transform: translateY(100%) scale(0.5);
      opacity: 0;
    }
    50% {
      transform: translateY(0) scale(1);
      opacity: 1;
    }
    100% {
      transform: translateY(-100%) scale(0.5);
      opacity: 0;
    }
  }

  /* Adjust different bubble sizes and timings */
  .bubble:nth-child(1) {
    animation-delay: 0s;
  }
  .bubble:nth-child(2) {
    animation-delay: 1s;
  }
  .bubble:nth-child(3) {
    animation-delay: 2s;
  }
  .bubble:nth-child(4) {
    animation-delay: 3s;
  }
  .bubble:nth-child(5) {
    animation-delay: 4s;
  }
</style>


  <section class="pt-44 pb-14 relative overflow-hidden">
    <h1 class="text-3xl font-bold text-center mb-8" data-aos="fade-up" data-aos-duration="500">Happiness @ Walkover</h1>

    <!-- First Card -->
    <div class="max-w-7xl mx-auto p-4" data-aos="fade-up" data-aos-duration="500">
      <div class="border border-gray-300 rounded-lg bg-white shadow-md">
        <div class="w-1/4 bg-red-500 text-white text-sm p-1 text-center">
          Inbox
        </div>
        <div class="p-4">
          <p class="text-gray-700 text-3xl font-medium mb-2">
            Who has appointed you the judge of their actions?
          </p>
          <p class="text-gray-500 text-sm text-right">Fri, Jul 26</p>
        </div>
      </div>
    </div>

    <!-- Second Card -->
    <div class="max-w-7xl mx-auto p-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="200">
      <div class="border border-gray-300 rounded-lg bg-white shadow-md">
        <div class="w-1/4 bg-red-500 text-white text-sm p-1 text-center">
          Inbox
        </div>
        <div class="p-4">
          <p class="text-gray-700 text-3xl font-medium mb-2">
            Who has appointed you the judge of their actions?
          </p>
          <p class="text-gray-500 text-sm text-right">Fri, Jul 26</p>
        </div>
      </div>
    </div>

    <!-- Third Card -->
    <div class="max-w-7xl mx-auto p-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="400">
      <div class="border border-gray-300 rounded-lg bg-white shadow-md">
        <div class="w-1/4 bg-red-500 text-white text-sm p-1 text-center">
          Inbox
        </div>
        <div class="p-4">
          <p class="text-gray-700 text-3xl font-medium mb-2">
            Who has appointed you the judge of their actions?
          </p>
          <p class="text-gray-500 text-sm text-right">Fri, Jul 26</p>
        </div>
      </div>
    </div>

    <!-- Fourth Card -->
    <div class="max-w-7xl mx-auto p-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="600">
      <div class="border border-gray-300 rounded-lg bg-white shadow-md">
        <div class="w-1/4 bg-red-500 text-white text-sm p-1 text-center">
          Inbox
        </div>
        <div class="p-4">
          <p class="text-gray-700 text-3xl font-medium mb-2">
            Who has appointed you the judge of their actions?
          </p>
          <p class="text-gray-500 text-sm text-right">Fri, Jul 26</p>
        </div>
      </div>
    </div>

    <!-- Fifth Card -->
    <div class="max-w-7xl mx-auto p-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="800">
      <div class="border border-gray-300 rounded-lg bg-white shadow-md">
        <div class="w-1/4 bg-red-500 text-white text-sm p-1 text-center">
          Inbox
        </div>
        <div class="p-4">
          <p class="text-gray-700 text-3xl font-medium mb-2">
            Who has appointed you the judge of their actions?
          </p>
          <p class="text-gray-500 text-sm text-right">Fri, Jul 26</p>
        </div>
      </div>
    </div>

    <!-- Sixth Card -->
    <div class="max-w-7xl mx-auto p-4" data-aos="fade-up" data-aos-duration="500" data-aos-delay="1000">
      <div class="border border-gray-300 rounded-lg bg-white shadow-md">
        <div class="w-1/4 bg-red-500 text-white text-sm p-1 text-center">
          Inbox
        </div>
        <div class="p-4">
          <p class="text-gray-700 text-3xl font-medium mb-2">
            Who has appointed you the judge of their actions?
          </p>
          <p class="text-gray-500 text-sm text-right">Fri, Jul 26</p>
        </div>
      </div>
    </div>

  </section>

  <!-- Bubble Flow Effect -->
  <div class="bubbles-container absolute top-0 left-0 right-0 bottom-0 pointer-events-none z-10">
    <!-- Multiple Bubbles -->
    <div class="bubble" style="left: 20%; animation-duration: 6s;"></div>
    <div class="bubble" style="left: 40%; animation-duration: 7s;"></div>
    <div class="bubble" style="left: 60%; animation-duration: 5s;"></div>
    <div class="bubble" style="left: 70%; animation-duration: 8s;"></div>
    <div class="bubble" style="left: 90%; animation-duration: 9s;"></div>
  </div>

@endsection
