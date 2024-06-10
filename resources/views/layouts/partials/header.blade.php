@livewire('navbar')

<!-- Page Heading -->
@isset($header)
  <header class="bg-white shadow dark:bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      {{ $header ?? null }}
    </div>
  </header>
  @endif
