@extends('layouts.app')

@section('title')
  {{ $car->vin }} {{ $car->make }} {{ $car->model }} 
@endsection



@section('content')




  




  <div class=" lg:px-52 pt-0">

    <div class="breadcrumb mt-2 md:mb-0 p-2 md:p-0">
      <h4 class="font-light text-gray-600 ">
      <a href="#" class="hover:underline">Home page</a> >
      <a href="#" class="hover:underline">Search Vehicle</a> >
      <a href="#" class="hover:underline">From {{ $car->location }} </a> >
      <a href="#" class="hover:underline">{{ $car->make }}</a> >
      <a href="#" class="hover:underline">{{ $car->model }}</a> >
      {{ $car->year }} {{ $car->make }} {{ $car->model }} 
      </h4>
    </div>

    

    <div class="p-2 md:p-0">
      <h1 class="text-3xl mb-1 font-bold uppercase">{{ $car->make }} {{ $car->model }}, {{ $car->year }}  </h1>

      <div class="flex flex-col space-y-3 md:space-y-0 md:flex-row md:space-x-2">
        <div class="text-center p-2 border border-black rounded">
          <span class="font-bold text-xl">Vehicle</span>
          <span class="text-gray-600 text-xl">{{ $car->lot }} </span>
        </div>
        <div class="text-center p-2  border border-black rounded">
          <span class="font-bold text-xl">VIN</span>
          <span class="text-gray-600 text-xl">{{ $car->vin }} </span>
        </div>
        <div class="hidden md:block p-2 brand-red-border red-btn rounded">
          <span class="font-light text-xl">VIN Report</span>
        </div>
      </div>


    </div>








    <div class="relative">
    <!-- Trigger Button -->
        

        <!-- Carousel -->
        <div id="carousel" onclick="closeCarousel(event)" class="hidden fixed inset-0 bg-black bg-opacity-80 flex flex-col items-center justify-center " style="z-index: 1000;">
            <!-- Close Button -->
            <button
                onclick="closeCarousel()"
                class="absolute top-4 right-4 text-white text-2xl hover:text-gray-300"
            >
                ✕
            </button>

            <!-- Main Image -->
            <div class="flex justify-center items-center w-full">
                <img id="carousel-image" src="{{ '/storage/' . json_decode($car->images)[0] }}" class="max-h-[80vh] max-w-[90vw] object-contain" />
            </div>

            <!-- Thumbnail Images -->
            <div class="flex space-x-4 mt-4 overflow-x-auto px-4">
                @foreach (json_decode($car->images) as $index => $path)
                    <img
                        src="{{ '/storage/' . $path }}"
                        data-index="{{ $index }}"
                        class="thumbnail w-16 h-16 object-cover border-2 border-transparent cursor-pointer hover:border-white"
                        onclick="switchImage(this)"
                    />
                @endforeach
            </div>

        </div>



    </div>















  <div class="grid md:grid-cols-2 gap-4 mt-2 mb-4">
    <!-- Left Side: Image Gallery -->
    <div class="">
        <div class="relative">
            <img onclick="showCarousel(0)" src="{{ '/storage/' . str_replace('\\', '/', json_decode($car->images)[0]) }}" class="w-full h-auto rounded-lg" alt="Car Image">
            <div class="absolute top-2 right-2 bg-white px-2 py-1 text-sm font-bold rounded shadow">{{ $car->location }}</div>
        </div>
        <div class="flex mt-2 space-x-2 overflow-x-auto">
            @foreach (json_decode($car->images) as $index => $path)
                <img onclick="showCarousel({{ $index }})" 
                     src="{{ '/storage/' . str_replace('\\', '/', $path) }}" 
                     class="w-30 h-20 object-cover rounded-lg" alt="Thumbnail">
            @endforeach
        </div>
    </div>

    <!-- Right Side: Info Section & Buy Now -->
    <div class=" flex flex-col md:flex-row  md:space-x-3">
        <div class="p-3 text-lg bg-white rounded-lg flex-1">
            <div class="border-b-2 pb-4 space-y-2">
                <div class="flex items-center space-x-2">
                    <img src="/assets/clock.svg" width="18" alt="">
                    <p class="text-gray-900">Location: <span class="font-semibold">{{ $car->location }}</span></p>
                </div>
                <div class="flex items-center space-x-2">
                    <img src="/assets/clock.svg" width="18" alt="">
                    <p class="text-gray-900">Updated: <span class="font-semibold">{{ $car->date }}</span></p>
                </div>
            </div>
            <div class="mt-2 space-y-2 border-b-2 py-3">
                <div class="flex space-x-2 items-center">
                    <img width="18" src="/assets/r.svg" alt="">
                    <span class="font-light">Run & Drive</span>
                </div>
                <div class="flex space-x-2 items-center">
                    <img width="18" src="/assets/tick.svg" alt="">
                    <span class="text-green-600 font-light">{{ $car->damages }}</span>
                </div>
            </div>
            <div class="border-b-2 py-3">
                <div class="flex space-x-2 items-center">
                    <img width="18" src="/assets/icons/coin-ico.png" alt="">
                    <p class="">Sale type: <span class="text-gray-900 font-semibold">{{ $car->sale_type }}</span></p>
                </div>
                <div class="flex space-x-2 items-center">
                    <img width="18" src="/assets/icons/doc-ico.png" alt="">
                    <p class="">Documents type: <span class="text-gray-900 font-semibold">{{ $car->doc_type }}</span></p>
                </div>
            </div>

            <div class="mt-4">
                <div class="flex items-center space-x-2">
                    <img width="20" src="https://plc.auction/svg/lot.svg?id=bbc75c4e61348d756896f32e4d8689c6#price-mmr" alt="">
                    <p class="text-gray-900">Minimum sale price: <span class="font-semibold">${{ $car->min_price }} USD</span></p>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="20" src="https://plc.auction/svg/lot.svg?id=bbc75c4e61348d756896f32e4d8689c6#price-mmr" alt="">
                    <p class="text-gray-900">AVG sale price: <span class="font-semibold">${{ $car->avg_price }} USD</span></p>
                </div>
                <div class="flex items-center space-x-2">
                    <img width="20" src="https://plc.auction/svg/lot.svg?id=bbc75c4e61348d756896f32e4d8689c6#price-mmr" alt="">
                    <p class="text-gray-900">Maximum sale price: <span class="font-semibold">${{ $car->max_price }} USD</span></p>
                </div>
            </div>

            <button onclick="openModal()" class="mt-4 w-full px-10 py-[8px] black-btn border border-black rounded">Order an inspection</button>
        </div>

        <!-- Buy Now Section -->
        <div class=" bg-white flex flex-col justify-between  rounded-lg text-center">
            <h3 class="text-xl font-bold p-3 px-7 border-b-2">{{ 'On Approval' }}</h3>
            <div class="p-16">
                <p class="text-lg font-semibold mt-2">Buy it now price: <br><span class="text-gray-800">${{ $car->avg_price }} USD</span></p>
            </div>
            <div class="p-3 mt-4 flex flex-col space-y-1">
                <button onclick="openModal()" class="text-lg px-10 py-[8px] black-btn border border-black rounded">Book</button>
                <button onclick="openModal()" class="red-btn text-lg px-10 py-[8px] text-white brand-red-bg rounded">Buy it now</button>
            </div>
        </div>
    </div>
