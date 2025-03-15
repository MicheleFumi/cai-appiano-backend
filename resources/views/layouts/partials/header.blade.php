<header class="position-fixed top-0 start-0 w-100" style="z-index: 999;" id="navbarHeader">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container-fluid">
            <!-- BRAND (logo + testo) -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="logo CAI" style="max-height: 50px;" />
                <span class="ms-2 text-black title">
                    CLUB ALPINO ITALIANO<br />
                    SEZIONE DI APPIANO
                </span>
            </a>

            <!-- TOGGLER -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- MENU -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Home Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Escursioni 2025</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Storia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Accompagnatori & Collaboratori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Direttivo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black" href="#">Documenti</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
    window.addEventListener('scroll', function() {
        const header = document.getElementById('navbarHeader');
        if (window.scrollY > 50) {
            header.classList.add('header-dark');
        } else {
            header.classList.remove('header-dark');
        }
    });
</script>
