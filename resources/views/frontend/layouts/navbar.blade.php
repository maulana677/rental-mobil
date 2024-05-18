<nav class="navbar navbar-expand-lg bg-white py-3">
    <div class="container">
        <a href="." class="navbar-brand logo">
            <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Logo"> Car Rental
        </a>
        <button id="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="register.html" class="btn">Daftar</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="btn btn-primary">Masuk</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
