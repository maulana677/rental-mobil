<div class="col-lg-2 bg-white min-h-screen py-3 px-2 px-lg-3 sidebar">
    <div class="d-flex align-items-center justify-content-between">
        <a href="dashboard.html" class="logo fs-5">
            <img src="assets/images/logo.png" alt="logo">
            <span>Car Rental</span>
        </a>
        <button class="btn btn-light d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#navMenu">
            <i class="bx bx-menu"></i>
        </button>
    </div>
    <hr class="my-4 d-none d-lg-block border-secondary">
    <div class="menus d-none d-lg-block">
        <p class="mb-2 text-secondary fw-semibold fs-7">Utama</p>
        <a href="dashboard.html" class="link-menu btn active">
            <i class="bx bxs-dashboard"></i> Dashboard
        </a>
        <a href="dashboard-cars.html" class="link-menu btn">
            <i class="bx bxs-car"></i> Daftar Mobil
        </a>
        <a href="dashboard-sliders.html" class="link-menu btn">
            <i class='bx bx-slideshow'></i> Slider Banner
        </a>

        <p class="mt-4 mb-2 text-secondary fw-semibold fs-7">Booking</p>
        <a href="dashboard-bookings.html" class="link-menu btn">
            <i class="bx bxs-calendar"></i> Booking
        </a>
        <a href="dashboard-history.html" class="link-menu btn">
            <i class="bx bx-history"></i> History
        </a>
        <a href="dashboard-customers.html" class="link-menu btn">
            <i class="bx bxs-user"></i> Customer
        </a>

        <p class="mt-4 mb-2 text-secondary fw-semibold fs-7">Pengaturan</p>
        <a href="dashboard-settings.html" class="link-menu btn">
            <i class="bx bx-cog"></i> Pengaturan
        </a>
        <a class="link-menu btn" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            <i class="bx bx-log-out"></i> Keluar
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>

<div class="offcanvas offcanvas-start" tabindex="-1" id="navMenu" aria-labelledby="navMenuLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="navMenuLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="sidebar">
            <p class="mb-2 text-secondary fw-semibold fs-7">Utama</p>
            <a href="dashboard.html" class="link-menu btn active">
                <i class="bx bxs-dashboard"></i> Dashboard
            </a>
            <a href="dashboard-cars.html" class="link-menu btn">
                <i class="bx bxs-car"></i> Daftar Mobil
            </a>

            <p class="mt-4 mb-2 text-secondary fw-semibold fs-7">Booking</p>
            <a href="dashboard-bookings.html" class="link-menu btn">
                <i class="bx bxs-calendar"></i> Booking
            </a>
            <a href="dashboard-history.html" class="link-menu btn">
                <i class="bx bx-history"></i> History
            </a>
            <a href="dashboard-customers.html" class="link-menu btn">
                <i class="bx bxs-user"></i> Customer
            </a>

            <p class="mt-4 mb-2 text-secondary fw-semibold fs-7">Pengaturan</p>
            <a href="dashboard-settings.html" class="link-menu btn">
                <i class="bx bx-cog"></i> Pengaturan
            </a>
            <a class="link-menu btn" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div>
