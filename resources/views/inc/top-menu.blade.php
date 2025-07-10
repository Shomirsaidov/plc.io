
<div class="top-blocks">


@include('inc.auth-popup')

<div style="z-index: 5; padding-top: 3px; padding-bottom: 3px;" class="sticky top-0  px-8 top-menu md:flex lg:px-52 brand-black-bg text-white justify-between items-center flex-wrap mb-0"> 
    <div class="flex items-center" style="color: #d7d7d7">
        <img id="cata-btn" src="/assets/cata.svg" width="22" alt="">
        <img id="x-btn" src="/assets/x.svg" class="hidden" width="28" alt="">
        <div class="flex space-x-5 items-center main-menu ms-4">
            <img src="/assets/mail.svg" width="17" alt="">
            <div class="flex space-x-2">
                <img src="/assets/tel.svg" width="17" alt="">
                <span class="text-lg">+971 800 032-1342</span>
            </div>
            <div class="flex space-x-2 items-center">
                <img src="/assets/whatsapp.svg" width="34" alt="">
                <span class="text-lg">Whats App</span>
            </div>
        </div>
        <div class="text-menu hidden py-2 ms-4">
            <div class="font-light cursor-pointer text-xl flex space-x-4 items-center">
                <a class="text-xl" href="/autos">Search Vehicle</a>
                <a class="text-xl" href="/about">About</a>
                <a class="text-xl" href="/contact">Contact</a>
                <a class="text-xl" href="/faq">FAQ</a>
                <a class="text-xl" href="/delivery">Delivery</a>
                <a class="text-xl" herf="/reviews">Reviews</a>
                <a class="text-xl" href="/posts">Posts</a>
            </div>
        </div>
    </div>

    <!-- Country Selector -->
    <div class="flex items-center space-x-4" style="color: #d7d7d7">
      
      <div class="flex items-center justify-end space-x-2">
        <img src="/assets/icons/location-white.svg" style="height: 15px" alt="">
        <input type="text" id="country" style="color: #d7d7d7; font-size: 17px;" class=" brand-black-bg outline-none">
      </div>

      <div class="flex items-center space-x-2">
        <img src="/assets/icons/clock-white.svg" width="22" alt="">
        <div class="text-lg">GMT+5 (UZT)</div>
        <img src="/assets/icons/angle-header.svg" alt="">
      </div>

      <div class="flex items-center space-x-2">
        <img src="/assets/icons/globe-header.svg" width="22" alt="">
        <select class="brand-black-bg text-lg outline-none">
          <option value="en">English</option>
          <option class="text-lg" value="lt">Lietuvių</option>
          <option class="text-lg" value="sq">Shqip</option>
          <option class="text-lg" value="uk">Українська</option>
          <option class="text-lg" value="es">Español</option>
          <option class="text-lg" value="ar">العربية</option>
          <option class="text-lg" value="bg">Български</option>
          <option class="text-lg" value="pl">Polski</option>
          <option class="text-lg" value="ru">Русский</option>
        </select>
      </div>


    </div>


</div>


</div>



<link rel="stylesheet" href="/assets/country-select/build/css/countrySelect.css">
<script src="/js/jquery.js"></script>
<script src="/assets/country-select/build/js/countrySelect.min.js"></script>

<script>


  $("#country").countrySelect({
    defaultCountry: "tj",
  });


</script>



<style>
  .no-break {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: block; /* Ensure block display for the link */

  }
</style>

<script src="/js/jquery.js"></script>


<script>


  const cata = $('#cata-btn');

  cata.on('click', () => {

    $('.main-menu').fadeToggle(10);
    $('.text-menu').fadeToggle(500);

    $('#cata-btn').hide();
    $('#x-btn').fadeToggle(10);


  })

  $('#x-btn').on('click', () => {

    $('.main-menu').fadeToggle(10);
    $('.text-menu').fadeToggle(10);


    $('#cata-btn').show();
    $('#x-btn').hide(10);




  })



</script>