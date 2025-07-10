<section class="flex flex-col items-center px-8 lg:px-52 space-x-2 py-12">
  <h2 class="text-4xl font-bold leading-tight text-center text-neutral-700">
    Hot lots
  </h2>
  <div class="flex shrink-0 mt-4 w-14 bg-rose-700 h-[5px]"></div>

  <div class="self-stretch mt-14 w-full max-md:mt-10 max-md:max-w-full" data-el="div-1">
    <div class="flex gap-5 max-md:flex-col">
      @foreach ($recentCars as $recent)
        <article class="w-[33%] max-md:ml-0 max-md:w-full border">
          <div class="flex text-lg overflow-hidden flex-col pt-px pb-4 mx-auto w-full text-base bg-white rounded max-md:mt-10">
            
            {{-- Main Image --}}
            <img
              src="{{ '/storage/' . str_replace('\\', '/', json_decode($recent->images)[0] ?? '') }}"
              alt="{{ $recent->make }} {{ $recent->model }}"
              class="object-contain w-full aspect-[1.52]"
            />

            {{-- Sale type --}}
            <div class="px-2.5 text-lg py-3.5 font-bold text-white bg-neutral-700 max-md:pr-5">
              {{ $recent->sale_type ?? 'On Approval' }}
            </div>

            {{-- Title & tags --}}
            <div class="flex text-lg flex-col self-start mt-4 ms-4 font-bold text-neutral-700 max-md:ml-2.5 space-y-3">
              <h3>{{ $recent->make }} {{ $recent->model }}<br>{{ $recent->year }}</h3>

              <div class="flex space-x-3">
                <img src="/assets/r.svg" width="22" alt="">
                <p class="self-center text-lg font-light">Run & Drive</p>
              </div>

              <div class="flex space-x-3">
                <img src="/assets/tick.svg" width="22" alt="">
                <p class="self-center text-lg font-light">{{ $recent->damages ? 'Damaged' : 'Not damaged' }}</p>
              </div>
            </div>

            {{-- Fuel, Transmission, Speed, Drive --}}
            <div class="p-3 text-lg">
              <div class="border rounded space-y-4 p-2 px-4">
                <div class="flex items-center justify-between">
                  <div class="flex items-center space-x-3">
                    <img src="/assets/fuel2.svg" width="20" alt="">
                    <div class="text-lg text-gray-600">{{ $recent->fuel_type ?? 'N/A' }}</div>
                  </div>
                  <div class="flex items-center space-x-3">
                    <img src="/assets/trans.svg" width="22" alt="">
                    <div class="text-lg text-gray-600">{{ $recent->transmission ?? 'N/A' }}</div>
                  </div>
                </div>
                <div class="flex items-center justify-between">
                  <div class="flex items-center space-x-3">
                    <img src="/assets/speed.svg" width="22" alt="">
                    <div class="text-lg text-gray-600">{{ $recent->speed ?? 'N/A' }}</div>
                  </div>
                  <div class="flex items-center space-x-3">
                    <img src="/assets/trans2.svg" width="22" alt="">
                    <div class="text-lg text-gray-600">{{ $recent->drive ?? 'N/A' }}</div>
                  </div>
                </div>
              </div>
            </div>

            {{-- Price --}}
            <div class="text-lg flex gap-5 justify-between mt-6 p-3 max-md:mx-2.5 max-md:mt-10">
              <p class="text-lg text-gray-500">Current price</p>
              <p class="text-lg font-bold text-neutral-700">{{ $recent->avg_price ?? 'N/A' }} USD</p>
            </div>

            {{-- Buy Now Button --}}
            <div class="p-3 pt-0">
              <a href="{{ route('cars.show', ['vin' => $recent->vin]) }}">
                <button class="brand-red-text red-btn px-16 py-2 text-sm leading-4 text-center rounded brand-border max-md:px-5 max-md:mx-2.5 w-full">
                  Buy it now<br />{{ $recent->avg_price ?? 'N/A' }} USD
                </button>
              </a>
            </div>
          </div>
        </article>
      @endforeach
    </div>
  </div>
</section>


<script>
  (() => {
    const state = {};
    let context = null;
    let nodesToDestroy = [];
    let pendingUpdate = false;

    function destroyAnyNodes() {
      nodesToDestroy.forEach((el) => el.remove());
      nodesToDestroy = [];
    }

    function update() {
      if (pendingUpdate === true) {
        return;
      }
      pendingUpdate = true;

      document.querySelectorAll("[data-el='div-1']").forEach((el) => {
        el.setAttribute("space", 55);
      });

      destroyAnyNodes();
      pendingUpdate = false;
    }

    update();
  })();
</script>
