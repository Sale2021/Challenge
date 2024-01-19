<!-- Navbar Start -->
<div class="container-fluid sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
            <a href="{{ route('accueil') }}" class="navbar-brand d-lg-none">
                <h1 class="text-primary m-0">Kénéya <span class="text-dark">Yiri</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="{{ route('accueil') }}" class="nav-item nav-link active">Acceuil</a>
                    <a href="{{ route('service') }}" class="nav-item nav-link">Services</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Offre santé</a>
                        <div class="dropdown-menu bg-light m-0">
                            <a href="{{ route('pharmacie') }}" class="dropdown-item">Pharmacie</a>
                            <a href="{{ route('clinique') }}" class="dropdown-item">Clinique</a>
                        </div>
                    </div>
                    <a href="{{ route('chat') }}" class="nav-item nav-link">chat</a>
                </div>
                <div class="ms-auto d-none d-lg-flex">
                    <a class="btn btn-primary ms-2" href="{{ route('dashboard') }}">se connecter</a>

                </div>
            </div>
        </nav>
    </div>
</div>

<!-- Navbar End -->