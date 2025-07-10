@extends('layouts.app')

@section('title')
   Contact us - PLC Auction
@endsection



@section('content')


<div class=" ">




    <div class="  rounded-lg grid grid-cols-1 md:grid-cols-2">
        <!-- Left Side -->
        <div class="xs:ps-3 md:ps-52 bg-white py-16 ">

            <div class="breadcrumb">
                <h4 class="font-light text-gray-600 ">
                    <a href="#" class="hover:underline">Home page</a> >
                    <a href="#" class="hover:underline">Contact us</a> 
                </h4>
            </div>

            <h2 class="text-4xl font-bold mb-4 ">Contact us</h2>
            <p class="text-3xl font-semibold mb-4">We are working for you</p>
            <p class="flex items-center text-lg text-gray-500 "><span class="mr-2">🕒</span> Monday - Friday 09AM - 06PM (GMT +2)</p>
            <p class="mt-5 mb-3 font-semibold text-lg py-4 border-y">Phone <a href="tel:+15852826777" class="font-light text-lg underline">+1 585 282-6777</a></p>
            <div class="flex space-x-3 mt-6">
                <button class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-lg hover:bg-red-400">✉️</button>
                <button class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-lg hover:bg-red-400">📞</button>
                <button class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-lg hover:bg-red-400">📨</button>
                <button class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-lg hover:bg-red-400">🟢</button>
                <button class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-lg hover:bg-red-400">📘</button>
                <button class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-lg hover:bg-red-400">📸</button>
                <button class="w-10 h-10 flex items-center justify-center bg-gray-200 rounded-lg hover:bg-red-400">▶️</button>
            </div>

        </div>
        
        <!-- Right Side -->
        <div class="xs:pe-3 md:pe-36 py-16 md:ps-12" style="background: #f9f9f9;">
            <h2 class="text-4xl font-bold mb-4">Any questions?</h2>
            <p class="text-gray-600 text-lg mt-2">Mail us and we will help you as soon as possible.</p>
            <form class="mt-4 space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 space-x-2">
                    <input type="text" placeholder="Your name" class="w-full text-lg border p-2 rounded ">
                    <input type="email" placeholder="Your email" class="w-full border text-lg p-2 rounded ">
                </div>
                <div class="flex space-x-2">
                    <select class="border p-2 text-lg rounded bg-gray-100">
                        <option class="bg-white">+992</option>
                        <option>+1</option>
                        <option>+44</option>
                    </select>
                    <input type="tel" placeholder="000 000 000" class="text-lg w-full border p-2 rounded">
                </div>
                <textarea placeholder="Your question here" class="w-full text-lg border p-2 rounded h-20"></textarea>
                <div class="flex justify-end">
                    <button class="red-btn brand-red-bg text-white py-3 px-10 rounded">Send</button>
                </div>
            </form>
        </div>
    </div>




</div>





@include('inc.modal')
@include('inc.footer')






@endsection