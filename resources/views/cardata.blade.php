@extends('layouts.vinlay')



@section('title')
  {{ $model->vin }} - car`s decoded data by vin 
@endsection

@section('meta')
  <meta name="description" content="{{ 'Car data decoding by vin:  $model->vin ' }}" />
  <meta name="keywords" content="{{ $model->vin . 'decode, vin, auto'  }}" />
  <link rel="canonical" href="{{ url()->current() }}" />

  <meta property="og:title" content="{{ $model->vin }} - decode auto data" />
  <!-- <meta property="og:description" content="{{ 'купить авто ' . $model->name . ' ' . $model->year . ' ' . $model->engine . ' Вин-Код авто: ' . $model->vin . '. Заказать авто с доставкой, аукционы авто из Кореи, США, Европы, Китая.' }}" /> -->
  <meta property="og:image" content="{{  url()->to('/')  . '/storage/' . json_decode($model->images)[0] }}" />
  <meta property="og:url" content="{{ url()->current() }}" />


@endsection


@section('header')
    <div class="bg-dark py-5 text-light text-center">
        <div class="container">
            <h1 class="display-6 fw-bold">{{ $model->vin }}</h1>
        </div>


        <!-- <ul class="nav nav-tabs container">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-light" href="#">Link</a>
            </li>
            <li class="nav-item"> 
                <a class="nav-link text-light" href="#">Link</a>
            </li>
           
        </ul> -->


    </div>

    
@endsection

@section('content')


    
    <!-- VIN Search Section -->



    <!-- Carousel -->
    <div class="d-flex justify-content-center align-items-center">
        <div id="carouselExampleIndicators" class="carousel slide" style="max-width: 600px;">
            <div class="carousel-indicators">
                @foreach(json_decode($model->images, true) as $index => $image)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach(json_decode($model->images, true) as $index => $image)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="/storage/{{ $image }}" style="max-height: 330px; cursor: pointer;" class="d-block w-100" alt="Image {{ $index + 1 }}" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-image="/storage/{{ $image }}">
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>


    

    <!-- Data Table -->
    <table class="table table-striped border border-lg rounded mt-4">
        <thead class="table-secondary">
            <tr>
                <th scope="col">General information</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Brand</td>
                <td class="fw-bold">{{ $model->brand }}</td>
            </tr>
            <tr>
                <td>Model</td>
                <td class="fw-bold">{{ $model->model }}</td>
            </tr>
            <tr>
                <td>Year</td>
                <td class="fw-bold">{{ $model->year }}</td>
            </tr>
            <tr>
                <td>Fuel</td>
                <td class="fw-bold">{{ $model->fuel }}</td>
            </tr>
            <tr>
                <td>Сar body</td>
                <td class="fw-bold">{{ $model->vehicle }}</td>
            </tr>
            <tr>
                <td>Number of Doors</td>
                <td class="fw-bold">{{ $model->doors }}</td>
            </tr>
            <tr>
                <td>Engine displacement</td>
                <td class="fw-bold">{{ $model->engine_si }}</td>
            </tr>
            <tr>
                <td>Rated engine displacement</td>
                <td class="fw-bold">{{ $model->engine_nom }}</td>
            </tr>
            <tr>
                <td>Horsepower</td>
                <td class="fw-bold">{{ $model->horses }}</td>
            </tr>
            <tr>
                <td>Kilowatts</td>
                <td class="fw-bold">{{ $model->kilowatts }}</td>
            </tr>
            <tr>
                <td>VIN</td>
                <td class="fw-bold">{{ $model->vin }}</td>
            </tr>
        </tbody>
    </table>




    <!-- Frequently Asked Questions Section -->
    

    <!-- About the VIN Decoder -->
    <div id="about">
        <h3>About Our VIN Decoder</h3>
        <p>
            Welcome to our advanced VIN Decoder, a one-stop solution for uncovering detailed information about your vehicle. Whether you own a Mercedes-Benz or a Hyundai, our tool provides accurate and comprehensive insights into your car's unique specifications.
        </p>

        <h4>Mercedes-Benz VIN Decoder</h4>
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

        
    </div>



    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
    
            modal.addEventListener('show.bs.modal', function(event) {
                const image = event.relatedTarget.getAttribute('data-bs-image');
                modalImage.setAttribute('src', image);
            });
        });
    </script>

@endsection
