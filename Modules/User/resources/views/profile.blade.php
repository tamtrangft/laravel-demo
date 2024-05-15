<x-user::master-layout title="User | Profile">
  @push('style')
  @vite(['resources/views/admin/profile.scss'])
  @endpush
  <!-- card -->
  <div class="d-flex flex-column gap-4 rounded-2 p-4 shadow focus-ring-light bg-card w-100">
    <!-- card title -->
    <div class="pt-3 sm:pt-5 w-full">
      <h2 class="font-semibold text-light profile-title">User profile</h2>
    </div>
    @foreach ($data as $field => $value)
    <div class="row gap-4">
      <div class="col-2">{{ $field }}</div>
      <div class="col-1">:</div>
      <div class="col-4">{{ $value }}</div>
    </div>
    @endforeach

  </div>
</x-user::master-layout>