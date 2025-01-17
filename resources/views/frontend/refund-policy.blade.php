@extends('components.main')
@section('content')


  <div class="min-h-screen flex flex-col justify-center items-center">
    <!-- Header -->
    <header class="text-center mb-10">
      <h1 class="text-4xl font-bold text-red-700 drop-shadow-lg">Cancellation & Refund Policy</h1>
   
    </header>

    <!-- Policy Card -->
    <div class="card bg-white shadow-2xl rounded-lg p-8 max-w-7xl">
      <div>
        <p class="text-lg font-semibold text-red-600">Real Victory Groups Cancellation & Refund Policy</p>
        <p class="mt-4 text-black">
          Real Victory Groups believes in helping its customers as far as possible and has therefore adopted a liberal
          cancellation policy.
        </p>
      </div>

      <!-- Refund Policy -->
      <section class="mt-6">
        <h2 class="text-2xl font-bold text-red-600">Refund Policy</h2>
        <p class="mt-4 text-black">
          In case of any refunds approved by Real Victory Groups, the refund process will take 6-8 days for the credited
          amount to reflect in the end customer's account.
        </p>
      </section>
    </div>

  
  </div>


@endsection