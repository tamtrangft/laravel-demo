@props([
'title',
'content',
'size' => 'md',
'actionType' => 'primary',
'actionLabel',
'actionHref' => ''
])

<div {{ $attributes->class(['focus-ring-light rounded-2 card', 'w-25' => $size == 'md', 'w-30' => $size == 'lg']) }}>
  <img src="https://laravel.com/assets/img/welcome/background.svg" class="w-100 ratio-1x1" />
  <div class="p-4 d-flex flex-column gap-2">
    <h4>{{ $title }}</h4>
    <div>
      {{ $content }}
      {{ $slot }}
    </div>
    <div class="w-100 d-flex justify-content-end">
      <a href="{{ $actionHref }}">
        <x-button :variant="$actionType">
          {{ $actionLabel }}
        </x-button>
      </a>
    </div>
  </div>
</div>