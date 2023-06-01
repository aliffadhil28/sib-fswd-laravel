<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title'){{ config('LoakStation | Landing Page') }}</title>
    @yield('style')
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/landing.css') }}" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="#page-top @if (Request::is('/')) active @endif">LocalGems</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link @if (Request::is('product')) active @endif"
                            href="#product">Best Seller</a></li>
                    <li class="nav-item"><a class="nav-link @if (Request::is('services')) active @endif"
                            href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link @if (Request::is('contact')) active @endif"
                            href="#contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link @if (Request::is('contact')) active @endif"
                            href="/logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    @yield('content')
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-4">
            <p class="m-0 text-center text-white">Copyright &copy; LocalGems 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/landing.js') }}"></script>
</body>

</html>
