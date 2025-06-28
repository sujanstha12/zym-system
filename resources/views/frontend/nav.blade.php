<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container">

        <!-- Brand/logo -->
        <a class="navbar-brand d-flex align-items-center" href="{{ route('welcome') }}">
            <img src="{{ asset('assets/frontend/logo.png') }}" alt="Logo" style="width: 50px;" class="me-2" />
            <h3 class="system-title"><span class="highlights">NepholiZym System</span></h3>

        </a>


        <!-- Toggle button for mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">

                <li><a class="nav-link text-white active mx-2" href="{{ route('welcome') }}">HOME</a></li>
                <li><a class="nav-link text-white mx-2 active" href="{{ route('about') }}">ABOUT</a></li>
                <li><a class="nav-link text-white mx-2 active" href="{{ route('ourclass') }}">CLASSES</a></li>
                <li><a class="nav-link text-white mx-2 active" href="{{ route('ourproduct') }}">SHOP</a></li>
                <li><a class="nav-link text-white mx-2 active" href="{{ route('trainer') }}">TRAINERS</a></li>
                <li><a class="nav-link text-white mx-2 active" href="{{ route('contactus') }}">CONTACT</a></li>

                <!-- Search -->
                <li class="nav-item mx-2">
                    <form class="d-flex" action="{{ route('search') }}" method="GET" role="search">
                        <input class="form-control-sm me-2" type="text" name="search" placeholder="Search"
                            style="max-width: 150px;">
                        {{-- <button class="btn btn-outline-light btn-sm" type="submit">
                            <i class="bi bi-search"></i>
                        </button> --}}
                    </form>
                </li>

                @if (auth()->guard('customer')->check())
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle fs-5"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="{{ route('customer.dashboard') }}"><i
                                        class="fa fa-table"></i> Dashboard</a></li>
                            <li>
                                <form action="{{ route('customer.logout') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="dropdown-item">
                                        <i class="bi bi-box-arrow-in-right"></i> Logout
                                    </button>
                                </form>
                            </li>

                        </ul>
                    </li>
                @else
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle fs-5"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                            <li><a class="dropdown-item" href="{{ route('customer.registerPage') }}"><i
                                        class="bi bi-person-plus"></i> Register</a></li>
                            <li><a class="dropdown-item" href="{{ route('customer.loginPage') }}"><i
                                        class="bi bi-box-arrow-in-right"></i> Login</a></li>
                        </ul>
                    </li>
                @endif

            </ul>
        </div>
    </div>
</nav>
<style>
    /* Increase spacing between nav items */
    .navbar-nav>li {
        margin-right: 18px;
    }

    /* Larger font size for nav links */
    .navbar-nav .nav-link {
        font-size: 1.1rem;
        padding: 10px 14px;
    }

    /* Style for dropdown items */
    .dropdown-menu .dropdown-item {
        font-size: 1rem;
        padding: 8px 16px;
    }

    /* Enlarge Bootstrap icons */
    .navbar-nav .bi {
        font-size: 1.3rem;
    }

    /* Search input styling */
    .navbar form .form-control-sm {
        font-size: 0.95rem;
        padding: 6px 10px;
    }

    /* Optional: increase navbar height */
    .navbar {
        padding-top: 12px;
        padding-bottom: 12px;
    }
</style>
