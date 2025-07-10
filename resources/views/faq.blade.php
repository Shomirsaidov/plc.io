@extends('layouts.app')

@section('title')
   FAQ - PLC Auction
@endsection



@section('content')




<div class="px-8 lg:px-52 p-8 pt-0 mt-4">

    <div class="breadcrumb ">
      <h4 class="font-light text-gray-600 ">
      <a href="#" class="hover:underline">Home page</a> >
      <a href="#" class="hover:underline">About</a> 
      
      </h4>
    </div>

    



    
    <div class="">
      <h1 class="text-5xl mb-6 font-bold uppercase">Frequently Asked Questions (FAQ)</h1>
      <p class="mt-1 font-light text-2xl mb-10">
        How to calculate  the cost of delivery a car from abroad ?
        </p>
    </div>



   <div class="flex flex-col mb-5">

    <div>
        <div class="faq-item py-4 px-2  border-b-2 flex items-center justify-between">
            <h4 class="text-2xl">What are the delivery times ?</h4>
            <img src="/assets/downagle.svg" alt="">
        </div>
        <div class="collapsed hidden text-lg bg-white p-4 text-secondary mt-3">
        The cost and terms of delivery of the vehicle for each buyer are calculated individually, as they depend on many factors.
        </div>
    </div>


    <div>
        <div class="faq-item py-4 px-2  border-b-2 flex items-center justify-between">
            <h4 class="text-2xl">What are the delivery times ?</h4>
            <img src="/assets/downagle.svg" alt="">
        </div>
        <div class="collapsed hidden text-lg bg-white p-4 text-secondary mt-3">
        The cost and terms of delivery of the vehicle for each buyer are calculated individually, as they depend on many factors.
        </div>
    </div>

    <div>
        <div class="faq-item py-4 px-2  border-b-2 flex items-center justify-between">
            <h4 class="text-2xl">What are the delivery times ?</h4>
            <img src="/assets/downagle.svg" alt="">
        </div>
        <div class="collapsed hidden text-lg bg-white p-4 text-secondary mt-3">
        The cost and terms of delivery of the vehicle for each buyer are calculated individually, as they depend on many factors.
        </div>
    </div>
    
    <div>
        <div class="faq-item py-4 px-2  border-b-2 flex items-center justify-between">
            <h4 class="text-2xl">What are the delivery times ?</h4>
            <img src="/assets/downagle.svg" alt="">
        </div>
        <div class="collapsed hidden text-lg bg-white p-4 text-secondary mt-3">
        The cost and terms of delivery of the vehicle for each buyer are calculated individually, as they depend on many factors.
        </div>
    </div>

    <div>
        <div class="faq-item py-4 px-2  border-b-2 flex items-center justify-between">
            <h4 class="text-2xl">What are the delivery times ?</h4>
            <img src="/assets/downagle.svg" alt="">
        </div>
        <div class="collapsed hidden text-lg bg-white p-4 text-secondary mt-3">
        The cost and terms of delivery of the vehicle for each buyer are calculated individually, as they depend on many factors.
        </div>
    </div>



   </div>


  













</div>

@include('inc.footer')









<script src="/js/jquery.js"></script>




<script>
  



$('.faq-item').on('click', function() {
    const target = $(this).next();
    target.fadeToggle(5);
});




  



  // Initialize the international telephone input
  

</script>
@endsection
