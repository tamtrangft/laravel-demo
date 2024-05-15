<x-unauthenticated-layout title="Login">
  <!-- card -->
  <div class="d-flex flex-column gap-4 border border-1 border-light-subtle rounded-2 p-4 shadow focus-ring-light bg-card w-100">
    <!-- card title -->
    <div class="pt-3 sm:pt-5 w-full">
      <h2 class="font-semibold text-light">Login</h2>
    </div>
    <div class="mt-3 mb-3">
      <h5>Login form</h5>
      <div class="d-flex gap-4 mt-3 align-items-end">
        <form id="form" class="d-flex gap-4 flex-column" method="POST">
          <x-text-input required label="Username" inputClasses="p-2" name="username" />
          <x-text-input required label="Password" inputClasses="p-2" name="password" type="password" />
          <x-button id='formSubmit' variant="primary" type="submit">Login</x-button>
        </form>
      </div>
    </div>
  </div>
</x-unauthenticated-layout>