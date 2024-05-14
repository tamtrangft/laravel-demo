<x-admin-layout>
  <x-slot name="title">Admin | Profile</x-slot>
  @push('css')
  @vite(['resources/views/admin/styles.scss'])
  @endpush
  <!-- card -->
  <div class="d-flex flex-column gap-4 rounded-2 p-4 shadow focus-ring-light bg-card w-100">
    <!-- card title -->
    <div class="pt-3 sm:pt-5 w-full">
      <h2 class="font-semibold text-light profile-title">Admin profile</h2>
    </div>
    <div>
      <h5>Admin profile</h5>
    </div>
  </div>
</x-admin-layout>