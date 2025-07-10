@extends('layouts.app')

@section('title')
   аукцион авто в Украине
@endsection



@section('content')




<div class="px-8 lg:px-36 p-8 pt-0 mt-4">

    <div class="breadcrumb ">
      <h4 class="font-light text-gray-600 ">
      <a href="#" class="hover:underline">Home page</a> >
      <a href="#" class="hover:underline">About</a> 
      
      </h4>
    </div>



    <div class="mt-5">
        <h1 class="text-5xl mb-3 font-bold">Reviews</h1>
        <p class="mt-1 text-secondary font-light  text-2xl mb-10">
            Real experience of collaboration with us
        </p>
    </div>





    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Card 1 -->

        @for ($i = 0; $i < 10; $i++)
        <div class="rounded bg-white overflow-hidden">
            <img src="/assets/jaguar.jpg" alt="Car Image" class="w-full h-60 object-cover">
            <div class="p-4 pt-3 space-y-4 ">
                <div class="flex items-center mb-2">
                    <img src="/assets/fivestars.png" width="130" alt="">
                    <span class="ml-auto text-sm text-gray-500 ">10 October, 2024</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="30" class="rounded" src="/assets/usa.png" alt="">
                    <p class="text-secondary text-lg">Matush from Poland</p>
                </div>
                <h2 class="font-bold text-lg">Jaguar XF 2017 from USA to Poland</h2>
                <p class="text-gray-600 text-lg mt-2">After a successful deal at work, it was time to upgrade my steel horse...</p>
                <button class="text-lg w-full text-lg py-[8px] text-grey-500 hover:bg-gray-500 hover:text-white rounded" style="border: 1.5px rgb(125, 125, 125) solid;">Search vehicle</button>
            </div>
        </div>
        @endfor
        
        
    </div>




    
  






</div>

@include('inc.footer')













<script>
  






  



  // Initialize the international telephone input
  

</script>
@endsection
