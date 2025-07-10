<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="/assets/brand/logo.png">
    @yield('meta')
    <title>@yield('title', 'AutoCode VIN Decoder')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">vindecoderauto.com</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">VIN decoder</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/colors">Colors</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    @if (!request()->routeIs('datavin'))
    <div class="bg-light py-5 text-center">
        <div class="container">
            <h1 class="display-4 fw-bold">Decode Your VIN Instantly</h1>
            <p class="lead">Enter your Vehicle Identification Number (VIN) to discover detailed information about your car, truck, or motorcycle.</p>
        </div>
    </div>
    @endif

    @yield('header')

    <!-- Main Content -->
    <div class="container my-5">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-0">&copy; 2025 AutoCode.com. All rights reserved.</p>
            
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
