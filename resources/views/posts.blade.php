@extends('layouts.app')

@section('title')
   аукцион авто в Украине
@endsection



@section('content')




<div class="px-8 lg:px-52 p-8 pt-0 mt-4">

    <div class="breadcrumb ">
      <h4 class="font-light text-gray-600 ">
      <a href="#" class="hover:underline">Home page</a> >
      <a href="#" class="hover:underline">Posts</a> 
      
      </h4>
    </div>

    


    <div class="flex flex-col mb-8">
        <h2 class="text-5xl font-bold leading-tight text-neutral-700">
            Blog about cars
        </h2>
        <div class="flex shrink-0 mt-2 w-24 bg-rose-700 h-[5px]"></div>
    </div>



    <div class="grid grid-cols-1 md:grid-cols-2 bg-white shadow-md rounded-lg overflow-hidden">
    <!-- Image Section -->
        <div class="">
            <img src="/assets/banner-blog.jpg" style="max-height: 246px;" alt="Car Image" class="w-full object-cover">
        </div>
    
    <!-- Content Section -->
        <div class="p-6 ps-10 flex flex-col justify-between">
            <div class="space-y-4">
                <h2 class="text-xl font-bold text-gray-800">Spanish car brands: overview, best, emblems</h2>
                <p class="text-gray-500 text ">26 January, 2025</p>
                <p class="text-secondary text-lg ">
                    The most famous Spanish car brands ✅ Their history, features ✅ Emblems ✅
                    A selection of the best models of Spanish production.
                </p>
            </div>
            
            <div class="border-t-2 mt-0 pt-4 flex justify-between items-center">
                <button class="text-gray-500 flex items-center space-x-2">
                    <img src="/assets/share-icon.svg" alt="">
                </button>
                <button class="text-lg px-12 text-lg py-[8px] hover:bg-gray-400 hover:text-white rounded" style="border: 1.5px rgb(136, 136, 136) solid; color: rgb(136, 136, 136);">Read (10 min)</button>
            </div>
        </div>


    </div>



    <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-16">

        @for($i = 0; $i < 8; $i++)
        <div class="flex flex-col bg-white rounded-lg overflow-hidden">
            <!-- Image Section -->
                <div class="">
                    <img src="/assets/banner-blog.jpg" style="max-height: 246px;" alt="Car Image" class="w-full object-cover">
                </div>
            
            <!-- Content Section -->
                <div class="p-3 ps-10 flex flex-col justify-between">
                    <div class="space-y-4">
                        <h2 class="text-xl font-bold text-gray-800">Spanish car brands: overview, best, emblems</h2>
                        <p class="text-gray-500 text ">26 January, 2025</p>
                        <p class="text-secondary text-lg ">
                            All about the car ID 6 ✓Characteristics, equipment and their description ✓Owner reviews ✓Comparing Volkswagen ID.6 with Tesla Model X
                        </p>
                    </div>
                    
                    <div class="mt-4 pt-4 flex justify-between items-center">
                        <button class="text-gray-500 flex items-center space-x-2">
                            <img src="/assets/share-icon.svg" alt="">
                        </button>
                        <button class="text-lg px-2 text-lg py-[8px] hover:bg-gray-400 hover:text-white rounded" style="border: 1.5px rgb(136, 136, 136) solid; color: rgb(136, 136, 136);">Read (10 min)</button>
                    </div>
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
