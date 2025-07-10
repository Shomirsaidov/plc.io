@extends('layouts.app')

@section('title')
   аукцион авто в Украине
@endsection



@section('content')




<div class="px-8 lg:px-52 p-8 pt-0 mt-3">

    <div class="breadcrumb ">
      <h4 class="font-light text-gray-600 ">
      <a href="#" class="hover:underline">Home page</a> >
      <a href="#" class="hover:underline">Delivery</a> 
      
      </h4>
    </div>

    



    
    <div class="">
      <h1 class="text-5xl mb-6 font-bold">Purchase and delivery of cars from <br> America</h1>
      <p class="mt-1 font-light text-lg mb-10">
      Many auctions in the US work to export cars to other countries.
        </p>
    </div>



    <div class="grid grid-cols-1 md:grid-cols-2 rounded ">
      <img src="/assets/delivery-top.jpg" class="w-full" alt="">
      <div class="bg-white p-8 flex flex-col justify-center p-8 text-secondary">
        <p class="text-xl font-light">The transportation process itself takes place in several stages, namely:</p>
        <br>
        <p class="text-xl font-light">Delivery to the port. It takes several days and is carried out with the help of our container ships and special trawls;

Loading into a container. The equipment collected in the port is loaded onto the ship. All necessary documents are drawn up and the vessel goes to sea;</p>
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
        <p class="text-xl font-light">Transportation by sea. It lasts 3-4 weeks depending on weather conditions and a number of other factors.</p>
        <br>
        <p class="text-xl font-light">Immediately upon arrival at the port, the car is unloaded and transported to a special parking lot. The import of a car from the States that we offer includes not only delivery, but also customs clearance. Our help will help you save time and nerves, and our services will cost a very modest amount.</p>
      </div>
      <img src="/assets/delivery-bottom.jpg" class="w-full" alt="">
    </div>







    <div class="bg-white p-8 shadow-sm  mt-12">
        <div class="flex justify-center mb-8">
            <div>
                <h2 class="text-4xl font-bold leading-tight text-neutral-700">
                    Popular queries
                </h2>
                <div class="flex shrink-0 mt-2 w-24 bg-rose-700 h-[5px]"></div>
            </div>
        </div>
    
        <div class="flex flex-wrap  my-5 mb-2 justify-between leading-relaxed">
            <a href="#" class=" text-xl font-light">Shipping cars from the USA</a>
            <a href="#" class=" text-xl font-light">Shipping cars from Korea</a>
            <a href="#" class=" text-xl font-light">Shipping cars from UAE</a>
            <a href="#" class=" text-xl font-light">Shipping cars from Europe</a>
        </div>
    </div>







    <div class="grid grid-cols-1 md:grid-cols-2 my-12">
      <p class="p-10 text-xl font-bold">Convenience. We have created not only comfortable conditions for searching for a car, but also an opportunity for each buyer to quickly and profitably buy a car to his taste.</p>
      <div class="flex justify-center items-center">
        <button class="red-btn text-lg px-10 py-[8px] text-white brand-red-bg rounded">
              See offers


          </button>
      </div>
    </div>










    <div class="bg-white pt-16">

        <div class="flex justify-center mb-4">
            <div>
                <h2 class="text-4xl font-bold leading-tight text-neutral-700">
                    Delivery terms by country
                </h2>
                <div class="flex shrink-0 mt-2 w-24 bg-rose-700 h-[5px]"></div>
            </div>
        </div>

        <div class="grid w-full grid-cols-2 md:grid-cols-4 p-6">
            <div class="space-y-5 p-3 ">
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/United States.svg" alt="">
                    <span class="text-lg">United States</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Serbia.svg" alt="">
                    <span class="text-lg" class="text-lg">Serbia</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Netherlands.svg" alt="">
                    <span class="text-lg">Netherlands</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Latvia.svg" alt="">
                    <span class="text-lg">Latvia</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Italy.svg" alt="">
                    <span class="text-lg">Italy</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/France.svg" alt="">
                    <span class="text-lg">France</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Denmark.svg" alt="">
                    <span class="text-lg">Denmark</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Switzerland.svg" alt="">
                    <span class="text-lg">Switzerland</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Austria.svg" alt="">
                    <span class="text-lg">Austria</span>
                </div>
                
            </div>
            <div class="bg-white space-y-5 p-3">
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Ukraine.svg" alt="">
                    <span class="text-lg">Ukraine</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Romania.svg" alt="">
                    <span class="text-lg">Romania</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Macedonia.svg" alt="">
                    <span class="text-lg">Macedonia</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Luxembourg.svg" alt="">
                    <span class="text-lg">Luxembourg</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Hungary.svg" alt="">
                    <span class="text-lg">Hungary</span>
                </div>
                
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Germany.svg" alt="">
                    <span class="text-lg">Germany</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Canada.svg" alt="">
                    <span class="text-lg">Canada</span>
                </div>
            </div>
            <div class="bg-white space-y-5 p-3">
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Slovakia.svg" alt="">
                    <span class="text-lg">Slovakia</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Portugal.svg" alt="">
                    <span class="text-lg">Portugal</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Montenegro.svg" alt="">
                    <span class="text-lg">Montenegro</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Lithuania.svg" alt="">
                    <span class="text-lg">Lithuania</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Croatia.svg" alt="">
                    <span class="text-lg">Croatia</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Finland.svg" alt="">
                    <span class="text-lg">Finland</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Czech Republic.svg" alt="">
                    <span class="text-lg">Czech Republic</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Bulgaria.svg" alt="">
                    <span class="text-lg">Bulgaria</span>
                </div>
            </div>
            <div class="bg-white space-y-5 p-3">
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/United Arab Emirates.svg" alt="">
                    <span class="text-lg">United Arab Emirates</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Slovenia.svg" alt="">
                    <span class="text-lg">Slovenia</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Poland.svg" alt="">
                    <span class="text-lg">Poland</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Moldova.svg" alt="">
                    <span class="text-lg">Moldova</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/South Korea.svg" alt="">
                    <span class="text-lg">South Korea</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Greece.svg" alt="">
                    <span class="text-lg">Greece</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Spain.svg" alt="">
                    <span class="text-lg">Spain</span>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="28" src="/assets/flags/Albania.svg" alt="">
                    <span class="text-lg">Albania</span>
                </div>
            </div>
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
