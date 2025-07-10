<div class="sticky sticky-top top-0">
    <div class=" flex items-center justify-between p-2">

      <img src="/assets/icons/logo-mobile.png" width="110">

      <div class="flex items-center space-x-6">
        <a href="/autos" class="block px-4 py-2 border rounded border-black text-lg">Search Vehicle</a>
        <div class="flex items-center space-x-3">
          <img src="/assets/icons/search.svg">
          <img class="menu_btn" src="/assets/icons/cata-mobile.svg" width="24">
        </div>
      </div>

    </div>



    <div class="hidden menu_exp  second-bg border flex flex-col justify-between  font-semibold h-screen" style="color:rgb(104, 104, 104);">


        <div>
            <div class="flex second-bg border-b border-white">
                <div class="p-3 flex-1 flex items-center space-x-2">
                    <img src="/assets/icons/loc-black.svg" alt="">
                    <div>Tajikistan</div>
                </div>
                <div class="p-3 px-4 flex items-center border-x border-white">
                    <img src="/assets/icons/clock-solid.svg" alt="">
                </div>
                <div class="p-3 flex items-center space-x-2">
                    <img src="/assets/icons/globe.svg" alt="">
                    <div class="text-lg">English</div>
                </div>
            </div>


            <div>
                <a href="/autos" class="block p-4 font-medium text-lg second-bg">
                    Search vehicle
                </a>

                <a href="/about" class="block p-4 border-t font-medium border-white text-lg second-bg">
                    About
                </a>
                <a href="/contact" class="block p-4 border-t font-medium border-white text-lg second-bg">
                    Contact 
                </a>
                <a href="/faq" class="block p-4 border-t font-medium border-white text-lg second-bg">
                    FAQ
                </a>
                <a href="/delivery" class="block p-4 border-t font-medium border-white text-lg second-bg">
                    Delivery
                </a>
                <a href="/reviews" class="block p-4 border-t font-medium border-white text-lg second-bg">
                    Reviews
                </a>
                <a href="/posts" class="block p-4 border-t font-medium border-white text-lg second-bg">
                    Posts
                </a>
            </div>
        </div>


        <div class="flex p-3 bg-white space-x-3 fixed bottom-0 w-full">
            <div class="border flex items-center p-2 px-3">
                <img src="/assets/icons/moon.svg" alt="">
            </div>
            <div class="border flex items-center p-2 px-3">
                <img src="/assets/icons/mail-bottom.svg" alt="">
            </div>
            <div class="border flex items-center p-2 px-3">
                <img src="/assets/icons/phone.svg" alt="">
            </div>
            <button class="flex-1 p-3 text-lg border border-black text-black font-medium">Sign in</button>
        </div>
        

        

    </div>
</div>



<script src="/js/jquery.js"></script>

<script>
    $('.menu_btn').on('click', function() {
        $('.menu_exp').slideToggle();
    });

    // Add toggler functionality for each menu item with subcat hiddenegories
    $('#toggler1').on('click', function() {
        $('#sub1').slideToggle();
    });

    $('#toggler2').on('click', function() {
        $('#sub2').slideToggle();
    });

    $('#toggler3').on('click', function() {
        $('#sub3').slideToggle();
    });

    $('#toggler4').on('click', function() {
        $('#sub4').slideToggle();
    });

    $('#toggler5').on('click', function() {
        $('#sub5').slideToggle();
    });

    $('#toggler6').on('click', function() {
        $('#sub6').slideToggle();
    });

    $('#toggler7').on('click', function() {
        $('#sub7').slideToggle();
    });

    $('#toggler8').on('click', function() {
        $('#sub8').slideToggle();
    });
</script>
