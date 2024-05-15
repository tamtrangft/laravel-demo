@push('script')
<!-- @vite(['resources/views/components/button/script.js']) -->
<script type="module">
  $(() => {
    window.btn1ClickHandler = () => {
      alert('btn1 clicked')
    }

    window.btn2ClickHandler = () => {
      // alert($("input[name='firstName']").val())
    }

    $("#form").on('submit', (e) => {
      e.preventDefault();
      alert("form submitted")
    })
  })
</script>
@endPush
<x-user::master-layout title="Styleguide">
  <!-- card -->
  <div class="d-flex flex-column gap-4 border border-1 border-light-subtle rounded-2 p-4 shadow focus-ring-light bg-card w-100">
    <!-- card title -->
    <div class="pt-3 sm:pt-5 w-full">
      <h2 class="font-semibold text-light">Styleguide</h2>
    </div>
    <div class="mt-3">
      <h5>Buttons</h5>
      <ul>
        <li>Anonymous components: use @@props to declare component properties</li>
        <li>Push style.scss to style stack with pushOnce to prevent pushing multiple css when using multiple instances of the component</li>
        <li>Push script to script stack. Button onClick to run '@{{ $id }}ClickHandler' function if exists</li>
      </ul>
      <div class="d-flex gap-4 mt-3 align-items-center">
        <div><x-button id='btn1' variant="primary">Primary button</x-button></div>
        <div><x-button id='btn2' variant="secondary" size="lg">Secondary large button</x-button></div>
        <div><x-button id='btn3' variant="primary" size="md" class="text-900" type="submit">Secondary large button</x-button></div>
      </div>
    </div>
    <div class="mt-3">
      <h5>Cards</h5>
      <div class="d-flex gap-4 mt-3 align-items-end">
        <x-card size="md" title="Card md" content="card content" actionType="primary" actionLabel="More" actionHref="/"></x-card>
        <x-card size="lg" title="Card lg" content="card content" actionType="secondary" actionLabel="More"></x-card>
      </div>
    </div>
    <div class="mt-3">
      <h5>Text input</h5>
      <div class="d-flex gap-4 mt-3 align-items-end">
        <x-text-input label="First name" inputClasses="p-2" name="firstName1" />
        <x-text-input label="Last name" inputClasses="p-2" name="lastName1" />
      </div>
    </div>
    <div class="mt-3">
      <h5>Form</h5>
      <div class="d-flex gap-4 mt-3 align-items-end">
        <form id="form" class="d-flex gap-4 flex-column" action="/form-submit">
          <x-text-input required label="First name" inputClasses="p-2" name="firstName" />
          <x-text-input label="Last name" inputClasses="p-2" name="lastName" />
          <x-button id='formSubmit' variant="primary" type="submit">Submit</x-button>
        </form>
      </div>
    </div>
  </div>
</x-user::master-layout>