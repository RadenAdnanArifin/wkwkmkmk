<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/icon/fn.png') }}">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark px-4">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/icon/fn.png') }}" width="35" height="35" class="d-inline-block align-top" alt="mw Icon">
                <span id="text-brand" class="text-white">KOPIKO</span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link menu text-white mx-2" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu text-white mx-2" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu text-white mx-2" href="#benefits">Information</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <main>
        <section id="home" class="section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 px-5">
                        <h1 class="text-primary font-weight-bold text-gradient typing-animation text-title">Welcome to KOPIKO</h1>
                        <p class="text-secondary animation-text">Sistem informasi KOPIKO 2024/2025.</p>
                        <a href="/login" class="btn btn-primary btn-lg ">Get Started</a>
                    </div>
                    <div class="col-lg-6 ">
                        <img src="{{ asset('assets/img/smkbisa.png') }}" alt="MoneyWise App" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>


    </main>
    <footer class="bg-light py-3 mt-5">
        <div class="container text-center">
            <p class="text-gradient">&copy; 2024 adnanzainal21. All rights reserved.</p>
        </div>
    </footer>
</body>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="{{ asset('assets/js/home.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
