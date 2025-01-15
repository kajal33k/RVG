@extends('components.main')
@section('content')

  <style>
    body {
      perspective: 1000px;
    }
    .card {
      transform-style: preserve-3d;
      transition: transform 0.5s;
    }
    .card:hover {
      transform: rotateY(10deg) rotateX(5deg) scale(1.02);
    }
  </style>

  <div class="min-h-screen flex flex-col justify-center items-center">
    <!-- Header -->
    <header class="text-center m-10">
      <h1 class="text-4xl font-bold text-red-900 drop-shadow-lg">Terms & Conditions</h1>

    </header>

    <!-- Terms and Conditions Card -->
    <div class="card bg-white shadow-2xl rounded-lg p-8 max-w-3xl">
      <div>
        <p class="text-lg font-semibold text-red-800">Welcome to www.realvictorygroups.com</p>
        <p class="mt-4 text-black">
          These Terms and Conditions, along with the Privacy Policy or other terms ("Terms"), constitute a binding
          agreement between Real Victory Groups ("Website Owner," "we," "us," or "our") and you ("you" or "your").
        </p>
        <p class="mt-4 text-black">
          By using our website and availing the Services, you agree to these Terms. We reserve the right to modify these
          Terms at any time. It is your responsibility to periodically review these Terms.
        </p>
      </div>

      <!-- Terms List -->
      <section class="mt-6">
        <ol class="list-decimal list-inside space-y-4">
          <li>
            You agree to provide accurate and complete information and are responsible for all actions under your account.
          </li>
          <li>
            We do not guarantee the accuracy or completeness of the information on our website or through our Services.
          </li>
          <li>
            Your use of our Services is at your own risk. Ensure they meet your requirements.
          </li>
          <li>
            The contents of the website and Services are proprietary. Unauthorized use may lead to legal action.
          </li>
          <li>
            Charges associated with the Services must be paid as agreed.
          </li>
          <li>
            Do not use the website or Services for unlawful purposes.
          </li>
          <li>
            Third-party links are governed by their own terms and policies. Please review them.
          </li>
          <li>
            Initiating a transaction constitutes a legally binding contract for the Services.
          </li>
          <li>
            Refund claims must be raised within stipulated timelines, as per our policies.
          </li>
          <li>
            Neither party shall be liable for failures caused by force majeure events.
          </li>
          <li>
            These Terms are governed by the laws of India. Disputes are subject to the exclusive jurisdiction of Kanpur,
            Uttar Pradesh courts.
          </li>
        </ol>
      </section>

      <!-- Contact Information -->
      <section class="mt-6">
        <h2 class="text-2xl font-bold text-red-800">Contact Us</h2>
        <p class="mt-4">
          All concerns or communications must be directed to us using the contact information provided below:
        </p>
        <p class="mt-4">
          Real Victory Groups<br>
          Phone: +917753800444<br>
          Email: <a href="mailto:realvictorygroups@gmail.com" class="text-red-800 underline">realvictorygroups@gmail.com</a><br>
          Website: <a href="https://www.realvictorygroups.com" class="text-red-800 underline">www.realvictorygroups.com</a>
        </p>
      </section>
    </div>

    
  </div>

@endsection