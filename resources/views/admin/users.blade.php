<x-admin-layout title="Admin | Profile">
  @push('style')
  @vite(['resources/views/admin/users.scss', 'resources/js/datatables.js'])
  @endpush
  @push('script')
  <script type="module">
    $(() => {
      let table = new DataTable('#usersTable', {
        responsive: true,
        serverSide: true,
        ajax: {
          url: '/api/admin/users',
        },
        columns: [{
            data: 'name'
          },
          {
            data: 'createdAt'
          },
          {
            data: 'lastLoggedIn'
          }
        ]
      });

      table.on('preXhr', function() {
        $("#loader").removeClass("visually-hidden")
      });

      table.on('xhr', function() {
        setTimeout(() => {
          $("#loader").addClass("visually-hidden")
        }, 1000);
      });
    })
  </script>
  @endpush
  <!-- card -->
  <div class="d-flex flex-column gap-4 rounded-2 p-4 shadow focus-ring-light bg-card w-100 position-relative">
    <!-- card title -->
    <div class="pt-3 sm:pt-5 w-full">
      <h2 class="font-semibold text-light profile-title">Users list</h2>
    </div>
    <div>
      <table id="usersTable">
        <thead>
          <tr>
            <th>
              Name
            </th>
            <th>
              Created at
            </th>
            <th>
              Last logged in
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $user)
          <tr>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['createdAt'] }}</td>
            <td>{{ $user['lastLoggedIn'] }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div id='loader' class="d-flex justify-content-center align-items-center visually-hidden position-absolute h-100 w-100 top-0 start-0 bg-dark-subtle opacity-25">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
  </div>
</x-admin-layout>