</div>








  <div class="p-6 bg-white rounded mb-3">
    <h2 class="text-2xl font-bold pb-4 mb-4 border-b-2">Vehicle characteristics</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-gray-700">
        <div class="flex items-center space-x-2">
            <img src="/assets/icons/make.png" width="24" alt="">
            <span><strong class="font-semibold">Make:</strong> <a href="#" class="underline">{{ $car->make }}</a></span>
        </div>
        <div class="flex items-center space-x-2">
            <img src="/assets/icons/make.png" width="24" alt="">
            <span><strong class="font-semibold">Version:</strong> <a href="#" class="underline">{{ $car->model }}</a></span>
        </div>
        <div class="flex items-center space-x-2">
            <img src="/assets/icons/year.png" width="24" alt="">
            <span><strong class="font-semibold">Year:</strong> <a href="#" class="underline">{{ $car->year }}</a></span>
        </div>
        <div class="flex items-center space-x-2">
            <img src="/assets/icons/make.png" width="24" alt="">
            <span><strong class="font-semibold">Body type:</strong> <span class="underline">{{ $car->body }}</span></span>
        </div>
        <div class="flex items-center space-x-2">
            <img src="/assets/icons/mileage.png" width="24" alt="">
            <span><strong class="font-semibold">Mileage:</strong> {{ $car->mileage }}</span>
        </div>
        <div class="flex items-center space-x-3 ">
            <img src="/assets/icons/fuel.png" width="24" alt="">
            <span><strong class="font-semibold">Fuel type:</strong> <a href="#" class="underline">{{ $car->fuel_type }}</a></span>
        </div>
        <div class="flex items-center space-x-2">
            <img src="/assets/icons/trans.png" width="24" alt="">
            <span><strong class="font-semibold">Transmission:</strong> <a href="#" class="underline">{{ $car->transmission }}</a></span>
        </div>
        <div class="flex items-center space-x-2">
            <img src="/assets/icons/drive.png" width="24" alt="">
            <span><strong class="font-semibold">Drive:</strong> <a href="#" class="underline">{{ $car->drive }}</a></span>
        </div>
        <div class="flex items-center space-x-2">
            <img src="/assets/icons/keys.png" width="24" alt="">
            <span><strong class="font-semibold">Keys:</strong> {{ $car->keys_ }}</span>
        </div>
        <div class="flex items-center space-x-2">
            <img src="/assets/icons/hp.png" width="24" alt="">
            <span><strong class="font-semibold">Engine capacity:</strong> <a href="#" class="">{{ $car->engine }}</a></span>
        </div>
        <div class="flex items-center space-x-2">
            <img src="/assets/icons/color.png" width="24" alt="">
            <span><strong class="font-semibold">Color:</strong> <a href="#" class="underline">{{ $car->color }}</a></span>
        </div>
        <div class="flex items-center space-x-2">
            <img src="/assets/icons/width.png" width="24" alt="">
            <span><strong class="font-semibold">Width:</strong> <a href="#" class="">{{ $car->width }}</a></span>
        </div>
        <div class="flex items-center space-x-2">
            <img src="/assets/icons/length.png" width="24" alt="">
            <span><strong class="font-semibold">Length:</strong> <a href="#" class="">{{ $car->length }}</a></span>
        </div>
        <div class="flex items-center space-x-2">
            <img src="/assets/icons/height.png" width="24" alt="">
            <span><strong class="font-semibold">Height:</strong> <a href="#" class="">{{ $car->height }}</a></span>
        </div>
        <div class="flex items-center space-x-2">
            <img src="/assets/icons/weight.png" width="24" alt="">
            <span><strong class="font-semibold">Weight:</strong> <a href="#" class="">{{ $car->weight }}</a></span>
        </div>
        <div class="flex items-center space-x-2">
            <img src="/assets/icons/seats.png" width="24" alt="">
            <span><strong class="font-semibold">Seats:</strong> <a href="#" class="">{{ $car->seats }}</a></span>
        </div>
        <div class="flex items-center space-x-2">
            <img src="/assets/icons/speed.png" width="24" alt="">
            <span><strong class="font-semibold">Max Speed:</strong> <a href="#" class="">{{ $car->speed }}</a></span>
        </div>
    </div>
