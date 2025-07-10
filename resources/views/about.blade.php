@extends('layouts.app')

@section('title')
   ABout us - PLC Auction
@endsection



@section('content')




<div class="px-8 lg:px-52 p-8 pt-0 mt-3">

    <div class="breadcrumb ">
      <h4 class="font-light text-gray-600 ">
      <a href="#" class="hover:underline">Home page</a> >
      <a href="#" class="hover:underline">About</a> 
      
      </h4>
    </div>

    



    
    <div class="">
      <h1 class="text-5xl mb-6 font-bold uppercase">About us - PLC Action</h1>
      <p class="mt-1 font-light text-lg mb-10">
      Reliability. For more than 10 years, PLC Auction has been providing comprehensive services for the <br> delivery of cars from the <span class="underline">USA</span>, <span class="underline">Europe</span>, <span class="underline">Korea</span>, and the UAE.
      </p>
    </div>



    <div class="grid grid-cols-1 md:grid-cols-2 rounded">
      <img src="/assets/cars/about-top.jpg" class="w-full" alt="">
      <div class="bg-white p-8 flex flex-col justify-center p-8 text-secondary">
        <p class="text-xl font-light">Comfort and fast delivery. The buyer, without leaving home, can choose a car on the best marketplaces in the world, make payments through a personal account. We guarantee punctual delivery of the car to the new owner.</p>
        <p class="text-xl font-light">Any difficulties when working with the site will be solved by our technical support service.</p>
      </div>
        
    </div>




    <div class="grid grid-cols-1 md:grid-cols-2 my-8 mt-16 gap-5">
      <div class="space-y-3">
        <img src="/assets/aboutic1.svg" alt="">
        <p class="text-xl text-secondary font-light">Unique service. We deliver cars from anywhere in the world to anywhere in Europe.</p>
      </div>
      <div class="space-y-3">
        <img src="/assets/aboutic2.svg" alt="">
        <p class="text-xl text-secondary font-light">Warranty. The buyer concludes a contract for the delivery of a car, which clearly spells out the company's obligations to the client.</p>
      </div>
      <div class="space-y-3">
        <img src="/assets/aboutic3.svg" alt="">
        <p class="text-xl text-secondary font-light">Profitable price. Well-established logistics allows minimizing transportation costs, so buying a car through PLC Auction is profitable.</p>
      </div>
      <div class="space-y-3">
        <img src="/assets/aboutic4.svg" alt="">
        <p class="text-xl text-secondary font-light">Risk protection. We carry out a full check of the history and condition of the car in order to protect the client from fraudsters and unnecessary costs.</p>
      </div>
    </div>




    <div class="grid grid-cols-1 md:grid-cols-2 rounded mt-16">
      <div class="bg-white p-8 flex flex-col justify-center p-8 text-secondary">
        <p class="text-xl font-light">Turnkey delivery and thousands of satisfied customers. Thanks to our company - comprehensive services and favorable prices - thousands of customers have become owners of the car of their dreams.</p>
        <br>
        <p class="text-xl font-light">The interests of the client are above all for us. All questions on legal and technical support of delivery are solved by our specialists. The buyer only needs to choose a car and pay, wait for the specified time, get the keys and enjoy driving a good vehicle.</p>
      </div>
      <img src="/assets/cars/about-bottom.jpg" class="w-full" alt="">
    </div>



    <div class="grid grid-cols-1 md:grid-cols-2 my-12">
      <p class="p-10 text-xl font-bold">Convenience. We have created not only comfortable conditions for searching for a car, but also an opportunity for each buyer to quickly and profitably buy a car to his taste.</p>
      <div class="flex justify-center items-center">
        <button class="red-btn text-lg px-10 py-[8px] text-white brand-red-bg rounded">
              See offers


          </button>
      </div>
    </div>

















  


















  














 




 











</div>

@include('inc.modal')
@include('inc.footer')


































<script>
  document.getElementById('carousel').addEventListener('click', function() {
    document.getElementById('imageModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden'; // Disable vertical scrolling
    document.querySelector('.top-menu').style.display = 'none';
  });

  document.getElementById('closeModal').addEventListener('click', function() {
    document.getElementById('imageModal').classList.add('hidden');
    document.querySelector('.top-menu').style.display = 'flex';
    document.body.style.overflow = 'auto'; // Enable vertical scrolling
  });

  // Optional: close the modal when clicking outside the modal content
  window.addEventListener('click', function(event) {
    if (event.target == document.getElementById('imageModal')) {
      document.querySelector('.top-menu').style.display = 'flex';
      document.getElementById('imageModal').classList.add('hidden');
      document.body.style.overflow = 'auto'; // Enable vertical scrolling
    }
  });


  // Initialize the international telephone input
  

</script>
@endsection
