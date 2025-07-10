@extends('layouts.app')

@section('title')
  @lang('autos.title')
@endsection

@section('content')



<div class="lg:px-52 ">


    <div class="breadcrumb my-8">
      <h4 class="font-light text-gray-600 ">
      <a href="/" class="hover:underline">Home page</a> >
      <a href="#" class="hover:underline">Search Vehicle</a> 
      
      </h4>
    </div>

    <h2 class="text-4xl font-bold leading-tight text-neutral-700">
        Cars auction
    </h2>
    <div class="flex shrink-0 mt-2 w-24 bg-rose-700 h-[5px]"></div>


</div>


<div class="py-10 pt-8 lg:px-52 ">

    <div class="flex flex-col lg:flex-row lg:space-x-5 items-start">

        <aside class="hidden lg:block lg:w-1/4 rounded border-5 border-gray-200 mb-6 lg:mb-0">
            <form action="{{ route('cars.filtered') }}" method="POST" class="border-2 border-gray-200">
                @csrf

                {{-- Country Filter --}}
                <div class="accordion-btn flex justify-between items-center border-b p-3 cursor-pointer">
                    <h4 class="text-lg font-semibold">Country</h4>
                    <img src="/assets/angle-down.svg" alt="">
                </div>
                <div class="p-2 flex flex-col gap-2">
                    @foreach(['USA', 'Germany', 'Japan', 'South Korea', 'France'] as $index => $country)
                        <div class="flex justify-between items-center border-b p-2">
                            <label for="country{{ $index }}" class="flex-1">{{ $country }}</label>
                            <input type="checkbox" name="country[]" value="{{ $country }}" id="country{{ $index }}">
                        </div>
                    @endforeach
                </div>

                {{-- Model Filter --}}
                <div class="accordion-btn flex justify-between items-center border-b p-3 cursor-pointer">
                    <h4 class="text-lg font-semibold">Model</h4>
                    <img src="/assets/angle-down.svg" alt="">
                </div>
                <div class="p-2 flex flex-col gap-2">
                    @foreach(['Camry', 'Civic', 'Golf', 'E-Class', 'Model 3'] as $index => $model)
                        <div class="flex justify-between items-center border-b p-2">
                            <label for="model{{ $index }}" class="flex-1">{{ $model }}</label>
                            <input type="checkbox" name="model[]" value="{{ $model }}" id="model{{ $index }}">
                        </div>
                    @endforeach
                </div>

                {{-- Fuel Filter --}}
                <div class="accordion-btn flex justify-between items-center border-b p-3 cursor-pointer">
                    <h4 class="text-lg font-semibold">Fuel</h4>
                    <img src="/assets/angle-down.svg" alt="">
                </div>
                <div class="p-2 flex flex-col gap-2">
                    @foreach(['CNG', 'CNG\\Electric', 'Diesel', 'Diesel\\Electric', 'Electric', 'Ethanol'] as $index => $fuel)
                        <div class="flex justify-between items-center border-b p-2">
                            <label for="fuel{{ $index }}" class="flex-1">{{ str_replace('\\', '/', $fuel) }}</label>
                            <input type="checkbox" name="fuel[]" value="{{ $fuel }}" id="fuel{{ $index }}">
                        </div>
                    @endforeach
                </div>

                {{-- Drive Filter --}}
                <div class="accordion-btn flex justify-between items-center border-b p-3 cursor-pointer">
                    <h4 class="text-lg font-semibold">Drive</h4>
                    <img src="/assets/angle-down.svg" alt="">
                </div>
                <div class="p-2 flex flex-col gap-2">
                    @foreach([
                        'All-Wheel Drive (AWD)',
                        'Four-Wheel Drive (4WD)',
                        'Front-wheel Drive',
                        'Rear-wheel Drive',
                        'Unspecific'
                    ] as $index => $drive)
                        <div class="flex justify-between items-center border-b p-2">
                            <label for="drive{{ $index }}" class="flex-1">{{ $drive }}</label>
                            <input type="checkbox" name="drive[]" value="{{ $drive }}" id="drive{{ $index }}">
                        </div>
                    @endforeach
                </div>

                {{-- Submit Button --}}
                <div class="p-4">
                    <button type="submit" class="w-full brand-red-bg hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Apply Filters
                    </button>
                </div>
            </form>
        </aside>



        <!-- Car Listings -->
        

        <div class=" lg:ml-6 grid grid-cols-1 gap-4 w-full">
            
        @foreach($cars as $car)
        <article class="w-full hover:border border-gray-400">
            <div class="flex flex-col justify-center md:flex-row text-lg w-full text-base bg-white rounded">
                
                @php
                    $carImages = json_decode($car->images ?? '[]');
                    $firstImage = isset($carImages[0]) ? '/storage/' . str_replace('\\', '/', $carImages[0]) : '/assets/cars/hrs.webp';
                @endphp

                <img
                    src="{{ $firstImage }}"
                    alt="{{ $car->make . ' ' . $car->model }}"
                    width="320"
                    class="hidden md:block"
                />
                <img
                    src="{{ $firstImage }}"
                    alt="{{ $car->make . ' ' . $car->model }}"
                    class="md:hidden w-full"
                />

                
                <div class="flex-1">
                    <div class="flex text-lg flex-col self-start mt-4 ms-4 font-bold text-neutral-700 max-md:ml-2.5 space-y-3">
                        <h3 class="text-2xl">{{ $car->make }}<br>{{ $car->model }} {{ $car->year }}</h3>

                        <div class="flex space-x-3">
                            <img src="/assets/r.svg" width="22" alt="">
                            <p class="self-center text-lg font-light">{{ $car->status ?? 'Run & Drive' }}</p>
                        </div>

                        <div class="flex space-x-3">
                            <img src="/assets/tick.svg" width="22" alt="">
                            <p class="self-center text-lg font-light">{{ $car->damages ?? 'Not damaged' }}</p>
                        </div>
                    </div>

                    <div class="p-3 text-lg">
                        <div class="border rounded space-y-4 p-2 px-4">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3 ">
                                    <img src="/assets/fuel2.svg" width="20" alt="">
                                    <div class="text-lg text-gray-600">{{ $car->fuel_type ?? '—' }}</div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <img src="/assets/trans.svg" width="22" alt="">
                                    <div class="text-lg text-gray-600">{{ $car->transmission ?? '—' }}</div>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-3">
                                    <img src="/assets/speed.svg" width="22" alt="">
                                    <div class="text-lg text-gray-600">{{ $car->mileage ?? '—' }} km</div>
                                </div>
                                <div class="flex items-center space-x-3">
                                    <img src="/assets/trans2.svg" width="22" alt="">
                                    <div class="text-lg text-gray-600">{{ $car->drive ?? '—' }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-3 border-s flex flex-col justify-between">
                    <div class="py-3 border-b text-center text-xl text-secondary">
                        {{ $car->approval_status ?? 'On Approval' }}
                    </div>

                    <a href="{{ route('cars.show', ['vin' => $car->vin]) }}">
                        <button
                            class="brand-red-text red-btn px-16 py-2 text-sm leading-4 text-center rounded brand-border max-md:px-5 max-md:mx-2.5 w-full">
                            Buy it now<br />{{ number_format($car->price, 0, '', ' ') }} USD
                        </button>
                    </a>
                </div>
            </div>
        </article>
        @endforeach


        </div>

    </div>

</div>










<div class="py-10 pt-8 lg:px-52">

    <div class="flex justify-center mb-4">
        <div>
            <h2 class="text-4xl font-bold leading-tight text-neutral-700">
                Car sales destination
            </h2>
            <div class="flex shrink-0 mt-2 w-24 bg-rose-700 h-[5px]"></div>
        </div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 p-6">
        <div class="bg-white space-y-5 p-3 ">
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














<div class="lg:px-52 py-10 pt-8">

    <div class="flex justify-center mb-4">
        <div>
            <h2 class="text-4xl font-bold leading-tight text-neutral-700">
                Cars brands
            </h2>
            <div class="flex shrink-0 mt-2 w-24 bg-rose-700 h-[5px]"></div>
        </div>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 p-6 space-x-5">
        <div class="bg-white space-y-4 p-3">
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/volvo.svg" alt="">
                <span >Volvo</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/wolks.svg" alt="">
                <span >Wolkswagen</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/rover.svg" alt="">
                <span >Land Rover</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/jeep.svg" alt="">
                <span>Jeep</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/kia.svg" alt="">
                <span>Kia</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/lexus.svg" alt="">
                <span>Lexus</span>
            </div>
        </div>
        <div class="bg-white space-y-4 p-3">
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/toyota.svg" alt="">
                <span>Toyota</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/mercedes.svg" alt="">
                <span>Mercedes</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/audi.svg" alt="">
                <span>Audi</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/citroen.svg" alt="">
                <span>Citroen</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/mazda.svg" alt="">
                <span>Mazda</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/opel.svg" alt="">
                <span>Opel</span>
            </div>
        </div>
        <div class="bg-white space-y-4 p-3">
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/subaru.svg" alt="">
                <span>Subaru</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/smart.svg" alt="">
                <span>Smart</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/ford.svg" alt="">
                <span>Ford</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/honda.svg" alt="">
                <span>Honda</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/renault.svg" alt="">
                <span>Renault</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/rolls.svg" alt="">
                <span>Rolls Royce</span>
            </div>
        </div>
        <div class="bg-white space-y-4 p-3">
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/bmw.svg" alt="">
                <span>BMW</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/yong.svg" alt="">
                <span>Ssang Yong</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/hyundai.svg" alt="">
                <span>Hyundai</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/jaguar.svg" alt="">
                <span>Jaguar</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/audi.svg" alt="">
                <span>Audi</span>
            </div>
            <div class="flex items-center space-x-2">
                <img src="/assets/car_logos/citroen.svg" alt="">
                <span>Citroen</span>
            </div>
        </div>
    </div>

</div>



<div class="lg:px-52 mb-16">

    <div class="bg-white p-8">
        <div class="flex justify-center mb-4">
            <div>
                <h2 class="text-4xl font-bold leading-tight text-neutral-700">
                    Popular queries
                </h2>
                <div class="flex shrink-0 mt-2 w-24 bg-rose-700 h-[5px]"></div>
            </div>
        </div>
    
        <div class="flex flex-wrap gap-4 my-5 space-x-2 leading-relaxed">
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>

            <a href="#" class="underline text-xl font-light">Used cars under $12 000</a>
            <a href="#" class="underline text-xl font-light">Used cars under $12 000</a>
            <a href="#" class="underline text-xl font-light">Used cars under $12 000</a>

            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>


            <a href="#" class="underline text-xl font-light">Used cars under $12 000</a>
            <a href="#" class="underline text-xl font-light">Used cars under $12 000</a>

            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>

            <a href="#" class="underline text-xl font-light">Used cars under $12 000</a>
            <a href="#" class="underline text-xl font-light">Used cars under $12 000</a>

            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Used cars under $12 000</a>
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Cars under $8000</a>
            <a href="#" class="underline text-xl font-light">Used cars under $12 000</a>

            <a href="#" class="underline text-xl font-light">Used cars under $12 000</a>
            <a href="#" class="underline text-xl font-light">Used cars under $12 000</a>
            <a href="#" class="underline text-xl font-light">Used cars under $12 000</a>
            <a href="#" class="underline text-xl font-light">Used cars under $12 000</a>
            <a href="#" class="underline text-xl font-light">Used cars under $12 000</a>

    
        </div>
    </div>


</div>


@include('inc.modal')
@include('inc.footer')


<script src="/js/jquery.js"></script>


<script>
    

    $('.accordion-btn').on('click', function() {
        const nextOne = $(this).next();
        const icon = $(this).children().eq(1);

        nextOne.slideToggle();
        icon.css('transform', 'rotate(180deg)');
    })

</script>

@endsection