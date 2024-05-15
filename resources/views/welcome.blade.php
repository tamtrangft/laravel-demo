<x-unauthenticated-layout title="Welcome">
  <div class="d-flex p-5 w-100 gap-4 flex-wrap m-auto justify-content-center">
    @foreach ($data as $task)
    <a href="{{ $task['url'] }}" class="col-5 d-flex align-items-start gap-4 rounded-4 bg-dark p-3 shadow border border-1 border-light-subtle text-decoration-none">
      <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle" style="width: 72px; height: 72px; background-color: rgb(255 45 32 / 0.1);">
        <svg style="height: 24px; width: 24px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
          <g fill="#FF2D20">
            <path d="M24 8.25a.5.5 0 0 0-.5-.5H.5a.5.5 0 0 0-.5.5v12a2.5 2.5 0 0 0 2.5 2.5h19a2.5 2.5 0 0 0 2.5-2.5v-12Zm-7.765 5.868a1.221 1.221 0 0 1 0 2.264l-6.626 2.776A1.153 1.153 0 0 1 8 18.123v-5.746a1.151 1.151 0 0 1 1.609-1.035l6.626 2.776ZM19.564 1.677a.25.25 0 0 0-.177-.427H15.6a.106.106 0 0 0-.072.03l-4.54 4.543a.25.25 0 0 0 .177.427h3.783c.027 0 .054-.01.073-.03l4.543-4.543ZM22.071 1.318a.047.047 0 0 0-.045.013l-4.492 4.492a.249.249 0 0 0 .038.385.25.25 0 0 0 .14.042h5.784a.5.5 0 0 0 .5-.5v-2a2.5 2.5 0 0 0-1.925-2.432ZM13.014 1.677a.25.25 0 0 0-.178-.427H9.101a.106.106 0 0 0-.073.03l-4.54 4.543a.25.25 0 0 0 .177.427H8.4a.106.106 0 0 0 .073-.03l4.54-4.543ZM6.513 1.677a.25.25 0 0 0-.177-.427H2.5A2.5 2.5 0 0 0 0 3.75v2a.5.5 0 0 0 .5.5h1.4a.106.106 0 0 0 .073-.03l4.54-4.543Z" />
          </g>
        </svg>
      </div>

      <div class="flex-grow-1 mt-4">
        <h5 class="fw-semibold fs-5 text-light">{{ $task['title']}}</h5>

        <p class="mt-4 fs-6 text-600">
          @foreach ($task['captions'] as $caption)
          {{ $caption }}
          <br />
          @endforeach
        </p>
      </div>

      <svg style="stroke: #FF2D20; width: 24px; height: 24px;" class="flex-shrink-0 align-self-center" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
      </svg>
    </a>
    @endforeach
  </div>
</x-unauthenticated-layout>