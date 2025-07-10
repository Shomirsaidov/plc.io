@extends('layouts.app')


@section('title')

    Buy Used cars - PLC Auction

@endsection

@section('meta')

<meta property="og:title" content="PLC UA" />
<meta property="og:description" content="PLС-UA аукцоны авто из Кореи, США, Европы, Китая, ОАЭ " />
<meta property="og:image" content="{{ url()->current() . "/assets/brand/logo.png" }}" />
<meta property="og:url" content="{{ url()->current() }}" />

@endsection

@section('content')


    

    
    
<header
  class="flex relative flex-col items-center px-20 pt-28 w-full min-h-[867px] max-md:px-5 max-md:pt-24 max-md:max-w-full"
>
  <img
    src="https://cdn.builder.io/api/v1/image/assets/TEMP/27787acbe9f870383a535aa84cc7a16a9c9a83ae4ebbdc61873614de841db9e1?placeholderIfAbsent=true"
    alt="Vehicle Auction Background"
    class="object-cover absolute inset-0 size-full"
    role="presentation"
    style="opacity: 0.7;"
  />

  <main
    class="flex relative flex-col items-center w-full max-w-[1300px] max-md:max-w-full"
  >
    <h1
      class="text-5xl font-bold leading-tight text-center text-neutral-700 max-md:max-w-full"
    >
      International Vehicle Auction
    </h1>

    <div class="flex shrink-0 mt-4 bg-rose-700 h-[5px] w-[90px]"></div>

    <p class="mt-3 text-xl leading-tight text-center text-neutral-700">
      worldwide shipping
    </p>

    <form
      method="GET"
      action="/search"
      class="flex flex-wrap gap-5 mt-24 max-w-full w-[860px] max-md:mt-10"
    >
      <label class="my-auto text-xl font-bold text-neutral-700">
        Searching for something specific?
      </label>
      <div class="flex items-center px-7 py-2 rounded bg-white border border-solid basis-0 border-zinc-200 focus:outline-none focus:ring-1 focus:border-gray-400 flex-1">
        <input
        type="search"
        name="query"
        placeholder="Enter Brand / Model / VIN / Lot"
        class="flex-1 overflow-hidden outline-none grow shrink-0 text-lg bg-white "
        aria-label="Search vehicles"
      />
      <img width="20" src="./assets/search-grey.svg" alt="">
      </div>
      

    </form>

    <section
      class="flex flex-col self-stretch px-20 pt-6 pb-12 mt-12 w-full bg-white rounded shadow-xl max-md:px-5 max-md:mt-10 max-md:max-w-full"
    >
      <p
        class="mr-24 text-base leading-6 text-gray-500 max-md:mr-2.5 max-md:max-w-full"
      >
        In the catalog, you can easily select a car for yourself using filters
        (body type, model, year of manufacture), taking into account various
        <br />
        parameters and characteristics.
      </p>

      <h2
        class="self-start mt-6 text-xl font-bold leading-tight text-neutral-700"
      >
        Select vehicle type
      </h2>

      <div class="mt-6 max-md:max-w-full">
        <div class="flex items-stretch gap-1 max-md:flex-col">
          <div class="w-3/12 max-md:ml-0 max-md:w-full">
            <div
              class="grow flex flex-col items-center space-y-3  px-16 pt-10 pb-16 border border-black w-full text-base text-center whitespace-nowrap bg-white rounded text-neutral-700 max-md:px-5 max-md:pt-24 max-md:mt-3"
            >
                <img src="./assets/auto-ic.svg" alt="" width="86">
                

                <div>
                    <div class="text-lg">Autos</div>
                </div>

              
            </div>
        </div>

          <div class="ml-5 w-3/12 max-md:ml-0 max-md:w-full cursor-not-allowed">
            <div
              class="grow flex flex-col items-center space-y-3  px-16 pt-12 pb-8 w-full text-base text-center whitespace-nowrap bg-white rounded border border-solid border-zinc-200 text-neutral-700 max-md:px-5 max-md:pt-24 max-md:mt-3"
            >
            <img src="./assets/truck.svg" alt="" width="86">
                <div>
                    <div class="text-lg">Trucks</div>
                    <div class="text-lg text-gray-500 font-light">Coming soon</div>
                </div>
            </div>
        </div>

          <div class="ml-5 w-3/12 max-md:ml-0 max-md:w-full cursor-not-allowed">
            <div
              class="grow flex flex-col items-center space-y-3  px-16 pt-12 pb-8 w-full text-base text-center whitespace-nowrap bg-white rounded border border-solid border-zinc-200 text-neutral-700 max-md:px-5 max-md:pt-24 max-md:mt-3"
            >
            <img src="./assets/boat.svg" alt="" width="86">
            
                <div>
                    <div class="text-lg">Boats</div>
                    <div class="text-lg text-gray-500 font-light">Coming soon</div>
                </div>

              
            </div>
        </div>

        <div class="ml-5 w-3/12 max-md:ml-0 max-md:w-full cursor-not-allowed">
            <div
              class="grow flex flex-col items-center space-y-3  px-16 pt-12 pb-7 w-full text-base text-center whitespace-nowrap bg-white rounded border border-solid border-zinc-200 text-neutral-700 max-md:px-5 max-md:pt-24 max-md:mt-3"
            >
            <img src="./assets/moto.svg" alt="" width="86">
                
                <div>
                    <div class="text-lg">Moto</div>
                    <div class="text-lg text-gray-500 font-light">Coming soon</div>
                </div>

              
            </div>
        </div>

        </div>
      </div>

      <h2
        class="self-start mt-16 text-xl font-bold leading-tight text-neutral-700 max-md:mt-10"
      >
        Filters
      </h2>

      <form
        class="flex flex-wrap gap-3 items-start mt-7 text-base text-black max-md:max-w-full font-light"
      >
        <select
          class="text-lg text-gray-500 outline-none flex-1 px-3.5 py-3.5 whitespace-nowrap bg-white rounded border border-solid border-zinc-200 max-md:pr-5"
        >
          <option value="" class="hover:bg-red-700 p-3">Make</option>
          <option value="" class="hover:bg-red-700 p-3">Make</option>

        </select>

        <select
          class="text-lg text-gray-500 outline-none flex-1 px-3.5 py-3.5 whitespace-nowrap bg-white rounded border border-solid border-zinc-200 max-md:pr-5"
        >
          <option value="" class="hover:bg-red-700 p-2">Model</option>
          <option value="" class="hover:bg-red-700 p-2">Make</option>

        </select>

        <select
          class="text-lg text-gray-500 outline-none flex-1 px-3.5 py-3.5 whitespace-nowrap bg-white rounded border border-solid border-zinc-200 max-md:pr-5"
        >
          <option value="" class="hover:bg-red-700 p-2">from 1 y</option>
          <option value="" class="hover:bg-red-700 p-2">Make</option>

        </select>

        <select
          class="text-lg text-gray-500 outline-none flex-1 px-3.5 py-3.5 whitespace-nowrap bg-white rounded border border-solid border-zinc-200 max-md:pr-5"
        >
          <option value="" class="hover:bg-red-700 p-2">from 1 y</option>
          <option value="" class="hover:bg-red-700 p-2">Make</option>

        </select>

        <button
          type="submit"
          class="flex-1 red-btn text-lg px-10 py-[10px] text-white brand-red-bg rounded"
        >
          Search
        </button>
      </form>
    </section>
  </main>
