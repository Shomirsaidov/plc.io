<footer class="brand-black-bg text-gray-300 pb-10 pt-2 px-8 lg:px-52">

    <div class="flex justify-between items-center space-x-3 mb-4">
        <img src="/assets/auction_logo_bl.png" width="204" class="mb-10" alt="">
        <button class="text-lg px-10 py-[8px] text-grey-600 hover:bg-gray-700 border border-gray-600 rounded">Search vehicle</button>
    </div>



    <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
        
        <!-- Site Navigation -->
        <div class="md:pe-16">
            <h3 class="text-lg  mb-3 text-white">Site navigation</h3>
            <div class="grid grid-cols-2 gap-2">
                <a href="#" class="hover:text-white underline font-light tracking-wide">About</a>
                <a href="#" class="hover:text-white underline font-light tracking-wide">Contact</a>
                <a href="#" class="hover:text-white underline font-light tracking-wide">FAQ</a>
                <a href="#" class="hover:text-white underline font-light tracking-wide">Posts</a>
                <a href="#" class="hover:text-white underline font-light tracking-wide">Reviews</a>
                <a href="#" class="hover:text-white underline font-light tracking-wide">Delivery</a>
                <a href="#" class="hover:text-white underline font-light tracking-wide">Check VIN</a>
                <a href="#" class="hover:text-white underline font-light tracking-wide">Archive</a>
            </div>

            <h3 class="text-lg mt-4 text-white">Site locale</h3>
            <div class="flex flex-wrap gap-2 mt-2">
                @foreach (['LT', 'SQ', 'EN', 'UK', 'ES', 'AE', 'FR', 'BG', 'PL', 'RU'] as $locale)
                    <a href="#" class="hover:text-white underline font-light tracking-wide">{{ $locale }}</a>
                @endforeach
            </div>
        </div>

        <!-- Popular Countries -->
        <div class="flex-1 ">
            <h3 class="text-lg mb-3 text-white">Popular countries</h3>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-2">
                @foreach (['Germany', 'Italy', 'France', 'Poland', 'United States', 'South Korea', 'Belgium', 'Netherlands', 'Spain'] as $country)
                    <a href="#" class="hover:text-white underline font-light tracking-wide">{{ $country }}</a>
                @endforeach
            </div>
        </div>

        <!-- Social Networks -->
        <div class=" md:p-4">
            <h3 class="text-lg mb-3 text-white">Our social networks</h3>
            <div class="md:max-w-[50%]" >
                <div class="grid grid-cols-8 md:grid-cols-4 gap-4">
                @foreach ([
                    'mail' => 'mailto:example@example.com', 
                    'tele' => 'tel:+123456789', 
                    'telega' => '#', 
                    'whats' => '#', 
                    'viber' => '#', 
                    'face' => '#', 
                    'insta' => '#', 
                    'yout' => '#'
                ] as $icon => $link)
                    <a href="{{ $link }}" class="w-12 h-12 flex items-center justify-center border border-gray-500 rounded-lg hover:bg-red-900">
                        <img src="/assets/icons/{{ $icon }}.svg">
                    </a>
                @endforeach
                </div>
            </div>
        </div>

    </div>
</footer>
















<footer class="brand-black-bg px-8 text-white lg:px-52 py-3">
    
    <div class="flex justify-between text-xs text-center mt-4">
        <a class="underline text-gray-200" href="#">Privacy policy</a>
        <p class="text-gray-200 ">
        PLC Group - © 2013-2025. All rights reserved.</p>
        <div></div>
    </div>
</footer>

  