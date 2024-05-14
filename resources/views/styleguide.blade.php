<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">

<head>
  <meta charset=" utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
  <div class="position-relative min-vh-100">
    <img id="background" class="position-absolute top-0 start-0 max-width-800 z-0" src="https://laravel.com/assets/img/welcome/background.svg" />
    <div class="position-relative w-100 min-vh-100 justify-content-start z-1 p-4">
      <main class="d-flex flex-column align-items-center w-100 gap-4">
        <!-- card -->
        <div class="d-flex flex-column gap-4 rounded-2 p-4 shadow focus-ring-light bg-card w-100">
          <!-- card title -->
          <div class="pt-3 sm:pt-5 w-full">
            <h2 class="font-semibold text-light">Styleguide</h2>
          </div>
          <div>
            <h5>Buttons</h5>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>