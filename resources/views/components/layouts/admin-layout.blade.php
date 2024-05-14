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
  @stack('css')
</head>

<body class="min-vh-100 d-flex flex-column">
  <div class="position-relative flex-grow-1">
    <img id="background" class="position-absolute top-0 start-0 max-width-800 z-0" src="https://laravel.com/assets/img/welcome/background.svg" />
    <div class="position-relative w-100 justify-content-start z-1 p-4">
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