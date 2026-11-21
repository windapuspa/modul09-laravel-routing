<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scuderia Ferrari</title>
    @vite('resources/sass/app.scss')
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="container">
            <a href="#home" class="navbar-brand">Ferrari</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="#history" class="nav-link">History</a></li>
                    <li class="nav-item"><a href="#achievements" class="nav-link">Achievements</a></li>
                    <li class="nav-item"><a href="#drivers" class="nav-link">Drivers</a></li>
                    <li class="nav-item"><a href="#gallery" class="nav-link">Gallery</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <header id="home" class="hero d-flex align-items-end text-white">
        <div class="container pb-5 mb-md-4">
            <h1 class="display-1">Forza<br>Ferrari</h1>
            <p class="fs-5 mb-4">Racing in Formula 1 since the very first season in 1950.</p>
            <a href="#drivers" class="btn btn-danger btn-lg me-2">Meet the Drivers</a>
            <a href="#history" class="btn btn-outline-light btn-lg">Our Story</a>
        </div>
    </header>

    <!-- History -->
    <section id="history" class="py-5">
        <div class="container py-md-4">
            <div class="row align-items-center g-5">
                <div class="col-md-6 order-md-2">
                    <img src="{{ Vite::asset('resources/images/history.jpg') }}" class="img-fluid w-100 foto-sejarah" alt="Ferrari klasik">
                </div>
                <div class="col-md-6 order-md-1">
                    <h2 class="mb-3">Since 1929</h2>
                    <p class="fs-5">Scuderia Ferrari didirikan Enzo Ferrari pada 1929, awalnya untuk menyiapkan mobil balap. Sejak Formula 1 dimulai tahun 1950, Ferrari belum pernah absen satu musim pun.</p>
                    <p class="fs-5 mb-0">Warna merah mobilnya disebut <em>Rosso Corsa</em>, warna tradisional mobil balap Italia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Achievements -->
    <section id="achievements" class="py-5 bg-black text-white">
        <div class="container py-md-4">
            <h2 class="mb-4">Achievements</h2>
            <div class="row text-center g-4">
                <div class="col-4">
                    <div class="angka">16</div>
                    <p class="mb-0">Constructors' Titles</p>
                </div>
                <div class="col-4">
                    <div class="angka">15</div>
                    <p class="mb-0">Drivers' Titles</p>
                </div>
                <div class="col-4">
                    <div class="angka">1950</div>
                    <p class="mb-0">F1 Debut</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Drivers -->
    <section id="drivers" class="py-5">
        <div class="container py-md-4">
            <h2 class="mb-4">Our Drivers</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card kartu bg-dark text-white border-0 h-100">
                        <img src="{{ Vite::asset('resources/images/leclerc.jpg') }}" class="card-img-top foto-pembalap" alt="Charles Leclerc">
                        <span class="nomor">16</span>
                        <div class="card-body">
                            <h3 class="card-title h4">Charles Leclerc</h3>
                            <p class="card-text mb-0">Monaco</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card kartu bg-dark text-white border-0 h-100">
                        <img src="{{ Vite::asset('resources/images/hamilton.jpg') }}" class="card-img-top foto-pembalap" alt="Lewis Hamilton">
                        <span class="nomor">44</span>
                        <div class="card-body">
                            <h3 class="card-title h4">Lewis Hamilton</h3>
                            <p class="card-text mb-0">United Kingdom</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section id="gallery" class="py-5 bg-black">
        <div class="container py-md-4">
            <h2 class="mb-4 text-white">Gallery</h2>
            <div id="carouselGaleri" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ Vite::asset('resources/images/hero.jpg') }}" class="d-block w-100 foto-galeri" alt="Mobil F1">
                        <div class="carousel-caption"><h3 class="h5">The Car</h3></div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ Vite::asset('resources/images/history.jpg') }}" class="d-block w-100 foto-galeri" alt="Ferrari klasik">
                        <div class="carousel-caption"><h3 class="h5">Classic Era</h3></div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ Vite::asset('resources/images/leclerc.jpg') }}" class="d-block w-100 foto-galeri" alt="Charles Leclerc">
                        <div class="carousel-caption"><h3 class="h5">Charles Leclerc</h3></div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselGaleri" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselGaleri" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-merah text-white text-center py-3">
        <small>Tugas Praktikum PAW - Winda Puspa Juliantari-108052500041</small>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>