</header>








    

    @include('inc.carlist')


    <div class="flex flex-col items-center justify-center mb-12">
        <h2 class="text-4xl font-bold leading-tight text-center text-neutral-700">
            How it works
        </h2>
        <div class="flex shrink-0 mt-4 w-14 bg-rose-700 h-[5px]"></div>
    </div>
    


    <div style="height: 319px;" class=" overflow-y-scroll snap-y snap-mandatory mb-4">
        <div class="grid grid-cols-1 md:grid-cols-2 justify-between px-8 lg:px-52 mb-8 snap-start">
            <div class="bg-white p-12 rounded shadow-sm">
                <h3 class="text-2xl font-bold mb-3">1. Quick registration</h3>
                <p class="text-lg text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi vitae obcaecati porro consectetur excepturi reprehenderit alias quisquam asperiores nulla exercitationem.</p>
            </div>
            <div class="flex justify-center">
                <img src="./assets/slider1.png" alt="" style="height: 340px;">
            </div>
        </div>
    
        <div class="grid grid-cols-1 md:grid-cols-2 justify-between px-8 lg:px-52 mb-8 snap-start">
            <div class="bg-white p-12 rounded shadow-sm">
                <h3 class="text-2xl font-bold mb-3">2. Secure your account</h3>
                <p class="text-lg text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi vitae obcaecati porro consectetur excepturi reprehenderit alias quisquam asperiores nulla exercitationem.</p>
            </div>
            <div class="flex justify-center">
                <img src="./assets/slider2.png" alt="" style="height: 340px;">
            </div>
        </div>
    
        <div class="grid grid-cols-1 md:grid-cols-2 justify-between px-8 lg:px-52 mb-8 snap-start">
            <div class="bg-white p-12 rounded shadow-sm">
                <h3 class="text-2xl font-bold mb-3">3. Start using the platform</h3>
                <p class="text-lg text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi vitae obcaecati porro consectetur excepturi reprehenderit alias quisquam asperiores nulla exercitationem.</p>
            </div>
            <div class="flex justify-center">
                <img src="./assets/slider3.png" alt="" style="height: 340px;">
            </div>
        </div>
    </div>


    <div class="my-10 mt-16  text-white  items-center px-8 lg:px-52">
        <div class="brand-black-bg rounded grid grid-cols-1 md:grid-cols-2 p-10">
            <div>
                <div class="text-5xl font-semibold mb-4">We have what you need!</div>
                <p class="text-lg">Take your lots. With us it is quick, easy, reliable.</p>
            </div>
            <div class="flex justify-center items-center">
                <button class="red-btn font-light text-lg px-28 py-[8px] text-white brand-red-bg rounded">
                    See offers
        
        
                </button>
            </div>
        </div>
        
    </div>




    <div class="px-8 lg:px-52 p-8 mb-20 rounded ">
      <div class="bg-white gap-4 p-12 rounded ">
        <div class="flex justify-center mt-8 mb-10">
          <div class="flex flex-col items-start justify-start my-8">
              <h2 class="text-4xl font-bold leading-tight text-center text-neutral-700">
                  Why choose PLC Auction
              </h2>
              <div class="flex shrink-0 mt-4 w-24 bg-rose-700 h-[5px]"></div>
          </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3">
            <div class="space-y-6">
                <img src="./assets/shield.svg" width="70" alt="">
                <h3 class="text-2xl font-bold mb-3">Quick registration</h3>
                <p class="text-lg text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi vitae obcaecati porro consectetur excepturi reprehenderit alias quisquam asperiores nulla exercitationem.</p>

            </div>
            <div class="space-y-6">
                <img src="./assets/planet.svg" width="70" alt="">
                <h3 class="text-2xl font-bold mb-3">Quick registration</h3>
                <p class="text-lg text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi vitae obcaecati porro consectetur excepturi reprehenderit alias quisquam asperiores nulla exercitationem.</p>

            </div>
            <div class="space-y-6">
                <img src="./assets/idea.svg" width="70" alt="">
                <h3 class="text-2xl font-bold mb-3">Quick registration</h3>
                <p class="text-lg text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi vitae obcaecati porro consectetur excepturi reprehenderit alias quisquam asperiores nulla exercitationem.</p>

            </div>
        </div>

      </div>
        
        
    </div>



    





    



    @include('inc.modal')
    @include('inc.footer')












@endsection