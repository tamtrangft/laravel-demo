<x-admin-layout title="Admin | Profile">
  @push('style')
  @vite(['resources/views/admin/profile.scss', 'resources/js/datatables.js'])
  @endpush
  @push('script')
  <script type="module">
    let table = new DataTable('#usersTable', {
      responsive: true
    });
  </script>
  @endpush
  <!-- card -->
  <div class="d-flex flex-column gap-4 rounded-2 p-4 shadow focus-ring-light bg-card w-100">
    <!-- card title -->
    <div class="pt-3 sm:pt-5 w-full">
      <h2 class="font-semibold text-light profile-title">Users list</h2>
    </div>
    <div>
      <h5>User list</h5>
      <table id="usersTable">
        <thead>
          <th>
            Name
          </th>
          <th>
            Created at
          </th>
          <th>
            Last logged in
          </th>
        </thead>
        @foreach ($data as $user)
            <tr>
              <td>{{ $user['name'] }}</td>
              <td>{{ $user['createdAt'] }}</td>
              <td>{{ $user['lastLoggedIn'] }}</td>
            </tr>
        @endforeach
      </table>
    </div>
  </div>
</x-admin-layout>