</div>













  <div class="p-6 bg-white rounded mb-3">
      <h2 class="text-2xl font-bold pb-4 border-b-2 mb-4">Estimated price calculation of the car</h2>
      
      


      <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

        <div class="mb-6 space-y-3">
          <h3 class="font-bold text-lg">Delivery details</h3>
          <p class="text-gray-600 text-sm mb-4">
              Please note that at this stage we calculate the approximate cost of delivery, and when making a purchase and delivery, it may differ slightly.
          </p>


            <div>
                <label class="block font-semibold mb-2 text-lg">Select country to deliver</label>
                <div class="flex items-center border rounded-lg p-2">
                    <select class="w-full border-none focus:ring-0">
                        <option>Tajikistan</option>
                    </select>
                </div>
            </div>
            <div>
                <label class="block font-semibold mb-2 text-lg">Select delivery city or port</label>
                <div class="flex items-center border rounded-lg p-2">
                    <select class="w-full border-none focus:ring-0">
                        <option>Dushanbe</option>
                    </select>
                </div>
            </div>
        </div>



        <div class="">
          <div class="">
              <h3 class="font-bold text-lg border-b-2 py-3">Vehicle price</h3>
              <div class="flex justify-between py-3 border-b-2"><span>Vehicle price</span><strong class="font-semibold">{{ $car->avg_price }} USD</strong></div>
              <div class="flex justify-between py-3 border-b-2"><span>Cost of delivery</span><strong class="font-semibold">6 270 USD</strong></div>
              <div class="flex justify-between py-3 border-b-2"><span>PLC Auction services fee</span><strong class="font-semibold">500 USD</strong></div>
              <div class="flex justify-between py-3 border-b-2"><span>Loading charge</span><strong class="font-semibold">554 USD</strong></div>
              <div class="flex justify-between py-3 border-b-2"><span>Transaction Fees</span><strong class="font-semibold">222 USD</strong></div>
              <div class="flex justify-between py-3 border-b-2"><span>Documentation Fees</span><strong class="font-semibold">332 USD</strong></div>
              <div class="mt-2">
                  

                  

                  <label class="flex items-center justify-between space-x-2 py-3 border-b-2">
                    <div class="space-x-2">
                      <input type="checkbox" class="rounded border-gray-300"><span>Vehicle Cover </span>
                    </div> 
                    <span>200 USD</span>
                  </label>


              </div>
          </div>
      </div>




      </div>
      
      
      
      
      
      <div class="mt-6 border-t pt-4">
          <p class="text-gray-600 text-sm">We have selected the best route for delivery to the selected city. You can also always change the intermediate delivery points when ordering a car.</p>
          <div class="flex items-center flex-wrap space-x-3 mt-2">

            <div class="rounded-full border border-black p-2">
              <img src="/assets/icons/globe.svg" alt="">
            </div>

            <div class="text-xl">Germany,DE</div>

            <img src="/assets/icons/arrow-right.svg" alt="">


            <div class="rounded-full border border-black p-2">
              <img src="/assets/icons/anchor.svg" alt="">
            </div>
            <div class="text-xl">Rotterdam,NL</div>
              
            <img src="/assets/icons/arrow-right.svg" alt="">
 

            <div class="rounded-full border border-black p-2">
              <img src="/assets/icons/anchor.svg" alt="">
            </div>
            <div class="text-xl">Poti,Ge</div>

            <img src="/assets/icons/arrow-right.svg" alt="">

            <div class="rounded-full border border-black p-2">
              <img src="/assets/icons/location.svg" alt="">
            </div>
            <div class="text-xl">Dushanbe,TJ</div>

          </div>
      </div>
      
      <div class="mt-4 flex justify-between font-semibold text-2xl border-t-2 pt-4 ">
          <span class="text-3xl">Total amount</span>
          <span class="text-3xl">{{ $car->avg_price + 6270 }} USD</span>
      </div>
  </div>


















  <div class="p-6 bg-white rounded mb-3">
    <div class="flex justify-between items-center text-gray-700">
        <div class="">
          <p class="font-semibold text-lg">
          If you have any questions please contact us.
          </p>
          <p class="font-semibold text-lg">Our managers will answer all your questions in the near future</p>
        </div> 
        <button class="flex items-center space-x-2 text-lg px-10 py-[8px] brand-red-border red-btn  rounded ">
          <div class="text-lg">Ask a question</div>
          <!-- <img src="/assets/r.svg" width="20" alt=""> -->
        </button>

    </div>
  </div>










  <div class="my-8  text-white  items-center">
        <div class="brand-black-bg rounded grid grid-cols-1 md:grid-cols-2 px-8 py-3 items-center">
            <div>
                <div class="text-3xl font-bold">You can buy this vehicle right now!</div>
            </div>
            <div class="grid grid-cols-2 space-x-4  md:mt-0">
                <button onclick="openModal()" class="red-btn font-light text-lg px-6 py-[8px] text-white brand-red-bg rounded">
                   Buy it now : {{ $car->avg_price }} USD
                </button>
                <button onclick="openModal()" class="text-lg px-10 py-[8px] hover:bg-gray-200 hover:text-black black-btn border border-gray-800 rounded">
                    Book
                </button>
            </div>
        </div>
        
  </div>


  <div class="p-5 md:p-10 bg-white rounded mb-3 space-y-2">

    <h3 class="text-3xl border-b pb-3 font-bold">Additional characteristics</h3>
    <p class="text-secondary text-xl mb-4">Your attention is presented to a used car Hyundai 포터 Ⅱ 2023 of the year of manufacture., which you can buy with the help of one of the largest used car delivery companies - PLC Auctions.</p>


    <h3 class="text-3xl border-b pb-3 font-bold">Conditions for the purchase of the lot</h3>
    <p class="text-secondary text-xl">At the moment, the cost of the lot is 0 USD, however, it may change with the advent of new bids on the auction. Also, this car can be redeemed without participation in the auction at the price of 15 324 USD. The final price of the car or the turnkey price is formed taking into account the cost of its delivery to the customer, the costs of paperwork and auction fees. 

