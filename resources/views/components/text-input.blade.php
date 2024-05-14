@props([
  'label' => '',
  'labelClasses' => '',
  'inputClasses' => ''
  ])

  <div class="d-flex flex-column">
    <label {{ $attributes->merge(['class' => 'form-label '.$labelClasses]) }} >{{ $label }}</label>
    <input {{ $attributes->merge(['class' => 'form-control '.$inputClasses]) }} type="text" />
  </div>