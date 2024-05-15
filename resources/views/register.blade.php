<x-admin-layout title="Register new user">
  <!-- card -->
  <div class="d-flex flex-column gap-4 border border-1 border-light-subtle rounded-2 p-4 shadow focus-ring-light bg-card w-100">
    <!-- card title -->
    <div class="pt-3 sm:pt-5 w-full">
      <h2 class="font-semibold text-light">Register new user</h2>
    </div>
    <div class="mt-3 mb-3">
      <h5>Register form</h5>
      <div class="d-flex gap-4 mt-3 align-items-end">
        <form id="form" class="d-flex gap-4 flex-column" method="POST">
          @csrf
          <x-text-input required label="Username" inputClasses="p-2" name="username" value="user1" :error="$errors->first('username')" />
          <x-text-input required label="Password" inputClasses="p-2" name="password" value="123456" type="password" />
          <x-text-input required label="Name" inputClasses="p-2" value="User 1" name="name"/>
          <x-text-input required label="Role" inputClasses="p-2" name="role" readonly value="user" />
          <x-text-input required label="Email" inputClasses="p-2" name="email" :error="$errors->first('email')" value="tmth+1@gft.com"  />
          <x-button id='formSubmit' variant="primary" type="submit">Register</x-button>
        </form>
      </div>
    </div>
  </div>
</x-admin-layout>