PLC Auctions undertakes to deliver the car to any country in Europe. Delivery times depend on the location of the lot and the address specified by the customer.

Find out more detailed information on our website: answers to all frequently asked questions, car delivery, and other features of buying a car with the help of our company.</p>

  </div>














  </div>





  <div class="mb-10">
    @include('inc.carlist')
  </div>











@include('inc.modal')
@include('inc.footer')


























<script src="/js/jquery.js"></script>







<script>
  



  // Get the images array in a format that's usable in JavaScript
let images = @json($car->images); // This should already return a valid array
images = JSON.parse(images);
images = images.map(image => '/storage/' + image);
console.log(images); // Check if images are loaded correctly

let currentIndex = 0; // Initialize the current index at the start

// Function to show the carousel with the selected index
function showCarousel(index) {
    currentIndex = index;

    // Set the main image
    $('#carousel-image').attr('src', images[currentIndex]);

    // Highlight the active thumbnail
    $(".thumbnail").each(function(i) {
        $(this).toggleClass("border-white", i === currentIndex);
    });

    // Show carousel and disable scrolling
    $('#carousel').removeClass('hidden');
    $('body').css('overflow', 'hidden');

    // Hide all elements with the "top-blocks" class
    $('.top-blocks').fadeToggle(1);
}

