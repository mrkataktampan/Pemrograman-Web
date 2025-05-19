<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8" />
  <title>{{ $title ?? 'PemWeb' }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />
  <meta name="description" content="This is meta description" />
  <meta name="author" content="Themefisher" />
  
  <link rel="shortcut icon" href="{{ asset('front/images/favicon.png') }}" type="image/x-icon" />
  
  <!-- Front-end Styles -->
  <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">
  <link rel="stylesheet" href="{{ asset('front/css/icomoon.css') }}">
  <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">

  @livewireStyles
</head>
<body>
  <!-- Header -->
  <header class="navigation bg-tertiary">
    <nav class="navbar navbar-expand-xl navbar-light text-center py-3">
      <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="{{ asset('front/images/logo.png') }}" alt="Logo" width="160" />
        </a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav m-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- Main Content -->
  <main>
    {{ $slot }}
  </main>

  <!-- Footer -->
  <footer class="section-sm bg-tertiary mt-5">
    <div class="container text-center">
      <a href="{{ route('home') }}">&copy; 2025 Aplikasi Manajemen Kendaraan</a>
    </div>
  </footer>

  <!-- Front-end Scripts -->
  <script src="{{ asset('front/js/jquery-3.0.0.min.js') }}"></script>
  <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('front/js/custom.js') }}"></script>

  @livewireScripts
</body>
</html>