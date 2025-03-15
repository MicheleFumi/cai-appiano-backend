<section class="position-relative">
    <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel"
        style="height: 50vh; position: relative;">
        <div class="carousel-inner" style="height: 100%;">

            <!-- Primo slide -->
            <div class="carousel-item active" style="height: 100%;">
                <div class="background-image"
                    style="background-image: url('{{ asset('images/jumbotron.jpg') }}'); background-size: cover; background-position: center; height: 100%;">
                </div>
            </div>

            <!-- Secondo slide -->
            <div class="carousel-item" style="height: 100%;">
                <div class="background-image"
                    style="background-image: url('{{ asset('images/logo.png') }}'); background-size: cover; background-position: center; height: 100%;">
                </div>
            </div>

            <!-- Terzo slide -->
            <div class="carousel-item" style="height: 100%;">
                <div class="background-image"
                    style="background-image: url('{{ asset('images/jumbotron.jpg') }}'); background-size: cover; background-position: center; height: 100%;">
                </div>
            </div>

        </div>

        <!-- Controlli del carosello -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- TESTO CENTRATO SOPRA IL CAROSELLO -->
    <div class="position-absolute top-50 start-50 translate-middle text-black text-center w-100" style="z-index: 10;">
        <h2>{{ $slot }}</h2>
    </div>

</section>