// Function to close the carousel
function closeCarousel(event) {
    // Prevent closing when clicking on carousel content (image or thumbnails)
    if ($(event.target).closest('#carousel-image, .thumbnail').length) {
        return;
    }

    // Hide carousel and enable scrolling
    $('#carousel').addClass('hidden');
    $('body').css('overflow', 'auto');

    // Show all elements with the "top-blocks" class
    $('.top-blocks').fadeToggle(1);
}

// Function to switch image when a thumbnail is clicked
function switchImage(thumbnail) {
    currentIndex = parseInt($(thumbnail).data('index'), 10);

    // Set the main image
    $('#carousel-image').attr('src', images[currentIndex]);

    // Update active thumbnail border
    $(".thumbnail").removeClass("border-white");
    $(thumbnail).addClass("border-white");
}

// Keydown event for navigation
$(document).keydown(function(event) {
    if (!$('#carousel').hasClass('hidden')) {
        if (event.key === "ArrowRight") {
            currentIndex = (currentIndex + 1) % images.length;
        } else if (event.key === "ArrowLeft") {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
        }

        // Update the main image and active thumbnail
        $('#carousel-image').attr('src', images[currentIndex]);

        $(".thumbnail").each(function(i) {
            $(this).toggleClass("border-white", i === currentIndex);
        });
    }
});








  

</script>
@endsection
