@props(['variant', 'size' => 'md', 'id' => 'btn'])

<!-- push once to prevent pushing multiple css when using multiple instances of the component -->
@pushOnce('style')
@vite(['resources/views/components/button/style.scss'])
@endPushOnce

@push('script')
<!-- @vite(['resources/views/components/button/script.js']) -->
<script type="module">
  $(function() {
    $('#{{ $id }}').on('click', () => {
      if (typeof {{ $id }}ClickHandler !== 'undefined') {
        {{ $id }}ClickHandler();
      }
    })
  })
</script>
@endPush

<button {{ $attributes->class([ 'btn' , 
  'btn-primary'=> $variant == 'primary',
  'btn-secondary' => $variant == 'secondary',
  'size-lg' => $size == 'lg',
  'size-sm' => $size == 'sm',
  'size-md' => $size == 'md',
  ]) }} type="button" id="{{ $id }}">
  {{ $slot }}
</button>