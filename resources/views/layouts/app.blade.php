<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/faviconV2.png" type="image/png">

    @yield('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/mycss1.css">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <script src="/assets/bootstrap/js/bootstrap.js"></script> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" /> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> -->



    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


</head>
<body>
    

    <!-- px-10 md:block md:px-40 lg:px-60 -->

    <div class=" ">
        
        <div class="w-100" style="background: #f9f9f9;">

            <div class="hidden md:block sticky sticky-top top-0">
            @include('inc.top')
            @include('inc.top-menu')

            </div>


            


            <div class="md:hidden sticky sticky-top top-0 bg-white">
                @include('inc.top-mobile')
            </div>

            
                
            @yield('content')


        </div>

    </div>





    <div class=" md:hidden lg:px-80 pt-4  md:px-40 bg-gray-100">
    </div>










    <script src="/js/modal.js"></script>


</body>
</html>