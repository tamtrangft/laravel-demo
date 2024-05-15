<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
  <meta charset=" utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ $title }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])

  <!-- more css -->
  @stack('style')
</head>

<body class="min-vh-100 d-flex flex-column bg-black">
  <div class="position-relative flex-grow-1">
    <img id="background" style="left: -200px;" class="position-absolute top-0 max-width-800 z-0" src="https://laravel.com/assets/img/welcome/background.svg" />
    <div class="position-relative w-100 justify-content-start z-1 p-4">
      <nav class="navbar navbar-expand-lg bg-dark mb-4 rounded-2">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Demo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Menu
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/">Home</a></li>
                  <li><a class="dropdown-item" href="{{ ROUTE_ADMIN_USERS }}">List users</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Admin
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="{{ ROUTE_ADMIN_PROFILE }}">Profile</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
        </div>
      </nav>
      <main class="d-flex flex-column align-items-center w-100 gap-4">
        <!-- Main content -->
        {{ $slot }}
      </main>
    </div>
  </div>
  <footer class="w-100 p-4 d-flex justify-content-center">
    Admin routes - Laravel demo
  </footer>
  @stack('script')
</body>

</html>