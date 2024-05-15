@props([
  'label' => '',
  'labelClasses' => '',
  'inputClasses' => '',
  'error' => ''
  ])

  <div class="d-flex flex-column">
    <label {{ $attributes->merge(['class' => 'form-label '.$labelClasses]) }} >{{ $label }}</label>
    <input {{ $attributes->merge(['class' => 'form-control '.$inputClasses]) }} type="text" />
    <p class="text-red-500">{{ $error }}</p>
  </div>