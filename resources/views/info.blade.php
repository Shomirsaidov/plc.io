@extends('layouts.vinlay')


@section('title')
vindecoderauto.com - search decoded car`s data by vin 
@endsection

@section('meta')
  <meta name="description" content="{{ 'Enter the 17-character Vehicle Identification Number (VIN) below to unlock detailed information about your car.' }}" />
  <meta name="keywords" content="{{ 'decode, vin, auto, information'  }}" />
  <link rel="canonical" href="{{ url()->current() }}" />

  <meta property="og:title" content="Decode auto data" />
  <meta property="og:image" content="{{ '/assets/logo.png' }}"/>
  <meta property="og:url" content="{{ url()->current() }}" />


@endsection

@section('content')
    <!-- VIN Search Section -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <h2 class="card-title text-center">Decode Your VIN</h2>
            <p class="card-text text-center mb-4">Enter the 17-character Vehicle Identification Number (VIN) below to unlock detailed information about your car.</p>
            <div class="row justify-content-center">
                <!-- Column 1: Mercedes-Benz VIN Decoder -->
                <div class="col-md-6 border-end">
                    <h4 class="mb-3">Auto VIN Decoder</h4>
                    <form method="GET" action="/search">
                       
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">VIN</span>
                            <input type="text" class="form-control form-control-lg" name="vin" placeholder="WDDGF8ABXEA123456" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <button type="submit" class="btn btn-primary">Decode VIN</button>
                    </form>
                </div>
                <!-- Column 2: Hyundai VIN Decoder -->
                <!-- <div class="col-md-6">
                    <h4 class="mb-3">in development</h4>
                    <form>
                        <div class="mb-3">
                            <label for="hyundaiVinInput" class="form-label">Enter VIN</label>
                            <input type="text" class="form-control" id="hyundaiVinInput" placeholder="e.g., KMHTC6AE1EU123456">
                        </div>
                        <button type="submit" class="btn btn-success">Decode VIN</button>
                    </form>
                </div> -->
            </div>
        </div>
    </div>


    <!-- Frequently Asked Questions Section -->
    <div class="accordion mb-4 mt-5" id="accordionExample">
        <h2 class="mb-3">Frequently Asked Questions</h2>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    What is a VIN?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>A Vehicle Identification Number (VIN)</strong> is a 17-character code unique to every vehicle. It contains important information such as the manufacturer, model, year of production, and specific features or configurations.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    What details can I find using this VIN Decoder?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Using our VIN Decoder, you can access details such as the manufacturing country, engine type, transmission, trim level, color options, factory-installed packages, and more.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Is this VIN Decoder only for Mercedes-Benz vehicles?
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    Yes, this VIN Decoder is specifically tailored for Mercedes-Benz vehicles, providing accurate and detailed data about their unique configurations.
                </div>
            </div>
        </div>
    </div>

    <!-- About the VIN Decoder -->
    <div id="about">
        <h3>About Our VIN Decoder</h3>
        <p>
            Welcome to our advanced VIN Decoder, a one-stop solution for uncovering detailed information about your vehicle. Whether you own a Mercedes-Benz or a Hyundai, our tool provides accurate and comprehensive insights into your car's unique specifications.
        </p>

        <h4>All cars VIN Decoder</h4>
        <p>
            Are you a proud Mercedes-Benz owner or exploring options for a pre-owned model? By entering your 17-character VIN, you can unlock a treasure trove of information about your vehicle. Our VIN Decoder reveals:
        </p>
        <ul>
            <li>A full list of factory-installed features, packages, and options.</li>
            <li>Detailed manufacturing specifications, including year, model, and trim.</li>
            <li>Configuration images showcasing the car's exterior color, interior trim, and design elements for a complete digital showroom experience.</li>
        </ul>
        <p>
            Experience the luxury and innovation behind every Mercedes-Benz by decoding your VIN today!
        </p>

        <h4>What is VIN Decoder</h4>
        <p>
            Hyundai owners and enthusiasts can also benefit from our powerful VIN Decoder. Enter your VIN to discover detailed information about your Hyundai vehicle, including:
        </p>
        <ul>
            <li>Manufacturing details such as year, plant location, and model specifications.</li>
            <li>Installed features, safety equipment, and performance specifications.</li>
            <li>Visual configuration details like exterior paint and interior trim options.</li>
        </ul>
        <p>
            Whether you're buying, selling, or just learning more about your Hyundai, our VIN Decoder provides the tools to help you make informed decisions.
        </p>

        <h4>Why Use Our VIN Decoder?</h4>
        <p>
            Vehicle Identification Numbers (VINs) are like fingerprints for cars, offering a unique identifier for every vehicle. Our VIN Decoder helps you:
        </p>
        <ul>
            <li>Verify vehicle authenticity and history.</li>
            <li>Understand the exact specifications and features of your car.</li>
            <li>Ensure you’re making informed decisions, whether buying or selling.</li>
        </ul>
        <p>
            With our easy-to-use interface and powerful data insights, decoding your VIN has never been simpler. Start exploring the features of your car today!
        </p>
    </div>

@endsection
