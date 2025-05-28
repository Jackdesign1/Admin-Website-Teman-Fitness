<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles -->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link rel="icon" type="image/png" href="{{ asset('teman-fitness.png') }}">

    <style>
        .bg-gradient-primary {
            background: #2f2f2f !important;
        }

        .sidebar-dark .nav-item .nav-link {
            color: #ffffff;
        }

        .sidebar-dark .nav-item.active .nav-link {
            color: #ffc107;
        }

        .sidebar-dark .nav-item .nav-link:hover {
            color: #adb5bd;
        }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/home') }}">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-dumbbell"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Teman Fitness</div>
            </a>

            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/home') }}">
                    <i class="fas fa-chart-bar"></i>
                    <span>Statistik</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/members') }}">
                    <i class="fas fa-user-friends"></i>
                    <span>Data Member</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/mentors') }}">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Data Mentor</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/kelas') }}">
                    <i class="fas fa-door-open"></i>
                    <span>Data Kelas</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/workouts') }}">
                    <i class="fas fa-running"></i>
                    <span>Data Workout</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/banner') }}">
                    <i class="fas fa-image"></i>
                    <span>Data Banner</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/company-profile') }}">
                    <i class="fas fa-building"></i>
                    <span>Company Profile</span>
                </a>
            </li>

            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            @endauth

            <hr class="sidebar-divider">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Main Content -->
                <div class="container-fluid mt-4">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('template/js/sb-admin-2.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
