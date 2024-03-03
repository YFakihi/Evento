<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Evento</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Your custom styles can be added here -->
</head>
<body>



<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        
        <a class="navbar-brand" href="#">Evento</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>

        @if (Route::has('login'))
        <div class="container">
            <div class="float-end">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-outline-dark me-2">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-dark me-2">Log in</a>
    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline-dark">Register</a>
                    @endif
                @endauth
            </div>
        </div>
        @endif


    </div>
</nav>

<!-- Hero Section -->
<section class="hero bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Discover Exciting Events with TicketWave</h1>
        <p class="lead">Find and book tickets for concerts, sports, and more!</p>
        <a href="#" class="btn btn-light btn-lg">Get Started</a>
    </div>
</section>

<!-- Content Section -->

 

<section class="container my-5">
    <div class=" row-cols-md-3 g-4 mt-4">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card">
                    <img src="{{ asset('images/img1.jpg') }}" alt="reserve.png">
         
                    <h3 class="card">Secure your spot at the events you love. Easy booking process and instant tickets.</h3>
                    <p class="card-text">$20.00</p>
                    <a href="#" class="btn btn-primary">Buy Tickets</a>
                </div>
                
            </div>
            
        </div>
        {{-- <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Discover Events</h2>
                    <p class="card-text">Explore a variety of events happening near you. Find concerts, sports, and more.</p>
                </div>
            </div>
        </div> --}}
    </div>
</section>

<!-- Footer Section -->
<footer class="bg-light py-4">
    <div class="container text-center">
        <p>&copy; 2024 TicketWave. All rights reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
