<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!-- <link rel="shortcut icon" href="{{ asset('assets/img/icons/icon-48x48.png') }}" /> -->

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-blank.html" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
    <title>Dashboard</title>
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="/">
                    <span class="align-middle">{{ Auth::user()->name }}</span>
                </a>

                <ul class="sidebar-nav">

                    <li class="sidebar-item">
                        <a class="{{ request()->is('user/dashboard') ? 'sidebar-link font-bold text-white' : 'sidebar-link' }}"
                            href="{{ route('user-dashboard') }}">
                            <span class="align-middle">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item ">
                        <a class="{{ request()->is('user/cart') ? 'sidebar-link font-bold text-white' : 'sidebar-link' }}"
                            href="{{ route('user-cart') }}">
                            <span class="align-middle">Cart</span>
                        </a>
                    </li>

                    <li class="sidebar-item ">
                        <a class="sidebar-link" href="{{ route('profile', Auth::user()->id) }}">
                            <span class="align-middle">Profile</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <form action="{{ route('logout') }}" method="POST"
                            class="block py-2 px-4 hover:bg-gray-100 dropdown-item">
                            @csrf
                            <button>Sign out</button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#"
                                data-bs-toggle="dropdown">
                                <i class="align-middle" data-feather="settings"></i>
                            </a>

                            <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#"
                                data-bs-toggle="dropdown">
                                {{ Auth::user()->name }} <span class="text-dark">
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">

                                <form action="{{ route('logout') }}" method="POST"
                                    class="block py-2 px-4 hover:bg-gray-100 dropdown-item">
                                    @csrf
                                    <button>Sign out</button>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('content')

        </div>
    </div>

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>